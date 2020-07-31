<?php

/* ---------------------------------------------------- */
class A {
	protected $text;

	public function secret(){
		echo "This is a secret";
	}

	public function __construct() {
		$this->text = 'Hello';	
	}
}

/* ---------------------------------------------------- */
class B extends A {
	public $bar;

	public function __construct() {
		echo esc_html( $this->text );
	}
}


/* ---------------------------------------------------- */
new B();
