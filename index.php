<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Button</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5; /* Light gray background */
            font-family: Arial, sans-serif; /* Font styling */
        }
        .container {
            text-align: center;
        }
        .heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px; /* Space between heading and button */
        }
        .pay-button {
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #28a745; /* Green color */
            border: none;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .pay-button:hover {
            background-color: #218838; /* Darker green */
            transform: scale(1.05);
        }
        .pay-button:active {
            background-color: #1e7e34; /* Even darker green */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">Mollie Payment Gateway</div>
        <a href="main.php" class="pay-button">€10 - Pay Now</a>
    </div>
</body>
</html>
