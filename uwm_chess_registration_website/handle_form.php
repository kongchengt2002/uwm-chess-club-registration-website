<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
// This page receives the registration form data and stores it in MySQL.

include('mysqli_connect.php');

if(isset($_POST['submit'])){

    // Get form data from index.php.
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $student_status = mysqli_real_escape_string($dbc, trim($_POST['student_status']));
    $skill_level = mysqli_real_escape_string($dbc, trim($_POST['skill_level']));
    $play_style = mysqli_real_escape_string($dbc, trim($_POST['play_style']));
    $meeting_day = mysqli_real_escape_string($dbc, trim($_POST['meeting_day']));
    $grad_month = mysqli_real_escape_string($dbc, trim($_POST['grad_month']));
    $grad_year = mysqli_real_escape_string($dbc, trim($_POST['grad_year']));
    $comments = mysqli_real_escape_string($dbc, trim($_POST['comments']));

    // Build the interest list from the checkbox fields.
    $interests = "";

    if(isset($_POST['interest_strategy'])){
        $interests = $interests . "Strategy Lessons ";
    }

    if(isset($_POST['interest_tournaments'])){
        $interests = $interests . "Tournaments ";
    }

    if(isset($_POST['interest_casual'])){
        $interests = $interests . "Casual Play ";
    }

    if(isset($_POST['interest_online'])){
        $interests = $interests . "Online Chess ";
    }

    $interests = mysqli_real_escape_string($dbc, trim($interests));

    // Insert the student registration into the database.
    $query = "INSERT INTO chess_members
    (first_name, last_name, email, student_status, skill_level, play_style, interests, meeting_day, grad_month, grad_year, comments, registration_date)
    VALUES
    ('$first_name', '$last_name', '$email', '$student_status', '$skill_level', '$play_style', '$interests', '$meeting_day', '$grad_month', '$grad_year', '$comments', NOW())";

    $result = mysqli_query($dbc, $query);

    if($result){
        echo "<h1>Registration Submitted</h1>";
        echo "<p class='success'>Thank you, $first_name. Your UWM Chess Club registration has been saved to the database.</p>";
        echo "<h2>Registration Summary</h2>";
        echo "<table>";
        echo "<tr><th>Name</th><td>$first_name $last_name</td></tr>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Student Status</th><td>$student_status</td></tr>";
        echo "<tr><th>Skill Level</th><td>$skill_level</td></tr>";
        echo "<tr><th>Play Style</th><td>$play_style</td></tr>";
        echo "<tr><th>Interests</th><td>$interests</td></tr>";
        echo "<tr><th>Preferred Meeting Day</th><td>$meeting_day</td></tr>";
        echo "</table>";
    }else{
        echo "<h1>Registration Error</h1>";
        echo "<p class='error'>The registration could not be saved.</p>";
        echo "<p>MySQL Error: " . mysqli_error($dbc) . "</p>";
    }

}else{
    echo "<h1>No Form Submitted</h1>";
    echo "<p class='error'>Please complete the registration form first.</p>";
}

mysqli_close($dbc);
?>

<p><a href="index.php">Return to registration form</a></p>
<p><a href="view_members.php">View registered members</a></p>
</div>
</body>
</html>
