<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
           
        }

        .section-box {
            width: 200px;
            height: 200px;
            background-color: #f2f2f2;
            border-radius: 10px;
            margin: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .section-box:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        .section-title {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="display_timetable.php?section=CSE-A" style="text-decoration: none; color: inherit;">
            <div class="section-box">
                <span class="section-title">CSE-A</span>
            </div>
        </a>
        <a href="display_timetable.php?section=CSE-B" style="text-decoration: none; color: inherit;">
            <div class="section-box">
                <span class="section-title">CSE-B</span>
            </div>
        </a>
    </div>
</body>
</html>
