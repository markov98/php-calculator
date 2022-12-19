<HTML>
    <head>
        <title>Calculator</title>
    </head>
    <meta charset="utf8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>

        <div class="image">
        <img src="pictures/numbers.png" width="120px"
        height="120px">
        </div>


        <div class= "Header">Calculator</div>
         <form action="index.php" method="POST">
             <input type="number" name='num1'/><br/>
             <select name="operator">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
             </select><br/>
             <input type="number" name='num2'/><br/>
            <button type='submit' name="submit" value='submit'>=</button>
         </form>
        
        <div name="result">
         <?php
        if (isset($_POST['submit'])) {
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $operator=$_POST['operator'];

            if ($num1 == null || $num2 == null) {
                 echo "No number provided";
            } elseif ($operator == '+') {
                echo $num1 + $num2;
            } elseif ($operator == '-') {
                echo $num1 - $num2;
            } elseif ($operator == '*') {
                echo $num1 * $num2;
            } elseif ($operator == '/') {
                echo $num1 / $num2;
            }
        }
         ?>
        </div>

    </body>
</HTML>