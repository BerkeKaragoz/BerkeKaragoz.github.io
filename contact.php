<?php 
if(isset($_POST['submit'])){
    $to = "levent07@live.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact from omerwwazap.github.io";
    $message = $name . " Wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: thankyou.html');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Software Developer | Levent D.</title>
    <!-- CSS -->
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal site of LeventDurdalı, Software Dev ">
    <meta name="author" content="Ömer Levent Durdalı">
    <meta charset="UTF-8">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/im/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg">
</head>

<body>
    <div id="particles-js">
        <div class="container">
            <div class="row top">
                <div class="twelve column">
                    <div class="logo">
                        <a href="index.html">LD</a>
                    </div>
                    
                    <h1>Getting in touch is easy!</h1>
                    <p><strong>Interested in working together?</strong> Fill out the form below and we can get started on creating something amazing together!</p>
                </div>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="six columns">
                        <label for="email">Your email</label>
                        <input class="u-full-width" name="email" type="email" placeholder="Your email..." id="email">
                    </div>
                    <div class="six columns">
                        <label for="name">Your Name</label>
                        <input class="u-full-width" name="name" type="text" placeholder="Your name..." id="name">
                    </div>
                </div>
                <label for="message">Message</label>
                <textarea class="u-full-width" name="message" placeholder="Hi Levent..." id="message"></textarea>
                <button type="submit" name="submit" class="button">Submit</div>
            </form>
        </div>
        <div class="row">
            <div class="u-full-width column cta">
                <div class="logo smallLogo">
                    LD
                </div>
                <ul class="footerLinks">
                    <li><a href="https://twitter.com/omerwwazap">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/leventdurdali">Linkedin</a></li>
                    <li><a href="https://github.com/omerwwazap">Github</a></li>
                    <li><a href="http://codepen.io/omerwwazap">Codepen</a></li>
                    <li><a href="mailto:levent07@live.com">Contact</a></li>
                </ul>
                <<div class="footer">
               <p>Thanks to <a href="https://github.com/j-w-v/j-w-v.com">Github j-w-v</a></p>
            </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
