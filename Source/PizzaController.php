<?php
    try{
        require_once 'models/PizzaModel.php';
        
        
        $size_selection = $_POST['small_medium_large'];
        $topping_selection = $_POST['topping'];
        
        $details = calculatePizzaCost($size_selection,$topping_selection);  
             
        include('views/PizzaForm.php');
        
    }catch(Exception $e){
    }

