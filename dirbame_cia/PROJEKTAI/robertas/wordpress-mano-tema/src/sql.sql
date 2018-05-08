-- TABLE IMAGES
CREATE TABLE images(
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  filename VARCHAR(200),
  title VARCHAR(200),
  description VARCHAR(200)
);

INSERT INTO images VALUES ("", "metalas.jpg", "Metalas metalinis", "Ziba kaip reikalas.");
INSERT INTO images VALUES ("", "rankos.jpg", "Rankos", "Kazka labai dirba.");
INSERT INTO images VALUES ("", "raso.jpg", "Raso", "Raso zmogus ant popieriaus su tusinuku.");
INSERT INTO images VALUES ("", "stiklainiai.jpg", "Stiklainiai", "Pagaminti is stiklo ir kartais su metaliniais dangteliais.");
INSERT INTO images VALUES ("", "ziuretojas.jpg", "Ziuretojas", "Zmogus labai intensyviai ziuri ir jam puikiai tai sekasi.");
INSERT INTO images VALUES ("", "ziuronai.jpg", "Ziuronai", "Panasus i ziuronus tik is pirmo neatidaus zvilgsnio.");
-- END TABLE IMAGES
-- TABLE USERS
CREATE TABLE users(
  id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(100) NOT NULL,
  lname VARCHAR(100) NOT NULL,
  uname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

INSERT INTO users VALUES ("", "Robertas", "Rudys", "RobeKey", "robertas.rudys@gmail.com", "mypass123");
-- END TABLE USERS
