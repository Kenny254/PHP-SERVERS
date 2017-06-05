<?php require_once('auth.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$string		= ".";
    $maxlength	= 400; // sets a maximum number of words to render
    $extension	= " ...";
    
    function truncate_string ($string, $maxlength, $extension) {
    
        // Set the replacement for the "string break" in the wordwrap function
        $cutmarker = "**cut_here**";
    
        // Checking if the given string is longer than $maxlength
        if (strlen($string) > $maxlength) {
    
    	    // Using wordwrap() to set the cutmarker
    	    // NOTE: wordwrap (PHP 4 >= 4.0.2, PHP 5)
    	    $string = wordwrap($string, $maxlength, $cutmarker);
    
    	    // Exploding the string at the cutmarker, set by wordwrap()
    	    $string = explode($cutmarker, $string);
    
    	    // Adding $extension to the first value of the array $string, returned by explode()
    	    $string = $string[0] . $extension;
        }
    
        // returning $string
        return $string;
    
    }
    
    // This Will output:
    // "Truncates a string at a certain position without &#65533;cutting&#65533; ..."
    echo truncate_string ($string, $maxlength, $extension);

}

$maxRows_dev = 6;
$pageNum_dev = 0;
if (isset($_GET['pageNum_dev'])) {
  $pageNum_dev = $_GET['pageNum_dev'];
}
$startRow_dev = $pageNum_dev * $maxRows_dev;

mysql_select_db($database_Data, $Data);
$query_dev = "SELECT * FROM dev ORDER BY id DESC";
$query_limit_dev = sprintf("%s LIMIT %d, %d", $query_dev, $startRow_dev, $maxRows_dev);
$dev = mysql_query($query_limit_dev, $Data) or die(mysql_error());
$row_dev = mysql_fetch_assoc($dev);

if (isset($_GET['totalRows_dev'])) {
  $totalRows_dev = $_GET['totalRows_dev'];
} else {
  $all_dev = mysql_query($query_dev);
  $totalRows_dev = mysql_num_rows($all_dev);
}
$totalPages_dev = ceil($totalRows_dev/$maxRows_dev)-1;

mysql_select_db($database_Data, $Data);
$query_dev_records = "SELECT * FROM dev ORDER BY id DESC";
$dev_records = mysql_query($query_dev_records, $Data) or die(mysql_error());
$row_dev_records = mysql_fetch_assoc($dev_records);
$totalRows_dev_records = mysql_num_rows($dev_records);
?>
