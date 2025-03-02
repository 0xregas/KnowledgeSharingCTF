CREATE DATABASE IF NOT EXISTS notes;

USE notes;

CREATE TABLE IF NOT EXISTS users (
	userId INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(100) not null,
	password VARCHAR(100) not null,
	isAdmin int not null
);

CREATE TABLE IF NOT EXISTS note (
	noteId INT AUTO_INCREMENT PRIMARY KEY,
	userId INT not null,
	noteName VARCHAR(100) not null,
	noteDescription VARCHAR(500),
	FOREIGN KEY (userId) REFERENCES users(userId)
);
