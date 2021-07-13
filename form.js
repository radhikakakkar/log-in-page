$(document).ready(function(){
    //focus and blur

    $("input").focus(function(){
        $(this).css('background','pink');

    });

    $("input").blur(function(){
        $(this).css('background','');

    });

    $("input").keydown(function(){
        $('#output').text('You are typing...');
    });
    $("input").keyup(function(){
       $('#output').text('Resume typing...');
    });
});