CREATE TABLE utilisateurs(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(20),
	phone VARCHAR(20),
	adress VARCHAR(50),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO utilisateurs (name,email,phone,adress)
VALUES
('Moussaoui','mouss@gmail.com','0612768945','Youssoufia'),
('Aziz','aziz@gmail.com','0676658945','Agadir'),
('Mohamed','moh@gmail.com','0610008945','Tanger'),
('Kamal','kam@gmail.com','061276321','Azrou'),
('Nitou','nitou@gmail.com','068768945','Taza');


CREATE TABLE developers(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(20),
	phone VARCHAR(20),
	sex VARCHAR(3)

);
ALTER TABLE developers
ADD COLUMN team_id INT,
ADD FOREIGN KEY(team_id ) REFERENCES developers_teams(id) ON DELETE CASCADE ;

CREATE TABLE developers_teams(
	id INT PRIMARY KEY AUTO_INCREMENT,
	leader_id INT  NOT NULL,
	FOREIGN KEY(leader_id) REFERENCES developers(id) ON DELETE CASCADE

);
INSERT INTO developers (name,email,phone,sex)
VALUES ('Zair Amine','Zair@gmail.com','0612768145','M');

INSERT INTO developers_teams(leader_id)
VALUES(1);

SELECT developers_teams.id, developers.name, developers.email, developers.phone, developers.sex
        FROM developers_teams 
        JOIN developers
        ON developers.team_id=developers_teams.id


UPDATE developers
SET team_id=2
WHERE id=2;

CREATE TABLE services(
	id INT PRIMARY KEY AUTO_INCREMENT,
	libel VARCHAR(50) NOT NULL,
	category VARCHAR(50),
	price FLOAT
);

INSERT INTO services (libel,category,price)
VALUES ('Website creation','Front-end','3000');