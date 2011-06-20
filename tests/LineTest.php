<?php
class LineTest extends PHPUnit_Framework_TestCase
{
	protected $_line;
	
	public function setUp()
	{
		$this->_line = new Composite\Line;
	}
	
	public function testLineCantHaveChildren()
	{
		$this->setExpectedException("DomainException", "children");
		$this->_line->addNode(new Composite\Line);
	}
	
	public function testLineContent()
	{
		$this->assertEquals("<hr>", (string)$this->_line);
	}
}