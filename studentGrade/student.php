<?php
class Student
{
    protected $id;
    protected $sName;

    public function __construct($id, $sName)
    {
        $this->id = $id;
        $this->sName = $sName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->sName;
    }
}
