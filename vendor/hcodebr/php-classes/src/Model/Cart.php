<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;


class Cart extends Model{

	public function save(){
		$sql = new Sql();

		$results = $sql->select("CALL sp_carts_save(:idcart, :dessessionid, :iduser,:deszipcode,:vlfreight,:nrdays)",[
			':idcart'=>$this->getidcart(), 
			':dessessionid'=>$this->getdessessionid(), 
			':iduser'=>$this->getiduser(), 
			':deszipcode'=>$this->getdeszipcode(), 
			':vlfreight'=>$this->getvlfreight(), 
			':nrdays'=>$this->getnrdays()
		]);

 	}

	public function get($idcategory){

	}

	public function delete(){

	}


}


 ?>