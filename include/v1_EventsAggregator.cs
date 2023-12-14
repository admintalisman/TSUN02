using System;
using System.Diagnostics;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Collections;
using System.Dynamic;
using System.ComponentModel.Composition;
using runnerDotNet;
using System.ComponentModel.Composition.Hosting;
using System.IO;
using System.Web;
using System.Reflection;

namespace runnerDotNet
{
	public interface IEventProviderCS_v1
	{
		//	handlers


			XVar event_v1_snippet(ref dynamic header, ref dynamic icon);


	}

	public interface IEventProviderVB_v1
	{
		//	handlers



	}

	public class eventclass_v1 : EventsAggregatorBase
	{
		//[Import(typeof(IEventProviderCS_v1))]
		public IEventProviderCS_v1 EventProviderCS;

		//[Import(typeof(IEventProviderVB_v1))]
		public IEventProviderVB_v1 EventProviderVB;

		public void CreateEvents()
        {
			EventProviderCS = new eventclassCS_v1();
			if(appsettings.vbEvents != null)
			{
				Type eType = appsettings.vbEvents.GetType("runnerDotNet.runnerDotNet.eventclassVB_v1");
				if(eType != null)
				{
					EventProviderVB = (IEventProviderVB_v1)Activator.CreateInstance(eType);
				}
			}
        }

		public eventclass_v1()
		{
			CreateEvents();

			// fill list of events

		}


		//	handlers


		public void event_v1_snippet(ref dynamic header, ref dynamic icon)
		{
				var ret = EventProviderCS.event_v1_snippet(ref header, ref icon);
			if(ret != null)
			{
				MVCFunctions.Echo(ret);
			}
		}


	}
}