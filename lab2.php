<!DOCTYPE html>
<html>
<head>
    <title>Lab 2 - Temperature Converter</title>
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

    .container {
        max-width: 500px;
        margin: 60px auto;
        background: black;
        border: 1px solid #333;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        text-align: center;
    }

    h1 {
        font-size: 2rem;
        color: white;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    input[type="text"] {
        width: 100%;
        background: black;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 10px;
        color: white;
        font-size: 1rem;
        margin-bottom: 15px;
        outline: none;
        transition: border-color 0.2s;
    }

    input[type="text"]:focus {
        border-color: white;
    }

    input[type="submit"] {
        background: gray;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 6px;
        font-size: 1rem;
        font-family: 'Georgia', serif;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
    }

    input[type="submit"]:hover {
        background: lightpink;
    }

    .result {
        margin-top: 25px;
        border-top: 1px solid #333;
        padding-top: 20px;
    }

    .result h3 {
        color: #aaa;
        margin-bottom: 10px;
    }

    .result p {
        font-size: 1.1rem;
        color: white;
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

    <div class="container">
    <h1>Temperature Converter</h1>

    <form method="post">
        <input type="text" name="celsius" placeholder="Enter Celsius">
        <input type="submit" name="convert" value="Convert">
    </form>

    <?php
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        if (isset($_POST['convert'])) {
            $celsius = $_POST['celsius'];
            $result = celsiusToFahrenheit($celsius);

            echo "<div class='result'>";
            echo "<h3>Result:</h3>";
            echo "<p>$celsius °C = $result °F</p>";
            echo "</div>";
        }
    ?>
</div>

</body>
</html>