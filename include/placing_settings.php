<?php
$tdataplacing = array();
$tdataplacing[".searchableFields"] = array();
$tdataplacing[".ShortName"] = "placing";
$tdataplacing[".OwnerID"] = "";
$tdataplacing[".OriginalTable"] = "PLACING";


$tdataplacing[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataplacing[".originalPagesByType"] = $tdataplacing[".pagesByType"];
$tdataplacing[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataplacing[".originalPages"] = $tdataplacing[".pages"];
$tdataplacing[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataplacing[".originalDefaultPages"] = $tdataplacing[".defaultPages"];

//	field labels
$fieldLabelsplacing = array();
$fieldToolTipsplacing = array();
$pageTitlesplacing = array();
$placeHoldersplacing = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsplacing["English"] = array();
	$fieldToolTipsplacing["English"] = array();
	$placeHoldersplacing["English"] = array();
	$pageTitlesplacing["English"] = array();
	$fieldLabelsplacing["English"]["PLCID"] = "PLCID";
	$fieldToolTipsplacing["English"]["PLCID"] = "";
	$placeHoldersplacing["English"]["PLCID"] = "";
	$fieldLabelsplacing["English"]["PPLCID"] = "PPLCID";
	$fieldToolTipsplacing["English"]["PPLCID"] = "";
	$placeHoldersplacing["English"]["PPLCID"] = "";
	$fieldLabelsplacing["English"]["MPLCID"] = "MPLCID";
	$fieldToolTipsplacing["English"]["MPLCID"] = "";
	$placeHoldersplacing["English"]["MPLCID"] = "";
	$fieldLabelsplacing["English"]["RPLCID"] = "RPLCID";
	$fieldToolTipsplacing["English"]["RPLCID"] = "";
	$placeHoldersplacing["English"]["RPLCID"] = "";
	$fieldLabelsplacing["English"]["BSMID"] = "BSMID";
	$fieldToolTipsplacing["English"]["BSMID"] = "";
	$placeHoldersplacing["English"]["BSMID"] = "";
	$fieldLabelsplacing["English"]["KODECAB"] = "KODECAB";
	$fieldToolTipsplacing["English"]["KODECAB"] = "";
	$placeHoldersplacing["English"]["KODECAB"] = "";
	$fieldLabelsplacing["English"]["MKTNO"] = "MKTNO";
	$fieldToolTipsplacing["English"]["MKTNO"] = "";
	$placeHoldersplacing["English"]["MKTNO"] = "";
	$fieldLabelsplacing["English"]["MKTURUT"] = "MKTURUT";
	$fieldToolTipsplacing["English"]["MKTURUT"] = "";
	$placeHoldersplacing["English"]["MKTURUT"] = "";
	$fieldLabelsplacing["English"]["PLCNO"] = "PLCNO";
	$fieldToolTipsplacing["English"]["PLCNO"] = "";
	$placeHoldersplacing["English"]["PLCNO"] = "";
	$fieldLabelsplacing["English"]["URUTNO"] = "URUTNO";
	$fieldToolTipsplacing["English"]["URUTNO"] = "";
	$placeHoldersplacing["English"]["URUTNO"] = "";
	$fieldLabelsplacing["English"]["QSNO"] = "QSNO";
	$fieldToolTipsplacing["English"]["QSNO"] = "";
	$placeHoldersplacing["English"]["QSNO"] = "";
	$fieldLabelsplacing["English"]["QSURUT"] = "QSURUT";
	$fieldToolTipsplacing["English"]["QSURUT"] = "";
	$placeHoldersplacing["English"]["QSURUT"] = "";
	$fieldLabelsplacing["English"]["CANO"] = "CANO";
	$fieldToolTipsplacing["English"]["CANO"] = "";
	$placeHoldersplacing["English"]["CANO"] = "";
	$fieldLabelsplacing["English"]["CAURUT"] = "CAURUT";
	$fieldToolTipsplacing["English"]["CAURUT"] = "";
	$placeHoldersplacing["English"]["CAURUT"] = "";
	$fieldLabelsplacing["English"]["SFTNO"] = "SFTNO";
	$fieldToolTipsplacing["English"]["SFTNO"] = "";
	$placeHoldersplacing["English"]["SFTNO"] = "";
	$fieldLabelsplacing["English"]["ENDSNO"] = "ENDSNO";
	$fieldToolTipsplacing["English"]["ENDSNO"] = "";
	$placeHoldersplacing["English"]["ENDSNO"] = "";
	$fieldLabelsplacing["English"]["OBLIGEEID"] = "OBLIGEEID";
	$fieldToolTipsplacing["English"]["OBLIGEEID"] = "";
	$placeHoldersplacing["English"]["OBLIGEEID"] = "";
	$fieldLabelsplacing["English"]["BANKID"] = "BANKID";
	$fieldToolTipsplacing["English"]["BANKID"] = "";
	$placeHoldersplacing["English"]["BANKID"] = "";
	$fieldLabelsplacing["English"]["PLCTTG"] = "PLCTTG";
	$fieldToolTipsplacing["English"]["PLCTTG"] = "";
	$placeHoldersplacing["English"]["PLCTTG"] = "";
	$fieldLabelsplacing["English"]["MKTDATE"] = "MKTDATE";
	$fieldToolTipsplacing["English"]["MKTDATE"] = "";
	$placeHoldersplacing["English"]["MKTDATE"] = "";
	$fieldLabelsplacing["English"]["PLCDATE"] = "PLCDATE";
	$fieldToolTipsplacing["English"]["PLCDATE"] = "";
	$placeHoldersplacing["English"]["PLCDATE"] = "";
	$fieldLabelsplacing["English"]["SDATE"] = "SDATE";
	$fieldToolTipsplacing["English"]["SDATE"] = "";
	$placeHoldersplacing["English"]["SDATE"] = "";
	$fieldLabelsplacing["English"]["EDATE"] = "EDATE";
	$fieldToolTipsplacing["English"]["EDATE"] = "";
	$placeHoldersplacing["English"]["EDATE"] = "";
	$fieldLabelsplacing["English"]["STATUSCLOSE"] = "STATUSCLOSE";
	$fieldToolTipsplacing["English"]["STATUSCLOSE"] = "";
	$placeHoldersplacing["English"]["STATUSCLOSE"] = "";
	$fieldLabelsplacing["English"]["POLICYTYPE"] = "POLICYTYPE";
	$fieldToolTipsplacing["English"]["POLICYTYPE"] = "";
	$placeHoldersplacing["English"]["POLICYTYPE"] = "";
	$fieldLabelsplacing["English"]["DAYSNUM"] = "DAYSNUM";
	$fieldToolTipsplacing["English"]["DAYSNUM"] = "";
	$placeHoldersplacing["English"]["DAYSNUM"] = "";
	$fieldLabelsplacing["English"]["DAYSBASIS"] = "DAYSBASIS";
	$fieldToolTipsplacing["English"]["DAYSBASIS"] = "";
	$placeHoldersplacing["English"]["DAYSBASIS"] = "";
	$fieldLabelsplacing["English"]["ISTBA"] = "ISTBA";
	$fieldToolTipsplacing["English"]["ISTBA"] = "";
	$placeHoldersplacing["English"]["ISTBA"] = "";
	$fieldLabelsplacing["English"]["ISEXCLUSIVE"] = "ISEXCLUSIVE";
	$fieldToolTipsplacing["English"]["ISEXCLUSIVE"] = "";
	$placeHoldersplacing["English"]["ISEXCLUSIVE"] = "";
	$fieldLabelsplacing["English"]["REFFNO"] = "REFFNO";
	$fieldToolTipsplacing["English"]["REFFNO"] = "";
	$placeHoldersplacing["English"]["REFFNO"] = "";
	$fieldLabelsplacing["English"]["STATUS"] = "STATUS";
	$fieldToolTipsplacing["English"]["STATUS"] = "";
	$placeHoldersplacing["English"]["STATUS"] = "";
	$fieldLabelsplacing["English"]["IDBS"] = "IDBS";
	$fieldToolTipsplacing["English"]["IDBS"] = "";
	$placeHoldersplacing["English"]["IDBS"] = "";
	$fieldLabelsplacing["English"]["KODESHARIA"] = "KODESHARIA";
	$fieldToolTipsplacing["English"]["KODESHARIA"] = "";
	$placeHoldersplacing["English"]["KODESHARIA"] = "";
	$fieldLabelsplacing["English"]["SECDATE"] = "SECDATE";
	$fieldToolTipsplacing["English"]["SECDATE"] = "";
	$placeHoldersplacing["English"]["SECDATE"] = "";
	$fieldLabelsplacing["English"]["SECUSER"] = "SECUSER";
	$fieldToolTipsplacing["English"]["SECUSER"] = "";
	$placeHoldersplacing["English"]["SECUSER"] = "";
	$fieldLabelsplacing["English"]["SECROLE"] = "SECROLE";
	$fieldToolTipsplacing["English"]["SECROLE"] = "";
	$placeHoldersplacing["English"]["SECROLE"] = "";
	if (count($fieldToolTipsplacing["English"]))
		$tdataplacing[".isUseToolTips"] = true;
}


	$tdataplacing[".NCSearch"] = true;



$tdataplacing[".shortTableName"] = "placing";
$tdataplacing[".nSecOptions"] = 0;

$tdataplacing[".mainTableOwnerID"] = "";
$tdataplacing[".entityType"] = 0;
$tdataplacing[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdataplacing[".strOriginalTableName"] = "PLACING";

	



$tdataplacing[".showAddInPopup"] = false;

$tdataplacing[".showEditInPopup"] = false;

$tdataplacing[".showViewInPopup"] = false;

$tdataplacing[".listAjax"] = false;
//	temporary
//$tdataplacing[".listAjax"] = false;

	$tdataplacing[".audit"] = false;

	$tdataplacing[".locking"] = false;


$pages = $tdataplacing[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplacing[".edit"] = true;
	$tdataplacing[".afterEditAction"] = 1;
	$tdataplacing[".closePopupAfterEdit"] = 1;
	$tdataplacing[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplacing[".add"] = true;
$tdataplacing[".afterAddAction"] = 1;
$tdataplacing[".closePopupAfterAdd"] = 1;
$tdataplacing[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplacing[".list"] = true;
}



$tdataplacing[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplacing[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplacing[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplacing[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplacing[".printFriendly"] = true;
}



$tdataplacing[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplacing[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplacing[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplacing[".isUseAjaxSuggest"] = true;





$tdataplacing[".ajaxCodeSnippetAdded"] = false;

$tdataplacing[".buttonsAdded"] = false;

$tdataplacing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplacing[".isUseTimeForSearch"] = false;


$tdataplacing[".badgeColor"] = "4682B4";


$tdataplacing[".allSearchFields"] = array();
$tdataplacing[".filterFields"] = array();
$tdataplacing[".requiredSearchFields"] = array();

$tdataplacing[".googleLikeFields"] = array();
$tdataplacing[".googleLikeFields"][] = "PLCID";
$tdataplacing[".googleLikeFields"][] = "PPLCID";
$tdataplacing[".googleLikeFields"][] = "MPLCID";
$tdataplacing[".googleLikeFields"][] = "RPLCID";
$tdataplacing[".googleLikeFields"][] = "BSMID";
$tdataplacing[".googleLikeFields"][] = "KODECAB";
$tdataplacing[".googleLikeFields"][] = "MKTNO";
$tdataplacing[".googleLikeFields"][] = "MKTURUT";
$tdataplacing[".googleLikeFields"][] = "PLCNO";
$tdataplacing[".googleLikeFields"][] = "URUTNO";
$tdataplacing[".googleLikeFields"][] = "QSNO";
$tdataplacing[".googleLikeFields"][] = "QSURUT";
$tdataplacing[".googleLikeFields"][] = "CANO";
$tdataplacing[".googleLikeFields"][] = "CAURUT";
$tdataplacing[".googleLikeFields"][] = "SFTNO";
$tdataplacing[".googleLikeFields"][] = "ENDSNO";
$tdataplacing[".googleLikeFields"][] = "OBLIGEEID";
$tdataplacing[".googleLikeFields"][] = "BANKID";
$tdataplacing[".googleLikeFields"][] = "PLCTTG";
$tdataplacing[".googleLikeFields"][] = "MKTDATE";
$tdataplacing[".googleLikeFields"][] = "PLCDATE";
$tdataplacing[".googleLikeFields"][] = "SDATE";
$tdataplacing[".googleLikeFields"][] = "EDATE";
$tdataplacing[".googleLikeFields"][] = "STATUSCLOSE";
$tdataplacing[".googleLikeFields"][] = "POLICYTYPE";
$tdataplacing[".googleLikeFields"][] = "DAYSNUM";
$tdataplacing[".googleLikeFields"][] = "DAYSBASIS";
$tdataplacing[".googleLikeFields"][] = "ISTBA";
$tdataplacing[".googleLikeFields"][] = "ISEXCLUSIVE";
$tdataplacing[".googleLikeFields"][] = "REFFNO";
$tdataplacing[".googleLikeFields"][] = "STATUS";
$tdataplacing[".googleLikeFields"][] = "IDBS";
$tdataplacing[".googleLikeFields"][] = "KODESHARIA";
$tdataplacing[".googleLikeFields"][] = "SECDATE";
$tdataplacing[".googleLikeFields"][] = "SECUSER";
$tdataplacing[".googleLikeFields"][] = "SECROLE";



$tdataplacing[".tableType"] = "list";

$tdataplacing[".printerPageOrientation"] = 0;
$tdataplacing[".nPrinterPageScale"] = 100;

$tdataplacing[".nPrinterSplitRecords"] = 40;

$tdataplacing[".geocodingEnabled"] = false;










$tdataplacing[".pageSize"] = 20;

$tdataplacing[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataplacing[".strOrderBy"] = $tstrOrderBy;

$tdataplacing[".orderindexes"] = array();


$tdataplacing[".sqlHead"] = "SELECT PLCID,  	PPLCID,  	MPLCID,  	RPLCID,  	BSMID,  	KODECAB,  	MKTNO,  	MKTURUT,  	PLCNO,  	URUTNO,  	QSNO,  	QSURUT,  	CANO,  	CAURUT,  	SFTNO,  	ENDSNO,  	OBLIGEEID,  	BANKID,  	PLCTTG,  	MKTDATE,  	PLCDATE,  	SDATE,  	EDATE,  	STATUSCLOSE,  	POLICYTYPE,  	DAYSNUM,  	DAYSBASIS,  	ISTBA,  	ISEXCLUSIVE,  	REFFNO,  	STATUS,  	IDBS,  	KODESHARIA,  	SECDATE,  	SECUSER,  	SECROLE";
$tdataplacing[".sqlFrom"] = "FROM `PLACING`";
$tdataplacing[".sqlWhereExpr"] = "";
$tdataplacing[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplacing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplacing[".arrGroupsPerPage"] = $arrGPP;

$tdataplacing[".highlightSearchResults"] = true;

$tableKeysplacing = array();
$tableKeysplacing[] = "PLCID";
$tableKeysplacing[] = "MPLCID";
$tableKeysplacing[] = "RPLCID";
$tableKeysplacing[] = "OBLIGEEID";
$tableKeysplacing[] = "BANKID";
$tdataplacing[".Keys"] = $tableKeysplacing;


$tdataplacing[".hideMobileList"] = array();




//	PLCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PLCID";
	$fdata["GoodName"] = "PLCID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","PLCID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PLCID";

		$fdata["sourceSingle"] = "PLCID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLCID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["PLCID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "PLCID";
//	PPLCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PPLCID";
	$fdata["GoodName"] = "PPLCID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","PPLCID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PPLCID";

		$fdata["sourceSingle"] = "PPLCID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PPLCID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["PPLCID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "PPLCID";
//	MPLCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MPLCID";
	$fdata["GoodName"] = "MPLCID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","MPLCID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MPLCID";

		$fdata["sourceSingle"] = "MPLCID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MPLCID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["MPLCID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "MPLCID";
//	RPLCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RPLCID";
	$fdata["GoodName"] = "RPLCID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","RPLCID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RPLCID";

		$fdata["sourceSingle"] = "RPLCID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RPLCID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["RPLCID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "RPLCID";
//	BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BSMID";
	$fdata["GoodName"] = "BSMID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","BSMID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSMID";

		$fdata["sourceSingle"] = "BSMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSMID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["BSMID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "BSMID";
//	KODECAB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "KODECAB";
	$fdata["GoodName"] = "KODECAB";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","KODECAB");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODECAB";

		$fdata["sourceSingle"] = "KODECAB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KODECAB";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["KODECAB"] = $fdata;
		$tdataplacing[".searchableFields"][] = "KODECAB";
//	MKTNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MKTNO";
	$fdata["GoodName"] = "MKTNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","MKTNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MKTNO";

		$fdata["sourceSingle"] = "MKTNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MKTNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["MKTNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "MKTNO";
//	MKTURUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MKTURUT";
	$fdata["GoodName"] = "MKTURUT";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","MKTURUT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MKTURUT";

		$fdata["sourceSingle"] = "MKTURUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MKTURUT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["MKTURUT"] = $fdata;
		$tdataplacing[".searchableFields"][] = "MKTURUT";
//	PLCNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PLCNO";
	$fdata["GoodName"] = "PLCNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","PLCNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PLCNO";

		$fdata["sourceSingle"] = "PLCNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLCNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["PLCNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "PLCNO";
//	URUTNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "URUTNO";
	$fdata["GoodName"] = "URUTNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","URUTNO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "URUTNO";

		$fdata["sourceSingle"] = "URUTNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "URUTNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["URUTNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "URUTNO";
//	QSNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "QSNO";
	$fdata["GoodName"] = "QSNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","QSNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "QSNO";

		$fdata["sourceSingle"] = "QSNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QSNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["QSNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "QSNO";
//	QSURUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "QSURUT";
	$fdata["GoodName"] = "QSURUT";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","QSURUT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "QSURUT";

		$fdata["sourceSingle"] = "QSURUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QSURUT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["QSURUT"] = $fdata;
		$tdataplacing[".searchableFields"][] = "QSURUT";
//	CANO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CANO";
	$fdata["GoodName"] = "CANO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","CANO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CANO";

		$fdata["sourceSingle"] = "CANO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CANO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["CANO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "CANO";
//	CAURUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CAURUT";
	$fdata["GoodName"] = "CAURUT";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","CAURUT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CAURUT";

		$fdata["sourceSingle"] = "CAURUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAURUT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["CAURUT"] = $fdata;
		$tdataplacing[".searchableFields"][] = "CAURUT";
//	SFTNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SFTNO";
	$fdata["GoodName"] = "SFTNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","SFTNO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SFTNO";

		$fdata["sourceSingle"] = "SFTNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SFTNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["SFTNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "SFTNO";
//	ENDSNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ENDSNO";
	$fdata["GoodName"] = "ENDSNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","ENDSNO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ENDSNO";

		$fdata["sourceSingle"] = "ENDSNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ENDSNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["ENDSNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "ENDSNO";
//	OBLIGEEID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OBLIGEEID";
	$fdata["GoodName"] = "OBLIGEEID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","OBLIGEEID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBLIGEEID";

		$fdata["sourceSingle"] = "OBLIGEEID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGEEID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["OBLIGEEID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "OBLIGEEID";
//	BANKID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "BANKID";
	$fdata["GoodName"] = "BANKID";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","BANKID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BANKID";

		$fdata["sourceSingle"] = "BANKID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BANKID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["BANKID"] = $fdata;
		$tdataplacing[".searchableFields"][] = "BANKID";
//	PLCTTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "PLCTTG";
	$fdata["GoodName"] = "PLCTTG";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","PLCTTG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PLCTTG";

		$fdata["sourceSingle"] = "PLCTTG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLCTTG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1000";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["PLCTTG"] = $fdata;
		$tdataplacing[".searchableFields"][] = "PLCTTG";
//	MKTDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MKTDATE";
	$fdata["GoodName"] = "MKTDATE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","MKTDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "MKTDATE";

		$fdata["sourceSingle"] = "MKTDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MKTDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["MKTDATE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "MKTDATE";
//	PLCDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PLCDATE";
	$fdata["GoodName"] = "PLCDATE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","PLCDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "PLCDATE";

		$fdata["sourceSingle"] = "PLCDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLCDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["PLCDATE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "PLCDATE";
//	SDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SDATE";
	$fdata["GoodName"] = "SDATE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","SDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SDATE";

		$fdata["sourceSingle"] = "SDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["SDATE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "SDATE";
//	EDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "EDATE";
	$fdata["GoodName"] = "EDATE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","EDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "EDATE";

		$fdata["sourceSingle"] = "EDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["EDATE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "EDATE";
//	STATUSCLOSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "STATUSCLOSE";
	$fdata["GoodName"] = "STATUSCLOSE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","STATUSCLOSE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "STATUSCLOSE";

		$fdata["sourceSingle"] = "STATUSCLOSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STATUSCLOSE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["STATUSCLOSE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "STATUSCLOSE";
//	POLICYTYPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "POLICYTYPE";
	$fdata["GoodName"] = "POLICYTYPE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","POLICYTYPE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "POLICYTYPE";

		$fdata["sourceSingle"] = "POLICYTYPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "POLICYTYPE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["POLICYTYPE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "POLICYTYPE";
//	DAYSNUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DAYSNUM";
	$fdata["GoodName"] = "DAYSNUM";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","DAYSNUM");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DAYSNUM";

		$fdata["sourceSingle"] = "DAYSNUM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAYSNUM";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["DAYSNUM"] = $fdata;
		$tdataplacing[".searchableFields"][] = "DAYSNUM";
//	DAYSBASIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DAYSBASIS";
	$fdata["GoodName"] = "DAYSBASIS";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","DAYSBASIS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DAYSBASIS";

		$fdata["sourceSingle"] = "DAYSBASIS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAYSBASIS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["DAYSBASIS"] = $fdata;
		$tdataplacing[".searchableFields"][] = "DAYSBASIS";
//	ISTBA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ISTBA";
	$fdata["GoodName"] = "ISTBA";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","ISTBA");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ISTBA";

		$fdata["sourceSingle"] = "ISTBA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ISTBA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["ISTBA"] = $fdata;
		$tdataplacing[".searchableFields"][] = "ISTBA";
//	ISEXCLUSIVE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ISEXCLUSIVE";
	$fdata["GoodName"] = "ISEXCLUSIVE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","ISEXCLUSIVE");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ISEXCLUSIVE";

		$fdata["sourceSingle"] = "ISEXCLUSIVE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ISEXCLUSIVE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["ISEXCLUSIVE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "ISEXCLUSIVE";
//	REFFNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "REFFNO";
	$fdata["GoodName"] = "REFFNO";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","REFFNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REFFNO";

		$fdata["sourceSingle"] = "REFFNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REFFNO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["REFFNO"] = $fdata;
		$tdataplacing[".searchableFields"][] = "REFFNO";
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","STATUS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "STATUS";

		$fdata["sourceSingle"] = "STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STATUS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["STATUS"] = $fdata;
		$tdataplacing[".searchableFields"][] = "STATUS";
//	IDBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "IDBS";
	$fdata["GoodName"] = "IDBS";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","IDBS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IDBS";

		$fdata["sourceSingle"] = "IDBS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["IDBS"] = $fdata;
		$tdataplacing[".searchableFields"][] = "IDBS";
//	KODESHARIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "KODESHARIA";
	$fdata["GoodName"] = "KODESHARIA";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","KODESHARIA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODESHARIA";

		$fdata["sourceSingle"] = "KODESHARIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KODESHARIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["KODESHARIA"] = $fdata;
		$tdataplacing[".searchableFields"][] = "KODESHARIA";
//	SECDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SECDATE";
	$fdata["GoodName"] = "SECDATE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","SECDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "SECDATE";

		$fdata["sourceSingle"] = "SECDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["SECDATE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "SECDATE";
//	SECUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SECUSER";
	$fdata["GoodName"] = "SECUSER";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","SECUSER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SECUSER";

		$fdata["sourceSingle"] = "SECUSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECUSER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["SECUSER"] = $fdata;
		$tdataplacing[".searchableFields"][] = "SECUSER";
//	SECROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SECROLE";
	$fdata["GoodName"] = "SECROLE";
	$fdata["ownerTable"] = "PLACING";
	$fdata["Label"] = GetFieldLabel("PLACING","SECROLE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SECROLE";

		$fdata["sourceSingle"] = "SECROLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SECROLE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplacing["SECROLE"] = $fdata;
		$tdataplacing[".searchableFields"][] = "SECROLE";


$tables_data["PLACING"]=&$tdataplacing;
$field_labels["PLACING"] = &$fieldLabelsplacing;
$fieldToolTips["PLACING"] = &$fieldToolTipsplacing;
$placeHolders["PLACING"] = &$placeHoldersplacing;
$page_titles["PLACING"] = &$pageTitlesplacing;


changeTextControlsToDate( "PLACING" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["PLACING"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["PLACING"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_placing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PLCID,  	PPLCID,  	MPLCID,  	RPLCID,  	BSMID,  	KODECAB,  	MKTNO,  	MKTURUT,  	PLCNO,  	URUTNO,  	QSNO,  	QSURUT,  	CANO,  	CAURUT,  	SFTNO,  	ENDSNO,  	OBLIGEEID,  	BANKID,  	PLCTTG,  	MKTDATE,  	PLCDATE,  	SDATE,  	EDATE,  	STATUSCLOSE,  	POLICYTYPE,  	DAYSNUM,  	DAYSBASIS,  	ISTBA,  	ISEXCLUSIVE,  	REFFNO,  	STATUS,  	IDBS,  	KODESHARIA,  	SECDATE,  	SECUSER,  	SECROLE";
$proto0["m_strFrom"] = "FROM `PLACING`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "PLCID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto6["m_sql"] = "PLCID";
$proto6["m_srcTableName"] = "PLACING";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PPLCID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto8["m_sql"] = "PPLCID";
$proto8["m_srcTableName"] = "PLACING";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MPLCID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto10["m_sql"] = "MPLCID";
$proto10["m_srcTableName"] = "PLACING";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RPLCID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto12["m_sql"] = "RPLCID";
$proto12["m_srcTableName"] = "PLACING";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BSMID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto14["m_sql"] = "BSMID";
$proto14["m_srcTableName"] = "PLACING";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECAB",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto16["m_sql"] = "KODECAB";
$proto16["m_srcTableName"] = "PLACING";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MKTNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto18["m_sql"] = "MKTNO";
$proto18["m_srcTableName"] = "PLACING";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MKTURUT",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto20["m_sql"] = "MKTURUT";
$proto20["m_srcTableName"] = "PLACING";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PLCNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto22["m_sql"] = "PLCNO";
$proto22["m_srcTableName"] = "PLACING";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "URUTNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto24["m_sql"] = "URUTNO";
$proto24["m_srcTableName"] = "PLACING";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "QSNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto26["m_sql"] = "QSNO";
$proto26["m_srcTableName"] = "PLACING";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "QSURUT",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto28["m_sql"] = "QSURUT";
$proto28["m_srcTableName"] = "PLACING";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CANO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto30["m_sql"] = "CANO";
$proto30["m_srcTableName"] = "PLACING";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CAURUT",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto32["m_sql"] = "CAURUT";
$proto32["m_srcTableName"] = "PLACING";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SFTNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto34["m_sql"] = "SFTNO";
$proto34["m_srcTableName"] = "PLACING";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ENDSNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto36["m_sql"] = "ENDSNO";
$proto36["m_srcTableName"] = "PLACING";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGEEID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto38["m_sql"] = "OBLIGEEID";
$proto38["m_srcTableName"] = "PLACING";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "BANKID",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto40["m_sql"] = "BANKID";
$proto40["m_srcTableName"] = "PLACING";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "PLCTTG",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto42["m_sql"] = "PLCTTG";
$proto42["m_srcTableName"] = "PLACING";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "MKTDATE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto44["m_sql"] = "MKTDATE";
$proto44["m_srcTableName"] = "PLACING";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PLCDATE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto46["m_sql"] = "PLCDATE";
$proto46["m_srcTableName"] = "PLACING";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SDATE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto48["m_sql"] = "SDATE";
$proto48["m_srcTableName"] = "PLACING";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "EDATE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto50["m_sql"] = "EDATE";
$proto50["m_srcTableName"] = "PLACING";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "STATUSCLOSE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto52["m_sql"] = "STATUSCLOSE";
$proto52["m_srcTableName"] = "PLACING";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "POLICYTYPE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto54["m_sql"] = "POLICYTYPE";
$proto54["m_srcTableName"] = "PLACING";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DAYSNUM",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto56["m_sql"] = "DAYSNUM";
$proto56["m_srcTableName"] = "PLACING";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DAYSBASIS",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto58["m_sql"] = "DAYSBASIS";
$proto58["m_srcTableName"] = "PLACING";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ISTBA",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto60["m_sql"] = "ISTBA";
$proto60["m_srcTableName"] = "PLACING";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ISEXCLUSIVE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto62["m_sql"] = "ISEXCLUSIVE";
$proto62["m_srcTableName"] = "PLACING";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "REFFNO",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto64["m_sql"] = "REFFNO";
$proto64["m_srcTableName"] = "PLACING";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "STATUS",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto66["m_sql"] = "STATUS";
$proto66["m_srcTableName"] = "PLACING";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "IDBS",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto68["m_sql"] = "IDBS";
$proto68["m_srcTableName"] = "PLACING";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "KODESHARIA",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto70["m_sql"] = "KODESHARIA";
$proto70["m_srcTableName"] = "PLACING";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "SECDATE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto72["m_sql"] = "SECDATE";
$proto72["m_srcTableName"] = "PLACING";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SECUSER",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto74["m_sql"] = "SECUSER";
$proto74["m_srcTableName"] = "PLACING";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "SECROLE",
	"m_strTable" => "PLACING",
	"m_srcTableName" => "PLACING"
));

$proto76["m_sql"] = "SECROLE";
$proto76["m_srcTableName"] = "PLACING";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "PLACING";
$proto79["m_srcTableName"] = "PLACING";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "PLCID";
$proto79["m_columns"][] = "PPLCID";
$proto79["m_columns"][] = "MPLCID";
$proto79["m_columns"][] = "RPLCID";
$proto79["m_columns"][] = "BSMID";
$proto79["m_columns"][] = "KODECAB";
$proto79["m_columns"][] = "MKTNO";
$proto79["m_columns"][] = "MKTURUT";
$proto79["m_columns"][] = "PLCNO";
$proto79["m_columns"][] = "URUTNO";
$proto79["m_columns"][] = "QSNO";
$proto79["m_columns"][] = "QSURUT";
$proto79["m_columns"][] = "CANO";
$proto79["m_columns"][] = "CAURUT";
$proto79["m_columns"][] = "SFTNO";
$proto79["m_columns"][] = "ENDSNO";
$proto79["m_columns"][] = "OBLIGEEID";
$proto79["m_columns"][] = "BANKID";
$proto79["m_columns"][] = "PLCTTG";
$proto79["m_columns"][] = "MKTDATE";
$proto79["m_columns"][] = "PLCDATE";
$proto79["m_columns"][] = "SDATE";
$proto79["m_columns"][] = "EDATE";
$proto79["m_columns"][] = "STATUSCLOSE";
$proto79["m_columns"][] = "POLICYTYPE";
$proto79["m_columns"][] = "DAYSNUM";
$proto79["m_columns"][] = "DAYSBASIS";
$proto79["m_columns"][] = "ISTBA";
$proto79["m_columns"][] = "ISEXCLUSIVE";
$proto79["m_columns"][] = "REFFNO";
$proto79["m_columns"][] = "STATUS";
$proto79["m_columns"][] = "IDBS";
$proto79["m_columns"][] = "KODESHARIA";
$proto79["m_columns"][] = "SECDATE";
$proto79["m_columns"][] = "SECUSER";
$proto79["m_columns"][] = "SECROLE";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "`PLACING`";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "PLACING";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PLACING";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_placing = createSqlQuery_placing();


	
		;

																																				

$tdataplacing[".sqlquery"] = $queryData_placing;



$tdataplacing[".hasEvents"] = false;

?>