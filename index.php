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
            <input type="number" step="0.001" name='num1'/><br/>
            <select name="operator">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select><br/>
            <input type="number" step="0.001" name='num2'/><br/>
            <button type='submit' name="submit" value='submit'>=</button>
        </form>
        
        <footer class="result">
            <?php
                if (isset($_POST['submit'])) {
                    $num1 = sanitize_input($_POST['num1']);
                    $num2 = sanitize_input($_POST['num2']);
                    $operator = sanitize_input($_POST['operator']);
                    if ($num1 == null || $num2 == null) {
                        echo "No number provided";
                    } elseif ($operator == '+') {
                        echo $num1 + $num2;
                    } elseif ($operator == '-') {
                        echo $num1 - $num2;
                    } elseif ($operator == '*') {
                        echo $num1 * $num2;
                    } elseif ($operator == '/') {
                        if ($num2 == 0) {
                            echo "Cannot divide by zero";
                        } else {
                            echo $num1 / $num2;
                        }
                    }
                }

                function sanitize_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
        </footer>
    </body>
</html>
