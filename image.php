<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday Gallery</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif; /* Modern, clean font */
            background: url('img/13.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            position: relative;
            padding: 20px;
        }

        /* Light Overlay for Background */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
            z-index: -1;
        }

        /* Top Bar Styling */
        .top-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .top-bar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Happy Birthday Text Styling */
        .happy-birthday {
            text-align: center;
            font-size: 3.5rem;
            color: #ff1493; /* Deep pink color */
            font-family: 'Pacifico', cursive; /* Fun, hand-lettered font */
            font-weight: bold;
            text-shadow: 3px 3px 5px rgba(255, 255, 255, 0.8), 0 0 15px rgba(255, 255, 255, 0.3);
            animation: glowing 1.5s ease-in-out infinite alternate;
            margin-top: 100px;
        }

        /* Glowing Effect for the Text */
        @keyframes glowing {
            0% {
                text-shadow: 0 0 10px #ff1493, 0 0 20px #ff1493, 0 0 30px #ff1493, 0 0 40px #ff1493;
                color: #ff1493;
            }
            50% {
                text-shadow: 0 0 20px #ff1493, 0 0 30px #ff1493, 0 0 40px #ff1493, 0 0 50px #ff1493;
                color: #ff69b4; /* Light pink */
            }
            100% {
                text-shadow: 0 0 10px #ff1493, 0 0 20px #ff1493, 0 0 30px #ff1493, 0 0 40px #ff1493;
                color: #ff1493;
            }
        }

        /* Fireworks Styling */
        .fireworks {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 500;
        }

        .firework {
            position: absolute;
            border-radius: 50%;
            animation: firework-animation 1.5s ease-out infinite;
        }

        .firework:nth-child(1) {
            background: rgba(255, 0, 0, 0.8);
            width: 80px;
            height: 80px;
            top: 20%;
            left: 15%;
        }

        .firework:nth-child(2) {
            background: rgba(0, 255, 0, 0.8);
            width: 60px;
            height: 60px;
            top: 10%;
            left: 70%;
        }

        .firework:nth-child(3) {
            background: rgba(0, 0, 255, 0.8);
            width: 100px;
            height: 100px;
            top: 50%;
            left: 45%;
        }

        .firework:nth-child(4) {
            background: rgba(255, 255, 0, 0.8);
            width: 90px;
            height: 90px;
            top: 30%;
            left: 30%;
        }

        /* Firework Animation */
        @keyframes firework-animation {
            0% {
                transform: scale(0) translateY(0);
                opacity: 1;
            }
            100% {
                transform: scale(4) translateY(-200px);
                opacity: 0;
            }
        }

        /* Star Styling */
        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 100;
            overflow: hidden;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            animation: star-twinkle 2s infinite ease-in-out;
        }

        @keyframes star-twinkle {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.5);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0.7;
            }
        }

        /* Main Content Styling */
        .content {
            margin-top: 150px;
            text-align: center;
            color: #333;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
        }

        /* Lightbox Styling */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0 8px 12px rgba(255, 255, 255, 0.3);
        }

        .lightbox:target {
            display: flex;
        }

        /* Exit Icon Styling */
        .lightbox a.close {
            position: absolute;
            top: 20px;
            right: 30px;
            text-decoration: none;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .lightbox a.close:hover {
            background: rgba(255, 255, 255, 0.5);
            color: black;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #555;
            font-family: 'Poppins', sans-serif;
        }

        footer a {
            color: #ff1493;
            text-decoration: none;
        }

        footer a:hover {
            color: #ff69b4;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .happy-birthday {
                font-size: 2.5rem;
                text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.3);
            }

            .gallery {
                gap: 10px;
            }

            .top-bar img {
                max-height: 40px;
            }

            .lightbox a.close {
                font-size: 1.5rem;
                right: 20px;
                top: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <!-- Uncomment the image tag to add your top banner -->
        <!-- <img src="img/happy-birthday.jpg" alt="Happy Birthday"> -->
    </div>

    <!-- Happy Birthday Text -->
    <div class="happy-birthday">Happy Birthday to Sumettra   <br> 7-01-2025 </div> 

    <!-- Fireworks Display -->
    <div class="fireworks">
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
        <div class="firework"></div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- <h1>Beautiful Responsive Image Gallery</h1> -->
        <div class="gallery">
            <a href="#img1"><img src="img/1.jpg" alt="Image 1"></a>
            <a href="#img2"><img src="img/2.jpg" alt="Image 2"></a>
            <a href="#img3"><img src="img/3.jpg" alt="Image 3"></a>
            <a href="#img4"><img src="img/4.jpg" alt="Image 4"></a>
            <a href="#img5"><img src="img/5.jpg" alt="Image 5"></a>
            <a href="#img6"><img src="img/6.jpg" alt="Image 6"></a>
            <a href="#img7"><img src="img/7.jpg" alt="Image 7"></a>
            <a href="#img8"><img src="img/8.jpg" alt="Image 8"></a>
            <a href="#img9"><img src="img/9.jpg" alt="Image 9"></a>
            <a href="#img10"><img src="img/10.jpg" alt="Image 10"></a>
            <a href="#img11"><img src="img/11.jpg" alt="Image 11"></a>
            <a href="#img12"><img src="img/12.jpg" alt="Image 12"></a>
        </div>
    </div>

    <!-- Lightbox Elements with Exit Icon -->
    <div id="img1" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/1.jpg" alt="Image 1">
    </div>
    <div id="img2" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/2.jpg" alt="Image 2">
    </div>
    <div id="img3" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/3.jpg" alt="Image 3">
    </div>
    <div id="img4" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/4.jpg" alt="Image 4">
    </div>
    <div id="img5" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/5.jpg" alt="Image 5">
    </div>
    <div id="img6" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/6.jpg" alt="Image 6">
    </div>
    <div id="img7" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/7.jpg" alt="Image 7">
    </div>
    <div id="img8" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/8.jpg" alt="Image 8">
    </div>
    <div id="img9" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/9.jpg" alt="Image 9">
    </div>
    <div id="img10" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/10.jpg" alt="Image 10">
    </div>
    <div id="img11" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/11.jpg" alt="Image 11">
    </div>
    <div id="img12" class="lightbox">
        <a href="#" class="close">×</a>
        <img src="img/12.jpg" alt="Image 12">
    </div>

    <footer>
        &copy; bysukandakiangkai
    </footer>
</body>
</html>