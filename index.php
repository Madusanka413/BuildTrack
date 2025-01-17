<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BuildTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('img/background2.jpg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
        }

        header {
            background-color: #ffffff;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-around;
            background-color: #444;
            padding: 15px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
        }

        nav a:hover {
            background-color: #555;
        }

        .hero {
            background: url('construction-site.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
        }

        section {
            padding: 20px;
        }

        .services, .projects {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .service, .project {
            background-color: #ffffff94;
            width: 30%;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .services, .projects {
                flex-direction: column;
            }

            .service, .project {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <header>
        <img src="img/logo.png" alt="Top Left Image" style="width: 250px;" >
        <h1 style="color:black">Welcome to BuildTrack</h1>
        <p style="color:black">Your Trusted Partner for Building the Future</p>
        
    </header>

    <nav style="height: 200px;">
        <a style="margin-top: 40px;" href="about.php">About US</a>
        <a style="margin-top: 40px;" href="#services">Services</a>
        <a style="margin-top: 40px;" href="project.php">Projects</a>
        <a style="margin-top: 40px;" href="#contact">Contact Us</a>
        <a style="margin-top: 40px;"href="login.php">LOGIN</a>
        <a style="margin-top: 40px;" href="signup.php">SIGNUP</a>
    </nav>

    <div class="hero">
        <h1 style="color: #333;">Building Your Vision, Creating Reality with BuildTrack</h1>
    </div>
    

    <section id="about">
        <h2 class="text-center" style="font-weight:700;">About Our Company</h2>
        <p style="font-weight: 700;">BuildTrack is a business that focuses on building, designing, and maintaining structures such as residential homes, commercial buildings, roads, bridges, and other infrastructure projects. Construction companies can vary in size and specialize in different types of construction projects depending on their expertise, resources, and market focus.</p>
    </section>

    <section id="services">
        <h2 class="text-center" style="font-weight:700;">Our Services</h2>
        <div class="services">
            <div class="service">
                <h3 style="font-weight:700;">construction management</h3>
                <p style="font-weight: 700;">Providing project management services to project managers</p>
            </div>
            <div class="service">
                <h3 style="font-weight:700;">Managing your build</h3>
                <p style="font-weight: 700;">Ability for customers to monitor their construction online</p>
            </div>
            <div class="service">
                <h3 style="font-weight:700;">For Public Sector</h3>
                <p style="font-weight: 700;">Monitoring of public projects and financial management of expansion</p>
            </div>
        </div>
    </section>

    <a href="project.php" style="text-decoration:none">
    <section id="projects">
        <h2 class="text-center" style="font-weight:700;">Our Recent Projects</h2>
        <div class="projects">
            <div class="project">
                <h3 style="font-weight:700;">Project 1</h3>
                <img src="img/comlex.jpg" alt="Project 1" width="100%">
                <p style="font-weight: 700;">A large commercial complex in the heart of the city, completed in 2023.</p>
            </div>
            <div class="project">
                <h3 style="font-weight:700;">Project 2</h3>
                <img src="img/luxery.jpg" alt="Project 2" width="100%">
                <p style="font-weight: 700;">Luxury apartments with stunning architecture and modern design.</p>
            </div>
            <div class="project">
                <h3 style="font-weight:700;">Project 3</h3>
                <img src="img/historical.jpg" alt="Project 3" width="100%">
                <p style="font-weight: 700;">Renovation of a historical building, maintaining its charm while adding modern amenities.</p>
            </div>
        </div>
    </section>
    </a>

    
    <section id="contact">
        <h2>Contact Us</h2>
        <div class="contact-form">
            <form action="submit_form.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="5" required></textarea><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>


    <footer>
        <p>&copy; 2024 BuildTrack. All Rights Reserved.</p>
    </footer>

</body>
</html>