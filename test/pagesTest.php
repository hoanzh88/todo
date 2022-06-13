<?php
require __DIR__ . "/../controllers/Pages.php";
// class PagesTest extends PHPUnit_Framework_TestCase{
class PagesTest extends \PHPUnit\Framework\TestCase{
    public function testRenderReturnsHelloWorld(){
        $pages = new \Pages();
        $pages->render();
    }
}