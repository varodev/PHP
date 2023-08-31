
CREATE TABLE usuarios{
id SMALLINT UNSIGNED AUTO_INCREMENT, 
user VARCHAR(100) UNIQUE NOT NULL, 
pass BLOB(8) UNIQUE NOT NULL,
PRIMARY KEY(id)
}ENGINE=innoDB;

vamos a utilizar almandrullos como llave
INSERT INTO usuarios (user, pass) 
VALUES ('pepe@hotmail.com', AES_ENCRYPT('1234','almandrullos'));

DROP TABLE usuarios;

SELECT user, AES_DECRYPT(pass, 'almandrullos') FROM usuarios;

SELECT * FROM usuarios 
WHERE AES_DECRYPT(pass,'almandrullos')=1234 
AND USER = 'pepe@hotmail.com';