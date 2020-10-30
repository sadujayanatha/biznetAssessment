<body>
  <h3>Sum Combination</h3>
  <form method="POST" action="combination.php">
    <input type="text" name="number" value="<?php if (isset($x)) echo($x) ?>">
    <button type="submit">SUBMIT</button>
  </form>
<?php 
function findCombinationsUtil($arr, $index, 
                            $num, $reducedNum) 
{   
    if ($reducedNum < 0) 
        return; 
    if ($reducedNum == 0) 
    { 
        for ($i = 0; $i < $index; $i++) 
            echo $arr[$i] , " "; 
        echo "</br>"; 
        return; 
    } 
    $prev = ($index == 0) ? 1 : $arr[$index - 1]; 
    for ($k = $prev; $k <= $num ; $k++) 
    { 
        $arr[$index] = $k; 

        findCombinationsUtil($arr, $index + 1, 
                            $num, $reducedNum - $k); 
    } 
} 

function findCombinations($n) 
{ 
    $arr = array(); 

    findCombinationsUtil($arr, 0, $n, $n); 
} 
if(empty($_POST["number"])){
    $n = 0;
}else{
    $n = $_POST["number"];
}
echo "Sum Combination of ".$n."<br>";

findCombinations($n); 

?> 
