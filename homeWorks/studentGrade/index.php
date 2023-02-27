<?php
// Include the Gradebook, Course, and Student classes
require_once 'gradebook.php';
require_once 'course.php';
require_once 'student.php';

// Create some students
$student1 = new Student('s001', 'Alal');
$student2 = new Student('s002', 'Dulal');
$student3 = new Student('s003', 'Akkas');
$student4 = new Student('s004', 'Mofiz');

// Create a course and add the students
$course1 = new Course('c001', 'PHP');
$course1->addStudent($student1);
$course1->addStudent($student2);
$course1->addStudent($student3);
$course1->addStudent($student4);

// Add grades for the students
$course1->addGrade('s001', 100);
$course1->addGrade('s002', 90);
$course1->addGrade('s003', 70);
$course1->addGrade('s004', 85);

// Create another course and add the students
$course2 = new Course('c002', 'MERN');
$course2->addStudent($student1);
$course2->addStudent($student2);
$course2->addStudent($student3);
$course2->addStudent($student4);

// Add grades for the students
$course2->addGrade('s001', 90);
$course2->addGrade('s002', 75);
$course2->addGrade('s003', 85);
$course2->addGrade('s004', 70);

// Create a gradebook and add the courses
$gradebook = new Gradebook();
$gradebook->addCourse($course1);
$gradebook->addCourse($course2);

$course1->getAverageGrade();
$course2->getAverageGrade();
$gradebook->getAverageGrade();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Students Grade Book</title>
    <style>
        .toppad {
            padding-top: 80px;
        }

        .padding-r-l {
            padding-left: 10px;
            padding-right: 10px;
        }

        .item {
            padding: 20px;
            box-shadow: 0 1rem 3rem rgb(0 0 0 / 10%);
            border-radius: 5px;

        }

        table {

            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container toppad ">
        <div class="item-container row ">
            <div class="item column-40 ">
                <h1>Students Grade Book</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Course</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($gradebook->getCourses() as $course) : ?>
                            <?php foreach ($course->getStudents() as $student) : ?>
                                <tr>
                                    <td><?php echo $student->getName(); ?></td>
                                    <td><?php echo $course->getName(); ?></td>
                                    <td><?php echo $course->getGrade($student->getId()); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="item column-10"></div>
            <div class="item column-40 ">
                <h1>Students Grade Avaerage</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Average Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($gradebook->getCourses() as $course) : ?>
                            <?php foreach ($course->getStudents() as $student) : ?>
                                <tr>
                                    <td><?php echo $student->getName(); ?></td>
                                    <td><?php echo $course->getAverageGrade($course->getId()); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>