<?php
echo "<h1>1.CLASS</h1>"

class Hero
{
    protected $name;
    public function _construct($name = Underfined)
    {
        echo "Begin of class<br>"
        $this->name = $name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function display()
    {
        echo $this->name;
    }
    public function _destruct()
    {
        echo ">br>End of class";
    }

}

$antimage = new Hero;
$antimage->setName("ANTIMAGE")->display();