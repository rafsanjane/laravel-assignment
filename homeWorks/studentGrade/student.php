<?php
class Student
{
    protected $studentId;
    protected $sName;

    public function __construct($studentId, $sName)
    {
        $this->studentId = $studentId;
        $this->sName = $sName;
    }

    public function getId()
    {
        return $this->studentId;
    }

    public function getName()
    {
        return $this->sName;
    }
}
