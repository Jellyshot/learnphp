<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script defer src="/test.js"></script>
    <h2>JavaScript HTML DOM</h2>
    <p>Finding HTML Elements Using <b>document.forms</b>.</p>

    <form id="frm1" action="/action_page.php">
    First name: <input type="text" name="fname" value="Donald"><br>
    Last name: <input type="text" name="lname" value="Duck"><br><br>
    <input type="submit" value="Submit">
    </form> 

    <p>These are the values of each element in the form:</p>

    <p id="demo"></p>
   
</body>
</html>