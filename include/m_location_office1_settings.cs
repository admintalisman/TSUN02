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
	public static partial class Settings_m_location_office1
	{
		static public void Apply()
		{
			SettingsMap arrGPP = SettingsMap.GetArray(), arrGridTabs = SettingsMap.GetArray(), arrRPP = SettingsMap.GetArray(), dIndex = null, detailsParam = SettingsMap.GetArray(), edata = SettingsMap.GetArray(), eventsData = SettingsMap.GetArray(), fdata = SettingsMap.GetArray(), fieldLabelsArray = new XVar(), fieldToolTipsArray = new XVar(), hours = null, intervalData = SettingsMap.GetArray(), masterParams = SettingsMap.GetArray(), pageTitlesArray = new XVar(), placeHoldersArray = new XVar(), query = null, queryData_Array = new XVar(), strOriginalDetailsTable = null, table = null, tableKeysArray = new XVar(), tdataArray = new XVar(), tstrOrderBy = null, vdata = SettingsMap.GetArray();
			tdataArray["m_location_office1"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".searchableFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".ShortName"] = "m_location_office1";
			tdataArray["m_location_office1"][".OwnerID"] = "";
			tdataArray["m_location_office1"][".OriginalTable"] = "dbo.m_location_office";
			tdataArray["m_location_office1"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}"));
			tdataArray["m_location_office1"][".originalPagesByType"] = tdataArray["m_location_office1"][".pagesByType"];
			tdataArray["m_location_office1"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}")));
			tdataArray["m_location_office1"][".originalPages"] = tdataArray["m_location_office1"][".pages"];
			tdataArray["m_location_office1"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}"));
			tdataArray["m_location_office1"][".originalDefaultPages"] = tdataArray["m_location_office1"][".defaultPages"];
			fieldLabelsArray["m_location_office1"] = SettingsMap.GetArray();
			fieldToolTipsArray["m_location_office1"] = SettingsMap.GetArray();
			pageTitlesArray["m_location_office1"] = SettingsMap.GetArray();
			placeHoldersArray["m_location_office1"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["m_location_office1"]["English"] = SettingsMap.GetArray();
				fieldToolTipsArray["m_location_office1"]["English"] = SettingsMap.GetArray();
				placeHoldersArray["m_location_office1"]["English"] = SettingsMap.GetArray();
				pageTitlesArray["m_location_office1"]["English"] = SettingsMap.GetArray();
				fieldLabelsArray["m_location_office1"]["English"]["m_location_id"] = "M Location Id";
				fieldToolTipsArray["m_location_office1"]["English"]["m_location_id"] = "";
				placeHoldersArray["m_location_office1"]["English"]["m_location_id"] = "";
				fieldLabelsArray["m_location_office1"]["English"]["m_location_name"] = "M Location Name";
				fieldToolTipsArray["m_location_office1"]["English"]["m_location_name"] = "";
				placeHoldersArray["m_location_office1"]["English"]["m_location_name"] = "";
				fieldLabelsArray["m_location_office1"]["English"]["m_location_address"] = "M Location Address";
				fieldToolTipsArray["m_location_office1"]["English"]["m_location_address"] = "";
				placeHoldersArray["m_location_office1"]["English"]["m_location_address"] = "";
				fieldLabelsArray["m_location_office1"]["English"]["m_location_kabupaten"] = "M Location Kabupaten";
				fieldToolTipsArray["m_location_office1"]["English"]["m_location_kabupaten"] = "";
				placeHoldersArray["m_location_office1"]["English"]["m_location_kabupaten"] = "";
				fieldLabelsArray["m_location_office1"]["English"]["m_location_provinsi"] = "M Location Provinsi";
				fieldToolTipsArray["m_location_office1"]["English"]["m_location_provinsi"] = "";
				placeHoldersArray["m_location_office1"]["English"]["m_location_provinsi"] = "";
				if(XVar.Pack(MVCFunctions.count(fieldToolTipsArray["m_location_office1"]["English"])))
				{
					tdataArray["m_location_office1"][".isUseToolTips"] = true;
				}
			}
			tdataArray["m_location_office1"][".NCSearch"] = true;
			tdataArray["m_location_office1"][".shortTableName"] = "m_location_office1";
			tdataArray["m_location_office1"][".nSecOptions"] = 0;
			tdataArray["m_location_office1"][".mainTableOwnerID"] = "";
			tdataArray["m_location_office1"][".entityType"] = 1;
			tdataArray["m_location_office1"][".connId"] = "TSUNDB_at_alpha_talisman_co_id";
			tdataArray["m_location_office1"][".strOriginalTableName"] = "dbo.m_location_office";
			tdataArray["m_location_office1"][".showAddInPopup"] = false;
			tdataArray["m_location_office1"][".showEditInPopup"] = false;
			tdataArray["m_location_office1"][".showViewInPopup"] = false;
			tdataArray["m_location_office1"][".listAjax"] = false;
			tdataArray["m_location_office1"][".audit"] = true;
			tdataArray["m_location_office1"][".locking"] = false;
			GlobalVars.pages = tdataArray["m_location_office1"][".defaultPages"];
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EDIT]))
			{
				tdataArray["m_location_office1"][".edit"] = true;
				tdataArray["m_location_office1"][".afterEditAction"] = 1;
				tdataArray["m_location_office1"][".closePopupAfterEdit"] = 1;
				tdataArray["m_location_office1"][".afterEditActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_ADD]))
			{
				tdataArray["m_location_office1"][".add"] = true;
				tdataArray["m_location_office1"][".afterAddAction"] = 1;
				tdataArray["m_location_office1"][".closePopupAfterAdd"] = 1;
				tdataArray["m_location_office1"][".afterAddActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_LIST]))
			{
				tdataArray["m_location_office1"][".list"] = true;
			}
			tdataArray["m_location_office1"][".strSortControlSettingsJSON"] = "";
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_VIEW]))
			{
				tdataArray["m_location_office1"][".view"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_IMPORT]))
			{
				tdataArray["m_location_office1"][".import"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EXPORT]))
			{
				tdataArray["m_location_office1"][".exportTo"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_PRINT]))
			{
				tdataArray["m_location_office1"][".printFriendly"] = true;
			}
			tdataArray["m_location_office1"][".showSimpleSearchOptions"] = true;
			tdataArray["m_location_office1"][".allowShowHideFields"] = true;
			tdataArray["m_location_office1"][".allowFieldsReordering"] = true;
			tdataArray["m_location_office1"][".isUseAjaxSuggest"] = true;


			tdataArray["m_location_office1"][".ajaxCodeSnippetAdded"] = false;
			tdataArray["m_location_office1"][".buttonsAdded"] = false;
			tdataArray["m_location_office1"][".addPageEvents"] = false;
			tdataArray["m_location_office1"][".isUseTimeForSearch"] = false;
			tdataArray["m_location_office1"][".badgeColor"] = "5F9EA0";
			tdataArray["m_location_office1"][".allSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".filterFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".requiredSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".googleLikeFields"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".googleLikeFields"].Add("m_location_id");
			tdataArray["m_location_office1"][".googleLikeFields"].Add("m_location_name");
			tdataArray["m_location_office1"][".googleLikeFields"].Add("m_location_address");
			tdataArray["m_location_office1"][".googleLikeFields"].Add("m_location_kabupaten");
			tdataArray["m_location_office1"][".googleLikeFields"].Add("m_location_provinsi");
			tdataArray["m_location_office1"][".tableType"] = "list";
			tdataArray["m_location_office1"][".printerPageOrientation"] = 0;
			tdataArray["m_location_office1"][".nPrinterPageScale"] = 100;
			tdataArray["m_location_office1"][".nPrinterSplitRecords"] = 40;
			tdataArray["m_location_office1"][".geocodingEnabled"] = false;
			tdataArray["m_location_office1"][".pageSize"] = 20;
			tdataArray["m_location_office1"][".warnLeavingPages"] = true;
			tstrOrderBy = "";
			tdataArray["m_location_office1"][".strOrderBy"] = tstrOrderBy;
			tdataArray["m_location_office1"][".orderindexes"] = SettingsMap.GetArray();
			tdataArray["m_location_office1"][".sqlHead"] = "SELECT m_location_id,  m_location_name,  m_location_address,  m_location_kabupaten,  m_location_provinsi";
			tdataArray["m_location_office1"][".sqlFrom"] = "FROM dbo.m_location_office";
			tdataArray["m_location_office1"][".sqlWhereExpr"] = "(m_location_id in (select m_location_id from m_mapping_location where username=':user.username'))";
			tdataArray["m_location_office1"][".sqlTail"] = "";
			arrRPP = SettingsMap.GetArray();
			arrRPP.Add(10);
			arrRPP.Add(20);
			arrRPP.Add(30);
			arrRPP.Add(50);
			arrRPP.Add(100);
			arrRPP.Add(500);
			arrRPP.Add(-1);
			tdataArray["m_location_office1"][".arrRecsPerPage"] = arrRPP;
			arrGPP = SettingsMap.GetArray();
			arrGPP.Add(1);
			arrGPP.Add(3);
			arrGPP.Add(5);
			arrGPP.Add(10);
			arrGPP.Add(50);
			arrGPP.Add(100);
			arrGPP.Add(-1);
			tdataArray["m_location_office1"][".arrGroupsPerPage"] = arrGPP;
			tdataArray["m_location_office1"][".highlightSearchResults"] = true;
			tableKeysArray["m_location_office1"] = SettingsMap.GetArray();
			tableKeysArray["m_location_office1"].Add("m_location_id");
			tdataArray["m_location_office1"][".Keys"] = tableKeysArray["m_location_office1"];
			tdataArray["m_location_office1"][".hideMobileList"] = SettingsMap.GetArray();
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 1;
			fdata["strName"] = "m_location_id";
			fdata["GoodName"] = "m_location_id";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office1","m_location_id");
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
			tdataArray["m_location_office1"]["m_location_id"] = fdata;
			tdataArray["m_location_office1"][".searchableFields"].Add("m_location_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 2;
			fdata["strName"] = "m_location_name";
			fdata["GoodName"] = "m_location_name";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office1","m_location_name");
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
			tdataArray["m_location_office1"]["m_location_name"] = fdata;
			tdataArray["m_location_office1"][".searchableFields"].Add("m_location_name");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 3;
			fdata["strName"] = "m_location_address";
			fdata["GoodName"] = "m_location_address";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office1","m_location_address");
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
			tdataArray["m_location_office1"]["m_location_address"] = fdata;
			tdataArray["m_location_office1"][".searchableFields"].Add("m_location_address");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 4;
			fdata["strName"] = "m_location_kabupaten";
			fdata["GoodName"] = "m_location_kabupaten";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office1","m_location_kabupaten");
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
			tdataArray["m_location_office1"]["m_location_kabupaten"] = fdata;
			tdataArray["m_location_office1"][".searchableFields"].Add("m_location_kabupaten");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 5;
			fdata["strName"] = "m_location_provinsi";
			fdata["GoodName"] = "m_location_provinsi";
			fdata["ownerTable"] = "dbo.m_location_office";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_location_office1","m_location_provinsi");
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
			tdataArray["m_location_office1"]["m_location_provinsi"] = fdata;
			tdataArray["m_location_office1"][".searchableFields"].Add("m_location_provinsi");
			GlobalVars.tables_data["dbo.m_location_office1"] = tdataArray["m_location_office1"];
			GlobalVars.field_labels["dbo_m_location_office1"] = fieldLabelsArray["m_location_office1"];
			GlobalVars.fieldToolTips["dbo_m_location_office1"] = fieldToolTipsArray["m_location_office1"];
			GlobalVars.placeHolders["dbo_m_location_office1"] = placeHoldersArray["m_location_office1"];
			GlobalVars.page_titles["dbo_m_location_office1"] = pageTitlesArray["m_location_office1"];
			CommonFunctions.changeTextControlsToDate(new XVar("dbo.m_location_office1"));
			GlobalVars.detailsTablesData["dbo.m_location_office1"] = SettingsMap.GetArray();
			GlobalVars.masterTablesData["dbo.m_location_office1"] = SettingsMap.GetArray();

SQLEntity obj = null;
var protoArray = SettingsMap.GetArray();
protoArray["0"] = SettingsMap.GetArray();
protoArray["0"]["m_strHead"] = "SELECT";
protoArray["0"]["m_strFieldList"] = "m_location_id,  m_location_name,  m_location_address,  m_location_kabupaten,  m_location_provinsi";
protoArray["0"]["m_strFrom"] = "FROM dbo.m_location_office";
protoArray["0"]["m_strWhere"] = "(m_location_id in (select m_location_id from m_mapping_location where username=':user.username'))";
protoArray["0"]["m_strOrderBy"] = "";
	
		
protoArray["0"]["cipherer"] = null;
protoArray["2"] = SettingsMap.GetArray();
protoArray["2"]["m_sql"] = "m_location_id in (select m_location_id from m_mapping_location where username=':user.username')";
protoArray["2"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLField(new XVar("m_strName", "m_location_id", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["2"]["m_column"] = obj;
protoArray["2"]["m_contained"] = SettingsMap.GetArray();
protoArray["2"]["m_strCase"] = "in (select m_location_id from m_mapping_location where username=':user.username')";
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
obj = new SQLField(new XVar("m_strName", "m_location_id", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["6"]["m_sql"] = "m_location_id";
protoArray["6"]["m_srcTableName"] = "dbo.m_location_office1";
protoArray["6"]["m_expr"] = obj;
protoArray["6"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["6"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["8"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_name", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["8"]["m_sql"] = "m_location_name";
protoArray["8"]["m_srcTableName"] = "dbo.m_location_office1";
protoArray["8"]["m_expr"] = obj;
protoArray["8"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["8"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["10"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_address", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["10"]["m_sql"] = "m_location_address";
protoArray["10"]["m_srcTableName"] = "dbo.m_location_office1";
protoArray["10"]["m_expr"] = obj;
protoArray["10"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["10"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["12"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_kabupaten", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["12"]["m_sql"] = "m_location_kabupaten";
protoArray["12"]["m_srcTableName"] = "dbo.m_location_office1";
protoArray["12"]["m_expr"] = obj;
protoArray["12"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["12"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["14"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "m_location_provinsi", "m_strTable", "dbo.m_location_office", "m_srcTableName", "dbo.m_location_office1"));

protoArray["14"]["m_sql"] = "m_location_provinsi";
protoArray["14"]["m_srcTableName"] = "dbo.m_location_office1";
protoArray["14"]["m_expr"] = obj;
protoArray["14"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["14"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["0"]["m_fromlist"] = SettingsMap.GetArray();
protoArray["16"] = SettingsMap.GetArray();
protoArray["16"]["m_link"] = "SQLL_MAIN";
protoArray["17"] = SettingsMap.GetArray();
protoArray["17"]["m_strName"] = "dbo.m_location_office";
protoArray["17"]["m_srcTableName"] = "dbo.m_location_office1";
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
protoArray["16"]["m_srcTableName"] = "dbo.m_location_office1";
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
protoArray["0"]["m_srcTableName"] = "dbo.m_location_office1";
obj = new SQLQuery(protoArray["0"]);

queryData_Array["m_location_office1"] = obj;

				
		
			tdataArray["m_location_office1"][".sqlquery"] = queryData_Array["m_location_office1"];
			tdataArray["m_location_office1"][".hasEvents"] = false;
			GlobalVars.tables_data["m_location_office1"] = tdataArray["m_location_office1"];
		}
	}

}
