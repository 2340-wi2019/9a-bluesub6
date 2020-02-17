<!DOCTYPE html>
<meta charset = utf-8>
<html lang type ="en">
<head>
<!-- Jacobi Williams
     assignment09.htm
     INFO2340.WW
     Prof.Thoendel 
     02/16/20
-->
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $Label = "output";
    $BMI_Value = BMICalc();
    function BMICalc(){
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        return ($weight / ($height * $height)) * 703;
    }
    if ($BMI_Value < 18) { $Label = "Underweight";
} else if ($BMI_Value > 30){ $Label = "Obese";
} else { $Label = "Normal";
}
    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

?>

<h1>BMI Calculation</h1>
<p id="output">Your BMI is <?php echo "$BMI_Value"?> which is considered <?php echo "$Label"?> </p>
</body>