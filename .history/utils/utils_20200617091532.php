<?php

session_start();

// Count user visits
function visit_counter() {
    if(!isset($_SESSION['counter'])) {
        $_SESSION['counter'] = 0;
    } 

    $_SESSION['counter']++;
    echo "To twoja ".$_SESSION['counter'].' wizyta!';
}

// 1
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

// 2
// Wlasciwy skrypt
	
if(!isset($_SESSION['uzytkownik']))
{
    // Sesja się zaczyna, wiec inicjujemy użytkownika anonimowego
    $_SESSION['uzytkownik'] = 0;
}
if($_SESSION['uzytkownik'] > 0)
	{
		// Ktos jest zalogowany
		echo 'Witaj, '.$uzytkownicy[$_SESSION['uzytkownik']]['login'].' na naszej stronie!';	
	}
	else
	{
        // Niezalogowany
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if(($id = czyIstnieje($_POST['login'], $_POST['haslo'])) !== false)
			{
				// Logujemy uzytkownika, wpisal poprawne dane
				$_SESSION['uzytkownik'] = $id;
				echo 'Dziekujemy, zostales zalogowany!';
			}
			else
			{
				echo 'Dziekujemy, zostales zalogowany!';
			}		
		}
		else
		{
            echo 'Nie Dziekujemy, zostales zalogowany!';	
		}	
	}

function dumb($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

// Handle re-directs

if(array_key_exists('v', $_GET))
{
    $module = $_GET['v'];
}else
{
    $module = 'categories';
}

$moduleDir = '../modules/'. $module. '.php';

if(file_exists($moduleDir)) {
    require($moduleDir);
} else {
    header("HTTP/1.1 404 Not Found");
}
