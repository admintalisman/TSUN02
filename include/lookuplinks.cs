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
	public partial class CommonFunctions
	{
		public static XVar getLookupMainTableSettings(dynamic _param_lookupTable, dynamic _param_mainTableShortName, dynamic _param_mainField, dynamic _param_desiredPage = null)
		{
			#region default values
			if(_param_desiredPage as Object == null) _param_desiredPage = new XVar("");
			#endregion

			#region pass-by-value parameters
			dynamic lookupTable = XVar.Clone(_param_lookupTable);
			dynamic mainTableShortName = XVar.Clone(_param_mainTableShortName);
			dynamic mainField = XVar.Clone(_param_mainField);
			dynamic desiredPage = XVar.Clone(_param_desiredPage);
			#endregion

			dynamic arr = XVar.Array(), effectivePage = null;
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists(lookupTable))))
			{
				return null;
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks[lookupTable].KeyExists(MVCFunctions.Concat(mainTableShortName, ".", mainField)))))
			{
				return null;
			}
			arr = GlobalVars.lookupTableLinks[lookupTable][MVCFunctions.Concat(mainTableShortName, ".", mainField)];
			effectivePage = XVar.Clone(desiredPage);
			if(XVar.Pack(!(XVar)(arr.KeyExists(effectivePage))))
			{
				effectivePage = new XVar(Constants.PAGE_EDIT);
				if(XVar.Pack(!(XVar)(arr.KeyExists(effectivePage))))
				{
					if((XVar)(desiredPage == XVar.Pack(""))  && (XVar)(0 < MVCFunctions.count(arr)))
					{
						effectivePage = XVar.Clone(arr[0]);
					}
					else
					{
						return null;
					}
				}
			}
			return new ProjectSettings((XVar)(arr[effectivePage]["table"]), (XVar)(effectivePage));
		}
		public static XVar InitLookupLinks()
		{
			GlobalVars.lookupTableLinks = XVar.Clone(XVar.Array());
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_location_office1"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office1");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_location_office1"].KeyExists("t_register_doc.t_register_location_id"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office1", "t_register_doc.t_register_location_id");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.t_register_doc", "field", "t_register_location_id", "page", "edit"), "dbo.m_location_office1", "t_register_doc.t_register_location_id", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_employee1"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_employee1");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_employee1"].KeyExists("t_register_doc.t_register_doc_owner"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_employee1", "t_register_doc.t_register_doc_owner");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.t_register_doc", "field", "t_register_doc_owner", "page", "edit"), "dbo.m_employee1", "t_register_doc.t_register_doc_owner", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_login"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_login");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_login"].KeyExists("m_mapping_location.username"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_login", "m_mapping_location.username");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.m_mapping_location", "field", "username", "page", "edit"), "dbo.m_login", "m_mapping_location.username", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_location_office"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_location_office"].KeyExists("m_mapping_location.m_location_id"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office", "m_mapping_location.m_location_id");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.m_mapping_location", "field", "m_location_id", "page", "edit"), "dbo.m_location_office", "m_mapping_location.m_location_id", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_location_office1"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office1");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_location_office1"].KeyExists("t_visitor_log.t_visitor_log_location_id"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office1", "t_visitor_log.t_visitor_log_location_id");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.t_visitor_log", "field", "t_visitor_log_location_id", "page", "edit"), "dbo.m_location_office1", "t_visitor_log.t_visitor_log_location_id", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_employee1"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_employee1");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_employee1"].KeyExists("t_visitor_log.t_visitor_log_owner"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_employee1", "t_visitor_log.t_visitor_log_owner");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.t_visitor_log", "field", "t_visitor_log_owner", "page", "edit"), "dbo.m_employee1", "t_visitor_log.t_visitor_log_owner", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_meeting_room"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_meeting_room");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_meeting_room"].KeyExists("t_visitor_log.t_visitor_log_room_id"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_meeting_room", "t_visitor_log.t_visitor_log_room_id");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.t_visitor_log", "field", "t_visitor_log_room_id", "page", "edit"), "dbo.m_meeting_room", "t_visitor_log.t_visitor_log_room_id", "edit");
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks.KeyExists("dbo.m_location_office"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office");
			}
			if(XVar.Pack(!(XVar)(GlobalVars.lookupTableLinks["dbo.m_location_office"].KeyExists("m_meeting_room.m_meeting_room_location_id"))))
			{
				GlobalVars.lookupTableLinks.InitAndSetArrayItem(XVar.Array(), "dbo.m_location_office", "m_meeting_room.m_meeting_room_location_id");
			}
			GlobalVars.lookupTableLinks.InitAndSetArrayItem(new XVar("table", "dbo.m_meeting_room", "field", "m_meeting_room_location_id", "page", "edit"), "dbo.m_location_office", "m_meeting_room.m_meeting_room_location_id", "edit");
			return null;
		}
	}
}
