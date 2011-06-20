<?php
class NodeTest extends PHPUnit_Framework_TestCase
{
	protected $_node;
	
	public function setUp()
	{
		$this->_node = $this->getMockForAbstractClass('Composite\Node');
	}
	
	public function testAddingNodeChildrenPlayingWithArrayObjectAPI()
	{
		$this->_node->addNode($secondNode = clone $this->_node);
		$this->assertEquals(1, count($this->_node));
		$this->_node[] = clone $this->_node;
		$this->assertEquals(2, count($this->_node));
		$this->assertSame($secondNode, $this->_node[0]);
	}
	
	public function testAggregatedContent()
	{
		$this->_node->expects($this->any())
		            ->method('getContent')
		            ->will($this->returnValue("foobar"));
		$this->_node->addNode(clone $this->_node);
		$this->assertEquals('foobar'.PHP_EOL.'foobar', (string)$this->_node);
	}
	
	
}