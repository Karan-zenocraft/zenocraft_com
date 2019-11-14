//$(window).scroll(function() {
//    if ($(this).scrollTop() > 350){  
//        $('header').addClass("sticky");
//    }
//    else{
//        $('header').removeClass("sticky");
//    }
//}); 


if ($(window).width() < 768) {
  $().ready(function(){
  $('.slick-carousel').slick({
    arrows: true,
    centerPadding: "0px",
    dots: true,
      slidesToScroll: 1,
    slidesToShow: 1,
    infinite: false
  });
});
}
 else if($(window).width() < 992) {
  $().ready(function(){
  $('.slick-carousel').slick({
    arrows: true,
    centerPadding: "0px",
    dots: true,
      slidesToScroll: 2,
    slidesToShow: 2,
    infinite: false
  });
});
}else{
    
    
  $().ready(function(){
  $('.slick-carousel').slick({
    arrows: true,
    centerPadding: "0px",
    dots: true,
      slidesToScroll: 4,
    slidesToShow: 4,
    infinite: false
  });
});  
    
}







AOS.init({
            duration: 1200
        });
        AOS.init();

        
        <!-----Loader------>

        $(window).on('load', function() {
                $('#loading').fadeOut();
                $('#Load').delay(00).fadeOut('fast');
                $('body').delay(00).css({
                    'overflow': 'visible'
                });
            })

            <!-----Floating Top-bottom------>

            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#scroll').fadeIn();
                    } else {
                        $('#scroll').fadeOut();
                    }
                });
                $('#scroll').click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    return false;
                });
            });


<!---------MobileMenu---------->

      
function myFunction(x) {
  x.classList.toggle("change");
}     


$(document).ready(function() {
            $(".Menu").click(function() {
                $('.HeaderNavigation, .HeaderNavigation .menu').slideToggle('fast');
                
                
                $(".HeaderNavigation .menu li .DD22").slideUp("slow");
         $(".HeaderNavigation .menu li .DD33").slideUp("slow");
         $(".HeaderNavigation .menu li .DD44").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11").slideUp("slow");
         
         $(".HeaderNavigation .menu li .DD1").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD2").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD3").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD4").removeClass("OutLine");
         

         $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
            });
            
    
    $(".Header .HeaderInner .HeaderNav ul li").click(function() {
             $(this).children('a').toggleClass("Outline");   
        
            });
    
    
    
        });

$(document).ready(function() {
    
    $(".HeaderNav ul .Toggle").click(function() {
                $(".HeaderNav ul .Toggle").closest('ul').toggleClass("show");
    });
    
    
    
     $(".HeaderNavigation .menu li label").click(function() {
//                $(this).toggleClass("OutLine");
        
    });
    
//    $(".HeaderNavigation ul li label").click(function() {
//                $(this).toggleClass("InnerMenus");
//        
//    });
    

});



$(document).ready(function() {
//     $(".change").click(function() {
//      
//         
//         $(".HeaderNavigation .menu li .DD22").slideUp("slow");
//         $(".HeaderNavigation .menu li .DD33").slideUp("slow");
//         $(".HeaderNavigation .menu li .DD44").slideUp("slow");
//         $(".HeaderNavigation .menu li .DD11").slideUp("slow");
//         
//         $(".HeaderNavigation .menu li .DD1").removeClass("OutLine");
//         $(".HeaderNavigation .menu li .DD2").removeClass("OutLine");
//         $(".HeaderNavigation .menu li .DD3").removeClass("OutLine");
//         $(".HeaderNavigation .menu li .DD4").removeClass("OutLine");
//         
//
//         $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
//         $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
//        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
//         
//         
//    });
    
     $(".HeaderNavigation .menu li .DD1").click(function() {
         $(".HeaderNavigation .menu li .DD22").slideUp("slow");
         $(".HeaderNavigation .menu li .DD33").slideUp("slow");
         $(".HeaderNavigation .menu li .DD44").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11").slideToggle("slow");
         
         $(".HeaderNavigation .menu li .DD1").toggleClass("OutLine");
         $(".HeaderNavigation .menu li .DD2").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD3").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD4").removeClass("OutLine");
         
//         first close inner all outline close
         $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
         
         
//         firstclose inner all close
         $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
         
         
});
    
    
    $(".HeaderNavigation .menu li .DD2").click(function() {
         $(".HeaderNavigation .menu li .DD11").slideUp("slow");
         $(".HeaderNavigation .menu li .DD33").slideUp("slow");
         $(".HeaderNavigation .menu li .DD44").slideUp("slow");
         $(".HeaderNavigation .menu li .DD22").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD2").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD1").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD3").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD4").removeClass("OutLine");
       
});
    
    
    $(".HeaderNavigation .menu li .DD3").click(function() {
        $(".HeaderNavigation .menu li .DD22").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11").slideUp("slow");
         $(".HeaderNavigation .menu li .DD44").slideUp("slow");
         $(".HeaderNavigation .menu li .DD33").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD3").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD1").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD2").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD4").removeClass("OutLine");
        
    
});
    
    
    $(".HeaderNavigation .menu li .DD4").click(function() {
        $(".HeaderNavigation .menu li .DD22").slideUp("slow");
         $(".HeaderNavigation .menu li .DD33").slideUp("slow");
         $(".HeaderNavigation .menu li .DD11").slideUp("slow");
         $(".HeaderNavigation .menu li .DD44").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD4").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD1").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD3").removeClass("OutLine");
         $(".HeaderNavigation .menu li .DD2").removeClass("OutLine");
        
});
    
    
//    InnerDD
    
    
    $(".HeaderNavigation .menu li .DD11 .DD5").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD55").slideToggle("slow");
        
        
//        outline
        $(".HeaderNavigation .menu li .DD11 .DD5").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
        
});
    
    
    $(".HeaderNavigation .menu li .DD11 .DD6").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        
        $(".HeaderNavigation .menu li .DD11 .DD66").slideToggle("slow");
        
        //        outline
        $(".HeaderNavigation .menu li .DD11 .DD6").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
    $(".HeaderNavigation .menu li .DD11 .DD7").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD77").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD11 .DD7").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
       $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
    
    $(".HeaderNavigation .menu li .DD11 .DD8").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD88").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD11 .DD8").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
    $(".HeaderNavigation .menu li .DD11 .DD9").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD99").slideToggle("slow");
//        outline
        
        $(".HeaderNavigation .menu li .DD11 .DD9").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
    $(".HeaderNavigation .menu li .DD11 .DD10").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD11 .DD10").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
//    Managed services
    
    $(".HeaderNavigation .menu li .DD11 .DD13").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideToggle("slow");
        

        $(".HeaderNavigation .menu li .DD11 .DD13").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD12").removeClass("OutLine");
        
});
    
    $(".HeaderNavigation .menu li .DD11 .DD12").click(function() {
        $(".HeaderNavigation .menu li .DD11 .DD66").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD77").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD88").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD99").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD1010").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD3333").slideUp("slow");
        $(".HeaderNavigation .menu li .DD11 .DD55").slideUp("slow");
        
        $(".HeaderNavigation .menu li .DD11 .DD1212").slideToggle("slow");
        
//        outline
        $(".HeaderNavigation .menu li .DD11 .DD12").toggleClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD6").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD7").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD8").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD9").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD10").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD13").removeClass("OutLine");
        $(".HeaderNavigation .menu li .DD11 .DD5").removeClass("OutLine");
        
});
    
    });
//$(function () {
//
//    window.verifyRecaptchaCallback = function (response) {
//        $('input[data-recaptcha]').val(response).trigger('change')
//    }
//
//    window.expiredRecaptchaCallback = function () {
//        $('input[data-recaptcha]').val("").trigger('change')
//    }
//
//    $('#contact-form').validator();
//
//    $('#contact-form').on('submit', function (e) {
//        if (!e.isDefaultPrevented()) {
//            var url = "contact.php";
//
/*           $.ajax({
               type: "POST",
               url: url,
               data: $(this).serialize(),
               success: function (data) {
                   var messageAlert = 'alert-' + data.type;
                   var messageText = data.message;

                   var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                   if (messageAlert && messageText) {
                       $('#contact-form').find('.messages').html(alertBox);
                       $('#contact-form')[0].reset();
                       grecaptcha.reset();
                   }
               }
           });*/
//            return false;
//        }
//    })
//});



$(function() {

 $("form[name='registration']").validate({
   
   rules: {
     name: "required",
     email: {required: true,email: true},
     subject: "required",
   },
     
   messages: {
     name: "Please enter your name",
     subject: "Please enter your subject",
     email: "Please enter a valid email address"
   },
   
   submitHandler: function(form) {
          $.ajax({
               type: "POST",
               url: 'ContactUs/contact',
               contentType: 'application/json',
               data: $('#contact').serialize(),
               success: function (data) {
                alert(data);
                return false;
                   /*var messageAlert = 'alert-' + data.type;
                   var messageText = data.message;

                   var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                   if (messageAlert && messageText) {
                       $('#contact-form').find('.messages').html(alertBox);
                       $('#contact-form')[0].reset();
                       grecaptcha.reset();
                   }*/
               }
           });
     //form.submit();
   }
 });
});


$(document).ready(function() {
   window.verifyRecaptchaCallback = function (response) {
       $('input[data-recaptcha]').val(response).trigger('change')
   }

   window.expiredRecaptchaCallback = function () {
       $('input[data-recaptcha]').val("").trigger('change')
   }
  $(".btn-submit").click(function(e){

      e.preventDefault();

      var name = $("input[name='name']").val();

      var email = $("input[name='email']").val();

      var message = $("textarea[name='message']").val();
      var subject = $("input[name='subject']").val();


      $.ajax({

          url: $(this).closest('form').attr('action'),

          type:$(this).closest('form').attr('method'),

          dataType: "json",

          data: {name:name, email:email, message:message,subject:subject},

          success: function(data) {

              if($.isEmptyObject(data.error)){

                $(".alert-danger").css('display','none');

                alert(data.success);

              }else{

                $(".alert-danger").css('display','block');

                $(".alert-danger").html(data.error);

              }

          }

      });

  }); 

});

 $(document).ready(function() {

  $(".SendBtn").click(function(e){

      e.preventDefault();

      var name = $("input[name='name']").val();

      var email = $("input[name='email']").val();

      var message = $("input[name='message']").val();
      var subject = $("input[name='subject']").val();
        var captcha = $("input[name='captcha']").val();

      $.ajax({

          url: $(this).closest('form').attr('action'),

          type:$(this).closest('form').attr('method'),

          dataType: "json",

          data: {name:name, email:email, message:message,subject:subject,captcha:captcha},

          success: function(data) {
           


              if($.isEmptyObject(data.error)){

                $(".alert-danger").css('display','none');

                alert(data.success);
                location.reload();

              }else{

                $(".alert-danger").css('display','block');

                $(".alert-danger").html(data.error);


              }

          }

      });

  }); 

});