$(document).ready(function() {
	$('#pass').click(function() {
		alert('There are currently no user accounts yet. So if in the future you would like to edit your post (such as pricing, available spots, etc.), then you are required to enter this password in order to make changes to your post.');
	});

	$(".all1").mouseenter(function() {
		/*alert('hi');*/
		$(this).css("opacity", ".9");
	});

	$(".all1").mouseleave(function() {
		/*alert('hi');*/
		$(this).css("opacity", ".8");
	});

	$(".all2").mouseenter(function() {
		/*alert('hi');*/
		$(this).css("opacity", ".9");
	});

	$(".all2").mouseleave(function() {
		/*alert('hi');*/
		$(this).css("opacity", ".8");
	});

	$(".flashtext").mouseenter(function () {
		$(this).css("opacity", ".9");
	});

	$(".flashtext").mouseleave(function () {
		$(this).css("opacity", "0");
	});

	


});