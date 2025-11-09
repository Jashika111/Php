Constructor in php
<?php
class Student {
    public string $name;

    function __construct(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$std = new Student("ram");
echo $std->getName();
?>
