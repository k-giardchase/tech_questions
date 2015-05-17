$(document).ready(function () {
    $.validator.addMethod("artist_check", function(value, element, string) {
      return $.inArray(value, string) !== -1;
    }, $.validator.format("Please enter '{0}'"));

    $('#validateForm').validate({
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
            email: "Your email address must include an '@' and '.' character, as well as a valid domain name"
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
          $.ajax({
            type: "POST",
            url: "process.php",
            data: $('#validateForm').serialize(),
            dataType: "json",
            success: function(msg) {
              $("#formResponse").removeClass('error');
					    $("#formResponse").removeClass('success');
					    $("#formResponse").addClass(msg.status);
              $('#formResponse').text(msg.message).delay(5000).fadeOut();
              $('#lyrics').show().delay(5000).fadeOut();
              $('#artist').val("");
              $('#email').val("");
              $('#number').val("");
            },
            error: function() {
              $("#formResponse").removeClass('success');
					    $("#formResponse").addClass('error');
              $('#formResponse').text("There was an error submitting the form.")
            }
          }); //end ajax

        } //end submitHandler

  }); //end validate
}); //end jQuery
