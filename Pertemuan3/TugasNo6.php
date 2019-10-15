<?php
class Employee {
    private $name;
    private $department;

    function __construct($name, $department) {
        $this->name = $name;
        $this->department = $department;
    }

    public function __call($method, $param) {
        echo $this->name . " can't " . $method . ".\n";
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDept($department) {
        $this->department = $department;
    }

    public function getDept() {
        return $this->department;
    }
}

class Programmer extends Employee {
    private $skillLevel;

    function __construct($name, $department) {
        parent::__construct($name, $department);
    }

    public function __isset($varName)
    {
        return isset($this->$varName);
    }

    public function __unset($varName)
    {
        unset($this->$varName);
    }

    public function setSkillLevel($skillLevel) {
        $this->skillLevel = $skillLevel;
    }

    public function getSkillLevel() {
        return $this->skillLevel;
    }
}

$programmer = new Programmer("Joni", "IT");

echo $programmer->getName() . " is in the " . $programmer->getDept() . " department.\n";
echo $programmer->quit();
echo PHP_EOL;

if (isset($programmer->skillLevel)) {
    echo "Skill level is set.";
} else {
    echo "Skill level isn't set.";
}
echo PHP_EOL;

$programmer->setSkillLevel(3);

if (isset($programmer->skillLevel)) {
    echo "Skill level is set.";
} else {
    echo "Skill level isn't set.";
}
echo PHP_EOL;

echo "Skill level is set to " . $programmer->getSkillLevel();
echo PHP_EOL;

echo "Unsetting skill level...";
unset($programmer->skillLevel);
echo PHP_EOL;

if (isset($programmer->skillLevel)) {
    echo "Skill level is set.";
} else {
    echo "Skill level isn't set.";
}
echo PHP_EOL;

?>