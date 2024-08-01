<!-- navbar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            margin: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 10px;
        }

        nav ul li a:hover {
            color: #FFD700; /* Change color on hover */
        }

        .social-media {
            display: flex;
            align-items: center;
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
            color: white;
            margin-right: 20px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
                margin-bottom: 10px;
            }

            nav ul li {
                margin: 10px 0;
            }

            .social-media {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 480px) {
            .lodge-number {
                font-size: 1em;
                margin-right: 10px;
            }
        }
    </style>
    <!-- Include Font Awesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="amenities.php">Amenities</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <div class="social-media">
            <span class="lodge-number">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg> +26481 324 4003
            </span>
            <a href="https://www.facebook.com/profile.php?id=61555242752650" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/__hozei__/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </nav>
</body>
</html>
