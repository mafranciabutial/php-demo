<!DOCTYPE html>
<html>
<head>
    <title>Lab 3 - ATM Machine Simulation</title>
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
        max-width: 520px;
        margin: 60px auto;
        background: black;
        border: 1px solid #333;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.5);
    }

    h1 {
        text-align: center;
        font-size: 2rem;
        color: white;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    .form-group {
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    label {
        color: #aaa;
        font-size: 0.9rem;
    }

    input, select {
        background: #2a2a2a;
        border: 1px solid #444;
        border-radius: 6px;
        padding: 10px;
        color: #f0e6d3;
        font-size: 0.95rem;
        outline: none;
        transition: border-color 0.2s;
    }

    input:focus, select:focus {
        border-color: white;
    }

    input[type="submit"] {
        margin-top: 10px;
        background: gray;
        color: white
        border: none;
        padding: 10px;
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
        color: lightpink;
        margin-bottom: 10px;
    }

    .result p {
        color: #ccc;
        margin-bottom: 6px;
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
    <h1>ATM Machine Simulation</h1>

    <form method="post">
        <div class="form-group">
            <label>Account Name</label>
            <input type="text" name="account_name" required>
        </div>

        <div class="form-group">
            <label>Initial Balance</label>
            <input type="number" name="initial_balance" required>
        </div>

        <div class="form-group">
            <label>Action</label>
            <select name="action">
                <option value="check">Check Balance</option>
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
        </div>

        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount">
        </div>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        class ATM {
            private $accountName;
            private $balance;

            public function __construct($accountName, $balance) {
                $this->accountName = $accountName;
                $this->balance = $balance;
            }

            public function getAccountName() {
                return $this->accountName;
            }

            public function getBalance() {
                return $this->balance;
            }

            public function deposit($amount) {
                $this->balance += $amount;
                return "Deposited: $amount";
            }

            public function withdraw($amount) {
                if ($amount > $this->balance) {
                    return "Insufficient balance!";
                } else {
                    $this->balance -= $amount;
                    return "Withdrawn: $amount";
                }
            }
        }

        if (isset($_POST['submit'])) {

            $name = $_POST['account_name'];
            $balance = $_POST['initial_balance'];
            $action = $_POST['action'];
            $amount = $_POST['amount'];

            $atm = new ATM($name, $balance);

            echo "<div class='result'>";
            echo "<h3>Account: " . $atm->getAccountName() . "</h3>";

            if ($action == "check") {
                echo "<p>Current Balance: " . $atm->getBalance() . "</p>";
            } 
            elseif ($action == "deposit") {
                echo "<p>" . $atm->deposit($amount) . "</p>";
                echo "<p>New Balance: " . $atm->getBalance() . "</p>";
            } 
            elseif ($action == "withdraw") {
                echo "<p>" . $atm->withdraw($amount) . "</p>";
                echo "<p>New Balance: " . $atm->getBalance() . "</p>";
            }

            echo "</div>";
        }
    ?>
</div>

</body>
</html>