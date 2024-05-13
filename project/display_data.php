<?php

    $connect = mysqli_connect(
    'db',
    'mohamed', 
    'password', 
    'team_data'
    );


    $query = "SELECT student_ID, student_Name, Age, CGPA, Gender FROM students";
    $result = mysqli_query($connect, $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link rel="stylesheet" href="css.css">
     <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color:#white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .student {
            background-color: #121212;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 10px;
        }

        .student h4 {
            margin-top: 0;
            color: #007bff;
        }

        .student p {
            margin: 5px 0;
            font-size: 16px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Students Info:</h1>
        <?php
        if (empty($result)) {
            echo "<div>";
            echo "<p>There is no data</p>";
            echo "</div>";
        } else {
            foreach ($result as $row) {
                echo "<div class='student'>";
                echo "<p>ID: " . (isset($row['student_ID']) ? htmlspecialchars($row['student_ID']) : "N/A") . "</p>";
                echo "<p>Name: " . (isset($row['student_Name']) ? htmlspecialchars($row['student_Name']) : "N/A") . "</p>";
                echo "<p>Age: " . (isset($row['Age']) ? htmlspecialchars($row['Age']) : "N/A") . "</p>";
                echo "<p>CGPA: " . (isset($row['CGPA']) ? htmlspecialchars($row['CGPA']) : "N/A") . "</p>";
                echo "<p>Gender: " . (isset($row['Gender']) ? htmlspecialchars($row['Gender']) : "N/A") . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        }
        ?>
    </div>

    <div class="form-container">
        <button onclick="location.href='index.php'" class="option-btn">Return to Home Page</button>
    </div>

    <script src="js.js"></script>
</body>
</html>
    
    