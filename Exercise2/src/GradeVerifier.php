<?php
class GradeVerifier
{
    public function verifyGrade(float|int $grade): string
    {
        $result = "";

        if ($grade >= 100 || $grade < 0) {
            $result = "ERROR - Nota Incorrecta";
        } else if ($grade > 60) {
            $result = "Primera División";
        } else if ($grade >= 45) {
            $result = "Segunda División";
        } else if ($grade >= 33) {
            $result = "Tercera División";
        } else if ($grade > 0) {
            $result = "El estudiante reprobará.";
        }
        return $result;
    }
}
?>