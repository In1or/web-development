USE university;

SELECT
	student.name_class AS Группа,
    class.name_faculty AS Факультет
FROM
	student
LEFT JOIN class ON student.name_class = class.name_class
WHERE
	name = 'Павел' AND surename = 'Чухланцев';

-- для проверки можно искать Павел Чухланцев
						  -- Иван  Иванов 