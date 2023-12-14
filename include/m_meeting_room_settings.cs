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
	public static partial class Settings_m_meeting_room
	{
		static public void Apply()
		{
			SettingsMap arrGPP = SettingsMap.GetArray(), arrGridTabs = SettingsMap.GetArray(), arrRPP = SettingsMap.GetArray(), dIndex = null, detailsParam = SettingsMap.GetArray(), edata = SettingsMap.GetArray(), eventsData = SettingsMap.GetArray(), fdata = SettingsMap.GetArray(), fieldLabelsArray = new XVar(), fieldToolTipsArray = new XVar(), hours = null, intervalData = SettingsMap.GetArray(), masterParams = SettingsMap.GetArray(), pageTitlesArray = new XVar(), placeHoldersArray = new XVar(), query = null, queryData_Array = new XVar(), strOriginalDetailsTable = null, table = null, tableKeysArray = new XVar(), tdataArray = new XVar(), tstrOrderBy = null, vdata = SettingsMap.GetArray();
			tdataArray["m_meeting_room"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".searchableFields"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".ShortName"] = "m_meeting_room";
			tdataArray["m_meeting_room"][".OwnerID"] = "";
			tdataArray["m_meeting_room"][".OriginalTable"] = "dbo.m_meeting_room";
			tdataArray["m_meeting_room"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}"));
			tdataArray["m_meeting_room"][".originalPagesByType"] = tdataArray["m_meeting_room"][".pagesByType"];
			tdataArray["m_meeting_room"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}")));
			tdataArray["m_meeting_room"][".originalPages"] = tdataArray["m_meeting_room"][".pages"];
			tdataArray["m_meeting_room"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}"));
			tdataArray["m_meeting_room"][".originalDefaultPages"] = tdataArray["m_meeting_room"][".defaultPages"];
			fieldLabelsArray["m_meeting_room"] = SettingsMap.GetArray();
			fieldToolTipsArray["m_meeting_room"] = SettingsMap.GetArray();
			pageTitlesArray["m_meeting_room"] = SettingsMap.GetArray();
			placeHoldersArray["m_meeting_room"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["m_meeting_room"]["English"] = SettingsMap.GetArray();
				fieldToolTipsArray["m_meeting_room"]["English"] = SettingsMap.GetArray();
				placeHoldersArray["m_meeting_room"]["English"] = SettingsMap.GetArray();
				pageTitlesArray["m_meeting_room"]["English"] = SettingsMap.GetArray();
				fieldLabelsArray["m_meeting_room"]["English"]["m_meeting_room_id"] = "M Meeting Room Id";
				fieldToolTipsArray["m_meeting_room"]["English"]["m_meeting_room_id"] = "";
				placeHoldersArray["m_meeting_room"]["English"]["m_meeting_room_id"] = "";
				fieldLabelsArray["m_meeting_room"]["English"]["m_meeting_room_name"] = "Name";
				fieldToolTipsArray["m_meeting_room"]["English"]["m_meeting_room_name"] = "";
				placeHoldersArray["m_meeting_room"]["English"]["m_meeting_room_name"] = "";
				fieldLabelsArray["m_meeting_room"]["English"]["m_meeting_room_location_id"] = "Location";
				fieldToolTipsArray["m_meeting_room"]["English"]["m_meeting_room_location_id"] = "";
				placeHoldersArray["m_meeting_room"]["English"]["m_meeting_room_location_id"] = "";
				fieldLabelsArray["m_meeting_room"]["English"]["m_meeting_room_isactive"] = "isActive";
				fieldToolTipsArray["m_meeting_room"]["English"]["m_meeting_room_isactive"] = "";
				placeHoldersArray["m_meeting_room"]["English"]["m_meeting_room_isactive"] = "";
				if(XVar.Pack(MVCFunctions.count(fieldToolTipsArray["m_meeting_room"]["English"])))
				{
					tdataArray["m_meeting_room"][".isUseToolTips"] = true;
				}
			}
			tdataArray["m_meeting_room"][".NCSearch"] = true;
			tdataArray["m_meeting_room"][".shortTableName"] = "m_meeting_room";
			tdataArray["m_meeting_room"][".nSecOptions"] = 0;
			tdataArray["m_meeting_room"][".mainTableOwnerID"] = "";
			tdataArray["m_meeting_room"][".entityType"] = 0;
			tdataArray["m_meeting_room"][".connId"] = "TSUNDB_at_alpha_talisman_co_id";
			tdataArray["m_meeting_room"][".strOriginalTableName"] = "dbo.m_meeting_room";
			tdataArray["m_meeting_room"][".showAddInPopup"] = false;
			tdataArray["m_meeting_room"][".showEditInPopup"] = false;
			tdataArray["m_meeting_room"][".showViewInPopup"] = false;
			tdataArray["m_meeting_room"][".listAjax"] = false;
			tdataArray["m_meeting_room"][".audit"] = false;
			tdataArray["m_meeting_room"][".locking"] = false;
			GlobalVars.pages = tdataArray["m_meeting_room"][".defaultPages"];
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EDIT]))
			{
				tdataArray["m_meeting_room"][".edit"] = true;
				tdataArray["m_meeting_room"][".afterEditAction"] = 1;
				tdataArray["m_meeting_room"][".closePopupAfterEdit"] = 1;
				tdataArray["m_meeting_room"][".afterEditActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_ADD]))
			{
				tdataArray["m_meeting_room"][".add"] = true;
				tdataArray["m_meeting_room"][".afterAddAction"] = 1;
				tdataArray["m_meeting_room"][".closePopupAfterAdd"] = 1;
				tdataArray["m_meeting_room"][".afterAddActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_LIST]))
			{
				tdataArray["m_meeting_room"][".list"] = true;
			}
			tdataArray["m_meeting_room"][".strSortControlSettingsJSON"] = "";
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_VIEW]))
			{
				tdataArray["m_meeting_room"][".view"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_IMPORT]))
			{
				tdataArray["m_meeting_room"][".import"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EXPORT]))
			{
				tdataArray["m_meeting_room"][".exportTo"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_PRINT]))
			{
				tdataArray["m_meeting_room"][".printFriendly"] = true;
			}
			tdataArray["m_meeting_room"][".showSimpleSearchOptions"] = true;
			tdataArray["m_meeting_room"][".allowShowHideFields"] = true;
			tdataArray["m_meeting_room"][".allowFieldsReordering"] = true;
			tdataArray["m_meeting_room"][".isUseAjaxSuggest"] = true;


			tdataArray["m_meeting_room"][".ajaxCodeSnippetAdded"] = false;
			tdataArray["m_meeting_room"][".buttonsAdded"] = false;
			tdataArray["m_meeting_room"][".addPageEvents"] = false;
			tdataArray["m_meeting_room"][".isUseTimeForSearch"] = false;
			tdataArray["m_meeting_room"][".badgeColor"] = "E8926F";
			tdataArray["m_meeting_room"][".allSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".filterFields"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".requiredSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".googleLikeFields"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".googleLikeFields"].Add("m_meeting_room_id");
			tdataArray["m_meeting_room"][".googleLikeFields"].Add("m_meeting_room_name");
			tdataArray["m_meeting_room"][".googleLikeFields"].Add("m_meeting_room_location_id");
			tdataArray["m_meeting_room"][".googleLikeFields"].Add("m_meeting_room_isactive");
			tdataArray["m_meeting_room"][".tableType"] = "list";
			tdataArray["m_meeting_room"][".printerPageOrientation"] = 0;
			tdataArray["m_meeting_room"][".nPrinterPageScale"] = 100;
			tdataArray["m_meeting_room"][".nPrinterSplitRecords"] = 40;
			tdataArray["m_meeting_room"][".geocodingEnabled"] = false;
			tdataArray["m_meeting_room"][".pageSize"] = 20;
			tdataArray["m_meeting_room"][".warnLeavingPages"] = true;
			tstrOrderBy = "";
			tdataArray["m_meeting_room"][".strOrderBy"] = tstrOrderBy;
			tdataArray["m_meeting_room"][".orderindexes"] = SettingsMap.GetArray();
			tdataArray["m_meeting_room"][".sqlHead"] = "SELECT m_meeting_room_id,  m_meeting_room_name,  m_meeting_room_location_id,  m_meeting_room_isactive";
			tdataArray["m_meeting_room"][".sqlFrom"] = "FROM dbo.m_meeting_room";
			tdataArray["m_meeting_room"][".sqlWhereExpr"] = "(m_meeting_room_isactive = 1)";
			tdataArray["m_meeting_room"][".sqlTail"] = "";
			arrRPP = SettingsMap.GetArray();
			arrRPP.Add(10);
			arrRPP.Add(20);
			arrRPP.Add(30);
			arrRPP.Add(50);
			arrRPP.Add(100);
			arrRPP.Add(500);
			arrRPP.Add(-1);
			tdataArray["m_meeting_room"][".arrRecsPerPage"] = arrRPP;
			arrGPP = SettingsMap.GetArray();
			arrGPP.Add(1);
			arrGPP.Add(3);
			arrGPP.Add(5);
			arrGPP.Add(10);
			arrGPP.Add(50);
			arrGPP.Add(100);
			arrGPP.Add(-1);
			tdataArray["m_meeting_room"][".arrGroupsPerPage"] = arrGPP;
			tdataArray["m_meeting_room"][".highlightSearchResults"] = true;
			tableKeysArray["m_meeting_room"] = SettingsMap.GetArray();
			tableKeysArray["m_meeting_room"].Add("m_meeting_room_id");
			tdataArray["m_meeting_room"][".Keys"] = tableKeysArray["m_meeting_room"];
			tdataArray["m_meeting_room"][".hideMobileList"] = SettingsMap.GetArray();
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 1;
			fdata["strName"] = "m_meeting_room_id";
			fdata["GoodName"] = "m_meeting_room_id";
			fdata["ownerTable"] = "dbo.m_meeting_room";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_meeting_room","m_meeting_room_id");
			fdata["FieldType"] = 3;
			fdata["AutoInc"] = true;
			fdata["strField"] = "m_meeting_room_id";
			fdata["sourceSingle"] = "m_meeting_room_id";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_meeting_room_id";
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
			tdataArray["m_meeting_room"]["m_meeting_room_id"] = fdata;
			tdataArray["m_meeting_room"][".searchableFields"].Add("m_meeting_room_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 2;
			fdata["strName"] = "m_meeting_room_name";
			fdata["GoodName"] = "m_meeting_room_name";
			fdata["ownerTable"] = "dbo.m_meeting_room";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_meeting_room","m_meeting_room_name");
			fdata["FieldType"] = 202;
			fdata["strField"] = "m_meeting_room_name";
			fdata["sourceSingle"] = "m_meeting_room_name";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_meeting_room_name";
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
			tdataArray["m_meeting_room"]["m_meeting_room_name"] = fdata;
			tdataArray["m_meeting_room"][".searchableFields"].Add("m_meeting_room_name");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 3;
			fdata["strName"] = "m_meeting_room_location_id";
			fdata["GoodName"] = "m_meeting_room_location_id";
			fdata["ownerTable"] = "dbo.m_meeting_room";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_meeting_room","m_meeting_room_location_id");
			fdata["FieldType"] = 3;
			fdata["strField"] = "m_meeting_room_location_id";
			fdata["sourceSingle"] = "m_meeting_room_location_id";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_meeting_room_location_id";
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
			tdataArray["m_meeting_room"]["m_meeting_room_location_id"] = fdata;
			tdataArray["m_meeting_room"][".searchableFields"].Add("m_meeting_room_location_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 4;
			fdata["strName"] = "m_meeting_room_isactive";
			fdata["GoodName"] = "m_meeting_room_isactive";
			fdata["ownerTable"] = "dbo.m_meeting_room";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_meeting_room","m_meeting_room_isactive");
			fdata["FieldType"] = 3;
			fdata["strField"] = "m_meeting_room_isactive";
			fdata["sourceSingle"] = "m_meeting_room_isactive";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_meeting_room_isactive";
			fdata["UploadFolder"] = "files";
			fdata["ViewFormats"] = SettingsMap.GetArray();
			vdata = new XVar("ViewFormat", "Checkbox");
			vdata["truncateText"] = true;
			vdata["NumberOfChars"] = 80;
			fdata["ViewFormats"]["view"] = vdata;
			fdata["EditFormats"] = SettingsMap.GetArray();
			edata = new XVar("EditFormat", "Checkbox");
			edata["weekdayMessage"] = new XVar("message", "", "messageType", "Text");
			edata["weekdays"] = "[]";
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
			tdataArray["m_meeting_room"]["m_meeting_room_isactive"] = fdata;
			tdataArray["m_meeting_room"][".searchableFields"].Add("m_meeting_room_isactive");
			GlobalVars.tables_data["dbo.m_meeting_room"] = tdataArray["m_meeting_room"];
			GlobalVars.field_labels["dbo_m_meeting_room"] = fieldLabelsArray["m_meeting_room"];
			GlobalVars.fieldToolTips["dbo_m_meeting_room"] = fieldToolTipsArray["m_meeting_room"];
			GlobalVars.placeHolders["dbo_m_meeting_room"] = placeHoldersArray["m_meeting_room"];
			GlobalVars.page_titles["dbo_m_meeting_room"] = pageTitlesArray["m_meeting_room"];
			CommonFunctions.changeTextControlsToDate(new XVar("dbo.m_meeting_room"));
			GlobalVars.detailsTablesData["dbo.m_meeting_room"] = SettingsMap.GetArray();
			GlobalVars.masterTablesData["dbo.m_meeting_room"] = SettingsMap.GetArray();

SQLEntity obj = null;
var protoArray = SettingsMap.GetArray();
protoArray["0"] = SettingsMap.GetArray();
protoArray["0"]["m_strHead"] = "SELECT";
protoArray["0"]["m_strFieldList"] = "m_meeting_room_id,  m_meeting_room_name,  m_meeting_room_location_id,  m_meeting_room_isactive";
protoArray["0"]["m_strFrom"] = "FROM dbo.m_meeting_room";
protoArray["0"]["m_strWhere"] = "(m_meeting_room_isactive = 1)";
protoArray["0"]["m_strOrderBy"] = "";
	
		
protoArray["0"]["cipherer"] = null;
protoArray["2"] = SettingsMap.GetArray();
protoArray["2"]["m_sql"] = "m_meeting_room_isactive = 1";
protoArray["2"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLField(new XVar("m_strName", "m_meeting_room_isactive", "m_strTable", "dbo.m_meeting_room", "m_srcTableName", "dbo.m_meeting_room"));

protoArray["2"]["m_column"] = obj;
protoArray["2"]["m_contained"] = SettingsMap.GetArray();
protoArray["2"]["m_strCase"] = "= 1";
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
obj = new SQLField(new XVar("m_strName", "m_meeting_room_id", "m_strTable", "dbo.m_meeting_room", "m_srcTableName", "dbo.m_meeting_room"));

protoArray["6"]["m_sql"] = "m_meeting_room_id";
protoArray["6"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["6"]["m_expr"] = obj;
protoArray["6"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["6"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["8"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_meeting_room_name", "m_strTable", "dbo.m_meeting_room", "m_srcTableName", "dbo.m_meeting_room"));

protoArray["8"]["m_sql"] = "m_meeting_room_name";
protoArray["8"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["8"]["m_expr"] = obj;
protoArray["8"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["8"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["10"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_meeting_room_location_id", "m_strTable", "dbo.m_meeting_room", "m_srcTableName", "dbo.m_meeting_room"));

protoArray["10"]["m_sql"] = "m_meeting_room_location_id";
protoArray["10"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["10"]["m_expr"] = obj;
protoArray["10"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["10"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["12"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_meeting_room_isactive", "m_strTable", "dbo.m_meeting_room", "m_srcTableName", "dbo.m_meeting_room"));

protoArray["12"]["m_sql"] = "m_meeting_room_isactive";
protoArray["12"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["12"]["m_expr"] = obj;
protoArray["12"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["12"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["0"]["m_fromlist"] = SettingsMap.GetArray();
protoArray["14"] = SettingsMap.GetArray();
protoArray["14"]["m_link"] = "SQLL_MAIN";
protoArray["15"] = SettingsMap.GetArray();
protoArray["15"]["m_strName"] = "dbo.m_meeting_room";
protoArray["15"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["15"]["m_columns"] = SettingsMap.GetArray();
protoArray["15"]["m_columns"].Add("m_meeting_room_id");
protoArray["15"]["m_columns"].Add("m_meeting_room_name");
protoArray["15"]["m_columns"].Add("m_meeting_room_location_id");
protoArray["15"]["m_columns"].Add("m_meeting_room_isactive");
obj = new SQLTable(protoArray["15"]);

protoArray["14"]["m_table"] = obj;
protoArray["14"]["m_sql"] = "dbo.m_meeting_room";
protoArray["14"]["m_alias"] = "";
protoArray["14"]["m_srcTableName"] = "dbo.m_meeting_room";
protoArray["16"] = SettingsMap.GetArray();
protoArray["16"]["m_sql"] = "";
protoArray["16"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLNonParsed(new XVar("m_sql", ""));

protoArray["16"]["m_column"] = obj;
protoArray["16"]["m_contained"] = SettingsMap.GetArray();
protoArray["16"]["m_strCase"] = "";
protoArray["16"]["m_havingmode"] = false;
protoArray["16"]["m_inBrackets"] = false;
protoArray["16"]["m_useAlias"] = false;
obj = new SQLLogicalExpr(protoArray["16"]);

protoArray["14"]["m_joinon"] = obj;
obj = new SQLFromListItem(protoArray["14"]);

protoArray["0"]["m_fromlist"].Add(obj);
protoArray["0"]["m_groupby"] = SettingsMap.GetArray();
protoArray["0"]["m_orderby"] = SettingsMap.GetArray();
protoArray["0"]["m_srcTableName"] = "dbo.m_meeting_room";
obj = new SQLQuery(protoArray["0"]);

queryData_Array["m_meeting_room"] = obj;

				
		
			tdataArray["m_meeting_room"][".sqlquery"] = queryData_Array["m_meeting_room"];
			tdataArray["m_meeting_room"][".hasEvents"] = false;
			GlobalVars.tables_data["m_meeting_room"] = tdataArray["m_meeting_room"];
		}
	}

}
