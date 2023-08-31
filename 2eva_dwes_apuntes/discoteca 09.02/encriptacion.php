//crear tabla encriptada
CREATE TABLE usuarios(
id SMALLINT UNSIGNED AUTO_INCREMENT, 
user VARCHAR(100) UNIQUE NOT NULL, 
pass BLOB(8) UNIQUE NOT NULL,
PRIMARY KEY(id)
)ENGINE=innoDB;

//vamos a utilizar almandrullos como llave
INSERT INTO usuarios (user, pass) 
VALUES ('Pepe', AES_ENCRYPT('1234','almandrullos'));

//desencriptar
SELECT user, AES_DECRYPT(pass, 'almandrullos') FROM usuarios;

//encriptar
SELECT * FROM usuarios 
WHERE AES_DECRYPT(pass,'almandrullos')=1234 
AND USER = 'alvaro@gmail.com';