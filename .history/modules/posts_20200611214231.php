<?php
 
 	function ctype($ciag, $zestaw)
 	{
 		for($i = 0; $i < strlen($ciag); $i++)
 		{
 			if(strpos($zestaw, $ciag{$i}) === FALSE)
 			{
 				return false;
 			}
 		}
 		return true;		
 	} // end ctype();
 
     echo ctype('555-1234', '0123456789-');
?>