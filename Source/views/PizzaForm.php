<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza Corp</title>
    </head>
    <body>
        <form action="PizzaController.php" method ="post">
            <h2>Size</h2>
            <input type="hidden" name="action" value="small_medium_large"/>
            <input type='radio' name="small_medium_large" value="small" checked>Small</br>
            <input type='radio' name="small_medium_large" value="medium">Medium</br>
            <input type='radio' name="small_medium_large" value="large">Large</br>
            
            </br>
            
            <h2>Toppings</h2>
            <input type="checkbox" name="topping[]" value="pepperoni">Pepperoni</br>
            <input type="checkbox" name="topping[]" value="bacon">Bacon</br>            
            <input type="checkbox" name="topping[]" value="sausage">Sausage</br>
            
            <label>&nbsp;</label>
            
            <input type="submit" value="Submit Order"/>    
            
        </form> 
        
        <h2>Details:</h2>
        <?php
            
            foreach($details['toppings'] as $topping){
                echo "</br> $topping[0]";
                echo " $$topping[1]";
            }
            echo "</br>";
            echo "Total:" . $details['total'];
        ?>
          
    </body>
</html>
