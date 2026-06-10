<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registered Members</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container wide">
<?php
// This page retrieves and displays all saved Chess Club registrations.

include('mysqli_connect.php');

$query = "SELECT * FROM chess_members ORDER BY registration_date DESC";
$result = mysqli_query($dbc, $query);
$count = mysqli_num_rows($result);

echo "<h1>UWM Chess Club Registered Members</h1>";
echo "<p class='success'>Total registrations: $count</p>";

if($count > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Status</th>";
    echo "<th>Skill</th>";
    echo "<th>Play Style</th>";
    echo "<th>Interests</th>";
    echo "<th>Meeting Day</th>";
    echo "<th>Registered</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row['member_id'] . "</td>";
        echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['student_status'] . "</td>";
        echo "<td>" . $row['skill_level'] . "</td>";
        echo "<td>" . $row['play_style'] . "</td>";
        echo "<td>" . $row['interests'] . "</td>";
        echo "<td>" . $row['meeting_day'] . "</td>";
        echo "<td>" . $row['registration_date'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "<p>No members have registered yet.</p>";
}

mysqli_close($dbc);
?>

<p><a href="index.php">Return to registration form</a></p>
</div>
</body>
</html>
