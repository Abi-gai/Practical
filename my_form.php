<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <form action="my_form.php" method="POST">
       Name: <input type="text" name="search"><br>
       box: <input type="text" name="box"><br>
       <input type="submit" name="submit">
       <form>

       <?php if(isset($_GET['search']) && isset($_GET['box'])): ?>
           <br/>
       $name = $_GET['search'];
       echo $name;

       <?php endif; ?>


</body>
</html>