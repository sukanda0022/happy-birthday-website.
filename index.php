<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Bouncing Button</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            font-family: Arial, sans-serif;
        }

        .button-container {
            text-align: center;
        }

        button {
            padding: 15px 30px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: #ff7eb3;
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        button:active {
            transform: scale(1.1);
            animation: bounce 0.5s ease;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        button:hover {
            background-color: #e45d9b;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button onclick="navigateToImagePage()">Click Me!</button>
    </div>

    <script>
        function navigateToImagePage() {
            window.location.href = 'image.php'; // Redirects to the image page
        }
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="birthday-card">
        <div class="card-content">
            <h1>🎉 Happy Birthday! 🎂</h1>
            <p>May your day be as bright and colorful as you are! 🎈</p>
            <button class="celebrate-btn" onclick="showMessage()">Celebrate 🎊</button>
        </div>
        <div class="balloons">
            <div class="balloon"></div>
            <div class="balloon"></div>
            <div class="balloon"></div>
        </div>
        <div id="message" class="hidden">
            <img src="https://i.postimg.cc/fLjWp5JZ/15.jpg" alt="Birthday Celebration" class="message-photo" />
            🎉🎁 Happy Birthday TO Sumettra 🎉🎁
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>