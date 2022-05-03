<?php
require_once("./src/common.inc.php");

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage("./data/");
$survey = $requestSurveyLoader->load();

$surveyFileStorage->saveSurveyToFile($survey);