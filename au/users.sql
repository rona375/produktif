CREATE DATABASE au;

CREATE TABLE users (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(50) UNIQUE,
  `password` varchar(80),
  `name` varchar(200),
  `nim` varchar(9),
  `jurusan` varchar(60),
  `prodi` varchar(60));
