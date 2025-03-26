<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Resetting default margins and paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Roboto', sans-serif;
            color: #fff;
            background: url('proj.jpeg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Navbar styling */
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

        /* Hero section styling */
        .hero {
            text-align: center;
            padding: 100px 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        /* Main content styling */
        main {
            padding: 50px 20px;
            background-color: rgba(0, 0, 0, 0.8);
        }

        main h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ff7200;
        }

        main p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Team section styling */
        .team-section {
            margin-top: 50px;
        }

        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ff7200;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .team-member a {
            text-decoration: none;
            color: #ff7200;
            font-weight: bold;
            transition: color 0.3s;
        }

        .team-member a:hover {
            color: #fff;
        }

        /* Footer styling */
        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            margin-top: 50px;
        }

        footer p {
            margin-bottom: 10px;
        }

        footer a {
            text-decoration: none;
            color: #ff7200;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #fff;
        }

        .social-links a {
            margin: 0 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Pro Anmol</div>
            <ul class="menu">
                <li><a href="index1.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="question paper.php">Question Paper</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="index.php"><button class="btn">Logout</button></a>
        </nav>
        <div class="hero">
            <h1>About Us</h1>
        </div>
    </header>
    <main>
        <section class="about-section">
            <h2>Our Mission</h2>
            <p>We strive to empower learners by offering a user-friendly interface to search, download, and utilize previous year question papers. This initiative is designed to help users understand exam patterns, identify frequently tested topics, and practice effectively.</p>
            <h2>Our Vision</h2>
            <p>To be the leading platform for accessing and utilizing previous year question papers, empowering students and educators to achieve academic excellence through comprehensive resources and innovative tools.</p>
            <h2>Our Commitment</h2>
            <p>We are committed to continuously updating our database to include the latest question papers, ensuring that our users have access to the most current resources for their exam preparation.</p>
        </section>
        <section class="team-section">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="anmol.jpeg" alt="Anmol Jarial">
                    <h3>Anmol Jarial</h3>
                    <p>Co-Founder & CEO</p>
                    <a href="https://www.linkedin.com/in/anmol-jarial" target="_blank">LinkedIn</a>
                </div>
                <div class="team-member">
                    <img src="divansh.jpeg" alt="Divansh Sharma">
                    <h3>Divansh Sharma</h3>
                    <p>Co-Founder & CTO</p>
                    <a href="https://www.linkedin.com/in/divansh-sharma" target="_blank">LinkedIn</a>
                </div
::contentReference[oaicite:0]{index=0}
 
