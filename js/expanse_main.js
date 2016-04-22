	var marginOffset=50;
	var navOffset=marginOffset+15;
function goToByScroll(id){

    $('html,body').animate({scrollTop: $(id).offset().top-marginOffset} , 1500, 'easeInOutExpo');
}

$(".navlink, .docslink").click(function(e) {
	e.preventDefault();
    goToByScroll(this.hash);           
});

$("#read_more").click(function(e) {
	e.preventDefault();
    goToByScroll("#about");           
});

jQuery(document).ready(function($) {

	var initialOffset =  $('#navbar1').offset().top;
	var navlinks = $(".navlink"); 
    var navItems = []; 
    for (var i=0; i < navlinks.length; i++) {    
        var aChild = navlinks[i];
        var href = $(aChild).attr('href');
		var hash = href.substr(href.indexOf("#"));
		//alert(hash);
		if(hash.length>0) navItems.push(hash);
    } 
	$('.mini_logo').hide();
	$(window).scroll(function() {
		// sticky header
		
		var scrolled = $(window).scrollTop();
		if (scrolled >initialOffset) {
			 $('#navbar').removeClass('navbar-fixed-top').addClass('navbar-fixed-top');
			 $('.navbar-header').hide();
			 $('.navspacer').show();


		} else {
			$('#navbar').removeClass('navbar-fixed-top');
			$('.navbar-header').show();
			$('.navspacer').hide();


		}
		
		// auto highlight nav elements if section is currently primary in frame
		var windowPos = $(window).scrollTop(); 
		var windowHeight = $(window).height(); 
		for (var i=0; i < navItems.length; i++) {
			if($(navItems[i]).length>0){
				var divPos = $(navItems[i]).offset().top;
				var divHeight = $(navItems[i]).height();
				if (windowPos >= divPos-navOffset && windowPos < (divPos + divHeight)+navOffset+15) {
					$("a[href='/index.php" + navItems[i] + "']").addClass("nav-active");
				} else {
					$("a[href='/index.php" + navItems[i] + "']").removeClass("nav-active");
				}
			}
		}

	});	
});