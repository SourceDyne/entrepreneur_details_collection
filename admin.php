<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body class="container-fluid">
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
        Entrepreneur Community
    </a>
</nav>
<h3 class="text-left">Welcome</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Fields</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    <tbody>


<?php
/**
 * Created by PhpStorm.
 * User: aravi
 * Date: 24-10-2018
 * Time: 07:05
 */
$mysqli=new mysqli("localhost","root","","Entrepreneur_Details");
if($mysqli->connect_errno){
    echo "MySql Error<br>";
    die("Couldn't Connect");
}else{
    $query="SELECT * FROM `submissions`";
    $res=$mysqli->query($query);
    $ptr=1;
    $arr=[
        "1"=>"Application Developer",
        "2"=>"Website Developer",
        "3"=>"Blogger or Vlogger",
        "4"=>"Translator",
        "5"=>"Financial Adviser",
        "6"=>"Online Photo Selling",
        "7"=>"Ecommerce Store",
        "8"=>"Event and Project Planning",
        "9"=>"Personal Concierge"
    ];
    foreach ($res as $re){

        $details=$re['details'];
        $details=explode("-",$details);
        ?>
        <tr>
            <th scope="row"><?php echo $re['id'];?></th>
            <td><?php echo $re['email'];?></td>
            <td><?php
                foreach ($details as $det){
                    echo "$arr[$det]<br>";
                }
                ?></td>
            <td><?php echo $re['date'];?></td>
        </tr>
        <?php
    }
}
?>
    </tbody>
</table>
</body>
</html>
