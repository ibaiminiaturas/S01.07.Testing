<?php

require_once __DIR__ . '/../src/GradeVerifier.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

final class GradeVerifierTests extends PHPUnit\Framework\TestCase
{
    private $greadeVerifier;

    protected function setUp(): void
    {
        $this->greadeVerifier = new GradeVerifier();
    }

    protected function tearDown(): void
    {
        $this->greadeVerifier = NULL;
    }

    public static function gradesDataProvider(): array
    {
        return array(
            array(90, "Primera División"),
            array(55, "Segunda División"),
            array(36, "Tercera División"),
            array(16, "El estudiante reprobará."),
            array(-10, "ERROR - Nota Incorrecta"),
            array(110, "ERROR - Nota Incorrecta"),
        );
    }

    #[TestDox('The Grades make sense')]
    #[DataProvider('gradesDataProvider')]
    public function testGradesResult(int $grade, string $expected): void
    // shows as: "✔ A number is even."
    {
        $result = $this->greadeVerifier->verifyGrade($grade);
        $this->assertSame($expected, $result);
    }
}