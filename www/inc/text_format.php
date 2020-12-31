<?PHP

function shorten($var_name,$var_length) {
	if(strlen($var_name) > $var_length -1) {
		return substr($var_name,0,$var_length); 
	} else {
		return $var_name; 
	} 
}

function br2nl($string)
{
	/* Remove XHTML linebreak tags. */
	$string = str_replace("<br />","",$string);
	/* Remove HTML 4.01 linebreak tags. */
	$string = str_replace("<br>","",$string);
	/* Return the result. */
	return $string;
}

?>