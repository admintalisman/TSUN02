using System;
using System.Diagnostics;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Collections;
using System.Dynamic;
using System.ComponentModel.Composition;
using System.Web;
using runnerDotNet;

namespace runnerDotNet
{
	[Export(typeof(IEventProviderCS_t_register_doc))]
	public class eventclassCS_t_register_doc : IEventProviderCS_t_register_doc
	{


		//	handlers
// Before record added
		public XVar BeforeAdd(dynamic values, ref dynamic message, dynamic inline, dynamic pageObject)
		{

values["add_user"] = XSession.Session["UserID"];
values["add_date"] = DateTime.Now.ToString("yyyy-MM-dd HH:mm:ss");
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
return null;

		} // BeforeAdd

// Before record updated
		public XVar BeforeEdit(dynamic values, dynamic where, dynamic oldvalues, dynamic keys, ref dynamic message, dynamic inline, dynamic pageObject)
		{

values["edit_user"] = XSession.Session["UserID"];
values["edit_date"] = DateTime.Now.ToString("yyyy-MM-dd HH:mm:ss");

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
return null;

		} // BeforeEdit





	}

}