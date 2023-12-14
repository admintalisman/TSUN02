using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Web;
using System.Web.Mvc;
using System.Reflection;
using runnerDotNet;
namespace runnerDotNet
{
	public static partial class Settings_m_location_office
	{
		static public void Apply()
		{
			SettingsMap arrGPP = SettingsMap.GetArray(), arrGridTabs = SettingsMap.GetArray(), arrRPP = SettingsMap.GetArray(), dIndex = null, detailsParam = SettingsMap.GetArray(), edata = SettingsMap.GetArray(), eventsData = SettingsMap.GetArray(), fdata = SettingsMap.GetArray(), fieldLabelsArray = new XVar(), fieldToolTipsArray = new XVar(), hours = null, intervalData = SettingsMap.GetArray(), masterParams = SettingsMap.GetArray(), pageTitlesArray = new XVar(), placeHoldersArray = new XVar(), query = null, queryData_Array = new XVar(), strOriginalDetailsTable = null, table = null, tableKeysArray = new XVar(), tdataArray = new XVar(), tstrOrderBy = null, vdata = SettingsMap.GetArray();
			tdataArray["m_location_office"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".searchableFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".ShortName"] = "m_location_office";
			tdataArray["m_location_office"][".OwnerID"] = "";
			tdataArray["m_location_office"][".OriginalTable"] = "dbo.m_location_office";
			tdataArray["m_location_office"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}"));
			tdataArray["m_location_office"][".originalPagesByType"] = tdataArray["m_location_office"][".pagesByType"];
			tdataArray["m_location_office"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}")));
			tdataArray["m_location_office"][".originalPages"] = tdataArray["m_location_office"][".pages"];
			tdataArray["m_location_office"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}"));
			tdataArray["m_location_office"][".originalDefaultPages"] = tdataArray["m_location_office"][".defaultPages"];
			fieldLabelsArray["m_location_office"] = SettingsMap.GetArray();
			fieldToolTipsArray["m_location_office"] = SettingsMap.GetArray();
			pageTitlesArray["m_location_office"] = SettingsMap.GetArray();
			placeHoldersArray["m_location_office"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["m_location_office"]["English"] = SettingsMap.GetArray();
				fieldToolTipsArray["m_location_office"]["English"] = SettingsMap.GetArray();
				placeHoldersArray["m_location_office"]["English"] = SettingsMap.GetArray();
				pageTitlesArray["m_location_office"]["English"] = SettingsMap.GetArray();
				fieldLabelsArray["m_location_office"]["English"]["m_location_id"] = "M Location Id";
				fieldToolTipsArray["m_location_office"]["English"]["m_location_id"] = "";
				placeHoldersArray["m_location_office"]["English"]["m_location_id"] = "";
				fieldLabelsArray["m_location_office"]["English"]["m_location_name"] = "M Location Name";
				fieldToolTipsArray["m_location_office"]["English"]["m_location_name"] = "";
				placeHoldersArray["m_location_office"]["English"]["m_location_name"] = "";
				fieldLabelsArray["m_location_office"]["English"]["m_location_address"] = "M Location Address";
				fieldToolTipsArray["m_location_office"]["English"]["m_location_address"] = "";
				placeHoldersArray["m_location_office"]["English"]["m_location_address"] = "";
				fieldLabelsArray["m_location_office"]["English"]["m_location_kabupaten"] = "M Location Kabupaten";
				fieldToolTipsArray["m_location_office"]["English"]["m_location_kabupaten"] = "";
				placeHoldersArray["m_location_office"]["English"]["m_location_kabupaten"] = "";
				fieldLabelsArray["m_location_office"]["English"]["m_location_provinsi"] = "M Location Provinsi";
				fieldToolTipsArray["m_location_office"]["English"]["m_location_provinsi"] = "";
				placeHoldersArray["m_location_office"]["English"]["m_location_provinsi"] = "";
				if(XVar.Pack(MVCFunctions.count(fieldToolTipsArray["m_location_office"]["English"])))
				{
					tdataArray["m_location_office"][".isUseToolTips"] = true;
				}
			}
			tdataArray["m_location_office"][".NCSearch"] = true;
			tdataArray["m_location_office"][".shortTableName"] = "m_location_office";
			tdataArray["m_location_office"][".nSecOptions"] = 0;
			tdataArray["m_location_office"][".mainTableOwnerID"] = "";
			tdataArray["m_location_office"][".entityType"] = 0;
			tdataArray["m_location_office"][".connId"] = "TSUNDB_at_alpha_talisman_co_id";
			tdataArray["m_location_office"][".strOriginalTableName"] = "dbo.m_location_office";
			tdataArray["m_location_office"][".showAddInPopup"] = false;
			tdataArray["m_location_office"][".showEditInPopup"] = false;
			tdataArray["m_location_office"][".showViewInPopup"] = false;
			tdataArray["m_location_office"][".listAjax"] = false;
			tdataArray["m_location_office"][".audit"] = true;
			tdataArray["m_location_office"][".locking"] = false;
			GlobalVars.pages = tdataArray["m_location_office"][".defaultPages"];
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EDIT]))
			{
				tdataArray["m_location_office"][".edit"] = true;
				tdataArray["m_location_office"][".afterEditAction"] = 1;
				tdataArray["m_location_office"][".closePopupAfterEdit"] = 1;
				tdataArray["m_location_office"][".afterEditActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_ADD]))
			{
				tdataArray["m_location_office"][".add"] = true;
				tdataArray["m_location_office"][".afterAddAction"] = 1;
				tdataArray["m_location_office"][".closePopupAfterAdd"] = 1;
				tdataArray["m_location_office"][".afterAddActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_LIST]))
			{
				tdataArray["m_location_office"][".list"] = true;
			}
			tdataArray["m_location_office"][".strSortControlSettingsJSON"] = "";
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_VIEW]))
			{
				tdataArray["m_location_office"][".view"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_IMPORT]))
			{
				tdataArray["m_location_office"][".import"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EXPORT]))
			{
				tdataArray["m_location_office"][".exportTo"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_PRINT]))
			{
				tdataArray["m_location_office"][".printFriendly"] = true;
			}
			tdataArray["m_location_office"][".showSimpleSearchOptions"] = true;
			tdataArray["m_location_office"][".allowShowHideFields"] = true;
			tdataArray["m_location_office"][".allowFieldsReordering"] = true;
			tdataArray["m_location_office"][".isUseAjaxSuggest"] = true;


			tdataArray["m_location_office"][".ajaxCodeSnippetAdded"] = false;
			tdataArray["m_location_office"][".buttonsAdded"] = false;
			tdataArray["m_location_office"][".addPageEvents"] = false;
			tdataArray["m_location_office"][".isUseTimeForSearch"] = false;
			tdataArray["m_location_office"][".badgeColor"] = "D2AF80";
			tdataArray["m_location_office"][".allSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".filterFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".requiredSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".googleLikeFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".googleLikeFields"].Add("m_location_id");
			tdataArray["m_location_office"][".googleLikeFields"].Add("m_location_name");
			tdataArray["m_location_office"][".googleLikeFields"].Add("m_location_address");
			tdataArray["m_location_office"][".googleLikeFields"].Add("m_location_kabupaten");
			tdataArray["m_location_office"][".googleLikeFields"].Add("m_location_provinsi");
			tdataArray["m_location_office"][".tableType"] = "list";
			tdataArray["m_location_office"][".printerPageOrientation"] = 0;
			tdataArray["m_location_office"][".nPrinterPageScale"] = 100;
			tdataArray["m_location_office"][".nPrinterSplitRecords"] = 40;
			tdataArray["m_location_office"][".geocodingEnabled"] = false;
			tdataArray["m_location_office"][".pageSize"] = 20;
			tdataArray["m_location_office"][".warnLeavingPages"] = true;
			tstrOrderBy = "";
			tdataArray["m_location_office"][".strOrderBy"] = tstrOrderBy;
			tdataArray["m_location_office"][".orderindexes"] = SettingsMap.GetArray();
			tdataArray["m_location_office"][".sqlHead"] = "SELECT m_location_id,  	m_location_name,  	m_location_address,  	m_location_kabupaten,  	m_location_provinsi";
			tdataArray["m_location_office"][".sqlFrom"] = "FROM dbo.m_location_office";
			tdataArray["m_location_office"][".sqlWhereExpr"] = "";
			tdataArray["m_location_office"][".sqlTail"] = "";
			arrRPP = SettingsMap.GetArray();
			arrRPP.Add(10);
			arrRPP.Add(20);
			arrRPP.Add(30);
			arrRPP.Add(50);
			arrRPP.Add(100);
			arrRPP.Add(500);
			arrRPP.Add(-1);
			tdataArray["m_location_office"][".arrRecsPerPage"] = arrRPP;
			arrGPP = SettingsMap.GetArray();
			arrGPP.Add(1);
			arrGPP.Add(3);
			arrGPP.Add(5);
			arrGPP.Add(10);
			arrGPP.Add(50);
			arrGPP.Add(100);
			arrGPP.Add(-1);
			tdataArray["m_location_office"][".arrGroupsPerPage"] = arrGPP;
			tdataArray["m_location_office"][".highlightSearchResults"] = true;
			tableKeysArray["m_location_office"] = SettingsMap.GetArray();
			tableKeysArray["m_location_office"].Add("m_location_id");
			tdataArray["m_location_office"][".Keys"] = tableKeysArray["m_location_office"];
			tdataArray["m_location_office"][".hideMobileList"] = SettingsMap.GetArray();
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 1;
			fdata["strName"] = "m_location_id";
			fdata["GoodName"] = "m_location_id";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office","m_location_id");
			fdata["FieldType"] = 3;
			fdata["strField"] = "m_location_id";
			fdata["sourceSingle"] = "m_location_id";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_location_id";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Text field");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["IsRequired"] = true;
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["HTML5InuptType"] = "text";
			edata["EditParams"] = "";
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"].Add(CommonFunctions.getJsValidatorName(new XVar("Number")));
			edata["validateAs"]["basicValidate"].Add("IsRequired");
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Contains";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_location_office"]["m_location_id"] = fdata;
			tdataArray["m_location_office"][".searchableFields"].Add("m_location_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 2;
			fdata["strName"] = "m_location_name";
			fdata["GoodName"] = "m_location_name";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office","m_location_name");
			fdata["FieldType"] = 202;
			fdata["strField"] = "m_location_name";
			fdata["sourceSingle"] = "m_location_name";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_location_name";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Text field");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["HTML5InuptType"] = "text";
			edata["EditParams"] = "";
			edata["EditParams"] = MVCFunctions.Concat(edata["EditParams"], " maxlength=50");
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Contains";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_location_office"]["m_location_name"] = fdata;
			tdataArray["m_location_office"][".searchableFields"].Add("m_location_name");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 3;
			fdata["strName"] = "m_location_address";
			fdata["GoodName"] = "m_location_address";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office","m_location_address");
			fdata["FieldType"] = 202;
			fdata["strField"] = "m_location_address";
			fdata["sourceSingle"] = "m_location_address";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_location_address";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Text field");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["HTML5InuptType"] = "text";
			edata["EditParams"] = "";
			edata["EditParams"] = MVCFunctions.Concat(edata["EditParams"], " maxlength=150");
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Contains";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_location_office"]["m_location_address"] = fdata;
			tdataArray["m_location_office"][".searchableFields"].Add("m_location_address");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 4;
			fdata["strName"] = "m_location_kabupaten";
			fdata["GoodName"] = "m_location_kabupaten";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office","m_location_kabupaten");
			fdata["FieldType"] = 3;
			fdata["strField"] = "m_location_kabupaten";
			fdata["sourceSingle"] = "m_location_kabupaten";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_location_kabupaten";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Text field");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["HTML5InuptType"] = "text";
			edata["EditParams"] = "";
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"].Add(CommonFunctions.getJsValidatorName(new XVar("Number")));
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Contains";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_location_office"]["m_location_kabupaten"] = fdata;
			tdataArray["m_location_office"][".searchableFields"].Add("m_location_kabupaten");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 5;
			fdata["strName"] = "m_location_provinsi";
			fdata["GoodName"] = "m_location_provinsi";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office","m_location_provinsi");
			fdata["FieldType"] = 3;
			fdata["strField"] = "m_location_provinsi";
			fdata["sourceSingle"] = "m_location_provinsi";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_location_provinsi";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Text field");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["HTML5InuptType"] = "text";
			edata["EditParams"] = "";
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"].Add(CommonFunctions.getJsValidatorName(new XVar("Number")));
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Contains";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_location_office"]["m_location_provinsi"] = fdata;
			tdataArray["m_location_office"][".searchableFields"].Add("m_location_provinsi");
			GlobalVars.tables_data["dbo.m_location_office"] = tdataArray["m_location_office"];
			GlobalVars.field_labels["dbo_m_location_office"] = fieldLabelsArray["m_location_office"];
			GlobalVars.fieldToolTips["dbo_m_location_office"] = fieldToolTipsArray["m_location_office"];
			GlobalVars.placeHolders["dbo_m_location_office"] = placeHoldersArray["m_location_office"];
			GlobalVars.page_titles["dbo_m_location_office"] = pageTitlesArray["m_location_office"];
			CommonFunctions.changeTextControlsToDate(new XVar("dbo.m_location_office"));
			GlobalVars.detailsTablesData["dbo.m_location_office"] = SettingsMap.GetArray();
			GlobalVars.masterTablesData["dbo.m_location_office"] = SettingsMap.GetArray();

SQLEntity obj = null;
var protoArray = SettingsMap.GetArray();
protoArray["0"] = SettingsMap.GetArray();
protoArray["0"]["m_strHead"] = "SELECT";
protoArray["0"]["m_strFieldList"] = "m_location_id,  	m_location_name,  	m_location_address,  	m_location_kabupaten,  	m_location_provinsi";
protoArray["0"]["m_strFrom"] = "FROM dbo.m_location_office";
protoArray["0"]["m_strWhere"] = "";
protoArray["0"]["m_strOrderBy"] = "";
	
		
protoArray["0"]["cipherer"] = null;
protoArray["2"] = SettingsMap.GetArray();
protoArray["2"]["m_sql"] = "";
protoArray["2"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLNonParsed(new XVar("m_sql", ""));

protoArray["2"]["m_column"] = obj;
protoArray["2"]["m_contained"] = SettingsMap.GetArray();
protoArray["2"]["m_strCase"] = "";
protoArray["2"]["m_havingmode"] = false;
protoArray["2"]["m_inBrackets"] = false;
protoArray["2"]["m_useAlias"] = false;
obj = new SQLLogicalExpr(protoArray["2"]);

protoArray["0"]["m_where"] = obj;
protoArray["4"] = SettingsMap.GetArray();
protoArray["4"]["m_sql"] = "";
protoArray["4"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLNonParsed(new XVar("m_sql", ""));

protoArray["4"]["m_column"] = obj;
protoArray["4"]["m_contained"] = SettingsMap.GetArray();
protoArray["4"]["m_strCase"] = "";
protoArray["4"]["m_havingmode"] = false;
protoArray["4"]["m_inBrackets"] = false;
protoArray["4"]["m_useAlias"] = false;
obj = new SQLLogicalExpr(protoArray["4"]);

protoArray["0"]["m_having"] = obj;
protoArray["0"]["m_fieldlist"] = SettingsMap.GetArray();
protoArray["6"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_id", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office"));

protoArray["6"]["m_sql"] = "m_location_id";
protoArray["6"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["6"]["m_expr"] = obj;
protoArray["6"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["6"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["8"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_name", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office"));

protoArray["8"]["m_sql"] = "m_location_name";
protoArray["8"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["8"]["m_expr"] = obj;
protoArray["8"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["8"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["10"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_address", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office"));

protoArray["10"]["m_sql"] = "m_location_address";
protoArray["10"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["10"]["m_expr"] = obj;
protoArray["10"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["10"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["12"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_kabupaten", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office"));

protoArray["12"]["m_sql"] = "m_location_kabupaten";
protoArray["12"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["12"]["m_expr"] = obj;
protoArray["12"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["12"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["14"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_provinsi", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office"));

protoArray["14"]["m_sql"] = "m_location_provinsi";
protoArray["14"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["14"]["m_expr"] = obj;
protoArray["14"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["14"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["0"]["m_fromlist"] = SettingsMap.GetArray();
protoArray["16"] = SettingsMap.GetArray();
protoArray["16"]["m_link"] = "SQLL_MAIN";
protoArray["17"] = SettingsMap.GetArray();
protoArray["17"]["m_strName"] = "dbo.m_location_office";
protoArray["17"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["17"]["m_columns"] = SettingsMap.GetArray();
protoArray["17"]["m_columns"].Add("m_location_id");
protoArray["17"]["m_columns"].Add("m_location_name");
protoArray["17"]["m_columns"].Add("m_location_address");
protoArray["17"]["m_columns"].Add("m_location_kabupaten");
protoArray["17"]["m_columns"].Add("m_location_provinsi");
obj = new SQLTable(protoArray["17"]);

protoArray["16"]["m_table"] = obj;
protoArray["16"]["m_sql"] = "dbo.m_location_office";
protoArray["16"]["m_alias"] = "";
protoArray["16"]["m_srcTableName"] = "dbo.m_location_office";
protoArray["18"] = SettingsMap.GetArray();
protoArray["18"]["m_sql"] = "";
protoArray["18"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLNonParsed(new XVar("m_sql", ""));

protoArray["18"]["m_column"] = obj;
protoArray["18"]["m_contained"] = SettingsMap.GetArray();
protoArray["18"]["m_strCase"] = "";
protoArray["18"]["m_havingmode"] = false;
protoArray["18"]["m_inBrackets"] = false;
protoArray["18"]["m_useAlias"] = false;
obj = new SQLLogicalExpr(protoArray["18"]);

protoArray["16"]["m_joinon"] = obj;
obj = new SQLFromListItem(protoArray["16"]);

protoArray["0"]["m_fromlist"].Add(obj);
protoArray["0"]["m_groupby"] = SettingsMap.GetArray();
protoArray["0"]["m_orderby"] = SettingsMap.GetArray();
protoArray["0"]["m_srcTableName"] = "dbo.m_location_office";
obj = new SQLQuery(protoArray["0"]);

queryData_Array["m_location_office"] = obj;

				
		
			tdataArray["m_location_office"][".sqlquery"] = queryData_Array["m_location_office"];
			tdataArray["m_location_office"][".hasEvents"] = false;
			GlobalVars.tables_data["m_location_office"] = tdataArray["m_location_office"];
		}
	}

}
