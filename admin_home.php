<?php include('header.php'); ?>
<?php
session_start(); // Start the session
$user_id = $_SESSION['user_id'] ?? null; 
if (!$user_id) {
    // Redirect to the login page if no user is logged in
    header("Location: index.php");
    exit();
}
$role = $_SESSION['role'] ?? null; // Get the role of the logged-in user

if ($role === 'student') {
    // Redirect to the student dashboard if the logged-in user is a student
    header("Location: student_dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time table management - CSE </title>
    <style>
        /* Class options page styles */
        .class-options h1 {
            text-align: center; /* Center-align the heading */
        }

        .class-options ul {
            list-style-type: none; /* Remove default list styles */
            padding: 0; /* Remove default padding */
        }

        .class-options li {
            margin-bottom: 10px; 
        }

        .class-options a {
            text-decoration: none;
            color: #333; 
            display: block; 
            padding: 10px; 
            background-color: #fff; 
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .class-options a:hover {
            background-color: #f0f0f0; /* Change background color on hover */
        }
    </style>
</head>
<body>
    <div class="class-options">
        <h1>Time table management - CSE </h1>
        
        <ul>
            <li><a href="display_timetable.php?section=CSE-A">Display Timetable CSE-A</a></li>
            <li><a href="display_timetable.php?section=CSE-B">Display Timetable CSE-B</a></li>
            <li><a href="insert_class_form.php">Insert Class</a></li>
            <li><a href="delete_class.php">Delete Class</a></li>
            <li><a href="update_students_table.php">Update Students Table</a></li>
        </ul>
    </div>
</body>
</html>
