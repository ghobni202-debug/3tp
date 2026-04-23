CREATE TABLE grades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    semester_id INT NOT NULL,
    professor_id INT NOT NULL,
    grade DECIMAL(3,1) NOT NULL, 
    UNIQUE KEY uq_grade (student_id, course_id, semester_id),
    FOREIGN KEY (student_id) REFERENCES users(id),
    FOREIGN KEY (course_id) REFERENCES courses(id),
    FOREIGN KEY (semester_id) REFERENCES semesters(id),
    FOREIGN KEY (professor_id) REFERENCES users(id)
);
