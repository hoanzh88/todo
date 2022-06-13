<?php
require __DIR__ . "/../controllers/Pages.php";
class PagesTest extends PHPUnit_Framework_TestCase
{
    public function testRenderReturnsHelloWorld()
    {
        $pages = new \controllers\Pages();
        $expected = 'Hello Word';
        $this->assertEquals($expected, $pages->render());
    }
}