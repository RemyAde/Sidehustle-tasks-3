<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple Calculator</title>
    </head>
    <body>
    <h1>Simple Calculator in PHP</h1>
    <hr>
    <b>Input two numbers to be calculated:</b>
    

         <form method="post">
            <br><input type="number" name="numb1" required = "required" placeholder= "first number here"> 
            <input type="number" name="numb2" required = "required" placeholder = "second number here">
            <select name="operator" id="">
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
               <option>Square</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button> 
         </form>

    <br> <b>Output:</b>

        <?php 

            if (isset($_POST['submit'])) {
                $result1 = $_POST['numb1'];
                $result2 = $_POST['numb2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                    default:
                        echo "Please input a number";
                }
            }


         ?>
        

    </body>
    </html>