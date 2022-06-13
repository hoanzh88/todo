<?php
require __DIR__ . "/../controllers/Pages.php";
class PagesTest extends PHPUnit_Framework_TestCase{
    public function testRenderReturnsHelloWorld(){
        $pages = new \Pages();
        $pages->render();
    }
}