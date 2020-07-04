<?php


// Create connection
$host='localhost';
$user ='root';
$database ='mapDB';

$password ='root';

$connect= mysqli_connect($host,$user,$password,$database);

if(!$connect){

die("can not connection". mysqli_connect_error());}
else{
echo'<i style="color:white ;font-size:18px;">
      database is conected </i> ';}


  



?>

<!DOCTYPE html>
<html>
<head>
  <title> Control Panel</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="task2.css">


</head>

<body class="body">

  <header class="header1">
    <h1> Control Panel</h1>
  </header>

  <form action="task2.php" method="post">

  <div  id="task" class="sidenav">


<button class="button"name="stop">STOP</button>
  <button id="a1" name="for">Forwards</button>
  <button id="a3"  name="left">Left</button>
  <button id="a2" name="right">Right</button>
  <button id="a4" name="back">Backwards</button>

</form>
</div

<?php

    if(isset($_POST['stop'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', '', 'S')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");  }

       else{

        die ("Records added successfully.");}}



    if(isset($_POST['for'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, 'F', '', '', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");}

    else{

        die ("Records added successfully.");}}



    if(isset($_POST['left'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', 'L', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");}

    else{

        die ("Records added successfully.");}}

    if(isset($_POST['right'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', '', '', 'R', '')";
       $result = mysqli_query($connect,$query);


       if(!$result)  {
        die (" error on qurey");}

    else{

        die ("Records added successfully.");  }  }


    if(isset($_POST['back'])) {

       $query = "INSERT INTO action (id, forwards, backwards, leftt, rightt, stop) VALUES (NULL, '', 'B', '', '', '')";
       $result = mysqli_query($connect,$query);


       if(!$result){
        die (" error on qurey");  }

    else{

     die ("Records added successfully.");}}



?>

</body>
</html>

<?php

mysqli_close($connect);
?>
