CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID INT PRIMARY KEY,
  Nama VARCHAR(255),
  Alamat VARCHAR(255),
  Jabatan VARCHAR(255)
);

INSERT INTO users (ID, Nama, Alamat, Jabatan)
VALUES
  (1, 'Bechkam', 'Summarecon', 'Manager'),
  (2, 'Vian', 'Galaxy', 'Assistant Manager'),
  (3, 'Desmond', 'Kemang', 'Supervisor');
