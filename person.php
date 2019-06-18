<?php

class Person{
	public $persons;

	public function __construct(){
		$this->setPerson();
	}

	public function setPerson() {

		$this->persons = array(
			array( 
				'id' => 1,
				'name' => 'Jewel',
				'age' => 29,
				'photo' =>'',
				'email' => ''
			),
			array( 
				'id' => 2,
				'name' => 'Rana',
				'age' => 30
			),
			array( 
				'id' => 3,
				'name' => 'Polin',
				'age' => 31
			),
			array( 
				'id' => 4,
				'name' => 'Asif',
				'age' => 32
			)
		);
	}

	public function getAll( $id ='' ) {
		$persons = $this->persons;

		if(!empty($id) ) {
			foreach( $persons as $key => $value ) {

				// print_r($value['id']);
				if ( $value['id'] === $id ){
					return $persons[$key];
				}
			}
		} else {
			return $persons;
		}
	}
	public function name( $id ) {

		$persons = $this->persons;

		foreach( $persons as $key => $value ) {

			// print_r($value['id']);
			if ( $value['id'] === $id ){
				return "Your Name is : ". $value['name'].". " . $this->age( $id );
			}
		}
	}

	function age( $id ){
		$persons = $this->persons;

		foreach( $persons as $key => $value ) {

			// print_r($value['id']);
			if ( $value['id'] === $id ){
				return "Your age is: " . $value['age']."<br/>";
			}
		}
	}

	function email( $id ){
		$persons = $this->persons;

		foreach( $persons as $key => $value ) {

			// print_r($value['id']);
			if ( $value['id'] === $id ){
				return "Your email address is : " . $value['email']."<br/>";
			}
		}
	}
}