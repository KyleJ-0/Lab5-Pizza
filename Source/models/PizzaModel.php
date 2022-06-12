<?php
    
    function calculatePizzaCost($size,$toppings){
        $details = [];
        $details["toppings"] = [];
        
        $total = 0;
        $topping_cost = 0;
        
        if($size == "small"){
            $total += 5;
            $topping_cost = 0.5;
            
        }else if($size == "medium"){
            $total += 7;
            $topping_cost = 1;
            
        }else if($size == "large"){
            $total += 9;
            $topping_cost = 1.5;
        }
        
        foreach($toppings as $topping){
            $total += $topping_cost;
            array_push($details["toppings"],[$topping,$topping_cost]);
        }
        
        $details['total'] = $total;
        
        return $details;
    }
    