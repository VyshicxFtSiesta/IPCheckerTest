<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <a href="data.php">Data</a>
    <script type="text/javascript">
        $.getJSON('http://ip-api.com/json', function(ip){
            var data = {
                ip: ip.query, 
                isp: ip.isp,
                negara: ip.country,
                kota: ip.regionName
            };

            $.ajax({
                url: 'index.php',
                type: 'post',
                data: data
            })
        })
    </script>
</body>
</html>

<?php
require 'config.php';
if(isset($_POST["ip"])){
    $ip = $_POST["ip"];
    $isp = $_POST["isp"];
    $negara = $_POST["Negara"];
    $kota = $_POST["Kota"];

    $query = "INSERT INTO tb_data VALUES('', '$ip', '$isp', '$negara', '$kota')";
    mysqli_query($conn, $query);
}
?>