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
	public static partial class Settings_v1
	{
		static public void Apply()
		{
			SettingsMap fieldLabelsArray = new XVar(), pageTitlesArray = new XVar(), query = null, queryData_Array = new XVar(), table = null, tdataArray = new XVar();
			tdataArray["v1"] = SettingsMap.GetArray();
			tdataArray["v1"][".ShortName"] = "v1";
			tdataArray["v1"][".pagesByType"] = MVCFunctions.my_json_decode(new XVar("{\"dashboard\":[\"dashboard\"]}"));
			tdataArray["v1"][".originalPagesByType"] = tdataArray["v1"][".pagesByType"];
			tdataArray["v1"][".pages"] = CommonFunctions.types2pages(MVCFunctions.my_json_decode(new XVar("{\"dashboard\":[\"dashboard\"]}")));
			tdataArray["v1"][".originalPages"] = tdataArray["v1"][".pages"];
			tdataArray["v1"][".defaultPages"] = MVCFunctions.my_json_decode(new XVar("{\"dashboard\":\"dashboard\"}"));
			tdataArray["v1"][".originalDefaultPages"] = tdataArray["v1"][".defaultPages"];
			fieldLabelsArray["v1"] = SettingsMap.GetArray();
			pageTitlesArray["v1"] = SettingsMap.GetArray();
			if(CommonFunctions.mlang_getcurrentlang() == "English")
			{
				fieldLabelsArray["v1"]["English"] = SettingsMap.GetArray();
			}
			tdataArray["v1"][".shortTableName"] = "v1";
			tdataArray["v1"][".entityType"] = 4;


			tdataArray["v1"][".hasEvents"] = true;
			tdataArray["v1"][".tableType"] = "dashboard";

			tdataArray["v1"][".addPageEvents"] = false;
			tdataArray["v1"][".isUseAjaxSuggest"] = true;
			GlobalVars.tables_data["v1"] = tdataArray["v1"];
			GlobalVars.field_labels["v1"] = fieldLabelsArray["v1"];
			GlobalVars.page_titles["v1"] = pageTitlesArray["v1"];
			GlobalVars.tables_data["v1"] = tdataArray["v1"];
		}
	}

}
