$(document).ready(function(){
    $('body').hide();
    $('h1').hide();
    $('.mainform').hide();
    
    $('body').toggle(1000);
    $('h1').show(1500);
    $('.mainform').show(2000);    
});