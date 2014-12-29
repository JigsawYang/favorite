$(function() {
    $("#regform").validate({
        rules: {
            username: {
                required: true,
                minlength: 5,
                maxlength: 15
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 10
            },
            repassword: {
                required: true,
                minlength: 6,
                maxlength: 10,
                equalTo: '#password'
            },
            email: {
                required: true,
                email: true
            }
        }
    });


})