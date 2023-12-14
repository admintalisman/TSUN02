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
	public static partial class Settings_m_employee1
	{
		static public void Apply()
		{
			SettingsMap arrGPP = SettingsMap.GetArray(), arrGridTabs = SettingsMap.GetArray(), arrRPP = SettingsMap.GetArray(), dIndex = null, detailsParam = SettingsMap.GetArray(), edata = SettingsMap.GetArray(), eventsData = SettingsMap.GetArray(), fdata = SettingsMap.GetArray(), fieldLabelsArray = new XVar(), fieldToolTipsArray = new XVar(), hours = null, intervalData = SettingsMap.GetArray(), masterParams = SettingsMap.GetArray(), pageTitlesArray = new XVar(), placeHoldersArray = new XVar(), query = null, queryData_Array = new XVar(), strOriginalDetailsTable = null, table = null, tableKeysArray = new XVar(), tdataArray = new XVar(), tstrOrderBy = null, vdata = SettingsMap.GetArray();
			tdataArray["m_employee1"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".searchableFields"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".ShortName"] = "m_employee1";
			tdataArray["m_employee1"][".OwnerID"] = "";
			tdataArray["m_employee1"][".OriginalTable"] = "dbo.m_employee";
			tdataArray["m_employee1"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}"));
			tdataArray["m_employee1"][".originalPagesByType"] = tdataArray["m_employee1"][".pagesByType"];
			tdataArray["m_employee1"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}")));
			tdataArray["m_employee1"][".originalPages"] = tdataArray["m_employee1"][".pages"];
			tdataArray["m_employee1"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}"));
			tdataArray["m_employee1"][".originalDefaultPages"] = tdataArray["m_employee1"][".defaultPages"];
			fieldLabelsArray["m_employee1"] = SettingsMap.GetArray();
			fieldToolTipsArray["m_employee1"] = SettingsMap.GetArray();
			pageTitlesArray["m_employee1"] = SettingsMap.GetArray();
			placeHoldersArray["m_employee1"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["m_employee1"]["English"] = SettingsMap.GetArray();
				fieldToolTipsArray["m_employee1"]["English"] = SettingsMap.GetArray();
				placeHoldersArray["m_employee1"]["English"] = SettingsMap.GetArray();
				pageTitlesArray["m_employee1"]["English"] = SettingsMap.GetArray();
				fieldLabelsArray["m_employee1"]["English"]["m_employee_id"] = "M Employee Id";
				fieldToolTipsArray["m_employee1"]["English"]["m_employee_id"] = "";
				placeHoldersArray["m_employee1"]["English"]["m_employee_id"] = "";
				fieldLabelsArray["m_employee1"]["English"]["NAMA"] = "Nama";
				fieldToolTipsArray["m_employee1"]["English"]["NAMA"] = "";
				placeHoldersArray["m_employee1"]["English"]["NAMA"] = "";
				fieldLabelsArray["m_employee1"]["English"]["EMAIL"] = "Email";
				fieldToolTipsArray["m_employee1"]["English"]["EMAIL"] = "";
				placeHoldersArray["m_employee1"]["English"]["EMAIL"] = "";
				if(XVar.Pack(MVCFunctions.count(fieldToolTipsArray["m_employee1"]["English"])))
				{
					tdataArray["m_employee1"][".isUseToolTips"] = true;
				}
			}
			tdataArray["m_employee1"][".NCSearch"] = true;
			tdataArray["m_employee1"][".scrollGridBody"] = true;
			tdataArray["m_employee1"][".shortTableName"] = "m_employee1";
			tdataArray["m_employee1"][".nSecOptions"] = 0;
			tdataArray["m_employee1"][".mainTableOwnerID"] = "";
			tdataArray["m_employee1"][".entityType"] = 1;
			tdataArray["m_employee1"][".connId"] = "TSUNDB_at_alpha_talisman_co_id";
			tdataArray["m_employee1"][".strOriginalTableName"] = "dbo.m_employee";
			tdataArray["m_employee1"][".showAddInPopup"] = false;
			tdataArray["m_employee1"][".showEditInPopup"] = false;
			tdataArray["m_employee1"][".showViewInPopup"] = false;
			tdataArray["m_employee1"][".listAjax"] = false;
			tdataArray["m_employee1"][".audit"] = true;
			tdataArray["m_employee1"][".locking"] = false;
			GlobalVars.pages = tdataArray["m_employee1"][".defaultPages"];
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EDIT]))
			{
				tdataArray["m_employee1"][".edit"] = true;
				tdataArray["m_employee1"][".afterEditAction"] = 1;
				tdataArray["m_employee1"][".closePopupAfterEdit"] = 1;
				tdataArray["m_employee1"][".afterEditActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_ADD]))
			{
				tdataArray["m_employee1"][".add"] = true;
				tdataArray["m_employee1"][".afterAddAction"] = 1;
				tdataArray["m_employee1"][".closePopupAfterAdd"] = 1;
				tdataArray["m_employee1"][".afterAddActionDetTable"] = "";
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_LIST]))
			{
				tdataArray["m_employee1"][".list"] = true;
			}
			tdataArray["m_employee1"][".strSortControlSettingsJSON"] = "";
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_VIEW]))
			{
				tdataArray["m_employee1"][".view"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_IMPORT]))
			{
				tdataArray["m_employee1"][".import"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_EXPORT]))
			{
				tdataArray["m_employee1"][".exportTo"] = true;
			}
			if(XVar.Pack(GlobalVars.pages[Constants.PAGE_PRINT]))
			{
				tdataArray["m_employee1"][".printFriendly"] = true;
			}
			tdataArray["m_employee1"][".showSimpleSearchOptions"] = true;
			tdataArray["m_employee1"][".allowShowHideFields"] = true;
			tdataArray["m_employee1"][".allowFieldsReordering"] = true;
			tdataArray["m_employee1"][".isUseAjaxSuggest"] = true;


			tdataArray["m_employee1"][".ajaxCodeSnippetAdded"] = false;
			tdataArray["m_employee1"][".buttonsAdded"] = false;
			tdataArray["m_employee1"][".addPageEvents"] = false;
			tdataArray["m_employee1"][".isUseTimeForSearch"] = false;
			tdataArray["m_employee1"][".badgeColor"] = "DB7093";
			tdataArray["m_employee1"][".allSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".filterFields"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".requiredSearchFields"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".googleLikeFields"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".googleLikeFields"].Add("m_employee_id");
			tdataArray["m_employee1"][".googleLikeFields"].Add("NAMA");
			tdataArray["m_employee1"][".googleLikeFields"].Add("EMAIL");
			tdataArray["m_employee1"][".tableType"] = "list";
			tdataArray["m_employee1"][".printerPageOrientation"] = 0;
			tdataArray["m_employee1"][".nPrinterPageScale"] = 100;
			tdataArray["m_employee1"][".nPrinterSplitRecords"] = 40;
			tdataArray["m_employee1"][".geocodingEnabled"] = false;
			tdataArray["m_employee1"][".isDisplayLoading"] = true;
			tdataArray["m_employee1"][".pageSize"] = 20;
			tdataArray["m_employee1"][".warnLeavingPages"] = true;
			tstrOrderBy = "";
			tdataArray["m_employee1"][".strOrderBy"] = tstrOrderBy;
			tdataArray["m_employee1"][".orderindexes"] = SettingsMap.GetArray();
			tdataArray["m_employee1"][".sqlHead"] = "SELECT m_employee_id,  NAMA,  EMAIL";
			tdataArray["m_employee1"][".sqlFrom"] = "FROM dbo.m_employee";
			tdataArray["m_employee1"][".sqlWhereExpr"] = "isaktif = 'True'";
			tdataArray["m_employee1"][".sqlTail"] = "";
			arrRPP = SettingsMap.GetArray();
			arrRPP.Add(10);
			arrRPP.Add(20);
			arrRPP.Add(30);
			arrRPP.Add(50);
			arrRPP.Add(100);
			arrRPP.Add(500);
			arrRPP.Add(-1);
			tdataArray["m_employee1"][".arrRecsPerPage"] = arrRPP;
			arrGPP = SettingsMap.GetArray();
			arrGPP.Add(1);
			arrGPP.Add(3);
			arrGPP.Add(5);
			arrGPP.Add(10);
			arrGPP.Add(50);
			arrGPP.Add(100);
			arrGPP.Add(-1);
			tdataArray["m_employee1"][".arrGroupsPerPage"] = arrGPP;
			tdataArray["m_employee1"][".highlightSearchResults"] = true;
			tableKeysArray["m_employee1"] = SettingsMap.GetArray();
			tableKeysArray["m_employee1"].Add("m_employee_id");
			tdataArray["m_employee1"][".Keys"] = tableKeysArray["m_employee1"];
			tdataArray["m_employee1"][".hideMobileList"] = SettingsMap.GetArray();
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 1;
			fdata["strName"] = "m_employee_id";
			fdata["GoodName"] = "m_employee_id";
			fdata["ownerTable"] = "dbo.m_employee";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_employee1","m_employee_id");
			fdata["FieldType"] = 3;
			fdata["AutoInc"] = true;
			fdata["strField"] = "m_employee_id";
			fdata["sourceSingle"] = "m_employee_id";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "m_employee_id";
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
			tdataArray["m_employee1"]["m_employee_id"] = fdata;
			tdataArray["m_employee1"][".searchableFields"].Add("m_employee_id");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 2;
			fdata["strName"] = "NAMA";
			fdata["GoodName"] = "NAMA";
			fdata["ownerTable"] = "dbo.m_employee";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_employee1","NAMA");
			fdata["FieldType"] = 200;
			fdata["strField"] = "NAMA";
			fdata["sourceSingle"] = "NAMA";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "NAMA";
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
			edata["EditParams"] = MVCFunctions.Concat(edata["EditParams"], " maxlength=200");
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
			tdataArray["m_employee1"]["NAMA"] = fdata;
			tdataArray["m_employee1"][".searchableFields"].Add("NAMA");
			fdata = SettingsMap.GetArray();
			fdata["Index"] = 3;
			fdata["strName"] = "EMAIL";
			fdata["GoodName"] = "EMAIL";
			fdata["ownerTable"] = "dbo.m_employee";
			fdata["Label"] = CommonFunctions.GetFieldLabel("dbo_m_employee1","EMAIL");
			fdata["FieldType"] = 200;
			fdata["strField"] = "EMAIL";
			fdata["sourceSingle"] = "EMAIL";
			fdata["isSQLExpression"] = true;
			fdata["FullName"] = "EMAIL";
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
			edata["EditParams"] = MVCFunctions.Concat(edata["EditParams"], " maxlength=100");
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
			tdataArray["m_employee1"]["EMAIL"] = fdata;
			tdataArray["m_employee1"][".searchableFields"].Add("EMAIL");
			GlobalVars.tables_data["dbo.m_employee1"] = tdataArray["m_employee1"];
			GlobalVars.field_labels["dbo_m_employee1"] = fieldLabelsArray["m_employee1"];
			GlobalVars.fieldToolTips["dbo_m_employee1"] = fieldToolTipsArray["m_employee1"];
			GlobalVars.placeHolders["dbo_m_employee1"] = placeHoldersArray["m_employee1"];
			GlobalVars.page_titles["dbo_m_employee1"] = pageTitlesArray["m_employee1"];
			CommonFunctions.changeTextControlsToDate(new XVar("dbo.m_employee1"));
			GlobalVars.detailsTablesData["dbo.m_employee1"] = SettingsMap.GetArray();
			GlobalVars.masterTablesData["dbo.m_employee1"] = SettingsMap.GetArray();

SQLEntity obj = null;
var protoArray = SettingsMap.GetArray();
protoArray["0"] = SettingsMap.GetArray();
protoArray["0"]["m_strHead"] = "SELECT";
protoArray["0"]["m_strFieldList"] = "m_employee_id,  NAMA,  EMAIL";
protoArray["0"]["m_strFrom"] = "FROM dbo.m_employee";
protoArray["0"]["m_strWhere"] = "isaktif = 'True'";
protoArray["0"]["m_strOrderBy"] = "";
	
		
protoArray["0"]["cipherer"] = null;
protoArray["2"] = SettingsMap.GetArray();
protoArray["2"]["m_sql"] = "isaktif = 'True'";
protoArray["2"]["m_uniontype"] = "SQLL_UNKNOWN";
obj = new SQLField(new XVar("m_strName", "ISAKTIF", "m_strTable", "dbo.m_employee", "m_srcTableName", "dbo.m_employee1"));

protoArray["2"]["m_column"] = obj;
protoArray["2"]["m_contained"] = SettingsMap.GetArray();
protoArray["2"]["m_strCase"] = "= 'True'";
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
obj = new SQLField(new XVar("m_strName", "m_employee_id", "m_strTable", "dbo.m_employee", "m_srcTableName", "dbo.m_employee1"));

protoArray["6"]["m_sql"] = "m_employee_id";
protoArray["6"]["m_srcTableName"] = "dbo.m_employee1";
protoArray["6"]["m_expr"] = obj;
protoArray["6"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["6"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["8"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "NAMA", "m_strTable", "dbo.m_employee", "m_srcTableName", "dbo.m_employee1"));

protoArray["8"]["m_sql"] = "NAMA";
protoArray["8"]["m_srcTableName"] = "dbo.m_employee1";
protoArray["8"]["m_expr"] = obj;
protoArray["8"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["8"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["10"] = SettingsMap.GetArray();
obj = new SQLField(new XVar("m_strName", "EMAIL", "m_strTable", "dbo.m_employee", "m_srcTableName", "dbo.m_employee1"));

protoArray["10"]["m_sql"] = "EMAIL";
protoArray["10"]["m_srcTableName"] = "dbo.m_employee1";
protoArray["10"]["m_expr"] = obj;
protoArray["10"]["m_alias"] = "";
obj = new SQLFieldListItem(protoArray["10"]);

protoArray["0"]["m_fieldlist"].Add(obj);
protoArray["0"]["m_fromlist"] = SettingsMap.GetArray();
protoArray["12"] = SettingsMap.GetArray();
protoArray["12"]["m_link"] = "SQLL_MAIN";
protoArray["13"] = SettingsMap.GetArray();
protoArray["13"]["m_strName"] = "dbo.m_employee";
protoArray["13"]["m_srcTableName"] = "dbo.m_employee1";
protoArray["13"]["m_columns"] = SettingsMap.GetArray();
protoArray["13"]["m_columns"].Add("m_employee_id");
protoArray["13"]["m_columns"].Add("PRID");
protoArray["13"]["m_columns"].Add("COMID");
protoArray["13"]["m_columns"].Add("NIK");
protoArray["13"]["m_columns"].Add("NAMA");
protoArray["13"]["m_columns"].Add("EMAIL");
protoArray["13"]["m_columns"].Add("POSITION");
protoArray["13"]["m_columns"].Add("NOREKBCA");
protoArray["13"]["m_columns"].Add("SECDATE");
protoArray["13"]["m_columns"].Add("SECUSER");
protoArray["13"]["m_columns"].Add("GENDER");
protoArray["13"]["m_columns"].Add("AGAMA");
protoArray["13"]["m_columns"].Add("BIRTHPLACE");
protoArray["13"]["m_columns"].Add("BIRTHDAY");
protoArray["13"]["m_columns"].Add("NOKTP");
protoArray["13"]["m_columns"].Add("NOKK");
protoArray["13"]["m_columns"].Add("NOHP");
protoArray["13"]["m_columns"].Add("EMAILPRIBADI");
protoArray["13"]["m_columns"].Add("ALAMATKTP");
protoArray["13"]["m_columns"].Add("ALAMATDOM");
protoArray["13"]["m_columns"].Add("DATEJOIN");
protoArray["13"]["m_columns"].Add("DATEANGKAT");
protoArray["13"]["m_columns"].Add("ISAKTIF");
protoArray["13"]["m_columns"].Add("NONPWP");
protoArray["13"]["m_columns"].Add("NPBJPSKES");
protoArray["13"]["m_columns"].Add("NOBPJSTK");
protoArray["13"]["m_columns"].Add("NOPASPOR");
protoArray["13"]["m_columns"].Add("STATUSTAX");
protoArray["13"]["m_columns"].Add("DARURATNAMA");
protoArray["13"]["m_columns"].Add("DARURATHUB");
protoArray["13"]["m_columns"].Add("DARURATTELP");
protoArray["13"]["m_columns"].Add("USERID");
protoArray["13"]["m_columns"].Add("LEVEL");
protoArray["13"]["m_columns"].Add("UPRID");
protoArray["13"]["m_columns"].Add("STATUSKAWIN");
protoArray["13"]["m_columns"].Add("JMLANAK");
protoArray["13"]["m_columns"].Add("NOASURANSI");
protoArray["13"]["m_columns"].Add("NOPKS");
protoArray["13"]["m_columns"].Add("DPKS");
protoArray["13"]["m_columns"].Add("HANDLER");
obj = new SQLTable(protoArray["13"]);

protoArray["12"]["m_table"] = obj;
protoArray["12"]["m_sql"] = "dbo.m_employee";
protoArray["12"]["m_alias"] = "";
protoArray["12"]["m_srcTableName"] = "dbo.m_employee1";
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
protoArray["0"]["m_srcTableName"] = "dbo.m_employee1";
obj = new SQLQuery(protoArray["0"]);

queryData_Array["m_employee1"] = obj;

				
		
			tdataArray["m_employee1"][".sqlquery"] = queryData_Array["m_employee1"];
			tdataArray["m_employee1"][".hasEvents"] = false;
			GlobalVars.tables_data["m_employee1"] = tdataArray["m_employee1"];
		}
	}

}
