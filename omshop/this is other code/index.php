<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Activity #1 </title>
</head>
<body>

    <a href="index.php"> Add Data </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a> <br>

    <h1> Form </h1>

    <form action="process.php" method="POST">
        <label for="fn">Full Name: </label> <br>
        <input type="text" name="fn" placeholder="Full Name" required>

        <br><br>

        <label for="email">Email Address: </label> <br>
        <input type="email" name="email" placeholder="Email Address" required>

        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>