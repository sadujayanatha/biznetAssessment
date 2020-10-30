<body>
  <h3>Primes Numbers</h3>
  <form method="POST" action="prime.php">
    <input type="text" name="number" value="<?php if (isset($x)) echo($x) ?>">
    <button type="submit">SUBMIT</button>
  </form>
<?php
  function GetPrimes($number) {
    $x = 0;
    for($i = 2; $i < ($number/2+1); $i++)
    {
      if($number % $i == 0){
        $x++;
        break;
      }
    }
    if ($x == 0){
      echo $number." ";
    } 
  }
  if(empty($_POST["number"])){
    $n = 0;
  }else{
    $n = $_POST["number"];
  }
  echo "Prime numbers less than ".$n." are: \n";
  for($i = 2; $i < $n; $i++)
  {
    GetPrimes($i);
  }
?>
</body>