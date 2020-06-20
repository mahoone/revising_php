<?php
 
	$uzytkownicy = array(1 =>
		array('login' => 'user1', 'haslo' => sha1('ppp')),
		array('login' => 'user2', 'haslo' => sha1('ddd')),
		array('login' => 'user3', 'haslo' => sha1('fff'))
	);
	
	function czyIstnieje($login, $haslo)
	{
		global $uzytkownicy;
		
		$haslo = sha1($haslo);
		
		foreach($uzytkownicy as $id => $dane)
		{
			if($dane['login'] == $login && $dane['haslo'] == $haslo)
			{
				// O, jest ktos taki - zwroc jego ID
				return $id;
			}
		}
		// Jeżeli doszedłeś aż tutaj, to takiego użytkownika nie ma
		return false;
	} // end czyIstnieje();