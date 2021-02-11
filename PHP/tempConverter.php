<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Temp. converter</title>
</head>
<body>
    <?php
        //Fahrenheit to celsius
        function fahrenheit_to_celsius($given_value)
        {
	        $celsius=5/9*($given_value-32);
	        return $celsius ;
        }
        function celsius_to_fahrenheit($given_value)
        {
	        $fahrenheit=$given_value*9/5+32;
	        return $fahrenheit ;
        }
    ?>

<form action="" method="post">
	<table>
		<tr>
			<td>
				<select name="first_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="given_value">
			</td>
		</tr>
		<tr>
			<td>
				<select name="second_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btn" value="Convert">
			</td>
		</tr>
		<tr>
		    <td>
                <?php
                if(isset($_POST['btn']))
                {
                    $first_temp_type_name=$_POST['first_temp_type_name'];
                    $second_temp_type_name=$_POST['second_temp_type_name'];
                    $given_value=$_POST['given_value'];
                    
                    //Fahrenheit to celsius
                    if ($first_temp_type_name=='fahrenheit') 
                    {
                        if ($second_temp_type_name=='celsius') 
                        {
                            $celsius=fahrenheit_to_celsius($given_value);
                            echo "$given_value Fahrenheit = $celsius Celsius";
                        } else 
                        {
                            echo "$given_value Fahrenheit";
                        }
                    }
                    //Celsius to fahrenheit
                    if ($first_temp_type_name=='celsius') 
                    {
                        if ($second_temp_type_name=='fahrenheit') 
                        {
                            $fahrenheit=celsius_to_fahrenheit($given_value);
                            echo "$given_value Celsius  = $fahrenheit Fahrenheit";
                        } else 
                        {
                            echo "$given_value Celsius";
                        }
                    }
                }
                ?>
            </td>
		</tr>
	</table>
	</form>
</body>
</html>