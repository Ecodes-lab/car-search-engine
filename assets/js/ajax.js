//LoginSignupButton
$(".loginSignupButton").click(function () {
      $.ajax({    
      	type: "POST",
      	url: "./action.php?action=loginSignup",
      	data: "fname=" + $("#fname").val() + "&lname=" + $("#lname").val() + "&username=" + $("#username").val() + "&image=" + $("#image").val() + "&uid=" + $("#uid").val() + "&email=" + $("#email").val() + "&pwd=" + $("#pwd").val() + "&password=" + $("#password").val() + "&cPassword=" + $("#confirmPassword").val() + "&male=" + $("#male").val() + "&female=" + $("#female").val() + "&loginActive=" + $("#loginActive").val() + "&stayLoggedIn=" + $(".stayLoggedIn").val(),
      	success: function(result) {
      		if (result == "1") {
                window.location.assign("./index.php");
            } else {
                $("#loginAlert").html(result).show();
            }
      	}
      })
    });


    
// Follow or Add Friends   
$(".toggleFollow").click(function() {

        var id = $(this).attr("data-userid");

        $.ajax({    
            type: "POST",
            url: "./action.php?actionToggle=toggleFollow",
            data: "userid=" + id,
            success: function(result) {

                if (result == "1") {
                    $("button[data-userid='" + userid + "']").html("<span class='icon icon-add-user'></span> Follow");
                } 
                else if (result == "2") {
                    $("button[data-userid='" + userid + "']").html("<span class='icon icon-add-user'></span> unfollow");
                }

            }
        })
    });




//Post Tweets    
$("#postTweetButton").click(function() {
        
         $.ajax({    
            type: "POST",
            url: "./action.php?actionPost=postTweet",
            data: "tweetContent=" + $("#tweetContent").val() + "&uploads=" + $("#uploads").val() + "&img=" + $("#img").val(),
            success: function(result) {
                
               if (result == "1") {
                   
//                                       resultTable.ajax.reload();

                    
                    $("#tweetSuccess").show();

                    $("#tweetFail").hide();
//                                                               
                   window.location.assign('./index.php');

                    
                } else if (result != "") {
                    
                    $("#tweetFail").html(result).show();
                    $("#tweetSuccess").hide();
                    
                }
            }
        })
    });

        



//Profile image upload
$(document).ready(function() {
         
                             $("#add").show();
//                             $("#profileBad").show();
        
         
         fetch_data();
         
         function fetch_data()
         {
             var action = "fetch";
//                var bg_action = "bg_fetch";

             $.ajax({
                 type: "POST",
                 url: "./action.php",
                 data:{action:action},
                 success: function(data)
                 {
                     $('#image_data').html(data);
                 }
             })
         }
         
         $('#add').click(function() {

             $('#imageModal').modal('show');
             $('#image_form')[0].reset();
             $('.modal_title').text("Add image");
             $('#image_id').val('');
             $('#action').val('insert');
             $('#insert').val("insert");
         });
         $('#image_form').submit(function() {
             event.preventDefault();
             var image_name = $('#image').val();

        
             
             if(image_name == '')
                 {
                     alert("Please Select Image");
                     return false;
                     
                 } else
                     {

                         var extension = $('#image').val().split('.').pop().toLocaleLowerCase();

                         if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1 ) {
                             alert("Invalid Image File");
                             $('#image').val('');

                             return false;
                         }
                         else 
                             {
                                 $.ajax({
                                     type: "POST",
                                     url: "./action.php",
                                     data: new FormData(this),
                                     contentType:false,
                                     processData:false,
                                     success: function(data)
                                     {
                                         alert(data);
                                         fetch_data();
                                         $('#image_form')[0].reset();
                                         $('#imageModal').modal('hide');  
//                                         $("#add").hide();
//                                                 $("body").load('./index.php?editPage=profile');
//                                         $('#profileBad').css("display", "none");

                                        


                                         
                                     }
                                 });
                             }
                     }
         });
         
         $(document).on('click', '.update', function() {
             $('#image_id').val($(this).attr('id'));
             $('#action').val('update');
             $('.modal_title').text("Update Details");
             $('#insert').val("Update");
             $('#imageModal').modal('show');
            


         })
         
         $(document).on('click', '.delete', function() {
             var image_id = $(this).attr("id");
             var action = "delete";
            

             
             if(confirm("Are you sure you want to remove this image from database - All your details and status will be wiped off"))
                 {
                    
                    $.ajax({
                         type: "POST",
                         url: "./action.php",
                         data:{image_id:image_id, action:action},
                         success: function(data)
                         {
                             alert(data);
                             fetch_data();
                            $(".add").show();

                           

                            
                         }
                     }) 
                 }
             else
                 {
                     
                     return false;
                 }

         })
     
     });







//background image upload
$(document).ready(function() {
         
//                             $("#add").show();
//                             $("#profileBad").show();
        
         
         fetch_data_bg();
         
         function fetch_data_bg()
         {
             var bg_action = "bg_fetch";
//                var bg_action = "bg_fetch";

             $.ajax({
                 type: "POST",
                 url: "./action.php",
                 data:{bg_action:bg_action},
                 success: function(data)
                 {
                     $('#bg_image_data').html(data);
                 }
             })
         }
         
         $('#bg_add').click(function() {

             $('#backgroundImageModal').modal('show');
             $('#bg_image_form')[0].reset();
             $('.modal_title').text("Add Background image");
             $('#image_id').val('');
             $('#bg_action').val('bg_insert');
             $('#bg_insert').val("insert");
         });
         $('#bg_image_form').submit(function() {
             event.preventDefault();
             var bg_image_name = $('#bg_image').val();

        
             
             if(bg_image_name == '')
                 {
                     alert("Please Select Image");
                     return false;
                     
                 } else
                     {

                         var bg_extension = $('#bg_image').val().split('.').pop().toLocaleLowerCase();

                         if(jQuery.inArray(bg_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1 ) {
                             alert("Invalid Image File");
                             $('#bg_image').val('');

                             return false;
                         }
                         else 
                             {
                                 $.ajax({
                                     type: "POST",
                                     url: "./action.php",
                                     data: new FormData(this),
                                     contentType:false,
                                     processData:false,
                                     success: function(data)
                                     {
                                         alert(data);
                                         fetch_data_bg();
                                         $('#bg_image_form')[0].reset();
                                         $('#backgroundImageModal').modal('hide');  
//                                         $("#add").hide();
//                                                 $("body").load('./index.php?editPage=profile');
//                                         $('#profileBad').css("display", "none");

                                        


                                         
                                     }
                                 });
                             }
                     }
         });
         
         $(document).on('click', '.bg_update', function() {
             $('#bg_image_id').val($(this).attr('id'));
             $('#bg_action').val('bg_update');
             $('.modal_title').text("Update background picture");
             $('#bg_insert').val("Update");
             $('#backgroundImageModal').modal('show');
            


         })
         
         $(document).on('click', '.bg_delete', function() {
             var bg_image_id = $(this).attr("id");
             var bg_action = "bg_delete";
            

             
             if(confirm("Are you sure you want to remove this image from database - All your details and status will be wiped off"))
                 {
                    
                    $.ajax({
                         type: "POST",
                         url: "./action.php",
                         data:{bg_image_id:bg_image_id, bg_action:bg_action},
                         success: function(data)
                         {
                             alert(data);
                             fetch_data_bg();
//                            $(".bg_add").show();

                           

                            
                         }
                     }) 
                 }
             else
                 {
                     
                     return false;
                 }

         })
     
     });





//Status
$(document).ready(function() {
         
         
         
         fetch_data_status();
         
         function fetch_data_status()
         {
             var st_action = "st_fetch";

             $.ajax({
                 type: "POST",
                 url: "./action.php",
                 data:{st_action:st_action},
                 success: function(data)
                 {
                     $('#status_data').html(data);
                 }
             })
         }
         
         $('#addStatus').click(function() {

             $('#statusModal').modal('show');
             $('#status_form')[0].reset();
             $('.modal_title').text("Add Status");
             $('#st_id').val('');
             $('#st_action').val('st_insert');
             $('#st_insert').val("insert");
         });
         $('#status_form').submit(function() {
             event.preventDefault();
             var st_name = $('#status').val();
             
                                                                              

             
             
             if(st_name == '')
                 {
                     alert("Please input Status");
                     return false;
                     
                 } 
             else
                     {

                         var format = $('#status').val().split('.').pop().toLocaleLowerCase();

                         if(!(jQuery.inArray(format, ['htm', 'txt', 'doc', 'docx']) == -1 )) {
                             alert("Invalid text Format");
                             $('#status').val('');

                             return false;
                         }
                         else 
                             {
                                 $.ajax({
                                     type: "POST",
                                     url: "./action.php",
                                     data: new FormData(this),
                                     contentType:false,
                                     processData:false,
                                     success: function(data)
                                     {
                                         alert(data);
                                         fetch_data_status();
                                         $('#status_form')[0].reset();
                                         $('#statusModal').modal('hide');  
                                         
                                         


                                         
                                     }
                                 });
                             }
                     }
         });
         
         $(document).on('click', '.st_update', function() {
             $('#st_id').val($(this).attr('id'));
             $('#st_action').val('st_update');
             $('.modal_title').text("Update Details");
             $('#st_insert').val("Insert");
             $('#statusModal').modal('show');

         })
         
         $(document).on('click', '.st_delete', function() {
             var st_id = $(this).attr("id");
             var st_action = "st_delete";

             
             if(confirm("Are you sure you want to remove this status from database"))
                 {
                    $.ajax({
                         type: "POST",
                         url: "./action.php",
                         data:{st_id:st_id, st_action:st_action},
                         success: function(data)
                         {
                             alert(data);
                             fetch_data_status();
                            $(".addstatus").show();
                           

                            
                         }
                     }) 
                 }
             else
                 {
                     
                     return false;
                 }

         })
     
     });





//About
$(document).ready(function() {
    
    
    fetch_data_about();
         
         function fetch_data_about()
         {
             var ab_action = "ab_fetch";
//                var bg_action = "bg_fetch";

             $.ajax({
                 type: "POST",
                 url: "./action.php",
                 data:{ab_action:ab_action},
                 success: function(data)
                 {
                     $('#about_data').html(data);
                 }
             })
         }
    
    $('.about').click(function() {

             $('#aboutModal').modal('show');
             $('#about_form')[0].reset();
             $('.modal_title').text("Add Details");
             $('#about_id').val('');
             $('#ab_action').val('about_insert');
             $('#ab_insert').val("insert");
         });
    
    $('#about_form').submit(function() {
             event.preventDefault();
        
             var gender_name = $('#gender').val();
             var wentto_name = $('#wentto').val();
             var occupation_name = $('#occupation').val();
             var workedat_name = $('#workedat').val();
             var date_name = $('#date').val();
             var livesin_name = $('#livesin').val();
             var nationality_name = $('#nationality').val();
    
        if (gender_name == '' || wentto_name == '' || occupation_name == '' || workedat_name == '' || date_name == '' || livesin_name == '' || nationality_name == '')  

                 {
                     alert("Please input Details");
                     return false;
                 }
                     
        else 
                             {
                                 $.ajax({
                                     type: "POST",
                                     url: "./action.php",
                                     data: new FormData(this),
                                     contentType:false,
                                     processData:false,
                                     success: function(data)
                                     {
                                         alert(data);
                                         fetch_data_about();
                                         $('#about_form')[0].reset();
                                         $('#aboutModal').modal('hide');  
                                         
                                         
                                         


                                         
                                     }
                                 });
                 
                             }
                     });
                        
        $(document).on('click', '.ab_update', function() {
            
            if(confirm("Are you sure you want to make changes? "))
                 {
             $('#about_id').val($(this).attr('id'));
             $('#ab_action').val('ab_update');
             $('.modal_title').text("Update Details");
             $('#ab_insert').val("Insert");
             $('#aboutModal').modal('show');
                 }

         })
    
        $(document).on('click', '.ab_delete', function() {
             var about_id = $(this).attr("id");
             var ab_action = "ab_delete";

             
             if(confirm("Are you sure you want to remove this details from database? "))
                 {
                    $.ajax({
                         type: "POST",
                         url: "./action.php",
                         data:{about_id:about_id, ab_action:ab_action},
                         success: function(data)
                         {
                             alert(data);
                             fetch_data_about();
                            $(".about").show();
                           

                            
                         }
                     }) 
                 }
             else
                 {
                     
                     return false;
                 }

         })
            
    
    
});



//Delete Post
$(document).on('click', '.postDelete', function() {
             var post_id = $(this).attr("id");
             var post_action = "post_delete";
//                fetch_data_post();
             
             if(confirm("Are you sure you want to Delete this? "))
                 {
                    $.ajax({
                         type: "POST",
                         url: "./action.php",
                         data:{post_id:post_id, post_action:post_action},
                         success: function(data)
                         {
                             alert(data);
                             window.location.assign('./index.php');
                             

//                             fetch_data_post();
//                            $(".about").show();
                           

                            
                         }
                     }) 
                 }
             else
                 {
                     
                     return false;
                 }

         })