
<html>
<head>
<style>
h1{
    color: #ff0000;
    margin-top:0px;
}
h3{
    color:  #230752;
    margin-top:0px;
}
body{
    margin-top: 100px;
    margin-left:0px;
    background:#63ff70;
    align:left:
}

</style>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == 'POST')
    $name = $_POST['name'];
$email = $_POST['email'];
$NIM = $_POST['NIM'];
echo "<h1>Halo" .$name. "</h1>" ."<br><h3>email Anda: " .$email."</h3> ". "<br><h3>NIM Anda: ".$NIM."</h3>";
?>
</table>
</body>

</html>