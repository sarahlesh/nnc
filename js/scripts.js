$(function() {
	var $container = $('.grid');

	$('#member-search-form').on('keyup', function(e){
		var memberClass = e.target;

		var gridItem = $(".grid-item");

		function hasClass(element, cls){
			
		    return (' ' + element.className + ' ').indexOf(cls) > -1;
		}
		gridItem.each(function(i, e){
			var memberHasClass = hasClass(e, 'toronto');
			console.log(memberHasClass)
			memberHasClass
				if(memberHasClass == false){
					$(e).hide();
				}
			})

		})

	  $container.imagesLoaded(function(){
	      $container.masonry({
			  itemSelector: '.grid-item',
			  percentPosition: true
	      	
	      });
	  });

});