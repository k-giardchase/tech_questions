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
        }
    });

    $('#myForm').submit(function(event){
    var isvalidate = $("#myForm").valid();
            if(!isvalidate)
            {
                event.preventDefault();
                alert("One or more invalid inputs.");
            } else {
               e.preventDefault();
              //Do AJAX
    }

         });

});
