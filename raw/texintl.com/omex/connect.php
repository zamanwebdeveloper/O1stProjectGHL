<?php
$prefix = "bexs_";

function connect($sql)
{
   // mysql_close('localhost','bengalex_post','123');
	$link= mysql_connect('localhost','bengalco_data','salahuddin2012');
	if (!$link):
		echo "Could not Connect: %s\n", mysql_error();
		exit();
	endif;
	mysql_select_db('bengalco_data', $link);

	$result = mysql_query($sql);
	if (!$result) {
	    die('Could not query:' . mysql_error());
	}
	mysql_close($link);

	return $result;
}
?>