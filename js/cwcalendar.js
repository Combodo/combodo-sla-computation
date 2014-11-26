//jQuery UI style "widget" for displaying a calendar

$(function()
{
	// the widget definition, where "itop" is the namespace,
	// "cwcalendar" the widget name
	$.widget( "itop.cwcalendar",
	{
		// default options
		options:
		{
			view_name: '',
			title: '',
			labels: {
				start:       'Start:',
				end:         'End:',
				day_of_the_week: 'Day of the week:',
				whole_day: 'Whole day:',
				ok: 		 'Ok',
				cancel:      'Cancel',
				remove:      'Remove Interval',
				weekdays: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
				dialog_title: 'Working hours, interval edition'
			},
			initial_date: null, // format YYYY-MM-DD
			edit_mode: false,
			intervals: []
		},
		// the constructor
		_create: function()
		{
			var me = this;
			var oNow = new Date;
			var iYear = oNow.getFullYear();
			var iMonth = oNow.getMonth(); // Zero based
			var iDayOfMonth = oNow.getDate();
			this.iNextId = -1;
			
			if (this.options.initial_date != null)
			{
				var aMatches = this.options.initial_date.match(/^([0-9]+)-([0-9]+)-([0-9]+)$/);
				iYear = parseInt(aMatches[1], 10);
				iMonth = parseInt(aMatches[2], 10) - 1; // Zero based
				iDayOfMonth = parseInt(aMatches[3], 10);
			}

			this.element
			.addClass('itop-cwcalendar');
			
			this.element.fullCalendar({
				year: iYear,
				month: iMonth,
				date: iDayOfMonth,
				titleFormat: {
					agendaWeek: ''
				},
				columnFormat: {
					agendaWeek: 'dddd'
				},
				dayNames: this.options.labels.weekdays,
				eventDrop: function(event, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view ) {
					me._serializeAllEvents();
				},
				eventResize: function(event, dayDelta, minuteDelta, revertFunc) {
					me._serializeAllEvents();
				},
				eventClick: function(calEvent, jsEvent, view) {
					if (me.options.edit_mode)
					{
						me._eventDialog(calEvent._id, calEvent._start, calEvent._end);						
					}
				},
				selectHelper: false,
				select: function(start, end, allDay)
				{
					if (me.options.edit_mode)
					{
						var oInterval = { id: me.iNextId, start: start.getTime()/1000, end: end.getTime()/1000, allDay: false};
						me.iNextId--;
						me.options.intervals.push(oInterval);
						me._refresh();
						me._serializeAllEvents();						
					}
				},
				header: {
					left: '',
					center: 'title',
					right: ''
				},
				allDaySlot: false,
				firstDay: 1, //Start on Monday
				editable: this.options.edit_mode,
				selectable: this.options.edit_mode,
				minTime: 0,
				maxTime: 24,
				firstHour: 8,
				aspectRatio: 2,
				axisFormat: 'H:mm', // uppercase H for 24-hour clock
				defaultView: 'agendaWeek',
				loading: function(isLoading, view) {
					if (isLoading)
					{
						$('#cal_loading').html('<img src="../images/indicator.gif" />');
					}
					else
					{
						$('#cal_loading').html('');
					}
				},
				timeFormat: 'H:mm{ - H:mm}', // uppercase H for 24-hour clock
				eventSources: [
				{
					events: function(start, end, callback) { me._fetchEvents(start, end, callback); },
					startEditable: this.options.edit_mode,
					durationEditable: this.options.edit_mode,
					editable: this.options.edit_mode
				}]
			});
		},
		// called when created, and later when changing options
		_refresh: function()
		{
			this.element.fullCalendar('refetchEvents');
		},
		_fetchEvents: function(start, end, callback)
		{
			console.log(this.options.intervals);
			callback(this.options.intervals);
		},
		_eventDialog: function(id, start, end)
		{
			var sStart = $.fullCalendar.formatDate(start, 'HH:mm');
			var sEnd = $.fullCalendar.formatDate(end, 'HH:mm');
			var sWholeDayChecked = '';
			if (sEnd == '00:00')
			{
				sEnd = '24:00'; 
			}
			if ((sStart == '00:00') && (sEnd == '24:00'))
			{
				sWholeDayChecked = 'checked';
			}
			var sDlg = '<div id="cw_calendar_dlg"><table style="width:100%">';

			sDlg += '<input type="hidden" id="dlg_event_id" value="'+id+'">';
			sDlg += '<tr><td>'+this.options.labels.start+'</td><td><input id="dlg_start_time" type="text" size="5" value="'+sStart+'"/><span style="display:inline-block;width:20px;" id="v_dlg_start_time"></span></td></tr>';
			sDlg += '<tr><td>'+this.options.labels.end+'</td><td><input id="dlg_end_time" type="text" size="5" value="'+sEnd+'"/><span style="display:inline-block;width:20px;" id="v_dlg_end_time"></span></td></tr>';
			sDlg += '<tr><td><label for="whole_day">'+this.options.labels.whole_day+'</label></td><td><input type="checkbox" id="dlg_whole_day" '+sWholeDayChecked+' /></td></tr>';
			
			sDlg += '</table></div>';
			$('body').append(sDlg);
			var oDlg = $('#cw_calendar_dlg');
			var me = this;
			oDlg.dialog({
				width: 'auto',
				title: this.options.labels.dialog_title,
				modal: true,
				close: function() { $('#cw_calendar_dlg').remove(); },
				buttons:[
				  {text: this.options.labels.ok, click: function() { if (me._updateEventFromDlg()) { $('#cw_calendar_dlg').dialog('close'); } }},
				  {text: this.options.labels.cancel, click: function() { $('#cw_calendar_dlg').dialog('close'); }},
				  {text: this.options.labels.remove, click: function() { me._removeEventFromDlg(); $('#cw_calendar_dlg').dialog('close'); }},
				]
			});
			if (sWholeDayChecked != '')
			{
				$('#dlg_start_time').attr('disabled', 'disabled');
				$('#dlg_end_time').attr('disabled', 'disabled');	
			}
			$('#dlg_whole_day').bind('click change', function() { me._wholeDayClicked(); });
			$('#dlg_start_time').bind('change keyup', function() { me._validateTime($(this), false); });
			$('#dlg_end_time').bind('change keyup', function() { me._validateTime($(this), true); });
		},
		_wholeDayClicked: function()
		{
			var bChecked = $('#dlg_whole_day').prop('checked');
			if (bChecked)
			{
				$('#dlg_start_time').val('00:00').attr('disabled', 'disabled');
				$('#dlg_end_time').val('24:00').attr('disabled', 'disabled');
			}
			else
			{
				$('#dlg_start_time').removeAttr('disabled');
				$('#dlg_end_time').removeAttr('disabled');
			}
		},
		_validateTime: function(input, bAllowMidnight)
		{
			var sId = input.attr('id');
			var sVal = input.val();
			var regExpr = /^(([01]?[0-9]|2[0-3]):[0-5][0-9])$/;
			if (bAllowMidnight)
			{
				regExpr = /^(([01]?[0-9]|2[0-3]):[0-5][0-9])|24:00$/;
			}
			var bOk = regExpr.test(sVal);
			if (bOk)
			{
				$('#v_'+sId).html('');
			}
			else
			{
				$('#v_'+sId).html('<img src="../images/validation_error.png"/>');			
			}
			return bOk;
		},
		_removeEventFromDlg: function()
		{
			var eventId = $('#dlg_event_id').val();
			this.element.fullCalendar('removeEvents', parseInt(eventId, 10));
			this._serializeAllEvents();
		},
		_updateEventFromDlg: function()
		{
			if (this._validateTime($('#dlg_start_time'), false) && this._validateTime($('#dlg_end_time'), true))
			{
				var eventId = $('#dlg_event_id').val();
				var aEvents = this.element.fullCalendar('clientEvents', eventId);
				var sStartTime = $('#dlg_start_time').val();
				var sEndTime = $('#dlg_end_time').val();
				var oEvent = aEvents[0];
				oEvent.start = this._setTime(oEvent.start, sStartTime);
				oEvent.end = this._setTime(oEvent.start, sEndTime); // Use start time since end time may already be tomorrow if 24:00 was set before
				this.element.fullCalendar('updateEvent', oEvent);
				this._serializeAllEvents();
				return true;
			}
			else
			{
				return false;
			}
		},
		_setTime: function(oDate, sTime)
		{
			var oNewDate = new Date(oDate.valueOf());
			var aMatches = /([0-9]+):([0-9]+)/.exec(sTime);
			if (aMatches != null)
			{
				var iHours = parseInt(aMatches[1], 10);
				var iMinutes = parseInt(aMatches[2], 10);
				oNewDate.setHours(iHours);
				oNewDate.setMinutes(iMinutes);
			}
			return oNewDate;
		},
		_serializeAllEvents: function()
		{
			var aEvents = this.element.fullCalendar('clientEvents');
			this.options.intervals = [];
			for(k in aEvents)
			{
				oEv = aEvents[k];
				var oInterval = { id: oEv.id, start: oEv.start.getTime()/1000, end: oEv.end.getTime()/1000, allDay: false};
				this.options.intervals.push(oInterval);
			}
			var sJSON = JSON.stringify(this.options.intervals);
			console.log(sJSON);
			$('#calendar_json_intervals').val(sJSON);
		},
		// events bound via _bind are removed automatically
		// revert other modifications here
		destroy: function()
		{
			this.element
			.removeClass('itop-cwcalendar');

			// call the original destroy method since we overwrote it
			$.Widget.prototype.destroy.call( this );			
		},
		// _setOptions is called with a hash of all options that are changing
		_setOptions: function()
		{
			// in 1.9 would use _superApply
			$.Widget.prototype._setOptions.apply( this, arguments );
		},
		// _setOption is called for each individual option that is changing
		_setOption: function( key, value )
		{
			// in 1.9 would use _super
			$.Widget.prototype._setOption.call( this, key, value );
		}
	});	
});
