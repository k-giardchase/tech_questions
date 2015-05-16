$(document).ready(function () {

    $('#myForm').validate({ // initialize the plugin
        // debug: true
        rules: {
            email: {
                required: true,
                email: true
            },
            number: {
                required: true,
                range: [1, 9999]
            },
            artist: {
              required: true,
            }

        },
        submitHandler: function (form) { // for demo
            alert('valid form submitted'); // for demo
            return false; // for demo
        }
    });

});
