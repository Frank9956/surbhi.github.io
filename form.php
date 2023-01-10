<?php
    error_reporting(0);
    $name=$_POST['name'];
    $number=$_POST['number'];
    $place=$_POST['place'];

    
    
    $conn = new mysqli('localhost', 'root', '', 'tilak');

    
   
    if ($conn->connect_error)
    {
       die ("connection 404:" .$conn->connect_error);
    }
    else
    {
        $sql= $conn->prepare(" insert into tilak1(name, number, place) values(?, ?, ?)") ;
        $sql->bind_param("sss", $name,$number, $place);
        $sql->execute();
        echo "sucesss";
        echo "<script>window.open('form.html', '_self')</script>";
        echo "<script>alert('new record')</script>";
        // $sql->close();
        // $conn->close();
   
    }
    

?>