$(document).ready(function () {
    $.validator.addMethod("artist_check", function(value, element, string) {
      return $.inArray(value, string) !== -1;
    }, $.validator.format("Please enter '{0}'"));

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
              artist_check: ["Beethoven", "Josh Groban", "Nickelback"]
            }
        },
        messages: {
          email: {
            required: "Please enter an email",
            email: "Your email address must include an @ character"
          },
          number: {
            required: "Please enter a number",
            email: "Please choose a number between 1 and 9999"
          },
          artist: {
            required: "Please prove you're a human and enter an artists' name",
           artist_check: "Please enter either '{0}' or '{1}' or '{2}'"
          }
        },

        submitHandler: function(form) {
          $('#myForm').ajaxSubmit({
            type: "POST",
            data: $(form).serialize(),
            dataType: 'json',
            url: "process.php",
            success: function() {
              console.log("hello");
            },
            error: function() {
              console.log("Well, this sucks.");
            }
          }); //end ajaxSubmit

        } //end submitHandler

  }); //end validate
}); //end jQuery
