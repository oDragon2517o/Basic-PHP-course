<?php
	namespace Skarsx\CourseProject\User;

	class User
	{
		private ?int $id;
		public function __construct($id)
		{
			$this->id = $id;
		}
		public function getId(){
			echo $this->id;
		}
	}
