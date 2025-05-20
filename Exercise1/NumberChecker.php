<?php
class NumberChecker
{

    public function isEven(int $number): bool
    {
        return $number % 2 == 0;
    }
    public function isPositive(int|float $number): bool
    {
        return $number > 0;
    }

}
?>