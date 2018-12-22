$(document).ready(function(){
  $(".regform").validate({
  showErrors: function(errorMap, errorList) {
    $("#summary").html("Your form contains "
      + this.numberOfInvalids()
      + " errors, see details below.");
    this.defaultShowErrors();
  }
});
});
