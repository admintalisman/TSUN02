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
	public interface IEventProviderCS_vt_register_doc
	{
		//	handlers








	}

	public interface IEventProviderVB_vt_register_doc
	{
		//	handlers



	}

	public class eventclass_vt_register_doc : EventsAggregatorBase
	{
		//[Import(typeof(IEventProviderCS_vt_register_doc))]
		public IEventProviderCS_vt_register_doc EventProviderCS;

		//[Import(typeof(IEventProviderVB_vt_register_doc))]
		public IEventProviderVB_vt_register_doc EventProviderVB;

		public void CreateEvents()
        {
			EventProviderCS = new eventclassCS_vt_register_doc();
			if(appsettings.vbEvents != null)
			{
				Type eType = appsettings.vbEvents.GetType("runnerDotNet.runnerDotNet.eventclassVB_vt_register_doc");
				if(eType != null)
				{
					EventProviderVB = (IEventProviderVB_vt_register_doc)Activator.CreateInstance(eType);
				}
			}
        }

		public eventclass_vt_register_doc()
		{
			CreateEvents();

			// fill list of events





		}


		//	handlers








	}
}