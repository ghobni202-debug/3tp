CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    semester_id INT NOT NULL,
    name VARCHAR(150) NOT NULL,
    credits INT NOT NULL,
    FOREIGN KEY (semester_id) REFERENCES semesters(id)
);
