if(!Modernizr.inputtypes.date) {
  $('input[type=date]').datepicker({
    dateFormat: 'yy/mm/dd'
  });
}

if(!Modernizr.inputtypes.time) {
  $('input[type=time]').timepicker();
  $('input[type=time]').timepicker('option', 'step', '10');
  $('input[type=time]').timepicker('option', 'timeFormat', 'H:i');
}