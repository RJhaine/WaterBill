<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaterBill</title>
</head>
<body><center>
    <form action="" method="post" style="background:white;padding-top:1%;padding-bottom:3%;width:30%;border: 2px;box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 black ;">
        <center>
            <h3>WATER BILLING</h3><hr><hr>
            <table border =0>
                <tr>
                    <td><b>UNITS: <b></td>
                    <td style="border-radius: 5px;outline: none;box-shadow: 0 0 5px purple;border: 1px solid purple;">
                        <input type=text name="unit" placeholder = "Input here">
                    </td>
                </tr>
            </table>

            <br>
            <input type=submit name="compute" value="COMPUTE" style="">
        </center>
            <?php
            $price = array(10,25,30,50);
            if(isset($_POST["compute"])){
                    $unit=$_POST["unit"];
    
                    if ($unit>="0" && $unit<="50"){
                        $waterbill = $price[0];
                    }
                    if ($unit>="51" && $unit<="150"){
                        $waterbill = $price[0]+$price[1]*($unit-"50");
                    }
                    if ($unit>="150" && $unit<="250"){
                        $waterbill = $price[0]+("100"*$price[1])+$price[2]*($unit-"150");
                    }
                    if ($unit>"250"){
                        $waterbill = $price[0]+("100"*$price[1])+("100"*$price[2])+$price[3]*($unit-"250");
                    }
                    echo "<br><center>".(date("Y-m-d")). "</center>"; 
                    echo "<center>". $unit. " unit/s</center>";
                    echo "<center><hr><hr>PRICE:<br> Php "
                    . $price[0]. ".00 for the first 50 units. <br>". "Php "
                    . $price[1]. ".00 per unit for the next 100 units. <br>"."Php "
                    . $price[2]. ".00 per unit for the next 100 units. <br>"."Php "
                    . $price[3]. ".00 per unit for the next 100 units. <center>"."<hr><hr>";
                    echo "<center>Bill of Water: Php ". $waterbill . "<br>"; 
                }
        ?>
    </form>
</body>
</html>