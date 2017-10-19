
<?php

//something is wrong in this code...needs some debugging>Natesh

    $username = 'root';
    $password = '';
    $db = 'Reverse_Coding';
    $conn = mysqli_connect('localhost',$username,$password,$db) or die('unable to connect');
    if($conn)
        echo 'successful connect';
    $lname=$_POST['lname'];
    $lusn=$_POST['lusn'];
    $lcontact=$_POST['lcontact'];
    $lemail=$_POST['lemail'];
    $mname=$_POST['mname'];
    $musn=$_POST['musn'];
    $mcontact=$_POST['mcontact'];
    $memail=$_POST['memail'];
    $sql = "insert into 'register' (lusn,lname,lcontact,lemail,musn,mname,mcontact,meamil) values ('$lname','$lusn','$lcontact','$lemail','$mname','$musn','$mcontact','$memail')";
    $query=mysqli_query($conn,$sql);
    if($query)
        echo 'data inserted';
    mysqli_close($conn);
?>

<form action="register.php" method="POST">
    USN:<br><input type="text" name="lusn"><br>
    Name:<br><input type="text" name="lname"><br>
    Contact:<br><input type="text" name="lcontact"><br>
    EMAIL:<br><input type="text" name="lemail"><br>
    USN:<br><input type="text" name="musn"><br>
    Name:<br><input type="text" name="mname"><br>
    Contact:<br><input type="text" name="mcontact"><br>
    EMAIL:<br><input type="text" name="memail"><br>
    <input type="submit" name="submit" value="submit">
</form>