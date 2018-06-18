<?php
	class NightsWatch implements IFighter
	{
		private $array = array();
		public function recruit($ft) {
			$this->array[] = $ft;
		}
		function fight() {
			foreach ($this->array as $fighter) {
				if (method_exists(($fighter), 'fight')) {
					$fighter->fight();
				}
			}
		}
	}
?>