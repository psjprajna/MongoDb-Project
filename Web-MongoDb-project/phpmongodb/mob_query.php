<?php
	
	require 'vendor/autoload.php';
	/*To insert a document in a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$mobcollection = $msdb->mob;
	$list = $mobcollection->find();

    echo "<html> <style>body
    {
        background-image: url('img2.jpg');
        background-position: center;
        background-repeat: no-repeat;
    }
      h2
    {
        color:yellow;
    }
    </style><hr><h2 align='center'>Existing Mobile Records</h2><hr> </html>";
	$mob_details  = "<table style='border:1px solid red; margin-left:400px; margin-top:80px;  align='center'";
    $mob_details .= "border-collapse:collapse' border='1px'>";
    $mob_details .= "<thead>";
    $mob_details .= "<tr>";
    $mob_details .= "<th bgcolor='orange'>MODEL NO</th>";
    $mob_details .= "<th bgcolor='orange'>COMPANY</th>";
    $mob_details .= "<th bgcolor='orange'>MODEL NAME</th>";
    $mob_details .= "<th bgcolor='orange'>PRICE</th>";
    $mob_details .= "<th bgcolor='orange'>STOCK</th>";
    $mob_details .= "</tr>";
    $mob_details .= "</thead>";
    $mob_details .= "<tbody>";
    
	foreach ($list as $item) 
	{
		$mob_details .= "<tr>";
        $mob_details .= "<td bgcolor='orange'>" . $item['_id'] . "</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['company']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['model_name']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['price']."</td>";
        $mob_details .= "<td bgcolor='orange'>" . $item['stock']."</td>";
        $mob_details .= "</tr>";
	}

	$mob_details .= "</tbody>";
    $mob_details .= "</table>";
    echo $mob_details;
    
?>

<!DOCTYPE html>
<html>
<body>

    <style type="text/css">
        .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
        }
    </style>

    <br><br><br><br><br>
    <center>
        <form action="index.php">
            <button type="submit" class="button" value="submit">Back!</button>
        </form>
    </center>
</body>
</html>