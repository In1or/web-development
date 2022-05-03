<?php
header('Content-Type: text/plain');
header("Refresh: 0; url = http://localhost:8080/getData.php");
require_once("./src/common.inc.php");

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage("./data/");
$survey = $requestSurveyLoader->load();

$surveyFileStorage->saveToFile($survey);