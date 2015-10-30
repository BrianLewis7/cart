<?php
$currency = '$'; //Currency Character or code
$shipping_cost      = 1.50; //shipping cost
$taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );                      


//connect to MySql                      
$mysqli = new mysqli('host', 'username', 'password','main database');                        
if (mysqli_connect_errno()) 
{
	echo "Failed to connect to MySql:".mysqli_connect_error();    
}


?>