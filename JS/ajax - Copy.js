$(document).ready(function(){
   var j = jQuery.noConflict();
	j(document).ready(function()
	{
		j(".refresh").everyTime(1000,function(i){
			j.ajax({
			  url: "refresh.php",
			  cache: false,
			  success: function(html){
				if(html == "not")
					{
						j("#in-out").css({"display":"inline"});
						j("#in_out_menu").css({"display":"none"});
					}
				else
					{
						j("#in-out").css({"display":"none"});
						j("#in_out_menu").css({"display":"inline"});
					}
			  }
			})
		})
	});
});

$(document).ready(function(){
  $("#lo_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "POST",
            url: 'check_session.php',
            cache: false,
            success: function(data)
            {}
        });
      });
});



$(document).ready(function(){
  $("#home_but").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
                $("#content").load('home.php'); // www.example.com/file.php
            }
        });
      });
});

$(document).ready(function(){
  $("#oth_web").click(function(e)
  {
    e.preventDefault();
    $.ajax({
            type: "GET",
            url: 'extra.php',
            cache: false,
            success: function(data)
            {
                //$("#data_goes_here").text(data);
                $("#content").load('other_websites.php'); // www.example.com/file.php
            }
        });
     });
});
