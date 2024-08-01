<?php
include 'db.php';
$amenities = $conn->query("SELECT * FROM amenities");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge - Amenities</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('./images/pexels-pixabay-159291.jpg') no-repeat center center fixed;
            background-size: cover;
            color: whitesmoke;
        }

        header {
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 10px 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            text-align: center;
            padding: 50px 20px;
        }

        #amenities h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 300px;
            height: 200px;
            margin: 20px;
            perspective: 1000px;
        }

        .card-inner {
            width: 100%;
            height: 100%;
            position: relative;
            transform-style: preserve-3d;
            transition: transform 1s;
        }

        .card:hover .card-inner {
            transform: rotateY(360deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }

        .card-front {
            background: rgba(0, 0, 0, 0.7);
        }

        .card-back {
            background: rgba(0, 0, 0, 0.9);
            transform: rotateY(180deg);
        }

        footer {
            padding: 20px 0;
            text-align: center;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
            color: white;
            font-size: 14px;
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

            .card {
                width: 100%;
                margin: 10px 0;
            }
        }

        @media (max-width: 480px) {
            #amenities h1 {
                font-size: 28px;
            }

            .card-front, .card-back {
                font-size: 18px;
            }

            .card {
                width: 100%;
                margin: 10px 0;
            }

            main {
                padding: 30px 10px;
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
    <main>
        <section id="amenities">
            <h1>Our Amenities</h1>
            <div class="cards-container">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            Free Wi-Fi
                        </div>
                        <div class="card-back">
                            Stay connected with our high-speed internet.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            Swimming Pool
                        </div>
                        <div class="card-back">
                            Enjoy our luxurious pool.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            Restaurant and Bar
                        </div>
                        <div class="card-back">
                            Dine in style with our exquisite menu.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <div class="card-front">
                            Conference room
                        </div>
                        <div class="card-back">
                            Order anytime, day or night.
                        </div>
                    </div>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Kavango West Lodge. All rights reserved.</p>
    </footer>
</body>
</html>
