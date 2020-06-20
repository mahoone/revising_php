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
            echo 'Nie Dziekujemy';	
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