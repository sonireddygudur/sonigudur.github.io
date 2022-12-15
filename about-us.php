<?php
ob_start();
session_start();

if (isset($_SESSION["authenticated"]))
{
    if ($_SESSION["authenticated"] == "1")
    {
        header("Location: index.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Sign in</title>
</head>
<body class="bg-secondary">

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-5">About Us</h2>
            <div class="row text-white">
            <li> Brief Intro about the site developer
                I'm Soni Gudur with Panther ID: 002713899. I have enrolled for Masters in Computer Science at Georgia State University. As part of my web programming project, I have developed this project where we can manage hotel reservations.
            </li>
            <li> Project Description and Motivation
                Customers can effortlessly browse hotels online using the website. Once visitors have viewed and accessed these hotels, they can make reservations for rooms that fit their budgets. I have used HTML, Javascript, CSS, MySQL, Ajax on XAMPP server.
                To help customers with little or no knowledge of the hotels and there is a chance that the receptionist cheated by failing to formally record certain visitors details when they checked into hotel rooms. Attime the receptionists protracted delay in providing specific information about a certain guest upon request.
            </li>
            <li> Technologies used:
                HTML, CSS, JavaScript, Bootstrap, PHP, MySQL
            </li>
            <li>
            My course learnings
            I have learned how to develop websites for the internet ausing basic programming principles and understaning technologies such as HTML, CSS, Javascript and then linking them to the database using PHP and MySQL.</li>
            </div>
        </div>
        <div>
        <button class="btn btn-success my-2" onclick="window.location.href='index.php'">  Back </button>
        </div>
    </div>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/form-submission.js"></script>
</body>
</html>