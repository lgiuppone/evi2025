-- SQL commands to create a users table and insert initial data
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO users (name, email) VALUES ('admin', 'admin@example.com');
