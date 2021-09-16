CREATE DATABASE biblioteca;

USE bilioteca;

CREATE TABLE generos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL

)

CREATE TABLE livros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL, 
    id_genero INT NOT NULL,
    FOREIGN KEY (id genero) REFERENCES generos(id)
);

