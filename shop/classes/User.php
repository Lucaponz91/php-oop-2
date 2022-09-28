<?php 
include __DIR__ . '/../traits/TraitPositition.php';
class User {
    use Position;
    public $userName;
    public $userLastName;
    
    function __construct($userName, $userLastName)
    // function __construct($param)
    {
        $this->userName = $userName;         
        $this->userLastName = $userLastName;
        
    }
}