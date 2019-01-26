<!-- Hot to start Xampp: sudo /opt/lampp/manager-linux-x64.run -->
<!-- the link: http://localhost/INFM114/index.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Weather Report Using API</title></head>
    <body>
    <center></center>
    <center><br><br>
        <form method="GET" action="get.php">
        <h1>Type a City</h1>
        <br><p>For Example -  'Sofia'</p>
            <input type="text" name="q" required>
            <input type="submit" name="submit">
        </form>
    </center>
    </body>
</html>
