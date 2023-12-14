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
	public static partial class vt_register_doc_Ops
	{
		public static void Apply()
		{
			GlobalVars.topsArray["vt_register_doc"] = XVar.Clone(XVar.Array());
			GlobalVars.topsArray["vt_register_doc"].InitAndSetArrayItem(new XVar("subtype", "sql", "sql", "exec sp_insert_t_register_doc ':{t_register_doc_no}',\u000a':{t_register_date}',\u000a:{t_register_location_id},\u000a:{t_register_doc_owner},\u000a':{t_register_images}',\u000a':{t_register_note}',\u000a:{t_register_status},\u000a':{add_user}'"), "insert");
			GlobalVars.topsArray["vt_register_doc"].InitAndSetArrayItem(new XVar("subtype", "sql", "sql", "EXEC sp_select_t_register_doc"), "selectList");
			GlobalVars.tables_data.InitAndSetArrayItem(GlobalVars.topsArray["vt_register_doc"], "vt_register_doc", ".operations");
		}
	}

}
