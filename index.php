<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank | OnlineTransaction.com</title>
    <link rel="shortcut icon" type="image/png" href="logo.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Baloo+Bhaina+2:wght@600&family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <linl rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpg" alt="OnlineTransaction.com" width="75" height="70">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="about.php">About us</a></li>
            <li class="item"><a href="contact.php">Contact us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Sparks Bank</h1>
        <p>The Sparks Bank online banking system is created for the Sparks Bank, which</p>
        <p>is a small bank for personal and small-business banking.</p>
        <br>
        <div class="bg">
            <div class="center">
                <ul type="none">
                <li class="operations"><a href="View_user.php"><button class="btn">View all Users</button></a></li><br><br>
                 <li class="operations"><a href="transfer_money.php"><button class="btn">Transfer Money</button></a></li><br><br>
                <li class="operations"><a href="transactionhistory.php"><button class="btn">Transfer History</button></a></li>
                </ul>

            </div>
        </div>
    </section>
    <?php include('footer.php') ?>


</body>
</html>
      