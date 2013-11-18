<?php 

	global $page;
	
	echo "page je: $page";

	// prihlasovaci form
	echo "<form action=\"index.php\" method=\"post\">";
	echo "<input type=\"hidden\" name=\"page\" value=\"login_go\" />";
		
	echo "Login: <input type=\"text\" name=\"user[login]\" value=\"\" />";
	echo "Password: <input type=\"password\" name=\"user[password]\" value=\"\" />";
	
	echo "<input type=\"submit\" value=\"Přihlásit\" />";
	echo "</form>";

?>