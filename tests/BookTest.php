<?php
class BookTest extends PHPUnit_Framework_TestCase
{
	protected $_book;
	
	public function setUp()
	{
		$this->_book = new Composite\Book("foo");
	}
	
	public function testBookContent()
	{
		$this->assertRegExp('/foo/', (string)$this->_book);
	}
}