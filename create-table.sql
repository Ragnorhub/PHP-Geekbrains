CREATE TABLE pictures (
  id INT PRIMARY KEY AUTO_INCREMENT,
  path VARCHAR(255) NOT NULL,
  size INT NOT NULL,
  name VARCHAR(64),
  view INT DEFAULT NULL,
  click INT DEFAULT NULL,
  description TEXT
);