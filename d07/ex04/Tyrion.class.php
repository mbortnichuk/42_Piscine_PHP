<?php
	 class Tyrion extends Lannister
	 {
		public function __construct () {
			$this->name = "Tyrion";
		}
	 		public function sleepWith ($person) {
				if ($person->name === "Jaime" || $person->name === "Cersei")
					print ("Not even if I'm drunk !" . PHP_EOL);
				else
					print("Let's do this." . PHP_EOL);
		}
	 } 	
?>