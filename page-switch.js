$(document).ready(function(){
	// declare global vars
	var lastUpdated;

	// hide #nav2 if empty
	$('.box22#nav2').hide();

	// load home content on first page load
	$("#content").load("home.php", null, function() {
		// add the lines to h2
		var line = '<div class="h2-line"></div>';
		$('#update-box h2').prepend(line).append(line);

		// get the last updated date and stick it in the sidebar
		lastUpdated     = $('#update-inner h2:first-child').text();
		var splicedDate = lastUpdated.split(" ");
		var date        = splicedDate[0];
		var month       = splicedDate[1];
		var monthNum    = new Date(month + '01 2000').toLocaleDateString('en', {month: '2-digit'});
		var lastUpdated = monthNum + '/' + date;
		$('aside #last-updated').append(lastUpdated);
	});

	// change content on link click
	$('a.jq').click(function(){
		// grab a ID and assign it to page var
		var page = $(this).attr('id');
		var page = page + ".php";

		// check if it's a nav2 page, else change content page
		if (~page.indexOf("nav")) {
			// load to #nav2 and show it again, adding a toggle to allow re-hiding
			// also, show an error if page is missing
			$('.box-inner#nav2').load(page, function(){
				// h2 line
				var line = '<div class="h2-line"></div>';
				$('#nav2 h2').prepend(line);
				// make any links in second menu working as well
				$('#nav2 a.jq').click(function(){
					//grab id
					var page = $(this).attr('id');
					var page = page + '.php';
					// load page
					$('#content').load(page);
				});
			});
			$('.box22#nav2').toggle();
		} else {
			// show page content, or an error if page is missing
			$('#content').load(page, null, function(responseTxt, statusTxt, xhr) {
				var line = '<div class="h2-line"></div>';
				$('#update-box h2').prepend(line).append(line);
				if (statusTxt == 'error') {
					$('#content').html(
						'<div class="center-block">' +
						'<i class="sick"></i> ' +
						'uh oh! that page is missing!' +
						' <i class="sick"></i>' +
						'</div>'
					);
				}
			});
		}
	});
});