CREATE Database imtixon;
USE imtixon;

CREATE TABLE exam (
  id int NOT NULL,
  student int NOT NULL,
  fan int NOT NULL,
  ball int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO exam (id, student, fan, ball) VALUES
(4, 5, 10, 50),
(5, 5, 12, 90),
(6, 5, 11, 70),
(7, 7, 12, 90),
(8, 7, 11, 90),
(9, 7, 10, 50),
(10, 5, 15, 12),
(11, 7, 15, 45),
(12, 8, 10, 50),
(13, 8, 11, 70);


CREATE TABLE fans (
  id int NOT NULL,
  name varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO fans (id, name) VALUES
(10, 'Ona tili'),
(11, 'Ingliz tili'),
(15, 'informatika');

CREATE TABLE students (
  id int NOT NULL,
  name varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO students (id, name) VALUES
(5, 'Mirabbos'),
(7, 'Sirojiddin'),
(8, 'Sarvar');

