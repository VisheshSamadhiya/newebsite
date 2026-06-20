<?php

$startTime = microtime(true);

$counterFile = "counter.txt";

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

$visits = (int)file_get_contents($counterFile);
$visits++;

file_put_contents($counterFile, $visits);

$responseTime = round((microtime(true) - $startTime) * 1000, 2);

$serverName = gethostname();
$serverIP = $_SERVER['SERVER_ADDR'] ?? "Unknown";

$logEntry =
    date("Y-m-d H:i:s") .
    " | IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') .
    " | Request Count: " . $visits .
    " | Response Time: " . $responseTime . " ms\n";

file_put_contents(
    "logs/access.log",
    $logEntry,
    FILE_APPEND
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DevOps Monitoring Project</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .card {
            margin: 10px 0;
            padding: 15px;
            border-left: 5px solid #007bff;
            background: #f9f9f9;
        }

        .status {
            color: green;
            font-weight: bold;
        }

        footer {
            margin-top: 30px;
            text-align: center;
            color: gray;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>🚀 PHP DevOps Monitoring Project</h1>

    <div class="card">
        <strong>Application Status:</strong>
        <span class="status">Running</span>
    </div>

    <div class="card">
        <strong>Total Visits:</strong>
        <?php echo $visits; ?>
    </div>

    <div class="card">
        <strong>Response Time:</strong>
        <?php echo $responseTime; ?> ms
    </div>

    <div class="card">
        <strong>Server Hostname:</strong>
        <?php echo $serverName; ?>
    </div>

    <div class="card">
        <strong>Server IP:</strong>
        <?php echo $serverIP; ?>
    </div>

    <div class="card">
        <strong>Current Time:</strong>
        <?php echo date("Y-m-d H:i:s"); ?>
    </div>

    <div class="card">
        <strong>Monitoring Stack:</strong>
        GitHub → Jenkins → Docker → Nginx → Prometheus → Grafana
    </div>

    <footer>
        Developed by Vishesh Samadhiya | DevOps Monitoring Demo
    </footer>

</div>

</body>
</html>
