<?php
//trait instead of extend;
trait Item{
    public $sword = "katana";
}
trait Power{
    public $speed = "5000";
}
class Character{
    use Item, Power;
    public $name = "Antony";
    public function kill(){
        return "$this->name needs $this->sword and $this->speed";
    }
}
$char = new Character();
echo $char->kill();