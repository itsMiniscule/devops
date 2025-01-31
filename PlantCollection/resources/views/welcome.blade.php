<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Plant Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f5e9; /* Soft green */
            font-family: 'Arial', sans-serif;
        }
        .welcome-container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-green {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn-green:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <div class="welcome-card">
        <h1>🌿 Welcome to My Plant Collection 🌱</h1>
        <p>Your personal space to track and cherish your beloved plants.</p>
        <a href="{{ route('plants.index') }}" class="btn btn-green">View My Plants</a>
    </div>
</div>

</body>
</html>
