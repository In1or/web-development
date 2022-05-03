<?php
class SurveyPrinter
{
    public static function printData(Survey $survey): void
    {
        echo '<p>Email: ' . $survey->getEmail() . "</p>";
        echo '<p>Имя: ' . $survey->getFirstName() . "</p>";
        echo '<p>Деятельность: ' . $survey->getActivity() . "</p>";
    }

    public static function checkEmail(string $email): bool
    {
        if ($email === "none")
        {
            return false;
        } 
        else
        {
            return true;
        }
    }
}