<?php
/*****************************************************************************
question1.php
Assume that the included dbconnection.php file successfully connects to a mysql database

1) What does this file do?
This file performs a simple login. It verifies if a user exists in the database with the same username and password combination as one submitted by a user via a form. If they do, the user's logged in status is changed to true, and the user is told that they are logged in. If not, the user is presented with a form so that they may attempt to log in once more. See code below for line-by-line, commented explanations.

2) What are some ways that this file could/should be improved?  (List as many as you can think of)

Possible improvements:
	1. For security reasons, use a POST method instead of a GET method. POST will protect a user's confidential information (such as username and password) moreso than a GET method; with a POST method, parameters are not stored in browser history or in web server logs.

	2. Consider using JavaScript/jQuery on the client-side to validate the form fields. With JavaScript, the error is caught before form submission making for better UI. In addition, also having the validations on the server-side prevents someone bypassing the validations if they do not have JavaScript support in their web browser or if they have disabled it.

	3. Validate the password input using both client-side and server-side validation.

	4. According to the PHP Manual, mysql_num_rows and mysql_query are deprecated as of PHP 5.5.0. Instead, I would consider using MySQLi or PDO extensions. PDO might be the better choice primarily because it has several database drivers; you can use the same code to connect to a number of databases without needing to use database specific extensions.

	5. Use mysql_real_escape_string() to prevent SQL injection. The function adds an escape character before potentially dangerous characters in a string passed to the function (SQL injection attacks are often completed using the ' character). However, if you decide to use MySQLi or PDO extensions, use prepared statements to prevent database injection.

*****************************************************************************/

/* Connect to mysql database*/
include('_includes/dbconnection.php');

/* User is not logged in */
$loggedin = false;

/* Form is submitted ->
if the username field is not null, grab username entered*/
if (isset($_GET['username'])) {
	/* define database query
	  select all from table users where the username and password submitted on the form are equal to the username and password of a user
	*/
	$sql = "SELECT * FROM users WHERE username='".$_GET['username']."' AND password='".$_GET['password']."'";

	/* send query to currently active database */
	$res = mysql_query($sql);

	/* If there is a match, then mysql_num_rows will return 1 - there should only be 1 user with the same username/password combination. Since 1 = true, if mysql_num_rows($res) is equal to true, the user has submitted the correct login information. */
	if (mysql_num_rows($res)) {
	/* Change value of loggedin to reflect login success */
		$loggedin = true;
	}
}

/* If the user is loggedin, return html telling them they are logged in */
if ($loggedin) {
	echo '<p>You\'re logged in</p>';
} else {
	/* If they are not logged in, return form to attempt login once more */
	?>
	<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
		<div>Username: <input type="text" name="username" /></div>
		<div>Password: <input type="password" name="password" /></div>
		<input type="submit" value="Log In" />
	</form>
	<?php
}
?>
