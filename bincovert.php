

<?php 
$x = 0;
$binNum = [];
$num2 = 0;
//Strip out unsafe characters
function test_input($data)
{
$data = trim($data);
$data =stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(!empty($_POST["num"]))
{
//Take input and convert it to binary
$x = test_input($_POST["num"]);
}
$num2 = $x;
 while( $x > 0)
{
if($x % 2 === 1)
{
array_push($binNum, "1");
}
else
{
    array_push($binNum, "0");
}
$x = floor($x / 2);
} 


}

?>

<html>
<head>
<title> Binary Converter</title>
<h2>Number to Binary Converter</h2>
<br>
Please enter a number
<p></p>
</head>
<body style ="padding:30px;">
    <form method="post" name="binary"   action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
            
          
                 <input type="numbers" name="num" value ="<?php echo $num2;?>">
            <input type ="submit" value = "Calculate Binary">
        </p>
    </form>  

<?php  echo $num2 . " converted to binary is " ;
foreach(array_reverse($binNum) as $value){
    echo  $value ;
}
?>
<p></p>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    








</body>
</html>