<?php
include 'db.php';
$rooms = $conn->query("SELECT * FROM rooms");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking - Kavango West Lodge</title>
    <link rel="stylesheet" href="booking.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('./images/kw R.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        header {
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 800px; /* Increased width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two-column layout */
            gap: 20px; /* Space between columns */
        }

        form h3 {
            grid-column: span 2;
            margin-top: 0;
            border-bottom: 2px solid #2e7d32;
            padding-bottom: 10px;
            font-size: 1.5em;
            color: #333;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #2e7d32;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            padding: 10px;
            border-radius: 4px;
            grid-column: span 2;
        }

        form input[type="submit"]:hover {
            background-color: #1b5e20;
        }

        footer {
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .total-amount {
            font-size: 1.2em;
            font-weight: bold;
            color: #2e7d32;
        }
    </style>
    <script>
        function calculateTotal() {
            let checkInDate = new Date(document.getElementById('check_in').value);
            let checkOutDate = new Date(document.getElementById('check_out').value);
            let pricePerNight = parseFloat(document.getElementById('room_id').selectedOptions[0].getAttribute('data-price'));

            if (checkInDate && checkOutDate && pricePerNight) {
                let timeDifference = checkOutDate.getTime() - checkInDate.getTime();
                let days = timeDifference / (1000 * 3600 * 24);

                if (days > 0) {
                    let totalAmount = days * pricePerNight;
                    document.getElementById('total_amount').innerText = 'N$' + totalAmount.toFixed(2);
                } else {
                    document.getElementById('total_amount').innerText = 'Invalid dates selected';
                }
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Book Your Stay</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="rooms.php">Rooms</a>
            <a href="amenities.php">Amenities</a>
            <a href="contact.php">Contact</a>
            <a href="booking.php">Booking</a>
            <a href="about.php">About</a>
        </nav>
    </header>

    <main>
        <form action="process_booking.php" method="POST">
            <h3>Booking Details</h3>
            
            <label for="room_id">Room:</label>
            <select name="room_id" id="room_id" required onchange="calculateTotal()">
                <option value="">Select a room</option>
                <?php while($room = $rooms->fetch_assoc()): ?>
                    <option value="<?php echo $room['id']; ?>" data-price="<?php echo $room['price']; ?>"><?php echo htmlspecialchars($room['name']); ?> - N$<?php echo htmlspecialchars($room['price']); ?> per night</option>
                <?php endwhile; ?>
            </select>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">

            <label for="check_in">Check-in Date:</label>
            <input type="date" name="check_in" id="check_in" required onchange="calculateTotal()">

            <label for="check_out">Check-out Date:</label>
            <input type="date" name="check_out" id="check_out" required onchange="calculateTotal()">

            <label>Total Amount:</label>
            <p id="total_amount" class="total-amount">N$0.00</p>

            <!-- Payment Details Section -->
            <h3>Payment Details</h3>
            <label for="card_number">Card Number:</label>
            <input type="text" name="card_number" id="card_number" required>

            <label for="expiry_month">Expiry Month:</label>
            <input type="text" name="expiry_month" id="expiry_month" required placeholder="MM">

            <label for="expiry_year">Expiry Year:</label>
            <input type="text" name="expiry_year" id="expiry_year" required placeholder="YYYY">

            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" id="cvv" required>

            <input type="submit" value="Book Now">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Kavango West Lodge</p>
    </footer>
</body>
</html>
