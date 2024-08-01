<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $conn->query("INSERT INTO contact_inquiries (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");
    echo "Thank you for your inquiry. We will get back to you soon.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact - Kavango West Lodge</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('./images/tele 1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        header {
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            color: #fff;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .contact-number {
            margin-left: 15px;
            font-weight: bold;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        form {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            text-align: left;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input, textarea {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: #006064;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #004d4d;
        }

        footer {
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #map {
            width: 100%;
            height: 400px;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="rooms.php">Rooms</a>
            <a href="amenities.php">Amenities</a>
            <a href="contact.php">Contact</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">About</a>
            <span class="contact-number">Call us: +26481 324 4003 </span>
        </nav>
    </header>

    <main>
        <form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">

            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>

            <input type="submit" value="Send">
        </form>
        
        <p> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15209.26308244809!2d18.59791048803945!3d-17.63519721991491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1beeef88d9cfdccf%3A0x70676287ad4f2fa7!2sKavango%20west%20Lodge!5e0!3m2!1sen!2sna!4v1721806672975!5m2!1sen!2sna" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>

    </main>

    <footer>
        <p>&copy; 2024 Kavango West Lodge</p>
    </footer>

    <script>
        function initMap() {
            var lodgeLocation = {lat: -17.634388, lng: 18.607361}; // Lodge coordinates
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: lodgeLocation
            });
            var marker = new google.maps.Marker({
                position: lodgeLocation,
                map: map
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</body>
</html>
