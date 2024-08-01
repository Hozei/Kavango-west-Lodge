<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge - Home</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: white;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-image 1s ease-in-out;
        }

        header {
            padding: 1em 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .logo {
            margin-left: 20px;
            height: 120px; /* Adjust as needed */
        }

        nav {
            flex-grow: 1;
            margin: 10px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            margin: 0;
            flex-wrap: wrap;
        }

        nav ul li {
            margin: 0 15px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            display: inline-block;
            padding: 10px;
        }

        nav ul li:hover a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 3px;
            background: linear-gradient(45deg, #194b4f, #33fffc);
            border-radius: 10px;
        }

        .social-media {
            display: flex;
            align-items: center;
            margin-right: 20px; /* Adjust the margin as needed */
            flex-wrap: wrap;
        }

        .social-media a {
            color: white;
            margin: 0 10px;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-media a:hover {
            color: #FFD700; /* Change color on hover */
        }

        .lodge-number {
            font-size: 1.2em;
            margin-right: 20px; /* Adjust as needed */
            color: white; /* Gold color */
        }

        main {
            padding: 30px;
            text-align: center;
            font-size: 1em;
            font-weight: 300;
            line-height: 1.5;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        main h1 {
            font-size: 4em;
            margin-bottom: 20px;
            font-weight: bold;
            text-transform: uppercase;
            color: #FFD700; /* Gold color to make it stand out */
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.6);
            overflow: hidden;
            white-space: nowrap;
            display: inline-block;
            animation: broadcast 10s linear infinite;
        }

        main p {
            font-size: 1.5em;
            color: #FFD700;
        }

        section {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 1em 0;
            width: 100%;
            bottom: 0;
        }

        .check-in-out {
            display: flex;
            justify-content: space-around;
            font-size: 1em;
        }

        .check-in-out div {
            flex: 1;
            margin: 10px;
        }

        .about {
            font-size: 1.2em;
        }

        @keyframes broadcast {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul li {
                margin: 10px 0;
            }

            .social-media {
                flex-direction: column;
                align-items: flex-end;
            }
        }

        @media (max-width: 480px) {
            .logo {
                height: 80px; /* Adjust for smaller screens */
            }

            main h1 {
                font-size: 2.5em; /* Adjust for smaller screens */
            }

            main p {
                font-size: 1.2em; /* Adjust for smaller screens */
            }

            .social-media {
                flex-direction: column;
                align-items: flex-end;
                margin-right: 10px; /* Adjust for smaller screens */
            }

            .lodge-number {
                font-size: 1em; /* Adjust for smaller screens */
                margin-right: 10px; /* Adjust for smaller screens */
            }
        }
    </style>
    <!-- Include Font Awesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <img src="./images/logo-removebg-preview (1).png" alt="Kavango West" class="logo">
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
        <div class="social-media">
            <span class="lodge-number">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                +26481 324 4003 
            </span>
            <a href="https://www.facebook.com/profile.php?id=61555242752650" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/__hozei__/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </header>
    <main>
        <section id="home">
            <h1>Welcome to Kavango West Lodge</h1>
            <p>A place called Home, Away from Home.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Kavango West Lodge. All rights reserved.</p>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var images = [
                './images/WhatsApp Image 2024-07-04 at 13.10.32_dc5c48b8.jpg',
                './images/WhatsApp Image 2024-07-04 at 13.10.31_ebf89598.jpg',
                './images/KWL.jpg',
                './images/ppl n pool.jpg',
                './images/sitting area.jpg',
                './images/braai area.jpg',
                './images/sharlets.jpg'
            ];
            var currentIndex = 0;
            var changeBackgroundImage = function() {
                currentIndex = (currentIndex + 1) % images.length;
                document.body.style.backgroundImage = "url('" + images[currentIndex] + "')";
            };
            setInterval(changeBackgroundImage, 10000); // Change image every 10 seconds
            changeBackgroundImage(); // Initial call to set the first image
        });
    </script>
</body>
</html>
