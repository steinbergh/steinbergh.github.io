<?php
$city = $_GET['city'];
?>

<h1>Welcome to Population Data Online!</h1>

<?php

$connection = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('day-4-exercises');

if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}

if ($connection) {
  $result = mysql_query('SELECT city_name, population FROM population');
  // Another way to write it $result = mysql_query('SELECT city_name, population FROM population WHERE city_name ==' . $city);

while ($row = mysql_fetch_array($result)) {
	if ($city == $row['city_name']) {
    echo 'The population of <strong>' . $row['city_name'] . '</strong> is '  . $row['population']  . '.<br>';
	}
  }
}

if (!$city) {
	echo 'Please add a valid city name to your URL. Try <a href="population.php?city=Philadelphia">Philadelphia</a>.';
}
?>

<h3>Or select from the following:</h3>

<ol>
<?php
$result = mysql_query('SELECT city_name, population FROM population');
while ($row = mysql_fetch_array($result)) {
	print '<li>what about <a href ="population.php?city=' . $row['city_name'] . '">' . $row['city_name'] . '</a>?</li>';
  }
?>
</ol>


<?php
mysql_close($connection);
?>
