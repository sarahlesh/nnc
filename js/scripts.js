$(function() {
	var $container = $('.grid');
	  $container.imagesLoaded(function(){
	      $container.masonry({
			  itemSelector: '.grid-item',
			  percentPosition: true
	      	
	      });
	  });

	$('#member-search-form').on('keyup', function(e){
		var memberClass = e.target.value;

		var gridItem = $(".grid-item");

		function hasClass(element, cls){
			
		    return (' ' + element.className + ' ').indexOf(cls) > -1;
		}
		gridItem.each(function(i, e){
			console.log(memberClass);
			var memberHasClass = hasClass(e, memberClass);
			console.log(memberHasClass)
			memberHasClass
				if(memberHasClass == false){
					$(e).hide();
					      $container.masonry({
							  itemSelector: '.grid-item:visible',
							  percentPosition: true
					      	
					      });
				}
				if(memberHasClass == true){
					     $(e).show();
					      $container.masonry({
							  itemSelector: '.grid-item:visible',
							  percentPosition: true
					      	
					      });
				}
			})

		})


});