<?php
class Course
{
    protected $id;
    protected $c_name;
    protected $students = array();
    protected $grades = array();

    public function __construct($id, $c_name)
    {
        $this->id = $id;
        $this->c_name = $c_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->c_name;
    }

    public function addStudent($student)
    {
        $this->students[] = $student;
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function addGrade($studentId, $grade)
    {
        $this->grades[$studentId] = $grade;
    }
    public function getGrade($studentId)
    {
        return isset($this->grades[$studentId]) ? $this->grades[$studentId] : null;
    }

    public function getAverageGrade()
    {
        $total = 0;
        $count = count($this->grades);
        foreach ($this->grades as $grade) {
            $total += $grade;
        }
        return $count > 0 ? $total / $count : 0;
    }
}
