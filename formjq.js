$(document).ready(function() {
    var $registrationForm = $("#registrationForm");
    if ($registrationForm.length) {
        $registrationForm.validate({
            rules: {
                fullname: {
                    required: true,
                },
                username: {
                    required: true,
                },
                email: {
                    required: true,
                    customemail: true
                },
                phone: {
                    required: true,
                    customphonelv: true
                },
                passwordform: {
                    required: true,
                },
                confirmpass: {
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                confirmpass: {
                    equalTo: 'Please, enter the same password!'
                },
                phone: {
                    customphonelv: 'Write correct latvian phonenumber!'
                }
            }
        })
    }

    //https://stackoverflow.com/questions/12514382/override-jquery-validate-plugin-email-address-validation
    $.validator.addMethod("customemail",
        function(value, element) {
            return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
        },
        "Please, write correct email"
    );

    $.validator.addMethod("customphonelv", function(value, element) {
        return /^2[0-9]{7}$/.test(value);
    });

});