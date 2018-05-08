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
  id INT(6) PRIMARY KEY AUTO_INCREMENT,
  fname VARCHAR(100) NOT NULL,
  lname VARCHAR(100) NOT NULL,
  uname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

INSERT INTO users VALUES ("", "Vardenis", "Pavardenis", "Username42", "user42@mail.com", "mypass123");
-- END TABLE USERS
-- TABLE CHANNELS
CREATE TABLE channels(
  id INT(6) PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  description VARCHAR(100) NOT NULL
);

INSERT INTO channels VALUES ("", "Pietus", "Valgyt yra gerai.");
INSERT INTO channels VALUES ("", "Vakarai", "Vakaru pasaulio naujienos.");
INSERT INTO channels VALUES ("", "Siaure", "Ten salta.");
INSERT INTO channels VALUES ("", "Rytai", "Pasaulio gamyklos.");
INSERT INTO channels VALUES ("", "Kates", "Pilnas internatas kaciu.");
INSERT INTO channels VALUES ("", "Sunys", "Pilnos gatves sunu.");
INSERT INTO channels VALUES ("", "Lietuviškai!", "Labai lietuviškai... ąčęėįšųūž");
-- END TABLE CHANNELS
-- TABLE USERS_CHANNELS
CREATE TABLE users_channels(
  users_id INT(6),
  channels_id INT(6),
  PRIMARY KEY(users_id, channels_id)
);

INSERT INTO users_channels VALUES ("50", "2");
INSERT INTO users_channels VALUES ("50", "3");
INSERT INTO users_channels VALUES ("46", "1");
INSERT INTO users_channels VALUES ("52", "1");
INSERT INTO users_channels VALUES ("50", "4");
INSERT INTO users_channels VALUES ("53", "2");

-- INSERT INTO users_channels VALUES ("", "")
-- END TABLE USERS_CHANNELS
-- SELECT ALL USER CHANNEL SUBSCRIPTIONS
SELECT u.id, u.email, c.id, c.name
FROM users u
INNER JOIN users_channels uc
ON uc.users_id = u.id
INNER JOIN channels c
ON c.id = uc.channels_id;
-- END SELECT ALL USER CHANNEL SUBSCRIPTIONS
