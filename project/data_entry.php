<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Student Data</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <h1>Enter Student Data</h1>
        <form action="includes/formhandler.inc.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="id">ID:</label>
            <input type="number" id="id" name="id" required><br>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>
            <label for="cgpa">CGPA:</label>
            <input type="number" id="cgpa" name="cgpa" step="0.01" required><br>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
