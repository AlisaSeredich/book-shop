--Создание таблицы с авторами книг
CREATE TABLE authors(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR (255) NOT NULL
);
--Создание таблицы с категориями книг
CREATE TABLE category(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR (255) NOT NULL,
  description VARCHAR (255) NOT NULL
);
--Создание таблицы с книгами
CREATE TABLE books(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR (255) NOT NULL,
  image VARCHAR (255) NOT NULL,
  description TEXT NOT NULL,
  author_id INT NOT NULL,
  category_id INT NOT NULL,
  price INT NOT NULL,
	FOREIGN KEY(author_id) REFERENCES authors(id),
  FOREIGN KEY(category_id) REFERENCES category(id)
);
--Создание таблицы с пользователями
CREATE TABLE users(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR (255) NOT NULL,
  email VARCHAR (255) NOT NULL,
  avatar VARCHAR (255) NOT NULL,
  password VARCHAR (255) NOT NULL
);
--Создание таблицы со статьями
CREATE TABLE posts(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR (255) NOT NULL,
  body TEXT NOT NULL,
  add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  image VARCHAR (255) NOT NULL
);
--Создание таблицы с комментариями к статьям
CREATE TABLE comments(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  text TEXT NOT NULL,
  user INT NOT NULL,
  post INT NOT NULL,
  FOREIGN KEY(user) REFERENCES users(id),
  FOREIGN KEY(post) REFERENCES posts(id)
);