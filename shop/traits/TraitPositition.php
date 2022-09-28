<?php 
trait Position {
    public $position = [0,0,0];
    public function setPosition($x,$y,$z){
        $this->position = [$x,$y,$z];
    }
}


?>