<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lab Assignments</title>
    <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
        background: lightpink;
        color: #f0e6d3;
        font-family: 'Georgia', serif;
        min-height: 100vh;
    }

    .navbar {
        background: lightpink;
        padding: 15px;
        border-bottom: 1px solid #333;
        text-align: left;
    }

    .navbar a {
        color: black;
        text-decoration: none;
        margin: 0 15px;
        font-size: 1rem;
        transition: color 0.2s;
    }

    .navbar a:hover {
        color: #fff;
    }

    .card-group {
        max-width: 800px;
        margin: 60px auto;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .btn-link {
        width: 100%;
        text-decoration: none;
    }

    .btn-link button {
        width: 100%;
        background: #2a2a2a;
        color: #f0e6d3;
        border: 1px solid #444;
        padding: 20px;
        border-radius: 10px;
        font-size: 1.2rem;
        font-family: 'Georgia', serif;
        font-weight: bold;
        cursor: pointer;
        text-align: left;
        transition: all 0.2s ease;
    }

    .btn-link button:hover {
        background: #fff;
        color: #111;
        transform: translateY(-2px);
    }
</style>
</head>
<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="lab1.php">Fruits</a>
        <a href="lab2.php">Converter</a>
        <a href="lab3.php">ATM</a>
    </div>

    <div class="card-group">
        <a href="lab1.php" class="btn-link"><button>Favorite Fruits</button></a>
        <a href="lab2.php" class="btn-link"><button>Temperature Converter</button></a>
        <a href="lab3.php" class="btn-link"><button>ATM Simulation</button></a>
    </div>

</body>
</html>