<?php
class BaseHtmlElementTest extends PHPUnit_Framework_TestCase
{
	protected $_htmlElement;
	
	const HTML_TEXT = "foo";
	
	public function setUp()
	{
		$this->_htmlElement = $this->getMockForAbstractClass('Composite\HtmlElements\BaseHtmlElement', array(self::HTML_TEXT));
	}
	
	public function assertPreConditions()
	{
		$this->assertEquals(self::HTML_TEXT, $this->_htmlElement->getText());
	}
	
	public function testTagFormattingOutput()
	{
		$this->_htmlElement->expects($this->any())
		                   ->method('getTag')
		                   ->will($this->returnValue('fooTag'));
		
		$this->assertEquals('<fooTag>'.self::HTML_TEXT.'</fooTag>', $this->_htmlElement->getContent());
	}	
}