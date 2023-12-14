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
	public partial class admin_rightsController : BaseController
	{
		public ActionResult list()
		{
			try
			{
				dynamic mask = null, options = XVar.Array(), pageMask = XVar.Array(), pageObject = null, table = null, tables = XVar.Array();
				XTempl xt;
				GlobalVars.init_dbcommon();
				MVCFunctions.Header("Expires", "Thu, 01 Jan 1970 00:00:01 GMT");
				admin_rights_Variables.Apply();
				if(XVar.Pack(!(XVar)(Security.processAdminPageSecurity(new XVar(false)))))
				{
					return MVCFunctions.GetBuferContentAndClearBufer();
				}
				tables = XVar.Clone(XVar.Array());
				pageMask = XVar.Clone(XVar.Array());
				table = new XVar("dbo.m_login");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_login", 1, MVCFunctions.Concat(" ", "M Login")), table);
				table = new XVar("vt_register_doc");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "vt_register_doc", 1, MVCFunctions.Concat(" ", "Register Doc")), table);
				table = new XVar("dbo.t_register_doc");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "t_register_doc", 1, MVCFunctions.Concat(" ", "Registration Document")), table);
				table = new XVar("v1");
				mask = new XVar("");
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "v1", 1, MVCFunctions.Concat(" ", "V1")), table);
				table = new XVar("dbo.m_mapping_location");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_mapping_location", 1, MVCFunctions.Concat(" ", "M Mapping Location")), table);
				table = new XVar("dbo.m_location_office");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_location_office", 1, MVCFunctions.Concat(" ", "M Location Office")), table);
				table = new XVar("dbo.m_location_office1");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_location_office1", 1, MVCFunctions.Concat(" ", "M Location Office1")), table);
				table = new XVar("dbo.m_employee");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_employee", 1, MVCFunctions.Concat(" ", "M Employee")), table);
				table = new XVar("dbo.m_employee1");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_employee1", 1, MVCFunctions.Concat(" ", "Employee")), table);
				table = new XVar("dbo.t_visitor_log");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "t_visitor_log", 1, MVCFunctions.Concat(" ", "Visitor Registration")), table);
				table = new XVar("dbo.m_meeting_room");
				mask = new XVar("");
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("add")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_add"))))
				{
					mask = MVCFunctions.Concat(mask, "A");
				}
				if((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("edit")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("inline_edit"))))
				{
					mask = MVCFunctions.Concat(mask, "E");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("delete"))))
				{
					mask = MVCFunctions.Concat(mask, "D");
				}
				if(XVar.Pack(CommonFunctions.pageEnabled((XVar)(table), new XVar("import"))))
				{
					mask = MVCFunctions.Concat(mask, "I");
				}
				if((XVar)((XVar)((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("view")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("list"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("chart"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("report"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("dashboard"))))
				{
					mask = MVCFunctions.Concat(mask, "S");
				}
				if((XVar)((XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("print")))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("rprint"))))  || (XVar)(CommonFunctions.pageEnabled((XVar)(table), new XVar("export"))))
				{
					mask = MVCFunctions.Concat(mask, "P");
				}
				pageMask.InitAndSetArrayItem(mask, table);
				tables.InitAndSetArrayItem(new XVar(0, "m_meeting_room", 1, MVCFunctions.Concat(" ", "M Meeting Room")), table);
				if(XVar.Pack(CommonFunctions.pageEnabled(new XVar(Constants.GLOBAL_PAGES), new XVar("menu"))))
				{
					pageMask.InitAndSetArrayItem("S", Constants.GLOBAL_PAGES);
				}
				else
				{
					pageMask.InitAndSetArrayItem("", Constants.GLOBAL_PAGES);
				}
				tables.InitAndSetArrayItem(new XVar(0, MVCFunctions.GoodFieldName(new XVar(Constants.GLOBAL_PAGES_SHORT)), 1, MVCFunctions.Concat(" ", Constants.GLOBAL_PAGES)), Constants.GLOBAL_PAGES);
				xt = XVar.UnPackXTempl(new XTempl());
				options = XVar.Clone(XVar.Array());
				options.InitAndSetArrayItem("admin_rights_list", "pageType");
				options.InitAndSetArrayItem(Constants.GLOBAL_PAGES, "pageTable");
				options.InitAndSetArrayItem((XVar.Pack(CommonFunctions.postvalue_number(new XVar("id"))) ? XVar.Pack(CommonFunctions.postvalue_number(new XVar("id"))) : XVar.Pack(1)), "id");
				options.InitAndSetArrayItem(Constants.RIGHTS_PAGE, "mode");
				options.InitAndSetArrayItem(xt, "xt");
				options.InitAndSetArrayItem(CommonFunctions.postvalue_number(new XVar("goto")), "requestGoto");
				options.InitAndSetArrayItem(tables, "tables");
				options.InitAndSetArrayItem(pageMask, "pageMasks");
				GlobalVars.pageObject = XVar.Clone(ListPage.createListPage((XVar)(GlobalVars.strTableName), (XVar)(options)));
				if(MVCFunctions.postvalue(new XVar("a")) == "saveRights")
				{
					dynamic modifiedRights = null;
					if(XVar.Pack(!(XVar)(CommonFunctions.isPostRequest())))
					{
						return MVCFunctions.GetBuferContentAndClearBufer();
					}
					modifiedRights = XVar.Clone(MVCFunctions.my_json_decode((XVar)(MVCFunctions.postvalue(new XVar("data")))));
					GlobalVars.pageObject.saveRights((XVar)(modifiedRights));
					return MVCFunctions.GetBuferContentAndClearBufer();
				}
				GlobalVars.pageObject.prepareForBuildPage();
				GlobalVars.pageObject.showPage();
				ViewBag.xt = xt;
				return View(xt.GetViewPath());
			}
			catch(RunnerRedirectException ex)
			{ return Redirect(ex.Message); }
		}
	}
}
