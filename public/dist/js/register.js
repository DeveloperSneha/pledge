$(function() {
    $("select#district").change(function(){
        var selected_district = $("#district option:selected").val();
        $('.other_district_div .help-block').html('');
        $('.district .help-block').html('');

        if(selected_district == 'other') {
            $(".other_district_div ").css("display", "block");
            $("#other_district_div").val('');
        } else {
            $(".other_district_div ").css("display", "none");
            $("#other_district").val(selected_district == '' ? '' : selected_district);
        }

    });

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var mobile = $("input#mobile").val();
            var institute = $("input#institute").val();
            var selected_district = $("#district option:selected").val();
            var other_district = $("input#other_district").val();; // For Success/Failure Message
            // Check for white space in name for Success/Fail message

            if(selected_district == '') {

                $('.district .help-block').html('<ul role="alert"><li>Please select district</li></ul>');
                return;
            } else {
                if(selected_district == 'other') {
                    if(!other_district) {
                        $('.other_district_div .help-block').html('<ul role="alert"><li>Please enter other district</li></ul>');
                        return;
                    }
                    else {
                        $('.other_district_div .help-block').html('');
                        selected_district = other_district;
                    }
                }
            }
            $('.district .help-block').html('');

            $.ajax({
                url: "/wysd/ajax.php",
                type: "POST",
                data: {
                    register_form: true,
                    name: name,
                    email: email,
                    mobile: mobile,
                    institute: institute,
                    district: selected_district
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Thank You for Registration.<br> Please click on following links for more Skilling Initiatives in Haryana</strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#registerForm').trigger("reset");
                    $('#registerForm').hide();
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry, it seems server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#registerForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
