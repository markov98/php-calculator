<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="pictures/numbers.png">
</head>

<body>

    <div class="image">
        <img src="pictures/numbers.png">
    </div>

    <header>
        Calculator
    </header>

    <form action="index.php" method="POST">
        <input type="text" name='num1' /><br />
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select><br />
        <input type="text" name='num2' /><br />
        <button type='submit' name="submit" value='submit'>=</button>
    </form>

    <footer class="result">
        <?php
        if (isset($_POST['submit'])) {
            $num1 = sanitize_input($_POST['num1']);
            $num2 = sanitize_input($_POST['num2']);
            $operator = sanitize_input($_POST['operator']);

            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operator) {
                    case "+":
                        echo $num1 + $num2;
                        break;
                    case "-":
                        echo $num1 - $num2;
                        break;
                    case "*":
                        echo $num1 * $num2;
                        break;
                    case "/":
                        if ($num2 != 0) {
                            echo $num1 / $num2;
                        } else {
                            echo "Cannot divide by zero!";
                        }
                        break;
                }
            } else {
                echo "Invalid input";
            }
        }

        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    </footer>
</body>

</html>