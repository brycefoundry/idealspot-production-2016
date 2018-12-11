jQuery(function($){

	$(document).ready(function(){

		GlobalUI = function(){
			

			//Mobile Menu Behavior
			var button = $('#mobile-menu');
			button.live('click', function(event) {
			    var dataid=button.attr('data-id');
			  
				if(dataid==1){
					$('#mobile-menu').attr("data-id","0");
					$('#mobile-menu h6').text('Close');
					$('#mobile-menu').addClass('activate');
					$('ul.top').addClass('activate');
					$('header form').addClass('activate');
				}else{
					$('#mobile-menu').attr("data-id","1");
					$('#mobile-menu h6').text('Menu');
					$('#mobile-menu').removeClass('activate');
					$('ul.top').removeClass('activate');
					$('header form').removeClass('activate');
				}
			});

			//Load Products Specific JS
			if($('body').hasClass('page-template-products')){
				Products();
			}

			//Load Products Specific JS
			if($('body').hasClass('page-template-pricing')){
				Pricing();
			}

			//Load Home Specific JS
			if($('body').hasClass('page-template-home')){
				Home();
			}

			//Load About Specific JS
			if($('body').hasClass('page-template-about')){
				About();
			}

			//Load Docs Specific JS
			if($('body').hasClass('page-template-docs')){
				Docs();
			}

			//Load Subpage Specific JS
			if($('section#sub-masthead').length){
				Subpage();
			}

			if($('body.single-post').length){
				//$("figure").removeAttr("style");
				
			}

			if($('body.page-template-insights').length){
				PostBehave();
			}

			if($('body.page-template-cases').length){
				CaseStudy();
			}

			if($('body.page-template-thankyou').length){
				CaseStudy();
			}

			if($('body.page-template-contact-thank-you').length){
				CaseStudy();
			}

			if($('body.error404').length){
				CaseStudy();
			}

			DemoModal();

			$('select').select2();
			
		}

		SubNavigation = function(){
			//Subnavigation

			$('header span.resources').hover(function(){

				MenuOpenCloseErgoTimer(0, function(node){
					console.log('on');
					$('ul.resources').addClass('activate');
					$('span.resources').addClass('activate');
					$('ul.sub-nav.solutions').removeClass('activate');
					$('span.solutions').removeClass('activate');

				});
				
			}, function(){
				MenuOpenCloseErgoTimer(200, function(){
					console.log('off');
					$('ul.resources').removeClass('activate');
					$('span.resources').removeClass('activate');
				});
			});

			$('header span.solutions').hover(function(){

				MenuOpenCloseErgoTimer(0, function(node){
					console.log('on');
					$('ul.sub-nav.solutions').addClass('activate');
					$('span.solutions').addClass('activate');
					$('ul.sub-nav.resources').removeClass('activate');
					$('span.resources').removeClass('activate');
				});
				
			}, function(){
				MenuOpenCloseErgoTimer(200, function(){
					console.log('off');
					$('ul.sub-nav.solutions').removeClass('activate');
					$('span.solutions').removeClass('activate');
				});
			});

			$('ul.solutions').hover(function(){

				MenuOpenCloseErgoTimer(0, function(){
					console.log('on');
					$('ul.sub-nav.solutions').addClass('activate');
					$('span.solutions').addClass('activate');
					$('ul.sub-nav.resources').removeClass('activate');
					$('span.resources').removeClass('activate');

				});
				
			}, function(){
				MenuOpenCloseErgoTimer(200, function(){
					console.log('off');
					$('ul.sub-nav.solutions').removeClass('activate');
					$('span.solutions').removeClass('activate');
				});
			});

			$('ul.resources').hover(function(){

				MenuOpenCloseErgoTimer(0, function(){
					console.log('on');
					$('ul.resources').addClass('activate');
					$('span.resources').addClass('activate');
					$('ul.sub-nav.solutions').removeClass('activate');
					$('span.solutions').removeClass('activate');

				});
				
			}, function(){
				MenuOpenCloseErgoTimer(200, function(){
					console.log('off');
					$('ul.resources').removeClass('activate');
					$('span.resources').removeClass('activate');
				});
			});
		}

		Products = function(){
			var intervalID;
			var rotatelist = $('#sub-masthead ul li');
			var rotateArray = [];
			var rotatecurrent = 0;
			var listitem = $('#sub-masthead ul li');
			var lastitem = $("#sub-masthead ul li:last-child");
			listitem.each(function(){
				rotateArray.push($(this).text());
			});
			var rotatenum = rotateArray.length;
			var speed = 500;
			var rotatespeed = 2500;
			listitem.eq(0).addClass('active');


			$('ul.top li.top-items').eq(0).addClass('selected');

			function ProductRotator(){
				if(rotatecurrent == rotatenum){
					//console.log('loop');
					rotatecurrent=0;
					lastitem.removeClass('active');
					setTimeout(function(){
						listitem.eq(rotatecurrent).removeClass('inactive');
						lastitem.addClass('inactive');
						setTimeout(function(){
							listitem.eq(rotatecurrent).eq(0).addClass('active');
						},speed);
					},speed);
				}else{
					//Check position in list
					if(lastitem.hasClass("inactive")){
						listitem.eq(rotatecurrent).removeClass('active');
						setTimeout(function(){
							listitem.eq(rotatecurrent).addClass('inactive');
							listitem.eq(rotatecurrent).next().removeClass('inactive');
							setTimeout(function(){
								listitem.eq(rotatecurrent).next().addClass('active');
								rotatecurrent++;
							}, speed);
						}, speed);
					}else{
						rotatecurrent++;
						//Do Nothing
					}
				}
			}


			intervalID = setInterval(ProductRotator, rotatespeed);

			var waypoint = new Waypoint({
			  element: document.getElementById('more'),
			  handler: function(direction) {
			  	if(direction=="up"){
			  		$('aside').removeClass('sticky');
			  		clearInterval(intervalID);
			  	}else{
			  		intervalID = setInterval(ProductRotator, rotatespeed);
			  		$('aside').addClass('sticky');
			  		
			  	}
			  },
			  offset: 20
			})
			

			$(window).scroll(function() {
			    var height = $(window).scrollTop();

			    if(height  > 1) {
			       $('div.scroll-down-btn').addClass('disappear');
			    }else{
			    	$('div.scroll-down-btn').removeClass('disappear');
			    }
			});

			$('div.scroll-down-btn').click(function(){
				var offset = 20; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#fivesteps-breakdown").offset().top + offset
			    }, 600);

			    $(this).addClass('disappear');
			});

			$('div.scroll-down-btn').click(function(){
				var offset = 20; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#fivesteps-breakdown").offset().top + offset
			    }, 600);

			    $(this).addClass('disappear');
			});

			var offset = 0;
			var scrollspeed = 600;
			var asideitem = $('aside ul li');

			var originlocation = location.href;

			asideitem.find('a').click(function(){
				var posnum = $(this).attr('data-id');
				posnum = "#" + posnum;
				var currentItem = $(this);

			    $('html, body').animate({
			        scrollTop: $(posnum).offset().top + offset
			    }, scrollspeed, function(){
			    	
			    	
			    });
				
				return false;
			});

			var soonbutton = $('button.button');

			soonbutton.click(function(){
				$('html, body').animate({
				    scrollTop: $('section#coming-soon').offset().top + offset
				}, scrollspeed, function(){
					
					
				});
				return false;
			});

			var downpoint = $('div.grid-1 h2.dark-blue').waypoint(function(direction) {
			        //check the direction
			        if(direction == 'down') {
			           var current = $(this.element).attr('id');
			           asideitem.removeClass('active');
			           $("aside ul").find("[data-id='" + current + "']").parent().addClass('active');


			        }
			    }, {
			        //Set the offset
			        offset: '190'
			    });

			var uppoint = $('div.grid-1 h2.dark-blue').waypoint(function(direction) {
			        //check the direction
			        if(direction == 'up') {
			           var current = $(this.element).attr('id');
			           asideitem.removeClass('active');
			           $("aside ul").find("[data-id='" + current + "']").parent().addClass('active');
			        }
			    }, {
			        //Set the offset
			        offset: '-20'
			    });
		}

		Pricing = function(){
			$('ul.top li.top-items').eq(1).addClass('selected');
		}

		PostBehave = function(){
			var options = {
			  valueNames: [ 'title']
			};

			var userList = new List('articles', options);

			console.log('test');




		}

		CaseStudy = function(){
			$("#case-list").mixItUp();

		}

		Home = function(){
			

			//Anchor Behavior for Standards and Tech
			var offset = -90;
			var scrollspeed = 600;

			//Industry Standards	
			$('div.legend div.blue').click(function(){
			    $('html, body').animate({
			        scrollTop: $("#industry-standards").offset().top + offset
			    }, scrollspeed);
				return false;
			});

			//Innovative Tech
			$('div.legend div.orange').click(function(){
			    $('html, body').animate({
			        scrollTop: $("#innovative-tech").offset().top + offset
			    }, scrollspeed);
				return false;
			});

			$('section#home-masthead').waitForImages(function(){
				setTimeout(function(){
					$('div.loader').addClass('leave');
					setTimeout(function(){
						$('#home-masthead').addClass('activate');

						setTimeout(function(){
							$('#popup-list li').eq(0).addClass('active');
							HomeMast();
							
							setTimeout(function(){
								$('div.clouds').addClass('go');
								$('div.cars').addClass('go');
								$('div.people').addClass('go');
								$('section').addClass('activate');
							}, 1500);
						},1000);
						
					},500);
				}, 1000);
				
				
			});




		}

		HomeMast = function(){
			var intervalID;
			var rotatelist = $('#popup-list');
			var rotateArray = [];
			var rotatecurrent = 0;
			var listitem = $('#popup-list li');
			var lastitem = $("#popup-list li:last-child");
			listitem.each(function(){
				rotateArray.push($(this));
			});
			var rotatenum = rotateArray.length;
			var speed = 500;
			var rotatespeed = 8000;
			//listitem.eq(0).addClass('active');


			//$('ul.top li.top-items').eq(0).addClass('selected');

			function Rotator(){
				if(rotatecurrent == rotatenum){
					//console.log('loop');
					rotatecurrent=0;
					lastitem.removeClass('active');
					setTimeout(function(){
						listitem.eq(rotatecurrent).removeClass('inactive');
						lastitem.addClass('inactive');
						setTimeout(function(){
							listitem.eq(rotatecurrent).eq(0).addClass('active');
						},speed);
					},speed);
				}else{
					//Check position in list
					if(lastitem.hasClass("inactive")){
						listitem.eq(rotatecurrent).removeClass('active');
						setTimeout(function(){
							listitem.eq(rotatecurrent).addClass('inactive');
							listitem.eq(rotatecurrent).next().removeClass('inactive');
							setTimeout(function(){
								listitem.eq(rotatecurrent).next().addClass('active');
								rotatecurrent++;
							}, speed);
						}, speed);
					}else{
						rotatecurrent++;
						//Do Nothing
					}
				}
			}


			intervalID = setInterval(Rotator, rotatespeed);
		}

		About = function(){

			$('ul.top li.top-items').eq(4).addClass('selected');

			var waypoint = new Waypoint({
			  element: document.getElementById('our-story'),
			  handler: function(direction) {
			  

			  	if(direction=="up"){
			  		$('.tertiary-nav').removeClass('sticky');
			  	}else{
			  		$('.tertiary-nav').addClass('sticky');
			  	}
			  },
			  offset: 148
			})



			$('a#our-story-link').click(function(){
				var offset = -150; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#our-story").offset().top + offset
			    }, 600);
			    return false;
			});

			$('a#our-team-link').click(function(){
				var offset = -150; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#our-team").offset().top + offset
			    }, 600);
			    return false;
			});

			$('a#our-investors-link').click(function(){
				var offset = -150; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#our-investors").offset().top + offset
			    }, 600);
			    return false;
			});

			$('a#press-link').click(function(){
				var offset = -150; //Offset of 20px

			    $('html, body').animate({
			        scrollTop: $("#press").offset().top + offset
			    }, 600);
			    return false;
			});

			var downpoint = $('section.anchors').waypoint(function(direction) {
			        //check the direction
			        if(direction == 'down') {
			           var current = $(this.element).attr('id');


			           $('ul.tertiary-nav li').removeClass('active');
			           $("ul.tertiary-nav").find("[data-id='" + current + "']").addClass('active');


			        }
			    }, {
			        //Set the offset
			        offset: '240'
			    });

			var uppoint = $('section.anchors').waypoint(function(direction) {
			        //check the direction
			        if(direction == 'up') {
			           var current = $(this.element).attr('id');


			           $('ul.tertiary-nav li').removeClass('active');
			           $("ul.tertiary-nav").find("[data-id='" + current + "']").addClass('active');


			        }
			    }, {
			        //Set the offset
			        offset: '140'
			    });

			$('ul.articles li').each(function(index){
				
				if(index>4){
					$(this).addClass('hide');
				}
			});

			$('#load-press').click(function(){
				

				if($(this).hasClass('active')){
					

					$('ul.articles li').each(function(index){
						
						if(index>4){
							$(this).addClass('hide');
						}
					});

					$(this).removeClass('active');
					$(this).addClass('blue');
					$(this).text("Load More");
				}else{
					$('ul.articles li').removeClass('hide');
					$(this).addClass('active');
					$(this).removeClass('blue');
					$(this).text("Load Less");
				}

			});


		}

		Subpage = function(){
			$('section#sub-masthead').addClass('go');
			

			$('section').each(function(){
				if($(this).hasClass('go')){

				}else{
					$(this).addClass('activate');
				}
			});	
		}

		Docs = function(){
			
			$('button.expand').click(function(){

				if($(this).hasClass('expand')){
					articlelist = $(this).parent().parent().parent().parent().find('ul.articles');
					if($(this).hasClass('active')){
						$(this).removeClass('active').text('Expand +');
						articlelist.removeClass('movein');
					}else{
						$(this).addClass('active').text('Collapse -');
						articlelist.addClass('movein');
					}
				}	
				
			});
		}

		DemoModal = function(){
			$('.demo').click(function(){

				$('div.overlay').addClass('activate');
				$('div.modal-container').addClass('activate');

				return false;

			});

			$('#modal-cancel-btn').click(function(){
				$('div.overlay').removeClass('activate');
				$('div.modal-container').removeClass('activate');
				return false;
			});
			
			$('div.modal-container form div > input').keyup(function() {

			        var empty = false;
			        $('div.modal-container form div > input').each(function() {
			            if ($(this).val() == '') {
			                empty = true;
			            }
			        });

			        if (empty) {
			            $('#send-btn').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
			        	$('#send-btn').addClass('disabled');
			        } else {
			            $('#send-btn').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
			        	$('#send-btn').removeClass('disabled');
			        }
			 });
		}

		ResizeElements = function(){

			//Mobile Navigation Resizing
			if($('body').width()<1182){
				
				var navheight = ($(window).height())-($('header').height())-($('header form').height());
				var navitemheight = navheight/6;
				$('ul.top').css('height',navheight);
				/*
				$('ul.top li').css('height', navitemheight);
				var mobilelineheight = navitemheight/2-30;
				$('ul.top li a, ul.top li span').css('margin-top', mobilelineheight);



*/


				$('li.top-items span').click(function(){
					if($(this).hasClass('active')){
						$(this).removeClass('active');
						$(this).parent().find('ul').addClass('hidden');
						
					}else{
						$(this).addClass('active');
						
						$(this).parent().find('ul').removeClass('hidden');
					}
				});

			}else{
				$('ul.top').css('min-height','');
				$('ul.top li').css('height', '');
				$('ul.top li a, ul.top li span').css('margin-top', '');
				SubNavigation();
			}
		}

		MenuOpenCloseErgoTimer = function(dDelay, fActionFunction, node){
			    if (typeof this.delayTimer == "number") {
			        clearTimeout (this.delayTimer);
			        this.delayTimer = '';
			    }
			    if (node)
			        this.delayTimer     = setTimeout (function() { fActionFunction (node); }, dDelay);
			    else
			        this.delayTimer     = setTimeout (function() { fActionFunction (); }, dDelay);
		}

		



		Init = function(){
			GlobalUI();

			$(window).bind('resize', function () {
			    ResizeElements();
			}).trigger('resize');
		}

		Init();
	});

});




