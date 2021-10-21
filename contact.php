<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us | Sparks Bank</title>

        <link rel="stylesheet" href="index.php">
        <link rel="stylesheet" href="about.php">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="shortcut icon" type="image/png" href="logo.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Baloo+Bhaina+2:wght@600&family=Bree+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
        <linl rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">


    </head>
    <body>
    

        <header class="header" style="margin-top: 0px;">
            <div class="heading">
            <h3 style="margin-left: 5px; margin-top: 20px;font-size:19px; font-family: Baloo Bhai;"><a href="contact.php" class="logo">CONTACT US</a></h3></div>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <nav id="navbar">
            <ul class="menu">
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT US</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
            </ul>
            </nav>
            
            <div class ="contact-section">
                <div class="contact-info">
                    <div><i class="fas fa-map-marker-alt"></i>Bank More, Dhanbad, Jharkhand</div>
                    <div><i class="fas fa-envelope"></i>sparksbank133431@gmail.com</div>
                    <div><i class="fas fa-phone"></i>+91 7777 889 990</div>
                    <div><i class="fas fa-clock"></i>Mon - Sat 8:00 AM to 7:00 PM</div>
                </div>
                <div class="contact-form">
                    <p>Please get in touch and our expert support team will answer all your enquiries</p>
                    <br>
                    <form class="contact" action="index.php" method="GET">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                       
                        <textarea name="message" rows="5" placeholder="Your message" required></textarea>
                          <input type="submit" name="submit" class="send-btn" value="Send">
        
        
                    </form>
                </div>
            </div>
        </header>


</body>
</html>