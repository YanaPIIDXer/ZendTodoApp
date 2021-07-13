<?php
namespace Application\Model;

class TodoItem
{
    public $name;
    public $body;

    public function __construct($name, $body)
    {
        $this->$name = $name;
        $this->$body = $body;
    }
}
?>
