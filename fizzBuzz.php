<?php



/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    // Write your code here
    for ($i=1; $i<=$n; $i++){
        if ($i%3 == 0 && $i%5 == 0){ 
            echo "FizzBuzz\n"; continue;
        }
        if ($i%3 == 0){
            echo "Fizz\n"; continue;
        }
        if ($i%5 == 0){
            echo "Buzz\n"; continue;
        }
        echo $i."\n";
    }
}
