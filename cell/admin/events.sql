CREATE DATABASE IF NOT EXISTS ecell;
USE ecell;

-- Event Table
CREATE TABLE IF NOT EXISTS events (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  event_date DATE,
  location VARCHAR(255),
  image VARCHAR(255),
  register_link VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Registration Table
CREATE TABLE IF NOT EXISTS registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  event_id INT,
  name VARCHAR(100),
  email VARCHAR(100),
  phone VARCHAR(20),
  registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (event_id) REFERENCES events(id) ON DELETE CASCADE
);
