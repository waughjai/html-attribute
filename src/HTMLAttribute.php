<?php

declare( strict_types = 1 );
namespace WaughJ\HTMLAttribute;

class HTMLAttribute
{
	public function __construct( string $key, string $value )
	{
		$this->key = $key;
		$this->value = $value;
	}

	public function __toString()
	{
		return $this->GetText();
	}

	public function getText() : string
	{
		return "{$this->key}=\"$this->value\"";
	}

	public function getKey() : string
	{
		return $this->key;
	}

	public function getValue() : string
	{
		return $this->value;
	}

	public function changeKey( string $new_key ) : HTMLAttribute
	{
		return new HTMLAttribute( $new_key, $this->value );
	}

	public function changeValue( string $new_value ) : HTMLAttribute
	{
		return new HTMLAttribute( $this->key, $new_value );
	}

	private $key;
	private $value;
}
