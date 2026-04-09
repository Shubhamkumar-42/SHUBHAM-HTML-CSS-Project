<!DOCTYPE html>
<html>
<head>
    <title>Modern Calculator</title>

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial;
        }

        .calculator {
            background: #222;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            width: 260px;
        }

        .display {
            width: 100%;
            height: 50px;
            font-size: 22px;
            margin-bottom: 15px;
            text-align: right;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #000;
            color: #0f0;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        button {
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #444;
            color: white;
            transition: 0.2s;
        }

        button:hover {
            background: #666;
        }

        .operator {
            background: orange;
        }

        .equal {
            background: green;
            grid-column: span 2;
        }

        .clear {
            background: red;
        }
    </style>
</head>
<body>

<div class="calculator">

    <form method="POST" id="calcForm">
        <input type="text" id="display" name="expression" class="display" readonly>

        <div class="buttons">
            <button type="button" onclick="press('7')">7</button>
            <button type="button" onclick="press('8')">8</button>
            <button type="button" onclick="press('9')">9</button>
            <button type="button" class="operator" onclick="press('/')">/</button>

            <button type="button" onclick="press('4')">4</button>
            <button type="button" onclick="press('5')">5</button>
            <button type="button" onclick="press('6')">6</button>
            <button type="button" class="operator" onclick="press('*')">*</button>

            <button type="button" onclick="press('1')">1</button>
            <button type="button" onclick="press('2')">2</button>
            <button type="button" onclick="press('3')">3</button>
            <button type="button" class="operator" onclick="press('-')">-</button>

            <button type="button" onclick="press('0')">0</button>
            <button type="button" onclick="press('.')">.</button>
            <button type="button" class="clear" onclick="clearDisplay()">C</button>
            <button type="button" class="operator" onclick="press('+')">+</button>

            <button type="button" class="equal" onclick="calculate()">=</button>
        </div>
    </form>

    <?php
    if(isset($_POST['expression'])) {
        $expr = $_POST['expression'];

        // Basic safety check
        if(preg_match('/^[0-9+\-*/. ]+$/', $expr)) {
            try {
                eval("\$result = $expr;");
                echo "<p style='color:white; text-align:center;'>Result: $result</p>";
            } catch(Exception $e) {
                echo "<p style='color:red;'>Error</p>";
            }
        }
    }
    ?>

</div>

<script>
    let display = document.getElementById("display");

    function press(val) {
        display.value += val;
    }

    function clearDisplay() {
        display.value = "";
    }

    function calculate() {
        try {
            display.value = eval(display.value);
        } catch {
            display.value = "Error";
        }
    }
</script>

</body>
</html>