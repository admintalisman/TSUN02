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
		public static XVar getMenuNodes_secondary(dynamic _param_menuNodesObject)
		{
			#region pass-by-value parameters
			dynamic menuNodesObject = XVar.Clone(_param_menuNodesObject);
			#endregion

			dynamic menuNode = XVar.Array();
			menuNodesObject.menuNodes.InitAndSetArrayItem(XVar.Array(), "secondary");
			return null;
		}
	}
}
