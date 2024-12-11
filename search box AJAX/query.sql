CREATE DATABASE dynamic_search_db;

USE dynamic_search_db;

CREATE TABLE subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    subject_code VARCHAR(50),
    subject_name VARCHAR(255)
);

INSERT INTO subjects (subject_code, subject_name) VALUES
('CS101', 'Introduction to Programming'),
('CS102', 'Data Structures'),
('CS103', 'Algorithms'),
('CS104', 'Database Systems'),
('CS105', 'Computer Networks');
