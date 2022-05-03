<?php

class SurveyFileStorage
{
    private string $pathToDirectory;

    public function __construct(string $pathToDirectory)
    {
        $this->pathToDirectory = $pathToDirectory;
    }

	public function saveSurveyToFile(Survey $survey): void
	{
        $pathFile = $this->createPathFile($survey->getEmail());
		if ($survey->getEmail() || $survey->getEmail() === '')
		{
			if (file_exists($pathFile))
			{
				$arrayData = file($pathFile);
                $surveyInFile = $this->getSurveyFromFile($survey->getEmail());
				if ($survey->getFirstName() !== $surveyInFile->getFirstName())
				{
					$arrayData[0] = "First name: " . $survey->getFirstName() . PHP_EOL;
				}
				if ($survey->getEmail() !== $surveyInFile->getEmail())
				{
					$arrayData[1] = "Email: " . $survey->getEmail() . PHP_EOL;
				}
				if ($survey->getActivity() !== $surveyInFile->getActivity())
				{
					$arrayData[2] = "Activity: " . $survey->getActivity();
				}
				file_put_contents($pathFile, $arrayData);
			}
			else
			{
				$fp = fopen($pathFile, "w");
				fwrite($fp, "First name: " . $survey->getFirstName() . PHP_EOL);
				fwrite($fp, "Email: " . $survey->getEmail() . PHP_EOL);
				fwrite($fp, "Activity: " . $survey->getActivity() . PHP_EOL);
				fclose($fp);
			}
		}
		else
		{
			return;
		}
	}

	public function getSurveyFromFile($email): Survey
	{
        $pathFile = $this->createPathFile($email);
        $array = [];
		if (file_exists($pathFile) and ($email !== null) and ($email !== ''))
		{
			$arrayData = file($pathFile);
			foreach ($arrayData as $item) 
			{
				$temporaryString = explode(": ", $item);
				$array[$temporaryString[0]] = $temporaryString[1] ?? null;
			}
            return new Survey($array["Email"], $array["First name"], $array["Activity"]);
		}
		else
		{
            return new Survey("none", null, null);
		}
	}

    private function createPathFile(string $email): string
    {
        return $this->pathToDirectory . $email . ".txt";
    }
}