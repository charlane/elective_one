$(function(){
    var $fname = $("#fname"),
          $lname = $("#lname"),
          $course = $("#course"),
          $year = $("#year"),
          $email = $("#email"),
          $phone = $("#phone_no"),
          $stud_status = $("#statuss"),
          $letter = $("#coverLetter"),
          $resume = $("#resume"),
          $form = $("#resume_form"),
          $notify = $("#notify"),
          $submit  = $("#submit_resume");

          $submit.click(function( event ){
                event.stopImmediatePropagation();
                event.preventDefault();
                var data = {
                    fname: $fname.val(),
                    lname: $lname.val(),
                    course: $course.val(),
                    year: $year.val(),
                    email: $email.val(),
                    phone_no: $phone.val(),
                    statuss: $stud_status.val(),
                    coverLetter: $letter.val(),
                    resume: $resume.val(),
                    submit_resume: $submit.val()
                };

                $.ajax({
                    url:  $form.attr('action') ,
                    type: "POST",
                    data: data,
                    dataType: "json"
                })
                .done(function( responseData){
                    if (responseData.status){
                        $form.find("input").val("");
                        $form.find("textarea").val();
                        $notify.html(responseData.message);
                    }else{
                        $notify.html(responseData.message);
                    }
                })

                .fail(function( responseData ){
                    console.log(responseData);
                });
          });
});