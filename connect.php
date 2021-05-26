
<?php 
define('DOMAIN', 'http://localhost/RFT/');
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'menhelydb');
define('DB_CHARSET', 'utf8');

define('BASE_PATH', __DIR__);

define('MAX_UPLOAD_SIZE', 15);

function getConnection() {
	$connection = new PDO(DB_TYPE.':host='.DB_HOST.'; port=3306; dbname='.DB_NAME.';',DB_USER, DB_PASS);
	$connection->exec("SET NAMES '".DB_CHARSET."'");
	return $connection;
}

function dbClose($connection)
{
    $connection = null;
}

function getRecord($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetch(PDO::FETCH_ASSOC) : [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}

function getList($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetchAll(PDO::FETCH_ASSOC) : [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}

function executeDML($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$statement->closeCursor();
	$connection = null;
	return $success;
}

function getField($queryString, $queryParams = []) {
	$connection = getConnection();
	$statement = $connection->prepare($queryString);
	$success = $statement->execute($queryParams);
	$result = $success ? $statement->fetch()[0]: [];
	$statement->closeCursor();
	$connection = null;
	return $result;
}
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
function print_form_errors($input, $errors)
{
    if (array_key_exists($input, $errors)) {
        foreach ($errors[$input] as $error) {
            echo "<p class='input-error'>$error</p>";
        }
    }
}

function redirect($page, $message = '')
{
	$url = DOMAIN . $page . ($message == '' ? '' : '?msg=' . $message);
	header("Location: $url");
	die();
}
function route($params = [])
{
	$i = 0;
	$url = "?";
	foreach ($params as $key => $value) {
		if ($i == 0) {
			$url .= "$key=$value";
			$i++;
		} else {
			$url .= "&$key=$value";
		}
	}
	return $url;
}



?>