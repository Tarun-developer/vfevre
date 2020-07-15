/**
 * Created by Deepak on 25-12-2017.
 */

$(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });


    // Verification code script.
    $("#idForm").submit(function(e) {

        var url = "path/to/your/script.php"; // the script where you handle the form input.

        $.ajax({
            type: "POST",
            url: url,
            data: $("#idForm").serialize(), // serializes the form's elements.
            success: function(data)
            {
                console.log(data); // log response from the php script.
                var output = '';   // Dynamically append data from backend.
                output += `
             <div>
                <div class = "col-md-12 col-sm-12 animated fadeIn ">
                    <h4 style="color: #d41818;">Verification Results from CredVerify's Secure Global Database</h4>
                    <hr>
                    <div id="details"><h5>Your Details</h5></div>
                </div>
            </div>
            
            `;

            $("#data").append(output);

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus); alert("Error: " + errorThrown); //Error alert
                var output2 = '';                                               // Dynamically append data from backend.
                output2 += `
            <div>
                <div class = "col-md-12 col-sm-12 animated fadeIn ">
                    <h4 style="color: #d41818;">Verification Results from CredVerify's Secure Global Database</h4>
                    <hr>
                    <div id="details"><h5>The Identification Code is not associated with a valid certificate or credential.</h5></div>
                </div>
            </div>
            
            `;

            $("#data").append(output2);
            }
        });

        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
});