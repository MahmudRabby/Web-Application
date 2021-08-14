<?php
$check = false;
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'tourism');

    $name = $_POST['name'];         
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];       
    if($password ==$re_password){ $sql = "INSERT INTO registration(name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($con,$sql);
    $check = true;            
        
}
?>
<script>
    var v = <?php echo json_encode($check); ?>;
if(v == true){
    alert("Thank you for contacting with us");
        window.location = '../home.php';        
}
else{
    alert("Password are not matching");
    window.location = '../home.php';
}
</script>