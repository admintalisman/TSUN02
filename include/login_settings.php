<?php
$tdatalogin = array();
$tdatalogin[".searchableFields"] = array();
$tdatalogin[".ShortName"] = "login";
$tdatalogin[".OwnerID"] = "";
$tdatalogin[".OriginalTable"] = "LOGIN";


$tdatalogin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalogin[".originalPagesByType"] = $tdatalogin[".pagesByType"];
$tdatalogin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalogin[".originalPages"] = $tdatalogin[".pages"];
$tdatalogin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalogin[".originalDefaultPages"] = $tdatalogin[".defaultPages"];

//	field labels
$fieldLabelslogin = array();
$fieldToolTipslogin = array();
$pageTitleslogin = array();
$placeHolderslogin = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslogin["English"] = array();
	$fieldToolTipslogin["English"] = array();
	$placeHolderslogin["English"] = array();
	$pageTitleslogin["English"] = array();
	$fieldLabelslogin["English"]["id_m_login"] = "Id M Login";
	$fieldToolTipslogin["English"]["id_m_login"] = "";
	$placeHolderslogin["English"]["id_m_login"] = "";
	$fieldLabelslogin["English"]["username"] = "Username";
	$fieldToolTipslogin["English"]["username"] = "";
	$placeHolderslogin["English"]["username"] = "";
	$fieldLabelslogin["English"]["password"] = "Password";
	$fieldToolTipslogin["English"]["password"] = "";
	$placeHolderslogin["English"]["password"] = "";
	$fieldLabelslogin["English"]["fullname"] = "Fullname";
	$fieldToolTipslogin["English"]["fullname"] = "";
	$placeHolderslogin["English"]["fullname"] = "";
	$fieldLabelslogin["English"]["email"] = "Email";
	$fieldToolTipslogin["English"]["email"] = "";
	$placeHolderslogin["English"]["email"] = "";
	$fieldLabelslogin["English"]["api_keys"] = "Api Keys";
	$fieldToolTipslogin["English"]["api_keys"] = "";
	$placeHolderslogin["English"]["api_keys"] = "";
	$fieldLabelslogin["English"]["userpic"] = "Userpic";
	$fieldToolTipslogin["English"]["userpic"] = "";
	$placeHolderslogin["English"]["userpic"] = "";
	if (count($fieldToolTipslogin["English"]))
		$tdatalogin[".isUseToolTips"] = true;
}


	$tdatalogin[".NCSearch"] = true;



$tdatalogin[".shortTableName"] = "login";
$tdatalogin[".nSecOptions"] = 0;

$tdatalogin[".mainTableOwnerID"] = "";
$tdatalogin[".entityType"] = 0;
$tdatalogin[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatalogin[".strOriginalTableName"] = "LOGIN";

	



$tdatalogin[".showAddInPopup"] = false;

$tdatalogin[".showEditInPopup"] = false;

$tdatalogin[".showViewInPopup"] = false;

$tdatalogin[".listAjax"] = false;
//	temporary
//$tdatalogin[".listAjax"] = false;

	$tdatalogin[".audit"] = true;

	$tdatalogin[".locking"] = false;


$pages = $tdatalogin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalogin[".edit"] = true;
	$tdatalogin[".afterEditAction"] = 1;
	$tdatalogin[".closePopupAfterEdit"] = 1;
	$tdatalogin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalogin[".add"] = true;
$tdatalogin[".afterAddAction"] = 1;
$tdatalogin[".closePopupAfterAdd"] = 1;
$tdatalogin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalogin[".list"] = true;
}



$tdatalogin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalogin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalogin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalogin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalogin[".printFriendly"] = true;
}



$tdatalogin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalogin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalogin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalogin[".isUseAjaxSuggest"] = true;





$tdatalogin[".ajaxCodeSnippetAdded"] = false;

$tdatalogin[".buttonsAdded"] = false;

$tdatalogin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogin[".isUseTimeForSearch"] = false;


$tdatalogin[".badgeColor"] = "CD853F";


$tdatalogin[".allSearchFields"] = array();
$tdatalogin[".filterFields"] = array();
$tdatalogin[".requiredSearchFields"] = array();

$tdatalogin[".googleLikeFields"] = array();
$tdatalogin[".googleLikeFields"][] = "id_m_login";
$tdatalogin[".googleLikeFields"][] = "username";
$tdatalogin[".googleLikeFields"][] = "password";
$tdatalogin[".googleLikeFields"][] = "fullname";
$tdatalogin[".googleLikeFields"][] = "email";
$tdatalogin[".googleLikeFields"][] = "api_keys";



$tdatalogin[".tableType"] = "list";

$tdatalogin[".printerPageOrientation"] = 0;
$tdatalogin[".nPrinterPageScale"] = 100;

$tdatalogin[".nPrinterSplitRecords"] = 40;

$tdatalogin[".geocodingEnabled"] = false;










$tdatalogin[".pageSize"] = 20;

$tdatalogin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalogin[".strOrderBy"] = $tstrOrderBy;

$tdatalogin[".orderindexes"] = array();


$tdatalogin[".sqlHead"] = "SELECT id_m_login,  	username,  	password,  	fullname,  	email,  	api_keys,  	userpic";
$tdatalogin[".sqlFrom"] = "FROM LOGIN";
$tdatalogin[".sqlWhereExpr"] = "";
$tdatalogin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogin[".arrGroupsPerPage"] = $arrGPP;

$tdatalogin[".highlightSearchResults"] = true;

$tableKeyslogin = array();
$tableKeyslogin[] = "id_m_login";
$tdatalogin[".Keys"] = $tableKeyslogin;


$tdatalogin[".hideMobileList"] = array();




//	id_m_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_m_login";
	$fdata["GoodName"] = "id_m_login";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","id_m_login");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_m_login";

		$fdata["sourceSingle"] = "id_m_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_m_login";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatalogin["id_m_login"] = $fdata;
		$tdatalogin[".searchableFields"][] = "id_m_login";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatalogin["username"] = $fdata;
		$tdatalogin[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatalogin["password"] = $fdata;
		$tdatalogin[".searchableFields"][] = "password";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatalogin["fullname"] = $fdata;
		$tdatalogin[".searchableFields"][] = "fullname";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatalogin["email"] = $fdata;
		$tdatalogin[".searchableFields"][] = "email";
//	api_keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "api_keys";
	$fdata["GoodName"] = "api_keys";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","api_keys");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "api_keys";

		$fdata["sourceSingle"] = "api_keys";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "api_keys";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatalogin["api_keys"] = $fdata;
		$tdatalogin[".searchableFields"][] = "api_keys";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "LOGIN";
	$fdata["Label"] = GetFieldLabel("LOGIN","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatalogin["userpic"] = $fdata;
	

$tables_data["LOGIN"]=&$tdatalogin;
$field_labels["LOGIN"] = &$fieldLabelslogin;
$fieldToolTips["LOGIN"] = &$fieldToolTipslogin;
$placeHolders["LOGIN"] = &$placeHolderslogin;
$page_titles["LOGIN"] = &$pageTitleslogin;


changeTextControlsToDate( "LOGIN" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["LOGIN"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["LOGIN"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_login()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_m_login,  	username,  	password,  	fullname,  	email,  	api_keys,  	userpic";
$proto0["m_strFrom"] = "FROM LOGIN";
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
	"m_strName" => "id_m_login",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto6["m_sql"] = "id_m_login";
$proto6["m_srcTableName"] = "LOGIN";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "LOGIN";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "LOGIN";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto12["m_sql"] = "fullname";
$proto12["m_srcTableName"] = "LOGIN";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "LOGIN";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "api_keys",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto16["m_sql"] = "api_keys";
$proto16["m_srcTableName"] = "LOGIN";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "LOGIN",
	"m_srcTableName" => "LOGIN"
));

$proto18["m_sql"] = "userpic";
$proto18["m_srcTableName"] = "LOGIN";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "LOGIN";
$proto21["m_srcTableName"] = "LOGIN";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_m_login";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "api_keys";
$proto21["m_columns"][] = "userpic";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LOGIN";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "LOGIN";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LOGIN";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_login = createSqlQuery_login();


	
		;

							

$tdatalogin[".sqlquery"] = $queryData_login;



$tdatalogin[".hasEvents"] = false;

?>