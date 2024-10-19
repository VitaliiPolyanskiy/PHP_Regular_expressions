<?php

if(isset($_REQUEST["time"]))
{
	$time = $_REQUEST["time"];
	if (preg_match("/^(([01][0-9])|(2[0-3])):[0-5][0-9]:[0-5][0-9]$/", $time))
	{
	    echo "Время введено правильно!";
	}
	else
	{
	    echo "Время введено некорректно!";
	}
}
else
{
    echo "<form method='GET'>Введите время (часы:минуты:секунды)<input type='text' name='time'/><input type='submit' value='Click Me' /></form>";
}
?>