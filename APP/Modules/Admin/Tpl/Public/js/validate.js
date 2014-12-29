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
    $("#cateform").validate({
        rules: {
            name: {
                required: true,
                maxlength: 35
            },
            sort: {
                required: true
            }
        }
    });

    $("#webform").validate({
        rules: {
            cid: {
                required: true
            },
            title: {
                required: true,
                maxlength: 30
            },
            address: {
                required: true,
                url: true,
                maxlength: 90
            },
            click: {
                required: true,
                number:true
            },
            content: {
                required: true,
                maxlength: 254
            }

        }
    });

})