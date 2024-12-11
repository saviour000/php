CREATE DATABASE student_results;

USE student_results;

-- Table to store student details
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_number VARCHAR(10) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL
);

-- Table to store exam details
CREATE TABLE exams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(50) NOT NULL,
    max_marks INT NOT NULL
);

-- Table to store marks
CREATE TABLE marks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    exam_id INT NOT NULL,
    marks_obtained INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(id),
    FOREIGN KEY (exam_id) REFERENCES exams(id)
);
