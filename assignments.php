CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    professor_id INT NOT NULL,
    course_id INT NOT NULL,
    semester_id INT NOT NULL,
    UNIQUE KEY uq_assign (professor_id, course_id, semester_id),
    FOREIGN KEY (professor_id) REFERENCES users(id),
    FOREIGN KEY (course_id) REFERENCES courses(id),
    FOREIGN KEY (semester_id) REFERENCES semesters(id)
);
