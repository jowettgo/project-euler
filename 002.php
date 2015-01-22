function FibonacciSequence($limit) {
  $x = 1;
  $y = 0;
  $counter = 1;
  echo $y . "\n" . $x . "\n";
  
  do {
    $sum = $y + $x;
    echo $sum . "\n";
    
    if ($sum % 2 == 0) {
      $even = $even + $sum;
    }
    
    $counter++;
    $y = $x;
    $x = $sum;

  }
  
  while ($x <= $limit);
  echo "\nThe sum of all even in this Fibonacci Sequence is: " . $even . '.';
}

FibonacciSequence(4000000);
