<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
if($_POST["uname"]=="admin" and $_POST["psw"]==1234){
    



   echo "<img src=\"adminimg.png\" alt=\"image\" width=100% align=center >";

    
    
} else {

echo "<img src=\"oops.png\" alt=\"image\" width=100% align-text=center >";
}
?>


    
</body>
</html>
