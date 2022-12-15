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
            <h2 class="text-center mb-5">Site Description</h2>
            <div class="row text-white">
            <li> 
            Customers can view and book room online through this website. User should register/signup using the login page by entering their emailId and password(Ex-user@hotmail.com; password - abcd ). Later, user can also update their profile details. 
            After logging in, they can browse through various rooms available, check their pricing. Finally they can reserve a room by completing the reservation form. 
            Admin has the power of either approving or disapproving the customer's booking request. Admin can login with credentials email - admin@gmail.com password - 1234. 
            Site users can also browse hotels, view room inventory, check availability, and book reservations in real-time. The manual process of making hotel reservations is troubled by a number of issues. Some of them include customers with minimal or no knowledge of the hotels. A visitor booking a hotel room that is either overpriced or inappropriate for his or her personality.
            When the manager requests certain information about a specific visitor that checked into the hotel, the receptionist frequently takes their time getting it. When information about a guest who checked into a hotel is not formally logged by the receptionist, etc., there may be foul play involved.
            For Business people they dont have sufficient time for these then they can use these type of online Hotel Management Systems. By this project we will reduce the faults in bills of their expenditure and decrease time of delay
            to give the bills to the customers. We can also save the bills of the customer. By this project we can also include all the taxes on the bills according to their expenditures. It has a scope to reduce the errors in making the bills. 
            Computerized bill can be printed within fraction of seconds. Online ordering of Booking is possible by using this software.
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