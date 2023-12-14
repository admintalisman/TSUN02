<?php
$tdatabsm = array();
$tdatabsm[".searchableFields"] = array();
$tdatabsm[".ShortName"] = "bsm";
$tdatabsm[".OwnerID"] = "";
$tdatabsm[".OriginalTable"] = "BSM";


$tdatabsm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabsm[".originalPagesByType"] = $tdatabsm[".pagesByType"];
$tdatabsm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabsm[".originalPages"] = $tdatabsm[".pages"];
$tdatabsm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabsm[".originalDefaultPages"] = $tdatabsm[".defaultPages"];

//	field labels
$fieldLabelsbsm = array();
$fieldToolTipsbsm = array();
$pageTitlesbsm = array();
$placeHoldersbsm = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbsm["English"] = array();
	$fieldToolTipsbsm["English"] = array();
	$placeHoldersbsm["English"] = array();
	$pageTitlesbsm["English"] = array();
	$fieldLabelsbsm["English"]["BSMID"] = "BSMID";
	$fieldToolTipsbsm["English"]["BSMID"] = "";
	$placeHoldersbsm["English"]["BSMID"] = "";
	$fieldLabelsbsm["English"]["MBSMID"] = "MBSMID";
	$fieldToolTipsbsm["English"]["MBSMID"] = "";
	$placeHoldersbsm["English"]["MBSMID"] = "";
	$fieldLabelsbsm["English"]["BANKID"] = "BANKID";
	$fieldToolTipsbsm["English"]["BANKID"] = "";
	$placeHoldersbsm["English"]["BANKID"] = "";
	$fieldLabelsbsm["English"]["PRPID"] = "PRPID";
	$fieldToolTipsbsm["English"]["PRPID"] = "";
	$placeHoldersbsm["English"]["PRPID"] = "";
	$fieldLabelsbsm["English"]["OBLIGEEID"] = "OBLIGEEID";
	$fieldToolTipsbsm["English"]["OBLIGEEID"] = "";
	$placeHoldersbsm["English"]["OBLIGEEID"] = "";
	$fieldLabelsbsm["English"]["PROPNO"] = "PROPNO";
	$fieldToolTipsbsm["English"]["PROPNO"] = "";
	$placeHoldersbsm["English"]["PROPNO"] = "";
	$fieldLabelsbsm["English"]["PROPURUT"] = "PROPURUT";
	$fieldToolTipsbsm["English"]["PROPURUT"] = "";
	$placeHoldersbsm["English"]["PROPURUT"] = "";
	$fieldLabelsbsm["English"]["CNNO"] = "CNNO";
	$fieldToolTipsbsm["English"]["CNNO"] = "";
	$placeHoldersbsm["English"]["CNNO"] = "";
	$fieldLabelsbsm["English"]["REGDATE"] = "REGDATE";
	$fieldToolTipsbsm["English"]["REGDATE"] = "";
	$placeHoldersbsm["English"]["REGDATE"] = "";
	$fieldLabelsbsm["English"]["TTG"] = "TTG";
	$fieldToolTipsbsm["English"]["TTG"] = "";
	$placeHoldersbsm["English"]["TTG"] = "";
	$fieldLabelsbsm["English"]["SDATE"] = "SDATE";
	$fieldToolTipsbsm["English"]["SDATE"] = "";
	$placeHoldersbsm["English"]["SDATE"] = "";
	$fieldLabelsbsm["English"]["EDATE"] = "EDATE";
	$fieldToolTipsbsm["English"]["EDATE"] = "";
	$placeHoldersbsm["English"]["EDATE"] = "";
	$fieldLabelsbsm["English"]["MTUSI"] = "MTUSI";
	$fieldToolTipsbsm["English"]["MTUSI"] = "";
	$placeHoldersbsm["English"]["MTUSI"] = "";
	$fieldLabelsbsm["English"]["SI"] = "SI";
	$fieldToolTipsbsm["English"]["SI"] = "";
	$placeHoldersbsm["English"]["SI"] = "";
	$fieldLabelsbsm["English"]["RATE"] = "RATE";
	$fieldToolTipsbsm["English"]["RATE"] = "";
	$placeHoldersbsm["English"]["RATE"] = "";
	$fieldLabelsbsm["English"]["RATEUNIT"] = "RATEUNIT";
	$fieldToolTipsbsm["English"]["RATEUNIT"] = "";
	$placeHoldersbsm["English"]["RATEUNIT"] = "";
	$fieldLabelsbsm["English"]["MTUPREMI"] = "MTUPREMI";
	$fieldToolTipsbsm["English"]["MTUPREMI"] = "";
	$placeHoldersbsm["English"]["MTUPREMI"] = "";
	$fieldLabelsbsm["English"]["PREMI"] = "PREMI";
	$fieldToolTipsbsm["English"]["PREMI"] = "";
	$placeHoldersbsm["English"]["PREMI"] = "";
	$fieldLabelsbsm["English"]["SECDATE"] = "SECDATE";
	$fieldToolTipsbsm["English"]["SECDATE"] = "";
	$placeHoldersbsm["English"]["SECDATE"] = "";
	$fieldLabelsbsm["English"]["SECUSER"] = "SECUSER";
	$fieldToolTipsbsm["English"]["SECUSER"] = "";
	$placeHoldersbsm["English"]["SECUSER"] = "";
	$fieldLabelsbsm["English"]["SECROLE"] = "SECROLE";
	$fieldToolTipsbsm["English"]["SECROLE"] = "";
	$placeHoldersbsm["English"]["SECROLE"] = "";
	$fieldLabelsbsm["English"]["FLOWSTATUS"] = "FLOWSTATUS";
	$fieldToolTipsbsm["English"]["FLOWSTATUS"] = "";
	$placeHoldersbsm["English"]["FLOWSTATUS"] = "";
	$fieldLabelsbsm["English"]["DISPOSISI"] = "DISPOSISI";
	$fieldToolTipsbsm["English"]["DISPOSISI"] = "";
	$placeHoldersbsm["English"]["DISPOSISI"] = "";
	$fieldLabelsbsm["English"]["TAHUN"] = "TAHUN";
	$fieldToolTipsbsm["English"]["TAHUN"] = "";
	$placeHoldersbsm["English"]["TAHUN"] = "";
	$fieldLabelsbsm["English"]["DAYS"] = "DAYS";
	$fieldToolTipsbsm["English"]["DAYS"] = "";
	$placeHoldersbsm["English"]["DAYS"] = "";
	$fieldLabelsbsm["English"]["SFTURUT"] = "SFTURUT";
	$fieldToolTipsbsm["English"]["SFTURUT"] = "";
	$placeHoldersbsm["English"]["SFTURUT"] = "";
	$fieldLabelsbsm["English"]["STATUS"] = "STATUS";
	$fieldToolTipsbsm["English"]["STATUS"] = "";
	$placeHoldersbsm["English"]["STATUS"] = "";
	$fieldLabelsbsm["English"]["APPRUSER"] = "APPRUSER";
	$fieldToolTipsbsm["English"]["APPRUSER"] = "";
	$placeHoldersbsm["English"]["APPRUSER"] = "";
	$fieldLabelsbsm["English"]["APPRDATE"] = "APPRDATE";
	$fieldToolTipsbsm["English"]["APPRDATE"] = "";
	$placeHoldersbsm["English"]["APPRDATE"] = "";
	$fieldLabelsbsm["English"]["APPRROLE"] = "APPRROLE";
	$fieldToolTipsbsm["English"]["APPRROLE"] = "";
	$placeHoldersbsm["English"]["APPRROLE"] = "";
	$fieldLabelsbsm["English"]["NEEDAPPROV"] = "NEEDAPPROV";
	$fieldToolTipsbsm["English"]["NEEDAPPROV"] = "";
	$placeHoldersbsm["English"]["NEEDAPPROV"] = "";
	if (count($fieldToolTipsbsm["English"]))
		$tdatabsm[".isUseToolTips"] = true;
}


	$tdatabsm[".NCSearch"] = true;



$tdatabsm[".shortTableName"] = "bsm";
$tdatabsm[".nSecOptions"] = 0;

$tdatabsm[".mainTableOwnerID"] = "";
$tdatabsm[".entityType"] = 0;
$tdatabsm[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsm[".strOriginalTableName"] = "BSM";

	



$tdatabsm[".showAddInPopup"] = false;

$tdatabsm[".showEditInPopup"] = false;

$tdatabsm[".showViewInPopup"] = false;

$tdatabsm[".listAjax"] = false;
//	temporary
//$tdatabsm[".listAjax"] = false;

	$tdatabsm[".audit"] = true;

	$tdatabsm[".locking"] = false;


$pages = $tdatabsm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsm[".edit"] = true;
	$tdatabsm[".afterEditAction"] = 1;
	$tdatabsm[".closePopupAfterEdit"] = 1;
	$tdatabsm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsm[".add"] = true;
$tdatabsm[".afterAddAction"] = 1;
$tdatabsm[".closePopupAfterAdd"] = 1;
$tdatabsm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsm[".list"] = true;
}



$tdatabsm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsm[".printFriendly"] = true;
}



$tdatabsm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsm[".isUseAjaxSuggest"] = true;





$tdatabsm[".ajaxCodeSnippetAdded"] = false;

$tdatabsm[".buttonsAdded"] = false;

$tdatabsm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsm[".isUseTimeForSearch"] = false;


$tdatabsm[".badgeColor"] = "B22222";


$tdatabsm[".allSearchFields"] = array();
$tdatabsm[".filterFields"] = array();
$tdatabsm[".requiredSearchFields"] = array();

$tdatabsm[".googleLikeFields"] = array();
$tdatabsm[".googleLikeFields"][] = "BSMID";
$tdatabsm[".googleLikeFields"][] = "MBSMID";
$tdatabsm[".googleLikeFields"][] = "BANKID";
$tdatabsm[".googleLikeFields"][] = "PRPID";
$tdatabsm[".googleLikeFields"][] = "OBLIGEEID";
$tdatabsm[".googleLikeFields"][] = "PROPNO";
$tdatabsm[".googleLikeFields"][] = "PROPURUT";
$tdatabsm[".googleLikeFields"][] = "CNNO";
$tdatabsm[".googleLikeFields"][] = "REGDATE";
$tdatabsm[".googleLikeFields"][] = "TTG";
$tdatabsm[".googleLikeFields"][] = "SDATE";
$tdatabsm[".googleLikeFields"][] = "EDATE";
$tdatabsm[".googleLikeFields"][] = "MTUSI";
$tdatabsm[".googleLikeFields"][] = "SI";
$tdatabsm[".googleLikeFields"][] = "RATE";
$tdatabsm[".googleLikeFields"][] = "RATEUNIT";
$tdatabsm[".googleLikeFields"][] = "MTUPREMI";
$tdatabsm[".googleLikeFields"][] = "PREMI";
$tdatabsm[".googleLikeFields"][] = "SECDATE";
$tdatabsm[".googleLikeFields"][] = "SECUSER";
$tdatabsm[".googleLikeFields"][] = "SECROLE";
$tdatabsm[".googleLikeFields"][] = "FLOWSTATUS";
$tdatabsm[".googleLikeFields"][] = "DISPOSISI";
$tdatabsm[".googleLikeFields"][] = "TAHUN";
$tdatabsm[".googleLikeFields"][] = "DAYS";
$tdatabsm[".googleLikeFields"][] = "SFTURUT";
$tdatabsm[".googleLikeFields"][] = "STATUS";
$tdatabsm[".googleLikeFields"][] = "APPRUSER";
$tdatabsm[".googleLikeFields"][] = "APPRDATE";
$tdatabsm[".googleLikeFields"][] = "APPRROLE";
$tdatabsm[".googleLikeFields"][] = "NEEDAPPROV";



$tdatabsm[".tableType"] = "list";

$tdatabsm[".printerPageOrientation"] = 0;
$tdatabsm[".nPrinterPageScale"] = 100;

$tdatabsm[".nPrinterSplitRecords"] = 40;

$tdatabsm[".geocodingEnabled"] = false;




$tdatabsm[".isDisplayLoading"] = true;






$tdatabsm[".pageSize"] = 20;

$tdatabsm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsm[".strOrderBy"] = $tstrOrderBy;

$tdatabsm[".orderindexes"] = array();


$tdatabsm[".sqlHead"] = "SELECT BSMID,  	MBSMID,  	BANKID,  	PRPID,  	OBLIGEEID,  	PROPNO,  	PROPURUT,  	CNNO,  	REGDATE,  	TTG,  	SDATE,  	EDATE,  	MTUSI,  	SI,  	RATE,  	RATEUNIT,  	MTUPREMI,  	PREMI,  	SECDATE,  	SECUSER,  	SECROLE,  	FLOWSTATUS,  	DISPOSISI,  	TAHUN,  	DAYS,  	SFTURUT,  	STATUS,  	APPRUSER,  	APPRDATE,  	APPRROLE,  	NEEDAPPROV";
$tdatabsm[".sqlFrom"] = "FROM BSM";
$tdatabsm[".sqlWhereExpr"] = "";
$tdatabsm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsm[".arrGroupsPerPage"] = $arrGPP;

$tdatabsm[".highlightSearchResults"] = true;

$tableKeysbsm = array();
$tableKeysbsm[] = "BSMID";
$tdatabsm[".Keys"] = $tableKeysbsm;


$tdatabsm[".hideMobileList"] = array();




//	BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BSMID";
	$fdata["GoodName"] = "BSMID";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","BSMID");
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


	$tdatabsm["BSMID"] = $fdata;
		$tdatabsm[".searchableFields"][] = "BSMID";
//	MBSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MBSMID";
	$fdata["GoodName"] = "MBSMID";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","MBSMID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MBSMID";

		$fdata["sourceSingle"] = "MBSMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MBSMID";

	
	
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


	$tdatabsm["MBSMID"] = $fdata;
		$tdatabsm[".searchableFields"][] = "MBSMID";
//	BANKID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BANKID";
	$fdata["GoodName"] = "BANKID";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","BANKID");
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


	$tdatabsm["BANKID"] = $fdata;
		$tdatabsm[".searchableFields"][] = "BANKID";
//	PRPID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRPID";
	$fdata["GoodName"] = "PRPID";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","PRPID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRPID";

		$fdata["sourceSingle"] = "PRPID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRPID";

	
	
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


	$tdatabsm["PRPID"] = $fdata;
		$tdatabsm[".searchableFields"][] = "PRPID";
//	OBLIGEEID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OBLIGEEID";
	$fdata["GoodName"] = "OBLIGEEID";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","OBLIGEEID");
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


	$tdatabsm["OBLIGEEID"] = $fdata;
		$tdatabsm[".searchableFields"][] = "OBLIGEEID";
//	PROPNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROPNO";
	$fdata["GoodName"] = "PROPNO";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","PROPNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROPNO";

		$fdata["sourceSingle"] = "PROPNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROPNO";

	
	
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


	$tdatabsm["PROPNO"] = $fdata;
		$tdatabsm[".searchableFields"][] = "PROPNO";
//	PROPURUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PROPURUT";
	$fdata["GoodName"] = "PROPURUT";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","PROPURUT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PROPURUT";

		$fdata["sourceSingle"] = "PROPURUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROPURUT";

	
	
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


	$tdatabsm["PROPURUT"] = $fdata;
		$tdatabsm[".searchableFields"][] = "PROPURUT";
//	CNNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CNNO";
	$fdata["GoodName"] = "CNNO";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","CNNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CNNO";

		$fdata["sourceSingle"] = "CNNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CNNO";

	
	
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


	$tdatabsm["CNNO"] = $fdata;
		$tdatabsm[".searchableFields"][] = "CNNO";
//	REGDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REGDATE";
	$fdata["GoodName"] = "REGDATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","REGDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "REGDATE";

		$fdata["sourceSingle"] = "REGDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REGDATE";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatabsm["REGDATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "REGDATE";
//	TTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TTG";
	$fdata["GoodName"] = "TTG";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","TTG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TTG";

		$fdata["sourceSingle"] = "TTG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TTG";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatabsm["TTG"] = $fdata;
		$tdatabsm[".searchableFields"][] = "TTG";
//	SDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SDATE";
	$fdata["GoodName"] = "SDATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SDATE");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatabsm["SDATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SDATE";
//	EDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EDATE";
	$fdata["GoodName"] = "EDATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","EDATE");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatabsm["EDATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "EDATE";
//	MTUSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MTUSI";
	$fdata["GoodName"] = "MTUSI";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","MTUSI");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MTUSI";

		$fdata["sourceSingle"] = "MTUSI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MTUSI";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatabsm["MTUSI"] = $fdata;
		$tdatabsm[".searchableFields"][] = "MTUSI";
//	SI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SI";
	$fdata["GoodName"] = "SI";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SI";

		$fdata["sourceSingle"] = "SI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatabsm["SI"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SI";
//	RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RATE";
	$fdata["GoodName"] = "RATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","RATE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "RATE";

		$fdata["sourceSingle"] = "RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatabsm["RATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "RATE";
//	RATEUNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RATEUNIT";
	$fdata["GoodName"] = "RATEUNIT";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","RATEUNIT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RATEUNIT";

		$fdata["sourceSingle"] = "RATEUNIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RATEUNIT";

	
	
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


	$tdatabsm["RATEUNIT"] = $fdata;
		$tdatabsm[".searchableFields"][] = "RATEUNIT";
//	MTUPREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "MTUPREMI";
	$fdata["GoodName"] = "MTUPREMI";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","MTUPREMI");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MTUPREMI";

		$fdata["sourceSingle"] = "MTUPREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MTUPREMI";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatabsm["MTUPREMI"] = $fdata;
		$tdatabsm[".searchableFields"][] = "MTUPREMI";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PREMI";

		$fdata["sourceSingle"] = "PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PREMI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatabsm["PREMI"] = $fdata;
		$tdatabsm[".searchableFields"][] = "PREMI";
//	SECDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SECDATE";
	$fdata["GoodName"] = "SECDATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SECDATE");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatabsm["SECDATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SECDATE";
//	SECUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SECUSER";
	$fdata["GoodName"] = "SECUSER";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SECUSER");
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


	$tdatabsm["SECUSER"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SECUSER";
//	SECROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SECROLE";
	$fdata["GoodName"] = "SECROLE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SECROLE");
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


	$tdatabsm["SECROLE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SECROLE";
//	FLOWSTATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "FLOWSTATUS";
	$fdata["GoodName"] = "FLOWSTATUS";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","FLOWSTATUS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FLOWSTATUS";

		$fdata["sourceSingle"] = "FLOWSTATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLOWSTATUS";

	
	
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


	$tdatabsm["FLOWSTATUS"] = $fdata;
		$tdatabsm[".searchableFields"][] = "FLOWSTATUS";
//	DISPOSISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DISPOSISI";
	$fdata["GoodName"] = "DISPOSISI";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","DISPOSISI");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DISPOSISI";

		$fdata["sourceSingle"] = "DISPOSISI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DISPOSISI";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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


	$tdatabsm["DISPOSISI"] = $fdata;
		$tdatabsm[".searchableFields"][] = "DISPOSISI";
//	TAHUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "TAHUN";
	$fdata["GoodName"] = "TAHUN";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","TAHUN");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TAHUN";

		$fdata["sourceSingle"] = "TAHUN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAHUN";

	
	
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


	$tdatabsm["TAHUN"] = $fdata;
		$tdatabsm[".searchableFields"][] = "TAHUN";
//	DAYS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DAYS";
	$fdata["GoodName"] = "DAYS";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","DAYS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DAYS";

		$fdata["sourceSingle"] = "DAYS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DAYS";

	
	
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


	$tdatabsm["DAYS"] = $fdata;
		$tdatabsm[".searchableFields"][] = "DAYS";
//	SFTURUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SFTURUT";
	$fdata["GoodName"] = "SFTURUT";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","SFTURUT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SFTURUT";

		$fdata["sourceSingle"] = "SFTURUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SFTURUT";

	
	
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


	$tdatabsm["SFTURUT"] = $fdata;
		$tdatabsm[".searchableFields"][] = "SFTURUT";
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","STATUS");
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


	$tdatabsm["STATUS"] = $fdata;
		$tdatabsm[".searchableFields"][] = "STATUS";
//	APPRUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "APPRUSER";
	$fdata["GoodName"] = "APPRUSER";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","APPRUSER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "APPRUSER";

		$fdata["sourceSingle"] = "APPRUSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPRUSER";

	
	
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


	$tdatabsm["APPRUSER"] = $fdata;
		$tdatabsm[".searchableFields"][] = "APPRUSER";
//	APPRDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "APPRDATE";
	$fdata["GoodName"] = "APPRDATE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","APPRDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "APPRDATE";

		$fdata["sourceSingle"] = "APPRDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPRDATE";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatabsm["APPRDATE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "APPRDATE";
//	APPRROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "APPRROLE";
	$fdata["GoodName"] = "APPRROLE";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","APPRROLE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "APPRROLE";

		$fdata["sourceSingle"] = "APPRROLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPRROLE";

	
	
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


	$tdatabsm["APPRROLE"] = $fdata;
		$tdatabsm[".searchableFields"][] = "APPRROLE";
//	NEEDAPPROV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "NEEDAPPROV";
	$fdata["GoodName"] = "NEEDAPPROV";
	$fdata["ownerTable"] = "BSM";
	$fdata["Label"] = GetFieldLabel("BSM","NEEDAPPROV");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "NEEDAPPROV";

		$fdata["sourceSingle"] = "NEEDAPPROV";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEEDAPPROV";

	
	
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


	$tdatabsm["NEEDAPPROV"] = $fdata;
		$tdatabsm[".searchableFields"][] = "NEEDAPPROV";


$tables_data["BSM"]=&$tdatabsm;
$field_labels["BSM"] = &$fieldLabelsbsm;
$fieldToolTips["BSM"] = &$fieldToolTipsbsm;
$placeHolders["BSM"] = &$placeHoldersbsm;
$page_titles["BSM"] = &$pageTitlesbsm;


changeTextControlsToDate( "BSM" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSM"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSM"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BSMID,  	MBSMID,  	BANKID,  	PRPID,  	OBLIGEEID,  	PROPNO,  	PROPURUT,  	CNNO,  	REGDATE,  	TTG,  	SDATE,  	EDATE,  	MTUSI,  	SI,  	RATE,  	RATEUNIT,  	MTUPREMI,  	PREMI,  	SECDATE,  	SECUSER,  	SECROLE,  	FLOWSTATUS,  	DISPOSISI,  	TAHUN,  	DAYS,  	SFTURUT,  	STATUS,  	APPRUSER,  	APPRDATE,  	APPRROLE,  	NEEDAPPROV";
$proto0["m_strFrom"] = "FROM BSM";
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
	"m_strName" => "BSMID",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto6["m_sql"] = "BSMID";
$proto6["m_srcTableName"] = "BSM";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MBSMID",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto8["m_sql"] = "MBSMID";
$proto8["m_srcTableName"] = "BSM";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BANKID",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto10["m_sql"] = "BANKID";
$proto10["m_srcTableName"] = "BSM";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRPID",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto12["m_sql"] = "PRPID";
$proto12["m_srcTableName"] = "BSM";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGEEID",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto14["m_sql"] = "OBLIGEEID";
$proto14["m_srcTableName"] = "BSM";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PROPNO",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto16["m_sql"] = "PROPNO";
$proto16["m_srcTableName"] = "BSM";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PROPURUT",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto18["m_sql"] = "PROPURUT";
$proto18["m_srcTableName"] = "BSM";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CNNO",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto20["m_sql"] = "CNNO";
$proto20["m_srcTableName"] = "BSM";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REGDATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto22["m_sql"] = "REGDATE";
$proto22["m_srcTableName"] = "BSM";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TTG",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto24["m_sql"] = "TTG";
$proto24["m_srcTableName"] = "BSM";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SDATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto26["m_sql"] = "SDATE";
$proto26["m_srcTableName"] = "BSM";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EDATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto28["m_sql"] = "EDATE";
$proto28["m_srcTableName"] = "BSM";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "MTUSI",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto30["m_sql"] = "MTUSI";
$proto30["m_srcTableName"] = "BSM";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SI",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto32["m_sql"] = "SI";
$proto32["m_srcTableName"] = "BSM";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto34["m_sql"] = "RATE";
$proto34["m_srcTableName"] = "BSM";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RATEUNIT",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto36["m_sql"] = "RATEUNIT";
$proto36["m_srcTableName"] = "BSM";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "MTUPREMI",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto38["m_sql"] = "MTUPREMI";
$proto38["m_srcTableName"] = "BSM";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PREMI",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto40["m_sql"] = "PREMI";
$proto40["m_srcTableName"] = "BSM";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SECDATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto42["m_sql"] = "SECDATE";
$proto42["m_srcTableName"] = "BSM";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SECUSER",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto44["m_sql"] = "SECUSER";
$proto44["m_srcTableName"] = "BSM";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SECROLE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto46["m_sql"] = "SECROLE";
$proto46["m_srcTableName"] = "BSM";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "FLOWSTATUS",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto48["m_sql"] = "FLOWSTATUS";
$proto48["m_srcTableName"] = "BSM";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DISPOSISI",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto50["m_sql"] = "DISPOSISI";
$proto50["m_srcTableName"] = "BSM";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "TAHUN",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto52["m_sql"] = "TAHUN";
$proto52["m_srcTableName"] = "BSM";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DAYS",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto54["m_sql"] = "DAYS";
$proto54["m_srcTableName"] = "BSM";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SFTURUT",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto56["m_sql"] = "SFTURUT";
$proto56["m_srcTableName"] = "BSM";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "STATUS",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto58["m_sql"] = "STATUS";
$proto58["m_srcTableName"] = "BSM";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "APPRUSER",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto60["m_sql"] = "APPRUSER";
$proto60["m_srcTableName"] = "BSM";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "APPRDATE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto62["m_sql"] = "APPRDATE";
$proto62["m_srcTableName"] = "BSM";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "APPRROLE",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto64["m_sql"] = "APPRROLE";
$proto64["m_srcTableName"] = "BSM";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "NEEDAPPROV",
	"m_strTable" => "BSM",
	"m_srcTableName" => "BSM"
));

$proto66["m_sql"] = "NEEDAPPROV";
$proto66["m_srcTableName"] = "BSM";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "BSM";
$proto69["m_srcTableName"] = "BSM";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "BSMID";
$proto69["m_columns"][] = "MBSMID";
$proto69["m_columns"][] = "BANKID";
$proto69["m_columns"][] = "PRPID";
$proto69["m_columns"][] = "OBLIGEEID";
$proto69["m_columns"][] = "PROPNO";
$proto69["m_columns"][] = "PROPURUT";
$proto69["m_columns"][] = "CNNO";
$proto69["m_columns"][] = "REGDATE";
$proto69["m_columns"][] = "TTG";
$proto69["m_columns"][] = "SDATE";
$proto69["m_columns"][] = "EDATE";
$proto69["m_columns"][] = "MTUSI";
$proto69["m_columns"][] = "SI";
$proto69["m_columns"][] = "RATE";
$proto69["m_columns"][] = "RATEUNIT";
$proto69["m_columns"][] = "MTUPREMI";
$proto69["m_columns"][] = "PREMI";
$proto69["m_columns"][] = "SECDATE";
$proto69["m_columns"][] = "SECUSER";
$proto69["m_columns"][] = "SECROLE";
$proto69["m_columns"][] = "FLOWSTATUS";
$proto69["m_columns"][] = "DISPOSISI";
$proto69["m_columns"][] = "TAHUN";
$proto69["m_columns"][] = "DAYS";
$proto69["m_columns"][] = "SFTURUT";
$proto69["m_columns"][] = "STATUS";
$proto69["m_columns"][] = "APPRUSER";
$proto69["m_columns"][] = "APPRDATE";
$proto69["m_columns"][] = "APPRROLE";
$proto69["m_columns"][] = "NEEDAPPROV";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "BSM";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "BSM";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BSM";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsm = createSqlQuery_bsm();


	
		;

																															

$tdatabsm[".sqlquery"] = $queryData_bsm;



$tdatabsm[".hasEvents"] = false;

?>