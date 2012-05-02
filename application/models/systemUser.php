<?php
namespace models;

/**
 * Encryption key adapted from @Joseph Wynn algorithm
 * @Entity
 * @Table(name="users")
 * @author John O. Adams
 */

class SystemUser {
	/**
	 * Encryption key used as for password hashing
	 * @static
	 */
	private static $encryption_key = '5p(TWrzR}KN|3nGV+6D#8Evkdx:]K"]azW*!A7:P5<84;{6kB)c6>D{="]RP/CC';

	/**
	 * @Id
	 * @Column(name="usersID", type="integer", length=20, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @Column(name="userName",type="string", length=32, unique=true, nullable=false)
	 */
	private $userName;

	/**
	 * @Column(name="userPassword",type="string", length=255, nullable=false)
	 */
	private $userPassword;

	/**
	 * @Column(name="userRights",type="integer", length=1, nullable=false)
	 */
	private $userRights;

	public function getId() {
		return $this -> id;
	}

	public function setId($id) { $this -> id = $id;
	}

	public function setUserName($userName) { $this -> userName = $userName;
	}

	public function getUserName() {
		return $this -> userName;
	}

	public function setPassword($userPassword) {
		$encryptedPassword = self::encryptPassword($userPassword);

		$this -> userPassword = $encryptedPassword;
	}

	/**
	 * Encrypt a Password
	 *
	 * @static
	 * @access	public
	 * @param	string	$password
	 * @return	void
	 */
	public static function encryptPassword($password) {
		return sha1($userPassword . self::$encryption_key);
	}

	public function getPassword() {
		return $this -> userPassword;
	}

	public function getUserRights() {
		return $this -> userRights;
	}

	public function setUserRights($useRights) { $this -> userRights = $userRights;
	}

}
