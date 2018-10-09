<?php

use PHPUnit\Framework\TestCase;

class AttributeTest extends TestCase
{
	public function testIsThereAnySyntaxError()
	{
		$attribute = new WaughJ\Attribute\Attribute( 'something', 'other' );
		$this->assertTrue( is_object( $attribute ) );
	}

	public function testIsAttributeHTMLCorrect()
	{
		$attribute = new WaughJ\Attribute\Attribute( 'class', 'footer' );
		$this->assertEquals( $attribute->GetText(), 'class="footer"' );
	}
}
