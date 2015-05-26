SELECT picture, name, user_iduser
FROM recipe
SELECT picture, name, user_iduser, status 
FROM recipe 
WHERE status <> 0
SELECT picture, name, user_iduser, status 
FROM recipe 
WHERE status = 1
SELECT picture, name, user_iduser, status 
FROM recipe 
WHERE status <> 0
LIMIT 0,3
SELECT picture, name, user_iduser, status 
FROM recipe 
WHERE status <> 0
ORDER BY datecreated DESC
LIMIT 0,3
SELECT comment, datecreate, user_iduser
FROM review
ORDER BY datecreate DESC
LIMIT 0, 10
SELECT name, lastname, email
FROM user
ORDER BY lastname, firstname
SELECT name, user_iduser
FROM recipe
WHERE user_iduser = 1
ORDER BY name
SELECT *
FROM mychops
WHERE user_iduser = 6
SELECT *
FROM recipe
WHERE preptime_mins <= 15
SELECT *
FROM recipe
WHERE preptime_mins <= 15
AND preptime_hours <= 1;

SELECT *
FROM recipe
WHERE (preptime_mins <= 15 AND preptime_hours <= 1)
OR (preptime_hours = 0 AND preptime_mins <= 60);

SELECT *
FROM recipe
WHERE cookingskill = "Beginner"
OR cookingskill = "Intermediate";

SELECT *
FROM recipe
WHERE cookingskill IN ("Beginner", "Intermediate");

SELECT *
FROM recipe
WHERE ((preptime_mins <= 15 AND preptime_hours <= 1) OR (preptime_hours = 0 AND preptime_mins <= 60))
AND 
(cookingskill IN ("Beginner", "Intermediate"));

SELECT *
FROM recipe
WHERE name LIKE "%Salad%";

UPDATE steps
SET stepnumber = idsteps;

UPDATE user 
SET email = "rima.gerhard@gmail.com"
WHERE name = "Rima";

SELECT COUNT(*)
FROM recipe;

SELECT recipe_idrecipe, COUNT(*)
FROM review
GROUP BY recipe_idrecipe;
