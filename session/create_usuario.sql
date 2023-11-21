create database aula_pdo;
use aula_pdo;

-- Crie a tabela "usuarios", sim profe, peguei do senhor.... Tava mais prático T-T
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

ALTER TABLE usuarios
ADD password_hash VARCHAR(255) NOT NULL;