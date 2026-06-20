<?php

$start = microtime(true);

$counterFile = "counter.txt";

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

$count = (int)file_get_contents($counterFile);
$count++;
file_put_contents($counterFile, $count);

$users = [
    "Vishesh",
    "Admin",
    "DevOps",
    "Engineer",
    "Guest"
];

$user = $users[array_rand($users)];

$statuses = [
    "Healthy",
    "Running",
    "Active",
    "Available"
];

$status = $statuses[array_rand($statuses)];

usleep(rand(100000, 500000));

$responseTime = round((microtime(true) - $start) * 1000, 2);

$logLine = date("Y-m-d H:i:s") .
    " | IP: " . $_SERVER['REMOTE_ADDR'] .
    " | User: $user" .
    " | Response: {$responseTime}ms\n";

file_put_contents(
    "access.log",
    $logLine,
    FILE_APPEND
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>DevOps Monitoring Project</title>

    <style>
        body{
            font-family: Arial;
            margin:40px;
        }

        .box{
            border:1px solid #ccc;
            padding:20px;
            width:500px;
            border-radius:10px;
        }
    </style>
</head>

<body>

<div class="box">

<h1>DevOps Monitoring Demo</h1>

<p><b>Application Status:</b> <?php echo $status; ?></p>

<p><b>Current User:</b> <?php echo $user; ?></p>

<p><b>Total Requests:</b> <?php echo $count; ?></p>

<p><b>Response Time:</b> <?php echo $responseTime; ?> ms</p>

<p><b>Server Time:</b> <?php echo date("Y-m-d H:i:s"); ?></p>

</div>

</body>
</html>                         
