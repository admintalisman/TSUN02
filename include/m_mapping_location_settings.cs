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
	public static partial class Settings_m_mapping_location
	{
		static public void Apply()
		{
			SettingsMap arrGPP = SettingsMap.GetArray(), arrGridTabs = SettingsMap.GetArray(), arrRPP = SettingsMap.GetArray(), dIndex = null, detailsParam = SettingsMap.GetArray(), edata = SettingsMap.GetArray(), eventsData = SettingsMap.GetArray(), fdata = SettingsMap.GetArray(), fieldLabelsArray = new XVar(), fieldToolTipsArray = new XVar(), hours = null, intervalData = SettingsMap.GetArray(), masterParams = SettingsMap.GetArray(), pageTitlesArray = new XVar(), placeHoldersArray = new XVar(), query = null, queryData_Array = new XVar(), strOriginalDetailsTable = null, table = null, tableKeysArray = new XVar(), tdataArray = new XVar(), tstrOrderBy = null, vdata = SettingsMap.GetArray();
			tdataArray["m_mapping_location"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".searchableFields"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".ShortName"] = "m_mapping_location";
			tdataArray["m_mapping_location"][".OwnerID"] = "";
			tdataArray["m_mapping_location"][".OriginalTable"] = "dbo.m_mapping_location";
			tdataArray["m_mapping_location"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}"));
			tdataArray["m_mapping_location"][".originalPagesByType"] = tdataArray["m_mapping_location"][".pagesByType"];
			tdataArray["m_mapping_location"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}")));
			tdataArray["m_mapping_location"][".originalPages"] = tdataArray["m_mapping_location"][".pages"];
			tdataArray["m_mapping_location"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}"));
			tdataArray["m_mapping_location"][".originalDefaultPages"] = tdataArray["m_mapping_location"][".defaultPages"];
			fieldLabelsArray["m_mapping_location"] = SettingsMap.GetArray();
			fieldToolTipsArray["m_mapping_location"] = SettingsMap.GetArray();
			pageTitlesArray["m_mapping_location"] = SettingsMap.GetArray();
			placeHoldersArray["m_mapping_location"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["m_mapping_location"]["English"] = SettingsMap.GetArray();
				fieldToolTipsArray["m_mapping_location"]["English"] = SettingsMap.GetArray();
				placeHoldersArray["m_mapping_location"]["English"] = SettingsMap.GetArray();
				pageTitlesArray["m_mapping_location"]["English"] = SettingsMap.GetArray();
				fieldLabelsArray["m_mapping_location"]["English"]["m_mapping_location_id"] = "M Mapping Location Id";
				fieldToolTipsArray["m_mapping_location"]["English"]["m_mapping_location_id"] = "";
				placeHoldersArray["m_mapping_location"]["English"]["m_mapping_location_id"] = "";
				fieldLabelsArray["m_mapping_location"]["English"]["username"] = "Username";
				fieldToolTipsArray["m_mapping_location"]["English"]["username"] = "";
				placeHoldersArray["m_mapping_location"]["English"]["username"] = "";
				fieldLabelsArray["m_mapping_location"]["English"]["m_location_id"] = "Location";
				fieldToolTipsArray["m_mapping_location"]["English"]["m_location_id"] = "";
				placeHoldersArray["m_mapping_location"]["English"]["m_location_id"] = "";
				if(XVar.Pack(MVCFunctions.count(fieldToolTipsArray["m_mapping_location"]["English"])))
				{
					tdataArray["m_mapping_location"][".isUseToolTips"] = true;
				}
			}
			tdataArray["m_mapping_location"][".NCSearch"] = true;
			tdataArray["m_mapping_location"][".scrollGridBody"] = true;
			tdataArray["m_mapping_location"][".shortTableName"] = "m_mapping_location";
			tdataArray["m_mapping_location"][".nSecOptions"] = 0;
			tdataArray["m_mapping_location"][".mainTableOwnerID"] = "";
			tdataArray["m_mapping_location"][".entityType"] = 0;
			tdataArray["m_mapping_location"][".connId"] = "TSUNDB_at_alpha_talisman_co_id";
			tdataArray["m_mapping_location"][".strOriginalTableName"] = "dbo.m_mapping_location";
			tdataArray["m_mapping_location"][".showAddInPopup"] = false;
			tdataArray["m_mapping_location"][".showEditInPopup"] = false;
			tdataArray["m_mapping_location"][".showViewInPopup"] = false;
			tdataArray["m_mapping_location"][".listAjax"] = false;
			tdataArray["m_mapping_location"][".audit"] = true;
			tdataArray["m_mapping_location"][".locking"] = false;
			GlobalVars.pages = tdataArray["m_mapping_location"][".defaultPages"];
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EDIT]))
			{
				tdataArray["m_mapping_location"][".edit"] = true;
				tdataArray["m_mapping_location"][".afterEditAction"] = 1;
				tdataArray["m_mapping_location"][".closePopupAfterEdit"] = 1;
				tdataArray["m_mapping_location"][".afterEditActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_ADD]))
			{
				tdataArray["m_mapping_location"][".add"] = true;
				tdataArray["m_mapping_location"][".afterAddAction"] = 1;
				tdataArray["m_mapping_location"][".closePopupAfterAdd"] = 1;
				tdataArray["m_mapping_location"][".afterAddActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_LIST]))
			{
				tdataArray["m_mapping_location"][".list"] = true;
			}
			tdataArray["m_mapping_location"][".strSortControlSettingsJSON"] = "";
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_VIEW]))
			{
				tdataArray["m_mapping_location"][".view"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_IMPORT]))
			{
				tdataArray["m_mapping_location"][".import"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EXPORT]))
			{
				tdataArray["m_mapping_location"][".exportTo"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_PRINT]))
			{
				tdataArray["m_mapping_location"][".printFriendly"] = true;
			}
			tdataArray["m_mapping_location"][".showSimpleSearchOptions"] = true;
			tdataArray["m_mapping_location"][".allowShowHideFields"] = true;
			tdataArray["m_mapping_location"][".allowFieldsReordering"] = true;
			tdataArray["m_mapping_location"][".isUseAjaxSuggest"] = true;


			tdataArray["m_mapping_location"][".ajaxCodeSnippetAdded"] = false;
			tdataArray["m_mapping_location"][".buttonsAdded"] = false;
			tdataArray["m_mapping_location"][".addPageEvents"] = false;
			tdataArray["m_mapping_location"][".isUseTimeForSearch"] = false;
			tdataArray["m_mapping_location"][".badgeColor"] = "E8926F";
			tdataArray["m_mapping_location"][".allSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".filterFields"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".requiredSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".googleLikeFields"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".googleLikeFields"].Add("m_mapping_location_id");
			tdataArray["m_mapping_location"][".googleLikeFields"].Add("username");
			tdataArray["m_mapping_location"][".googleLikeFields"].Add("m_location_id");
			tdataArray["m_mapping_location"][".tableType"] = "list";
			tdataArray["m_mapping_location"][".printerPageOrientation"] = 0;
			tdataArray["m_mapping_location"][".nPrinterPageScale"] = 100;
			tdataArray["m_mapping_location"][".nPrinterSplitRecords"] = 40;
			tdataArray["m_mapping_location"][".geocodingEnabled"] = false;
			tdataArray["m_mapping_location"][".pageSize"] = 20;
			tdataArray["m_mapping_location"][".warnLeavingPages"] = true;
			tstrOrderBy = "";
			tdataArray["m_mapping_location"][".strOrderBy"] = tstrOrderBy;
			tdataArray["m_mapping_location"][".orderindexes"] = SettingsMap.GetArray();
			tdataArray["m_mapping_location"][".sqlHead"] = "SELECT m_mapping_location_id,  	username,  	m_location_id";
			tdataArray["m_mapping_location"][".sqlFrom"] = "FROM dbo.m_mapping_location";
			tdataArray["m_mapping_location"][".sqlWhereExpr"] = "";
			tdataArray["m_mapping_location"][".sqlTail"] = "";
			arrRPP = SettingsMap.GetArray();
			arrRPP.Add(10);
			arrRPP.Add(20);
			arrRPP.Add(30);
			arrRPP.Add(50);
			arrRPP.Add(100);
			arrRPP.Add(500);
			arrRPP.Add(-1);
			tdataArray["m_mapping_location"][".arrRecsPerPage"] = arrRPP;
			arrGPP = SettingsMap.GetArray();
			arrGPP.Add(1);
			arrGPP.Add(3);
			arrGPP.Add(5);
			arrGPP.Add(10);
			arrGPP.Add(50);
			arrGPP.Add(100);
			arrGPP.Add(-1);
			tdataArray["m_mapping_location"][".arrGroupsPerPage"] = arrGPP;
			tdataArray["m_mapping_location"][".highlightSearchResults"] = true;
			tableKeysArray["m_mapping_location"] = SettingsMap.GetArray();
			tableKeysArray["m_mapping_location"].Add("m_mapping_location_id");
			tdataArray["m_mapping_location"][".Keys"] = tableKeysArray["m_mapping_location"];
			tdataArray["m_mapping_location"][".hideMobileList"] = SettingsMap.GetArray();
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 1;
			fdata["strName"] = "m_mapping_location_id";
			fdata["GoodName"] = "m_mapping_location_id";
			fdata["ownerTable"] = "dbo.m_mapping_location";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_mapping_location","m_mapping_location_id");
			fdata["FieldType"] = 3;
			fdata["AutoInc"] = true;
			fdata["strField"] = "m_mapping_location_id";
			fdata["sourceSingle"] = "m_mapping_location_id";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_mapping_location_id";
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
			tdataArray["m_mapping_location"]["m_mapping_location_id"] = fdata;
			tdataArray["m_mapping_location"][".searchableFields"].Add("m_mapping_location_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 2;
			fdata["strName"] = "username";
			fdata["GoodName"] = "username";
			fdata["ownerTable"] = "dbo.m_mapping_location";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_mapping_location","username");
			fdata["FieldType"] = 202;
			fdata["strField"] = "username";
			fdata["sourceSingle"] = "username";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "username";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "");
			vdata["NeedEncode"] = true;
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Lookup wizard");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["LookupType"] = 2;
			edata["LookupTable"] = "dbo.m_login";
			edata["autoCompleteFieldsOnEdit"] = 0;
			edata["autoCompleteFields"] = SettingsMap.GetArray();
			edata["LCType"] = 0;
			edata["LinkField"] = "username";
			edata["LinkFieldType"] = 0;
			edata["DisplayField"] = "username";
			edata["LookupOrderBy"] = "login_id";
			edata["SelectSize"] = 1;
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Equals";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_mapping_location"]["username"] = fdata;
			tdataArray["m_mapping_location"][".searchableFields"].Add("username");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 3;
			fdata["strName"] = "m_location_id";
			fdata["GoodName"] = "m_location_id";
			fdata["ownerTable"] = "dbo.m_mapping_location";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_mapping_location","m_location_id");
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
			edata = new XVar("EditFormat", "Lookup wizard");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
			edata["LookupType"] = 2;
			edata["LookupTable"] = "dbo.m_location_office";
			edata["autoCompleteFieldsOnEdit"] = 0;
			edata["autoCompleteFields"] = SettingsMap.GetArray();
			edata["LCType"] = 0;
			edata["LinkField"] = "m_location_id";
			edata["LinkFieldType"] = 0;
			edata["DisplayField"] = "m_location_name";
			edata["LookupOrderBy"] = "m_location_id";
			edata["SelectSize"] = 1;
			edata["acceptFileTypesHtml"] = "";
			edata["maxNumberOfFiles"] = 1;
			edata["controlWidth"] = 200;
			edata["validateAs"] = SettingsMap.GetArray();
			edata["validateAs"]["basicValidate"] = SettingsMap.GetArray();
			edata["validateAs"]["customMessages"] = SettingsMap.GetArray();
			fdata["EditFormats"]["edit"] = edata;
			fdata["isSeparate"] = false;
			fdata["defaultSearchOption"] = "Equals";
			fdata["searchOptionsList"] = new XVar(0, "Contains", 1, "Equals", 2, "Starts with", 3, "More than", 4, "Less than", 5, "Between", 6, "Empty", 7, Constants.NOT_EMPTY);
			fdata["filterTotals"] = 0;
			fdata["filterMultiSelect"] = 0;
			fdata["filterFormat"] = "Values list";
			fdata["showCollapsed"] = false;
			fdata["sortValueType"] = 0;
			fdata["numberOfVisibleItems"] = 10;
			fdata["filterBy"] = 0;
			tdataArray["m_mapping_location"]["m_location_id"] = fdata;
			tdataArray["m_mapping_location"][".searchableFields"].Add("m_location_id");
			GlobalVars.tables_data["dbo.m_mapping_location"] = tdataArray["m_mapping_location"];
			GlobalVars.field_labels["dbo_m_mapping_location"] = fieldLabelsArray["m_mapping_location"];
			GlobalVars.fieldToolTips["dbo_m_mapping_location"] = fieldToolTipsArray["m_mapping_location"];
			GlobalVars.placeHolders["dbo_m_mapping_location"] = placeHoldersArray["m_mapping_location"];
			GlobalVars.page_titles["dbo_m_mapping_location"] = pageTitlesArray["m_mapping_location"];
			CommonFunctions.changeTextControlsToDate(new XVar("dbo.m_mapping_location"));
			GlobalVars.detailsTablesData["dbo.m_mapping_location"] = SettingsMap.GetArray();
			GlobalVars.masterTablesData["dbo.m_mapping_location"] = SettingsMap.GetArray();

SQLEntity obj = null;
var protoArray = SettingsMap.GetArray();
protoArray["0"] = SettingsMap.GetArray();
protoArray["0"]["m_strHead"] = "SELECT";
protoArray["0"]["m_strFieldList"] = "m_mapping_location_id,  	username,  	m_location_id";
protoArray["0"]["m_strFrom"] = "FROM dbo.m_mapping_location";
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
obj = new SQLField(new XVar("m_strName", "m_mapping_location_id", "m_strTable", "dbo.m_mapping_location", "m_srcTableName", "dbo.m_mapping_location"));

protoArray["6"]["m_sql"] = "m_mapping_location_id";
protoArray["6"]["m_srcTableName"] = "dbo.m_mapping_location";
protoArray["6"]["m_expr"] = obj;
protoArray["6"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["6"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["8"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "username", "m_strTable", "dbo.m_mapping_location", "m_srcTableName", "dbo.m_mapping_location"));

protoArray["8"]["m_sql"] = "username";
protoArray["8"]["m_srcTableName"] = "dbo.m_mapping_location";
protoArray["8"]["m_expr"] = obj;
protoArray["8"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["8"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["10"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_id", "m_strTable", "dbo.m_mapping_location", "m_srcTableName", "dbo.m_mapping_location"));

protoArray["10"]["m_sql"] = "m_location_id";
protoArray["10"]["m_srcTableName"] = "dbo.m_mapping_location";
protoArray["10"]["m_expr"] = obj;
protoArray["10"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["10"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["0"]["m_fromlist"] = SettingsMap.GetArray();
protoArray["12"] = SettingsMap.GetArray();
protoArray["12"]["m_link"] = "SQLL_MAIN";
protoArray["13"] = SettingsMap.GetArray();
protoArray["13"]["m_strName"] = "dbo.m_mapping_location";
protoArray["13"]["m_srcTableName"] = "dbo.m_mapping_location";
protoArray["13"]["m_columns"] = SettingsMap.GetArray();
protoArray["13"]["m_columns"].Add("m_mapping_location_id");
protoArray["13"]["m_columns"].Add("username");
protoArray["13"]["m_columns"].Add("m_location_id");
obj = new SQLTable(protoArray["13"]);

protoArray["12"]["m_table"] = obj;
protoArray["12"]["m_sql"] = "dbo.m_mapping_location";
protoArray["12"]["m_alias"] = "";
protoArray["12"]["m_srcTableName"] = "dbo.m_mapping_location";
protoArray["14"] = SettingsMap.GetArray();
protoArray["14"]["m_sql"] = "";
protoArray["14"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLNonParsed(new XVar("m_sql", ""));

protoArray["14"]["m_column"] = obj;
protoArray["14"]["m_contained"] = SettingsMap.GetArray();
protoArray["14"]["m_strCase"] = "";
protoArray["14"]["m_havingmode"] = false;
protoArray["14"]["m_inBrackets"] = false;
protoArray["14"]["m_useAlias"] = false;
obj = new SQLLogicalExpr(protoArray["14"]);

protoArray["12"]["m_joinon"] = obj;
obj = new SQLFromListItem(protoArray["12"]);

protoArray["0"]["m_fromlist"].Add(obj);
protoArray["0"]["m_groupby"] = SettingsMap.GetArray();
protoArray["0"]["m_orderby"] = SettingsMap.GetArray();
protoArray["0"]["m_srcTableName"] = "dbo.m_mapping_location";
obj = new SQLQuery(protoArray["0"]);

queryData_Array["m_mapping_location"] = obj;

				
		
			tdataArray["m_mapping_location"][".sqlquery"] = queryData_Array["m_mapping_location"];
			tdataArray["m_mapping_location"][".hasEvents"] = false;
			GlobalVars.tables_data["m_mapping_location"] = tdataArray["m_mapping_location"];
		}
	}

}
