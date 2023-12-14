<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav2 = array();
$tdatav2[".ShortName"] = "v2";

$tdatav2[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav2[".originalPagesByType"] = $tdatav2[".pagesByType"];
$tdatav2[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav2[".originalPages"] = $tdatav2[".pages"];
$tdatav2[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav2[".originalDefaultPages"] = $tdatav2[".defaultPages"];


//	field labels
$fieldLabelsv2 = array();
$pageTitlesv2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv2["English"] = array();
}

/*
//	search fields
$tdatav2[".searchFields"] = array();

// all search fields
$tdatav2[".allSearchFields"] = array();

// good like search fields
$tdatav2[".googleLikeFields"] = array();
*/

/*
$tdatav2[".dashElements"] = array();

*/
$tdatav2[".shortTableName"] = "v2";
$tdatav2[".entityType"] = 4;




$tdatav2[".hasEvents"] = false;


$tdatav2[".tableType"] = "dashboard";



$tdatav2[".addPageEvents"] = false;

$tdatav2[".isUseAjaxSuggest"] = true;

$tables_data["v2"]=&$tdatav2;
$field_labels["v2"] = &$fieldLabelsv2;
$page_titles["v2"] = &$pageTitlesv2;

?>