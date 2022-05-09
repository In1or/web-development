USE university;

SELECT
	student.name AS Имя,
    student.surename AS Фамилия,
    student.age AS Возраст,
    student.name_class AS Группа
FROM
	student
WHERE
	student.name_class = 'ПС-13';