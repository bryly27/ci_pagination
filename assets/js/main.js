$(document).ready(function(){
		// get all results
		$.get(
			'/pages/get_all/' + 1, function(res){
				$('#results').html(res);
				$('#1').addClass("Active");
		});

		// click on page numbers
		$(document).on('click', '.page_search', function(){
			var page = $(this).attr('alt');
			var name = $('#name_search').val();
			if(name !== '' && name !== null){
				$.get(
					'/pages/name_search/'+ name + '/' + page, function(res){
						$('#results').html(res);
						$('#'+page).addClass("Active");
				})
			}else{
				$.get(
					'/pages/get_all/' + page, function(res){
						$('#results').html(res);
						$('#'+page).addClass("Active");
				});
			}
			return false;
		})

		// name search input
		$(document).on('keyup', '#name_search', function(){
			var name = $(this).val();
			if(name !== '' && name !== null){
				console.log('looking for ', name);
				$.get(
					'/pages/name_search/'+ name + '/' + 1, function(res){
						$('#results').html(res);
						$('#1').addClass("Active");
				})
			}else{
				$.get(
					'/pages/get_all/'+1, function(res){
						$('#results').html(res);
						$('#1').addClass("Active");
				});
			}
		})

	});