$(".toggle").click(function(){
    $("#loginAlert").hide();
    
    if ($("#loginActive").val() == "1") {
            
            $("#loginActive").val("0");
            $("#loginModalTitle").html("Sign Up");
            $("#signup").show();
	        $("#login").hide();
            
        } else {
            
            $("#loginActive").val("1");
            $("#loginModalTitle").html("Login");
            $("#signup").hide();
         	$("#login").show();
            
            
        }

})



//
//$('.icons').css("width", "35px");