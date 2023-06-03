<?php
class calculator {
    public $number1;
    public $number2;
    public $operator;

    public function __construct(int $num1,int $num2, string $operator) {
        $this->number1 = $num1;
        $this->number2 = $num2;
        $this->operator = $operator;
    }

    function calculate(){
        switch ($this->operator){
            case "+":
                $answer = $this->number1 + $this->number2;
                echo $answer;
                break;
            case "-":
                $answer = $this->number1 - $this->number2;
                echo $answer;
                break;
            case "*":
                $answer = $this->number1 * $this->number2;
                echo $answer;
                break;
            case "/":
                $answer = $this->number1 / $this->number2;
                echo $answer;
                break;
        }
        
    }
}


?>