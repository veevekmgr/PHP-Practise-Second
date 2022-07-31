<?php
class Player{
    //properties
    public $name;
    public $speed = 3;
    public $running = false;

    //methods 
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
    function run(){
        $this->running = true;
    }
}
$player1 = new Player();
$player1->set_name("Harry");
echo $player1->get_name();
echo $player1->speed;


$player2 = new Player();
$player2->set_name("Veevek");
echo $player2->get_name();

$player3 = new Player();
$player3->set_name("Nikhil");
echo $player3->get_name();

echo "<br>";

echo "Today is " . date("d")."<br>";
echo "Today is " . date("jS")."<br>";
echo "Month is " . date("F")."<br>";
echo "Month is " . date("m")."<br>";
echo "Month is " . date("M")."<br>";
echo "Year is " . date("Y")."<br>";
echo "Year is " . date("y")."<br>";
echo "Week is " . date("D")."<br>";
echo "Week is " . date("l")."<br>";
echo "Week is " . date("N")."<br>";
echo "Week is " . date("w")."<br>";

echo "Today is " . date("d/M/Y")."<br>";
echo "Today is " . date("l/d/F/Y")."<br>";


$date = strtotime('+35 days');
$fullDate = date('l, F d, Y', $date);

echo $fullDate."<br>";

$year = strtotime('+56 years');
$month = strtotime('+8 month');
$day = strtotime('+15 days');
$englishDate = date('d-n-Y');
$nepaliDay = date('d', $day);
$nepaliMonth = date('n', $month);
$nepaliYear = date('Y', $year);
$nepaliDate = $nepaliDay ."-".$nepaliMonth."-".$nepaliYear;
echo $englishDate."<br>";
echo $nepaliDate."<br>";

$birthdayDate = ('2000-08-28');
$date = new DateTime($birthdayDate);
$now = new DateTime(date('Y-m-d'));
$interval = $now->diff($date);
echo "You are ".$interval->y." years old.";