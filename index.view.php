<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Form Sending PHP Simulator" />
    <meta property="og:image" content="Form-Capture.png" />
    <meta property="og:url" content="https://another-php-simulator.herokuapp.com/" />
    <meta property="og:description" content="A PHP Form that use the method POST" />
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="828" />
    <meta property="og:image:height" content="450" />
    <meta property="og:site_name" content="PHP-Form-Manuel" />
    <meta property="fb:app_id" content="928977633900253" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="Form-Capture.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Form PHP</title>
</head>

<body>
    <main class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="form">
            <input type="text" class="form-control" name="name" placeholder="Your Name Here"
                value="<?php echo $name; ?>" id="name">
            <?php if(isset($fails[0])  ) { ?>
            <div class="alert fail">
                <p><?php echo $fails[0]; ?></p>
            </div>
            <?php } ?>
            <input type="email" name="email" id="email" placeholder="Your Email Here" value="<?php echo $email; ?>">
            <?php if(isset($fails[1])  ) { ?>
            <div class="alert fail">
                <p><?php echo $fails[1]; ?></p>
            </div>
            <?php } ?>
            <input type="password" name="password" id="password" placeholder="Create Your Password"
                value="<?php echo $password; ?>">
            <?php if(isset($fails[2])  ) { ?>
            <div class="alert fail">
                <p><?php echo $fails[2]; ?></p>
            </div>
            <?php } ?>
            <input type="password" name="password2" id="password2" placeholder="Confirm Password"
                value="<?php echo $password2; ?>">
            <?php if(isset($fails[3]) ) { ?>
            <div class="alert fail">
                <p><?php echo $fails[3]; ?></p>
            </div>
            <?php } ?>
            <textarea name="message" id="message" placeholder="Your Message Here"
                class="form-control"><?php echo  $message; ?></textarea>
            <?php if(isset($fails[4])  ) { ?>
            <div class="alert fail">
                <p><?php echo $fails[4]; ?></p>
            </div>
            <?php } ?>
            <div class="button-container">
                <input type="submit" value="Sendind Mail" name="submit" class="btn btn-primary">
            </div>
            <?php if(empty($fails)) { ?>
            <?php 
            $send_to = 'manuesteban1990@gmail.com';
            $subject = "Mail Sending from my form on Heroku";   
            $content = "From: $name \n";
            $content .= "Mail: $email \n";
            $content .= "Message: $message";
            mail($send_to, $subject, $content);
            ?>
            <div class="alert success">
                <h2>Your Information is Safe, Thanks for Sharing it With Us <?php echo $name; ?> </h2>
                <h2 class="close-btn">X</h2>
            </div>
            <?php } ?>
        </form>
    </main>
    <script src="help.js"></script>
</body>

</html>