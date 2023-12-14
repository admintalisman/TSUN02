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
	[Export(typeof(IEventProviderCS_v1))]
	public class eventclassCS_v1 : IEventProviderCS_v1
	{


		//	handlers


			// dashboatd snippets function
		public XVar event_v1_snippet( ref dynamic header, ref dynamic icon )
		{
			header = "Welcome back,";
MVCFunctions.Echo( "Your text here" );;
			return null;
		}

	}

}