USE university;

SELECT 
	student.name AS Имя,
    student.surename AS Фамилия,
    student.age AS Возраст,
    student.name_class AS Группа,
    class.name_faculty AS Факультет
FROM
	student
LEFT JOIN class ON student.name_class = class.name_class
WHERE
	name_faculty = 'ИВТ';