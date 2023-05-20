<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   input{
            color:blue;
        }
        </style>
</head>
<body>
    <form method="post" action="connection1.php">
    FIRSTNAME :
    <input type="text" name="firstname"><br><br>
    LASTNAME :
    <input type="text" name="lastname"><br><br>
    GENDER :
    <input type="checkbox" name="male">male
    <input type="checkbox" name="female">female
    <input type="checkbox" name="others">others<br><br>
    COUNTRY :
    <select value="country" id="country">
        <option value="india">India</option><br>
        <option value="parise">Parise</option><br>
        <option value="ingland">Ingland</option><br>
        <option value="goa">Goa</option><br>
        <option value="kerala">Kerala</option><br>
        <option value="america">America</option><br><br><br>

        DATE :
        <input type="date" id="date">
        FROm :
    <input type="date" name="from">

  <input type="submit" value="submit">
</body>
</html>