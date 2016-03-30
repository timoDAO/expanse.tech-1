var counter = 0;


function goToByScroll(id){
      // Remove "link" from the ID
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top} , 1500, 'easeInOutExpo');
}

$("#more_btn").click(function(e) { 
    goToByScroll("about");           
});

$("#about_btn").click(function(e) { 
    goToByScroll("about");           
});

$("#downloads_btn").click(function(e) { 
    goToByScroll("downloads");           
});
$("#doc_btn").click(function(e) { 
    goToByScroll("documentation");           
});

$("#team_btn").click(function(e) { 
    goToByScroll("team");           
});

$("#com_btn").click(function(e) { 
    goToByScroll("community");           
});


