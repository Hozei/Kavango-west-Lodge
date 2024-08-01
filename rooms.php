<?php
include 'db.php';
$rooms = $conn->query("SELECT * FROM rooms");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge Rooms</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('./images/rooms.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        header {
            padding: 1em 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        main {
            padding: 30px;
            color: white;
            text-align: center;
        }
        h1 {
            font-size: 3em;
            margin-top: -20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        #rooms {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .room-card {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
            margin: 10px;
        }
        .room-card:hover {
            transform: translateY(-10px);
        }
        .room-card img {
            width: 100%;
            height: auto;
        }
        .room-card h2 {
            font-size: 1.5em;
            margin: 15px 0;
        }
        .room-card p {
            padding: 0 15px 15px;
            font-size: 1em;
            line-height: 1.5;
        }
        footer {
            text-align: center;
            padding: 1em 0;
            color: white;
        }
        .roomtitle {
            text-align: center;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            .room-card {
                width: 100%;
                margin: 10px 0;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2em;
            }

            .room-card h2 {
                font-size: 1.2em;
            }

            .room-card p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="amenities.php">Amenities</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>
    <section class="roomtitle">
        <h1>Our Rooms</h1>
    </section>
    <main>
        <section id="rooms">
            <div class="room-card">
                <img src="images/standard.jpg" alt="Standard Room">
                <h2>Standard Room</h2>
                <p>Our Standard Rooms offer a comfortable stay with essential amenities for budget-conscious travelers.</p>
                <h2>N$400</h2>
            </div>
            <div class="room-card">
                <img src="images/delux.jpg" alt="Deluxe Room">
                <h2>Self-catering Units</h2>
                <p>The self-catering units provide more space and additional amenities, perfect for those seeking extra comfort.</p>
                <h2>N$500</h2>
            </div>
            <div class="room-card">
                <img src="images/superior.jpg" alt="Superior Room">
                <h2>Vip Units</h2>
                <p>Enjoy the luxury of our Vip Units, featuring enhanced furnishings and a better view.</p>
                <h2>N$999</h2>
            </div>
            <!-- Add more room cards as needed -->
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Kavango West Lodge. All rights reserved.</p>
    </footer>
</body>
</html>
