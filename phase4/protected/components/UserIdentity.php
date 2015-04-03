<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	/*
	 * $this->username the email address input by user
	* $this->password  the password input by user
	*  */
	
	public function authenticate() {
		$username = strtolower($this->username);
		$user=User::model()->find('LOWER(email_address)=?', array($username));
		if ($user == null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} else {
			if (!$user->validatePassword($this->password)) {
				$this->errorCode = self::ERROR_PASSWORD_INVALID;
			}else {
				$this->_id = $user->id;
				$this->username = $user->email_address;
				$this->errorCode = self::ERROR_NONE;	
			}
		}
		return $this->errorCode === self::ERROR_NONE;
	}
	
	public function getId() {
		return $this->_id;
	}
}