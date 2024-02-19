<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Migration Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-top: 0;
        }
        .detail-item {
            margin-bottom: 10px;
        }
        .detail-item strong {
            font-weight: bold;
            color: #555;
        }
        .detail-item span {
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Session Migration Details</h1>
    <div class="detail-item">
        <strong>ID:</strong> <span>{{ $migrationData->id }}</span>
    </div>
    <div class="detail-item">
        <strong>User ID:</strong> <span>{{ $migrationData->user_id }}</span>
    </div>
    <div class="detail-item">
        <strong>IP Address:</strong> <span>{{ $migrationData->ip_address }}</span>
    </div>
    <div class="detail-item">
        <strong>User Agent:</strong> <span>{{ $migrationData->user_agent }}</span>
    </div>
    <div class="detail-item">
        <strong>Payload:</strong> <span>{{ $migrationData->payload }}</span>
    </div>
    <div class="detail-item">
        <strong>Last Activity:</strong> <span>{{ $migrationData->last_activity }}</span>
    </div>
</div>

</body>
</html>
