<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use application\models\entities\E_users;

class M_users extends MY_Model(){

	function __construct() {
		parent::__construct();
	}

	public function login() {

		//working with a user defined query
		/*$query = $this->em->createQuery('SELECT u.id,u.username,u.access_level FROM models\SystemUser u WHERE u.username = :name AND u.password= :secret');
		$query->setParameter('name', $this -> input -> post('username'));
		$query->setParameter('secret', $this -> input -> post('secret'));
		$user = $query->getResult(); */
			
		//Working with an object of the entity
		$user = $this->em->getRepository('models\M_users')
		->findOneBy(array('username' => $this -> input -> post('username'), 'password' => $this -> input -> post('secret')));
			
			
		//if ($user[0]['id'] >0) {//for array based
		if ($user) {
			//$user = $this->em->find('models\SystemUser',$user[0]['id']); //pass to the object

			$email = $user -> getUsername();
			$userRights=$user->getAccessLevel();

			$newdata = array('email' => $email, 'logged_in' => TRUE);

			$this -> session -> set_userdata($newdata);



		} 
		return $this->response='ok';

	}

}


?>