
jQuery.validator.addMethod("better_email", function (value, element) {
    return this.optional(element) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
}, 'Please enter a valid email address.');

jQuery(document).ready(function ($) {
    jQuery('.comment-form').validate({
        rules: {
            author: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            comment: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            author: "Please enter your name",
            email: "Please enter a valid email address",
            comment: "Please type your comment atleast 10 characters"
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            element.after(error);
        }
    });
});
