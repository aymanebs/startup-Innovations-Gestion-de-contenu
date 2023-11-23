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