<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "b3d9a1a10dbc72", "b3d3adf3", "heroku_f68a7618dec347c");
		return $this->con;
	}
}

?>
