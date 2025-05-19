<?php
use PHPUnit\Framework\TestCase;

require '..\NumberChecker.php';

final class NumberCheckerTests extends TestCase
{
    public function testEvennessCalculation(): void
    // shows as: "✔ A number is even."
    {
        $numberChecker = new NumberChecker(2);
        $this->assertEquals(true, $numberChecker->isEven());

        $numberChecker = new NumberChecker(3);
        $this->assertEquals(false, $numberChecker->isEven());
    }


    public function testSignCalculation(): void
    // shows as: "✔ A number is Positive."
    {
        $numberChecker = new NumberChecker(2);
        $this->assertEquals(true, $numberChecker->isPositive());

        $numberChecker = new NumberChecker(-3);
        $this->assertEquals(false, $numberChecker->isPositive());
    }
}