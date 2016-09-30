$('.menu-item-list').hover(function(){
	$(this).find('ul').css('height','100%');
			// $(this).find('ul').css('display','block');
			var subMenuItems = $(this).find('li');
			for(var i=0;i<subMenuItems.length;i++){
				subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
				subMenuItems[i].style.transform = 'rotateY(0deg)';
			}
		},function(){
			var subMenuItems = $(this).find('li');
			for(var i=0;i<subMenuItems.length;i++){
				subMenuItems[i].style.transition = 'transform '+(200*i+200)+'ms';
				subMenuItems[i].style.transform = 'rotateY(90deg)';
			}
			$(this).find('ul').css('height','0px');
		});