<?php
class Student2
{
    public $rollNo;
    public $fullname;
    public $mark;

    public function __construct($rollNo, $fullname, $mark)
    {
        $this->rollNo = $rollNo;
        $this->fullname = $fullname;
        $this->mark = $mark;
        if ($mark > 100 || $mark < 0) {
            $this->mark = 0;
        }
    }

    public function checkMark()
    {
        if ($this->mark >= 50) {
            echo "Sinh viên {$this->fullname} mã số {$this->rollNo} Pass môn<br />";
        } else {
            echo "Sinh viên {$this->fullname} mã số {$this->rollNo} Fail môn<br />";
        }
    }
}

$sv1 = new Student2("ph12345", "Nguyễn Nam", 90);
$sv2 = new Student2("ph12346", "Trịnh Quyết", 40);
$sv3 = new Student2("ph12347", "Trí Dũng", 64);

$sv1->checkMark();
$sv2->checkMark();
$sv3->checkMark();

echo $sv1->mark;
