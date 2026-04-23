project/
index.php <- Front controller (?page= routing)
config.php <- PDO connection + requireRole() helper
models/
User.php <- User queries (all roles)
Semester.php <- Semester CRUD
Course.php <- Course CRUD + semester link
Enrollment.php <- Student <-> Semester
Assignment.php <- Professor <-> Course <-> Semester
Grade.php <- Grade upsert + retrieval
GPA.php <- Weighted GPA computation
controllers/
AuthController.php <- Login / logout / session guard
AdminController.php <- All admin actions (POST/redirect)
ProfessorController.php <- Grade entry page
StudentController.php <- Grade view + history
views/
login.php
admin/
dashboard.php <- Summary cards
semesters.php
courses.php
professors.php
students.php
enrollments.php <- Checkbox list per semester
professor/
grades.php <- Dropdowns + dynamic student table
student/
dashboard.php <- Current semester grades
history.php <- All semesters + Chart.js
api/
grades.php <- Professor: GET students, POST grades
gpa.php <- Student: GET grades + GPA + export
public/
css/style.css
js/
professor.js <- AJAX grade entry
student.js <- AJAX GPA display
L
