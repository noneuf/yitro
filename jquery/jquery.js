$(document).ready(function(){
    $(".showButton").click(function(){
      $(this).css("display", "none");
      $(".hideButton").css("display", "block")
    });
    $(".hideButton").click(function(){
        $(this).css("display", "none");
        $(".showButton").css("display", "block")
    });
});