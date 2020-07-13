<?php

class chatM  extends CI_Model {
    //put your code here
        function __construct() {
        parent::__construct();
    }
    
  public function get_all(){
    if(($handle = fopen("public/discussion.csv", "r")) !== FALSE)
    {      
		$result=array();
		$iter=	0;
        while(($column = fgetcsv($handle, 1000, ',', ',')) !== FALSE)
        {
			array_push($result,$column);
			$iter++;
		}
		return $result;
	}
	
  }
}
