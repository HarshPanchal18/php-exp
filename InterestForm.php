<html>
    <body>
        <form method="post">
        Enter Amount:<input type="number" name="amount" step="any" required/>
        <br><br>
        Enter Rate:<input type="number" name="rate" step="any"required/>
        <br><br>
        Enter Term:<input type="number" name="term"step="any"required/>
        <br><br>
        <input type="submit" name="Simple" value="SimpleInterest">
        <input type="submit" name="Compound" value="CompoundInterest">
        </form>
    </body>
</html>

<?php

if(isset($_POST['Simple']))
{
    $si=($_POST['amount']*$_POST['rate']*$_POST['term'])/100;
    echo "Simple Interest: $si";
}

function compound($amount,$interest_rate,$year){
    $completed_interest = ($interest_rate/100)+ 1;
    $exponent = pow($completed_interest,$year);
    $final = $amount * $exponent;
    return number_format((float)$final, 3); // 3 -> precision
}

if(isset($_POST['Compound']))
{
    $ci= compound($_POST['amount'], $_POST['rate'], $_POST['term']);
    echo "Compound Interest: $ci";
}

?>
