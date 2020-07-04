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
<title>Control Panel</title>
</head>
<body style="background-color:red;" >
<?php

$query = "SELECT * FROM action ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($connect,$query);
 if(!$result)
    {
        die (" error on qurey");
    }



while ($row=$result->fetch_assoc()) {



echo "$row[forwards]" ;
echo "$row[stop]" ;
echo $row['leftt'] ;
echo $row['rightt'] ;
echo $row['backwards'] ; }

?>


<?php
mysqli_free_result($result);

?>
</body>

</html>

<?php

mysqli_close($connect);
?>
