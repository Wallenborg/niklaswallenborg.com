<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve customer information
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";

    // Process Beautiful World T-shirts
    $BW_amount1 = $_POST["BW-amount1"];
    $BW_size1 = $_POST["BW-size1"];

    $BW_amount2 = $_POST["BW-amount2"];
    $BW_size2 = $_POST["BW-size2"];

    $BW_amount3 = $_POST["BW-amount3"];
    $BW_size3 = $_POST["BW-size3"];

    $BW_amount4 = $_POST["BW-amount4"];
    $BW_size4 = $_POST["BW-size4"];

    $BW_amount5 = $_POST["BW-amount5"];
    $BW_size5 = $_POST["BW-size5"];

    $BW_amount6 = $_POST["BW-amount6"];
    $BW_size6 = $_POST["BW-size6"];

    $BW_amount7 = $_POST["BW-amount7"];
    $BW_size7 = $_POST["BW-size7"];

    $BW_amount8 = $_POST["BW-amount8"];
    $BW_size8 = $_POST["BW-size8"];

    $BW_amount9 = $_POST["BW-amount9"];
    $BW_size9 = $_POST["BW-size9"];

    // Process Bleach T-shirts
    $B_amount1 = $_POST["Bamount1"];
    $B_size1 = $_POST["Bsize1"];

    $B_amount2 = $_POST["Bamount2"];
    $B_size2 = $_POST["Bsize2"];

    $B_amount3 = $_POST["Bamount3"];
    $B_size3 = $_POST["Bsize3"];

    $B_amount4 = $_POST["Bamount4"];
    $B_size4 = $_POST["Bsize4"];

    $B_amount5 = $_POST["Bamount5"];
    $B_size5 = $_POST["Bsize5"];

    // Process Summer Season T-shirts
    $S_amount1 = $_POST["Samount1"];
    $S_size1 = $_POST["Ssize1"];

    $S_amount2 = $_POST["Samount2"];
    $S_size2 = $_POST["Ssize2"];

    $S_amount3 = $_POST["Samount3"];
    $S_size3 = $_POST["Ssize3"];

    // Compose the email message with T-shirt details
    $message .= "BEAUTIFUL WORLD - POOR IS COOL: Quantity: $BW_amount1, Size: $BW_size1\n";
    $message .= "BEAUTIFUL WORLD - IF YOU WANT TO: Quantity: $BW_amount2, Size: $BW_size2\n";
    $message .= "BEAUTIFUL WORLD - DEAD: Quantity: $BW_amount3, Size: $BW_size3\n";
    $message .= "BEAUTIFUL WORLD - OUR JOB: Quantity: $BW_amount4, Size: $BW_size4\n";
    $message .= "BEAUTIFUL WORLD - WORKING CLASS: Quantity: $BW_amount5, Size: $BW_size5\n";
    $message .= "BEAUTIFUL WORLD - CRY: Quantity: $BW_amount6, Size: $BW_size6\n";
    $message .= "BEAUTIFUL WORLD - HI MOM: Quantity: $BW_amount7, Size: $BW_size7\n";
    $message .= "BEAUTIFUL WORLD - DON'T TELL: Quantity: $BW_amount8, Size: $BW_size8\n";
    $message .= "BEAUTIFUL WORLD - VS: Quantity: $BW_amount9, Size: $BW_size9\n";

    $message .= "BLEACH - END: Quantity: $B_amount1, Size: $B_size1\n";
    $message .= "BLEACH - LIFE: Quantity: $B_amount2, Size: $B_size2\n";
    $message .= "BLEACH - RICH PEOPLE: Quantity: $B_amount3, Size: $B_size3\n";
    $message .= "BLEACH - NEVER SOLD A PAINTING: Quantity: $B_amount4, Size: $B_size4\n";
    $message .= "BLEACH - COPYRIGHT: Quantity: $B_amount5, Size: $B_size5\n";

    $message .= "SUMMER SEASON - SICK: Quantity: $S_amount1, Size: $S_size1\n";
    $message .= "SUMMER SEASON - BURN: Quantity: $S_amount2, Size: $S_size2\n";
    $message .= "SUMMER SEASON - CRIME: Quantity: $S_amount3, Size: $S_size3\n";

    // Send the email
    $recipient = "info@niklaswallenborg.com"; // Your email address
    $subject = "New T-shirt Order from your website";
    $sender_email = "info@niklaswallenborg.com"; // Your sender email address

    $headers = "From: " . $sender_email . "\r\n";
    $headers .= "Reply-To: " . $sender_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    mail($recipient, $subject, $message, $headers);

    // Redirect back to your website or a thank-you page
    header("Location: thanks.html");
}
?>
