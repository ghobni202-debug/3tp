CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    semester_id INT NOT NULL,
    UNIQUE KEY uq_enroll (student_id, semester_id),
    FOREIGN KEY (student_id) REFERENCES users(id),
    FOREIGN KEY (semester_id) REFERENCES semesters(id)
);
