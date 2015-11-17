<?php
	namespace problem_class\base;
    class problem {
    	// Problem type ("Debug is used to output a raw IO page.")
    	protected $type = "Debug";
		// Traceback ("Used to look through the lesson files to find this problem.") (Lesson files will be hard-coded through a JSON file)
		public $traceback = "";
		
		// Questions & Parsed Answers
		
		function __construct($traceback_String, $array) {
			$traceback = $traceback_String;
			
		}
    }
	class question {
		
	}
	class awnser {
		
	}
	class script {
		
	}
?>