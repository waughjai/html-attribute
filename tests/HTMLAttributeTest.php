<?php

use PHPUnit\Framework\TestCase;

use WaughJ\HTMLAttribute\HTMLAttribute;

class HTMLAttributeTest extends TestCase
{
	public function testBasic()
	{
		$attribute = new HTMLAttribute( 'class', 'footer' );
		$this->assertEquals( $attribute->getValue(), 'footer' );
		$this->assertEquals( $attribute->getKey(), 'class' );
		$this->assertEquals( $attribute->getText(), 'class="footer"' );
		$attribute = $attribute->changeValue( 'header' );
		$this->assertEquals( $attribute->getValue(), 'header' );
		$this->assertEquals( $attribute->getText(), 'class="header"' );
		$attribute = $attribute->changeKey( 'id' );
		$this->assertEquals( $attribute->getKey(), 'id' );
		$this->assertEquals( $attribute->getText(), 'id="header"' );
	}
}
