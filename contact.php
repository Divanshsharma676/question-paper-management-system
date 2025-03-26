<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            color: #fff;
            background: url('proj.jpeg') no-repeat center center fixed;
            background-size: cover;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .navbar .logo {
            font-size: 35px;
            color: #ff7200;
        }
        .navbar .menu {
            list-style: none;
            display: flex;
        }
        .navbar .menu li {
            margin-left: 30px;
        }
        .navbar .menu li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s;
        }
        .navbar .menu li a:hover,
        .navbar .menu li a.active {
            color: #ff7200;
        }
        .navbar .btn {
            padding: 10px 20px;
            background-color: #ff7200;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .navbar .btn:hover {
            background-color: #fff;
            color: #ff7200;
        }
        .hero {
            text-align: center;
            padding: 100px 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        main {
            padding: 50px 20px;
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
        }
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .contact-form button {
            padding: 10px 20px;
            background-color: #ff7200;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 18px;
        }
        .contact-form button:hover {
            background-color: #fff;
            color: #ff7200;
        }
        .map {
            margin-top: 30px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            margin-top: 50px;
        }
        .social-links {
            margin-top: 10px;
        }
        .social-links a {
            margin: 0 10px;
            color: #ff7200;
            font-size: 24px;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Pro Anmol</div>
            <ul class="menu">
                <li><a href="index1.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="question paper.php">Question Paper</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
            <a href="index.php"><button class="btn">Logout</button></a>
        </nav>
        <div class="hero">
            <h1>Contact Us</h1>
        </div>
    </header>
    <main>
        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
        <section class="map">
            <h2>Find Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509003!2d144.95373631550426!3d-37.81720974202186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727d4971fdee57!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1617310845104!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Pro Anmol. All rights reserved.</p>
        <div class="social-links">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-whatsapp"></a>
        </div>
    </footer>
</body>
</html>