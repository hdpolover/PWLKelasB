<?php
class Cow extends Animal{
    public $owner;

    public function __construct($family, $food, $owner)
    {
        parent::__construct($family, $food);
        $this->owner = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}
?>