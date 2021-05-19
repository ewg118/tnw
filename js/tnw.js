$(document).ready(function() {	
	var now = new Date($('#now').text());
	var next = new Date($('#nextTime').text());

	// Update the count down every 1 second
	var x = setInterval(function() {
	  // Find the distance between now and the count down date
	var now = new Date().getTime();
	  var rem = next - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(rem / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((rem % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((rem % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((rem % (1000 * 60)) / 1000);

	  //repopulate countdown
	  if ($('#day').length){
		  $('#day').text(days);
	  }
	  if ($('#hr').length){
		  $('#hr').text(hours);
	  }
	  if ($('#min').length){
		  $('#min').text(minutes);
	  }	  
	  if ($('#sec').length){
		  $('#sec').text(seconds);
	  }
	  // If the count down is finished, write some text
	  if (rem < 0) {
		  window.location.reload(true)
	  }
	}, 1000);
});