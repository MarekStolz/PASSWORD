<?php
class passwordTest
{
    public $testedPassword, $complexityPoints, $small_letters, $big_letters, $numbers, $special_chars;
    public function __construct()
    {
        $this->testedPassword = '';
        $this->complexityPoints = 0;
        $this->small_letters = implode(range("a", "z"));
        $this->big_letters = implode(range("A", "Z"));
        $this->numbers = implode(range(0, 9));
        $this->special_chars = "%$><*!()[]{}";
    }
    public function setPassword(string $password): passwordTest
    {
        $this->testedPassword = $password;
        return $this;
    }

    public function lenghtTest(): bool        
    {
        if (strlen($this->testedPassword) < 8) {
            echo "lenght test: failed\n";
            return false;
        } else {
            echo "lenght test: ok\n";
            return true;
        }
    }
}