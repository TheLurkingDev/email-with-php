<?php
if(isset($_POST['name']) && isset($_POST['email'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "me@darrenlcook.com";
    $subject = "This is the subject";
    $body = "<html>
    <body>
    <h2>Mail - DarrenLCook.com</h2>
    <hr>
    <p>Name:<br />.$name.</p>
    <p>Email:<br />.$email.</p>
    </body>
    </html>";

    // create email headers
    $headers = "From: ".$name."\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    $send = mail($to, $subject, $body, $headers);
    if($send) {
        echo "<br />";
        echo "Thanks for contacting me!";
    } else {
        echo "error";
    }
?>        

<!doctype html>
<html>
    <head>
        <title>Simple Contact Form With PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Your name"><br />
            <input type="text" name="email" placeholder="Your email"><br />
            <button type="submit">Subscribe</button>
        </form>
    </body>
</html>

<?php
  }
?>