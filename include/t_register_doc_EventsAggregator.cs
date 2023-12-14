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
	public interface IEventProviderCS_t_register_doc
	{
		//	handlers

		XVar BeforeAdd(dynamic values, ref dynamic message, dynamic inline, dynamic pageObject);


		XVar BeforeEdit(dynamic values, dynamic where, dynamic oldvalues, dynamic keys, ref dynamic message, dynamic inline, dynamic pageObject);







	}

	public interface IEventProviderVB_t_register_doc
	{
		//	handlers



	}

	public class eventclass_t_register_doc : EventsAggregatorBase
	{
		//[Import(typeof(IEventProviderCS_t_register_doc))]
		public IEventProviderCS_t_register_doc EventProviderCS;

		//[Import(typeof(IEventProviderVB_t_register_doc))]
		public IEventProviderVB_t_register_doc EventProviderVB;

		public void CreateEvents()
        {
			EventProviderCS = new eventclassCS_t_register_doc();
			if(appsettings.vbEvents != null)
			{
				Type eType = appsettings.vbEvents.GetType("runnerDotNet.runnerDotNet.eventclassVB_t_register_doc");
				if(eType != null)
				{
					EventProviderVB = (IEventProviderVB_t_register_doc)Activator.CreateInstance(eType);
				}
			}
        }

		public eventclass_t_register_doc()
		{
			CreateEvents();

			// fill list of events

			events["BeforeAdd"]=true;


			events["BeforeEdit"]=true;




		}


		//	handlers

		
		public XVar BeforeAdd(dynamic values, ref dynamic message, dynamic inline, dynamic pageObject)
		{
			return EventProviderCS.BeforeAdd(values, ref message, inline, pageObject);
		}


		
		public XVar BeforeEdit(dynamic values, dynamic where, dynamic oldvalues, dynamic keys, ref dynamic message, dynamic inline, dynamic pageObject)
		{
			return EventProviderCS.BeforeEdit(values, where, oldvalues, keys, ref message, inline, pageObject);
		}







	}
}