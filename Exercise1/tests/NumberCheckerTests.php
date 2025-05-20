<?php

require '..\NumberChecker.php';
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
final class NumberCheckerTests extends PHPUnit\Framework\TestCase
{
    private $numberChecker;

    protected function setUp(): void
    {
        $this->numberChecker = new NumberChecker();
    }

    protected function tearDown(): void
    {
        $this->numberChecker = NULL;
    }

    public static function evennessDataProvider(): array
    {
        return array(
            array(1, false),
            array(2, true),
        );
    }

    public static function signDataProvider(): array
    {
        return array(
            array(1, true),
            array(-1, false),
        );
    }

    #[TestDox('A number is even')]
    #[DataProvider('evennessDataProvider')]
    public function testEvennessCalculation(int $number, bool $expected): void
    // shows as: "✔ A number is even."
    {
        $result = $this->numberChecker->isEven($number);
        $this->assertSame($expected, $result);
    }

    #[TestDox('A number is positive')]
    #[DataProvider('signDataProvider')]
    public function testSignCalculation(int|float $number, bool $expected): void
    // shows as: "✔ A number is Positive."
    {
        $result = $this->numberChecker->isPositive($number);
        $this->assertSame($expected, $result);
    }
}