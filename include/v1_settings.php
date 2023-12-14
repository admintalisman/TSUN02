<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav1 = array();
$tdatav1[".ShortName"] = "v1";

$tdatav1[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav1[".originalPagesByType"] = $tdatav1[".pagesByType"];
$tdatav1[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav1[".originalPages"] = $tdatav1[".pages"];
$tdatav1[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav1[".originalDefaultPages"] = $tdatav1[".defaultPages"];


//	field labels
$fieldLabelsv1 = array();
$pageTitlesv1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv1["English"] = array();
}

/*
//	search fields
$tdatav1[".searchFields"] = array();

// all search fields
$tdatav1[".allSearchFields"] = array();

// good like search fields
$tdatav1[".googleLikeFields"] = array();
*/

/*
$tdatav1[".dashElements"] = array();

*/
$tdatav1[".shortTableName"] = "v1";
$tdatav1[".entityType"] = 4;





include_once(getabspath("include/v1_events.php"));
$tdatav1[".hasEvents"] = true;


$tdatav1[".tableType"] = "dashboard";



$tdatav1[".addPageEvents"] = false;

$tdatav1[".isUseAjaxSuggest"] = true;

$tables_data["v1"]=&$tdatav1;
$field_labels["v1"] = &$fieldLabelsv1;
$page_titles["v1"] = &$pageTitlesv1;

?>