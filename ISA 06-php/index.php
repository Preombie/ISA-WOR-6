<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISA 06 WOR</title>
</head>
<body>
    <?php
    //Preukti Parajuli
          function firstQuestion() {
            for($x = 5;$x <= 15;$x++){
                echo "$x <br>";
            }
          }
          firstQuestion();
          function secondQuestion(){
            $name = "Hello World";
            echo "$name <br>";
          }
          secondQuestion();

          function thirdQuestion(){
            $mark = 75 ;
            if($mark >= 70){
                echo "A";
            }else if($mark >=60){
                echo "B";
            }else if($mark >=50){
                echo "C";
            }else if($mark >=40){
                echo "D";
            }else{
                echo "E";
            }
            echo "<br>";
          }
          thirdQuestion();
          
          function fourthQuestion($number){
            $answer = 1;
            for($i = 1;$i<=$number;$i++){
                $answer = $answer * $i;
            }
            echo "The factorial of $number is $answer <br>";
          }
          fourthQuestion(5);

          function fifthQuestion(){
            for($i = 0; $i<8;$i++){
                for($j = 0;$j <=$i;$j++){
                    echo "*";
                }
                echo "<br>";
            }
          }
          fifthQuestion();

          function sixthQuestion(){
            $list = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
            asort($list);
            print_r( $list);
            echo "<br>";
          }
          sixthQuestion();

          function seventhQuestion($name){
            if( strrev($name) == $name){
                echo "Is Palindrome<br>";
            }else{
                echo "Is not  Palindrome<br>";
            }
          }
          seventhQuestion("madam");

          function eigthQuestion(){
            $a = 1;
            $b = 2;
            echo "Without changing -- $a & $b <br>";
            $temp = $b;
            $b = $a;
            $a = $temp;
            echo "With changing -- $a & $b <br>";

          }
          eigthQuestion();

          function ninthQuestion($num){
            for($i = 1; $i<=10;$i++){
                $answer = $num * $i;
                echo "$answer <br>";
                
            }
          }
          ninthQuestion(5);

          function tenthQuestion($num){
            //Finding length of the number
            $length = strlen((string) abs($num));
            //Converting number into string
            $numString = (string)$num;
            //Creating variable to sore answer;
            $answer = 0;
            //Lopping through String Number
            for($i = 0; $i<$length;$i++){
                //Getting character according to i
                $currentChar =  $numString[$i];
                //Converting accessed char into Number
                $currentNumber = (int)$currentChar;
                //Updatting answer pow function
                $answer += pow($currentNumber,$length);
            }
            if($answer == $num){
                echo "The number $num is Armstrong > $num = $answer <br>";
            }else{
                echo "The number $num is not Armstrong > $num != $answer <br>";
            }
          }
          tenthQuestion(164);
    ?>
</body>
</html> 