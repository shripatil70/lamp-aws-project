<?php
date_default_timezone_set("Asia/Kolkata");

$server_ip = $_SERVER['SERVER_ADDR'];
$client_ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <title>LAMP AWS Project</title>
    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: white;
            text-align: center;
            padding-top: 50px;
        }
        .box {
            background: #1e293b;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: auto;
            box-shadow: 0 0 10px #000;
        }
        h1 { color: #38bdf8; }
    </style>
</head>
<body>

<div class="box">
    <h1>🚀 LAMP Application on AWS</h1>
    <p><b>Status:</b> Running Successfully</p>
    <p><b>Server IP:</b> <?php echo $server_ip; ?></p>
    <p><b>Your IP:</b> <?php echo $client_ip; ?></p>
    <p><b>Current Time:</b> <?php echo $date; ?></p>
</div>

</body>
</html>
