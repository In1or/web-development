<?php
class RequestSurveyLoader
{
    public function load(): Survey
    {
        $firstName = self::getGetParam("first_name");
        $email = self::getGetParam("email");
        $activity = self::getGetParam("activity");
        return new Survey($email, $firstName, $activity);
    }

    private function getGetParam(string $name): ?string
    {
        return $_GET[$name] ?? null;
    }
}