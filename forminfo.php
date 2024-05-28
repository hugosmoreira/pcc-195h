<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forward Fitness Club</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" sizes="192x192" href="images/android-chrome-192.png">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One|Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
    
    <header>
        <a href="index.html"><img src="images/forward-fitness-logo.png" alt="Forward Fitness Club logo" height="220" width="297"></a>
    </header>
   
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="classes.html">Classes</a></li>
            <li><a href="nutrition.html">Nutrition</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>
 
    <main>
        <div id="contact">
            <h2>Thanks for your submission</h2>
            <p>A member of our staff will reach out to you soon.</p>
            <p>Here's the values you submitted for each field</p>
            <?php
                foreach ($_POST as $key => $value) {
                    while (list($field, $value) = each($_POST)) {
                        echo "<p><span style='font-weight: bold;'>" . $field . ":</span> " . $value . "</p>\n";
                    }
                }
            ?>
        </div>
    </main>
   
    <footer>
        <p>&copy; Copyright 2021. All Rights Reserved.</p>
        <p><a href="mailto:forwardfitness@club.net">forwardfitness@club.net</a></p>
    </footer>
</div>
</body>
</html>
