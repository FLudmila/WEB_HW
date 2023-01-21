
-- create
CREATE TABLE classmates (
  Id INTEGER PRIMARY KEY,
  Firstname TEXT NOT NULL,
  age TEXT NOT NULL,
  adress TEXT NOT NULL,
);

-- insert
INSERT INTO classmates VALUES (1, 'Eva', 25, 'Moscow');
INSERT INTO classmates VALUES (2, 'Dave', 44, 'Samara');
INSERT INTO classmates VALUES (3, 'Nick', 52, 'Perm');
INSERT INTO classmates VALUES (4, 'Peter', 30, 'Saratov');
INSERT INTO classmates VALUES (5, 'Egor', 28, 'Moscow');
INSERT INTO classmates VALUES (6, 'Mike', 24, 'Moscow');
INSERT INTO classmates VALUES (7, 'Vicky', 27, 'Rostov');
INSERT INTO classmates VALUES (8, 'Tom', 33, 'Moscow');
INSERT INTO classmates VALUES (9, 'Mark', 36, 'Voronej');
INSERT INTO classmates VALUES (10, 'Jack', 40, 'Moscow');
INSERT INTO classmates VALUES (11, 'Karl', 42, 'Moscow');
INSERT INTO classmates VALUES (12, 'Jane', 31, 'Moscow');

-- fetch 
SELECT Firstname FROM classmates WHERE adress = 'Moscow' AND age > 18 AND age <= 30;