$(function(){
	
	
    //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container, header.mainhead').toggleClass('active');
    });

    // $('.sub-menu li').click(function(){
    //     $(this).children('.sub-menu').fadein();
    // });

    $('.mainnav > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parents('li').children('.sub-menu').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.sub-menu').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.sub-menu').slideUp();
        }
    });

    $('.mainnav > li > ul > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('.sub-menu').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.sub-menu').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.sub-menu').slideUp();
        }
    });

    $('.mainnav > li > ul > li > ul > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('.sub-menu').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.sub-menu').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.sub-menu').slideUp();
        }
    });

    

    
    //*****************************
    // Match Height Functions
    //*****************************
    $('.matchheight').matchHeight();


    //*****************************
    // Popup Form
    //*****************************

    $('.popup-start').click(function(){
        $('.popup-window').fadeIn();
        $('.overlay-bg').fadeIn();
    });

    $('.popup-close').click(function(){
        $('.popup-window').fadeOut();
        $('.overlay-bg').fadeOut();
    });
    
     $( document ).ready(function() {
    $('.overlay-bg').click(function() {

        $('.overlay-bg').fadeOut();
        $('#wd1_nlpopup').fadeOut();
    });
});
  





}); 


    


