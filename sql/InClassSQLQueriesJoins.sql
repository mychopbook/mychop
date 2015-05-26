SELECT *
FROM shoppinglist s, user u
WHERE s.user_iduser = u.iduser

SELECT u.name, u.lastname, s.name
FROM shoppinglist s, user u
WHERE s.user_iduser = u.iduser

SELECT u.name, u.lastname, s.name
FROM shoppinglist s
INNER JOIN user u ON s.user_iduser = u.iduser

SELECT r.name, u.name, u.lastname, rv.comment
FROM   review rv, recipe r, user u
WHERE  rv.recipe_idrecipe = r.idrecipe
AND    rv.user_iduser = u.iduser

SELECT r.name, creator.name AS CreatorName, creator.lastname AS CreatorLast, reviewer.name AS ReviewerName, reviewer.lastname AS ReviewerLast, rv.comment
FROM review rv, recipe r, user reviewer, user creator
WHERE rv.recipe_idrecipe = r.idrecipe
AND rv.user_iduser = reviewer.iduser
AND r.user_iduser = creator.iduser

SELECT *
FROM   recipe r
LEFT OUTER JOIN review rv
ON r.idrecipe = rv.recipe_idrecipe

SELECT *
FROM   recipe r
INNER JOIN review rv
ON r.idrecipe = rv.recipe_idrecipe
