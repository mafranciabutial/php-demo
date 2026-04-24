<?php
$fruits = [];
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fruits = [
        $_POST['fruit1'] ?? '',
        $_POST['fruit2'] ?? '',
        $_POST['fruit3'] ?? '',
        $_POST['fruit4'] ?? '',
        $_POST['fruit5'] ?? '',
    ];
    $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Favorite Fruits</title>
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
        padding: 15px 0;
        border-bottom: 1px solid #333;
        text-align: left;
    }
    .navbar a {
        display: inline-block;
        color: #000000;
        text-decoration: none;
        margin: 0 20px;
        font-size: 1rem;
        letter-spacing: 0.5px;
        transition: color 0.2s;
    }
    .navbar a:hover {
        color: #fff;
    }
    .container {
        max-width: 560px;
        margin: 50px auto;
        background: black;
        border: 1px solid whitesmoke;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.5);
    }
    h1 {
        font-size: 2rem;
        color: white;
        margin-bottom: 28px;
        text-align: center;
        letter-spacing: 1px;
    }
    .form-group {
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        
    }
    label {
        width: 60px;
        color: blacks;
        font-size: 0.95rem;
    }
    input[type="text"] {
        flex: 1;
        background: black;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 8px 12px;
        color: #f0e6d3;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.2s;
    }

    input[type="text"]:focus {
        border-color: pink;
    }

    button {
        margin-top: 18px;
        background: gray;
        color: white;
        border: none;
        padding: 10px 28px;
        border-radius: 6px;
        font-size: 1rem;
        font-family: 'Georgia', serif;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
    }
    button:hover {
        background: lightpink;
    }
    .results {
        margin-top: 32px;
        border-top: 1px solid wh;
        padding-top: 24px;
    }
    .results h2 {
        color: white;
        font-size: 1.2rem;
        margin-bottom: 12px;
        text-align: left;
    }
    .results ul {
        list-style: disc;
        padding-left: 24px;
        margin-bottom: 16px;
    }
    .results ul li {
        padding: 4px 0;
        font-size: 1rem;
        letter-spacing: 0.5px;
    }
    .favorite {
        color: white;
        font-size: 0.95rem;
        text-align: left;
    }
    .favorite span {
        color: white;
        font-weight: bold;
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
  <h1>My Favorite Fruits</h1>

  <form method="POST" action="lab1.php">
    <?php for ($i = 1; $i <= 5; $i++): ?>
    <div class="form-group">
      <label>Fruit <?= $i ?>:</label>
      <input type="text" name="fruit<?= $i ?>"
             value="<?= htmlspecialchars($submitted ? $fruits[$i-1] : '') ?>"
             placeholder="Enter fruit <?= $i ?>">
    </div>
    <?php endfor; ?>

    <button type="submit">Save My Fruits</button>
  </form>

  <?php if ($submitted): ?>
  <div class="results">
    <h2>Your Favorite Fruits:</h2>
    <ul>
      <?php foreach ($fruits as $fruit): ?>
        <?php if (!empty($fruit)): ?>
          <li><?= strtoupper(htmlspecialchars($fruit)) ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <?php if (!empty($fruits[0])): ?>
    <p class="favorite">My favorite fruit is: <span><?= strtoupper(htmlspecialchars($fruits[0])) ?></span></p>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>

</body>
</html>
