<?php

	$name = "Vincent Santos";
	$birthDate = "July 22, 2001";
	$birthPlace = "Antipolo City";
	$address = "Pagrai, Brgy. Mayamot, Antipolo City";
	$highSchool = "Mayamot National High School";
	$college = "University of Rizal System - BS in Information Technology";
	$skills = ["TESDA NCII-Computer System Servicing", "Basic Network"];
	$interests = ["Technical Support", "Data Analysis", "Network Operation"];

echo <<<HTML

<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        header {
            background-color: #000;
        }
        section {
            background-color: #fff;
            padding: 20px;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
        }
        footer {
            background-color: #000;
            color: #fff;
            padding: 10px 0;
        }
        .btn-download {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .btn-download:hover {
            background-color: #0056b3;
        }

    </style>

	</head>

<body>
    
	<header class="bg-dark text-white text-center py-3">
        <div class="container">
            <img src="profile.png" alt="Profile Picture" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
            <h1>$name</h1>
            <p class="lead">Aspiring Technical Support Engineer | Passionate Learner</p>

        </div>
    </header>

    <main class="container my-5">
        <section id="about">
            <h2>About Me</h2>
            <p>Hello! My name is <strong>$name</strong>. I was born on <strong>$birthDate</strong> in <strong>$birthPlace</strong>. 
               I currently reside in <strong>$address</strong>. <br> I graduated from <strong>$highSchool</strong> and later completed my education at <strong>$college</strong>.
            </p>

        </section>
        <section id="cv">

            <h2>Curriculum Vitae</h2>
            <ul>
                <li><strong>High School:</strong> $highSchool</li>
                <li><strong>College/University:</strong> $college</li>
                <li><strong>Skills:</strong> 

HTML;
echo implode(", ", $skills);
echo <<<HTML
                </li>
                <li><strong>Interests:</strong> 

HTML;
echo implode(", ", $interests);
echo <<<HTML
                </li>
            </ul>
        </section>

        <section id="contact">
            <h2>Contact Me</h2>
            <p>If you'd like to learn more about me, you can download my resume below:</p>
            <a href="resume.pdf" class="btn btn-primary" download>Download My Resume (PDF)</a>

        </section>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 

HTML;
echo date('Y');
echo <<<HTML
 $name. All Rights Reserved.</p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	</body>

    </html>

HTML;

?>