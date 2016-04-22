var marginOffset=50;
var navOffset=marginOffset+15;
var navItems = []; 
function goToByScroll(id){
    $('html,body').animate({scrollTop: $(id).offset().top-marginOffset} , 1500, 'easeInOutExpo');
}

$(".navlink, .docslink").click(function(e) {
	if($(this.hash).length>0){
		e.preventDefault();
    	goToByScroll(this.hash);    
	}
});

$("#read_more").click(function(e) {
	e.preventDefault();
    goToByScroll("#about");           
});
var initialOffset =  $('#navbar1').offset().top;
function scrollCheck(){
	var scrolled = $(window).scrollTop();
	var windowHeight = $(window).height(); 
	
	/*sticky header*/
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
	for (var i=0; i < navItems.length; i++) {
		if($(navItems[i]).length>0){
			var divPos = $(navItems[i]).offset().top;
			var divHeight = $(navItems[i]).height();
			if (scrolled >= divPos-navOffset && scrolled < (divPos + divHeight)+navOffset+15) {
				$("a[href='/index.php" + navItems[i] + "']").addClass("nav-active");
			} else {
				$("a[href='/index.php" + navItems[i] + "']").removeClass("nav-active");
			}
		}
	}
	
}
jQuery(document).ready(function($) {
	var navlinks = $(".navlink"); 
  
    for (var i=0; i < navlinks.length; i++) {    
        var aChild = navlinks[i];
        var href = $(aChild).attr('href');
		var hash = href.substr(href.indexOf("#"));
		if(hash.length>0) navItems.push(hash);
    } 
	$(window).scroll(function() {
		scrollCheck();
	});	
	scrollCheck();
});