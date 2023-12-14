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
	public partial class RunnerNotifications : XClass
	{
		public dynamic enabled;
		public dynamic messageLimit = XVar.Pack(30);
		public dynamic table;
		public dynamic dataSource;
		public RunnerNotifications(dynamic _param_params)
		{
			#region pass-by-value parameters
			dynamic var_params = XVar.Clone(_param_params);
			#endregion

			this.enabled = XVar.Clone(var_params["enabled"]);
			this.table = XVar.Clone(var_params["table"]);
			this.dataSource = XVar.Clone(CommonFunctions.getDbTableDataSource((XVar)(this.table["table"]), (XVar)(this.table["connId"])));
		}
		protected virtual XVar fetchMessages(dynamic _param_dc)
		{
			#region pass-by-value parameters
			dynamic dc = XVar.Clone(_param_dc);
			#endregion

			dynamic data = XVar.Array(), keys = XVar.Array(), note = XVar.Array(), ret = XVar.Array(), rs = null;
			rs = XVar.Clone(this.dataSource.getList((XVar)(dc)));
			if(XVar.Pack(!(XVar)(rs)))
			{
				return XVar.Array();
			}
			ret = XVar.Clone(XVar.Array());
			while(XVar.Pack(data = XVar.Clone(rs.fetchAssoc())))
			{
				note = XVar.Clone(XVar.Array());
				keys = XVar.Clone(new XVar(0, "message", 1, "title", 2, "url", 3, "icon", 4, "created", 5, "expire", 6, "id"));
				foreach (KeyValuePair<XVar, dynamic> k in keys.GetEnumerator())
				{
					note.InitAndSetArrayItem(data[k.Value], k.Value);
				}
				ret.InitAndSetArrayItem(note, null);
			}
			return ret;
		}
		public virtual XVar getUpdates(dynamic _param_lastId)
		{
			#region pass-by-value parameters
			dynamic lastId = XVar.Clone(_param_lastId);
			#endregion

			dynamic dc = null;
			if(XVar.Pack(!(XVar)(this.enabled)))
			{
				return XVar.Array();
			}
			dc = XVar.Clone(new DsCommand());
			dc.filter = XVar.Clone(DataCondition._And((XVar)(new XVar(0, this.userCondition(), 1, this.timeCondition(), 2, this.idCondition((XVar)(lastId)), 3, this.typeCondition(new XVar(Constants.ntMESSAGE))))));
			dc.order.InitAndSetArrayItem(new XVar("column", "created", "dir", "DESC"), null);
			dc.reccount = XVar.Clone(this.messageLimit);
			return this.fetchMessages((XVar)(dc));
		}
		public virtual XVar getMessages()
		{
			dynamic dc = null;
			if(XVar.Pack(!(XVar)(this.enabled)))
			{
				return XVar.Array();
			}
			dc = XVar.Clone(new DsCommand());
			dc.filter = XVar.Clone(DataCondition._And((XVar)(new XVar(0, this.userCondition(), 1, this.timeCondition(), 2, this.typeCondition(new XVar(Constants.ntMESSAGE))))));
			dc.order.InitAndSetArrayItem(new XVar("column", "created", "dir", "DESC"), null);
			dc.reccount = XVar.Clone(this.messageLimit);
			return this.fetchMessages((XVar)(dc));
		}
		public virtual XVar getUserData()
		{
			dynamic ds = null, rs = null;
			if(XVar.Pack(!(XVar)(this.enabled)))
			{
				return false;
			}
			ds = XVar.Clone(new DsCommand());
			ds.filter = XVar.Clone(DataCondition._And((XVar)(new XVar(0, this.userCondition(), 1, this.typeCondition(new XVar(Constants.ntUSERDATA))))));
			rs = XVar.Clone(this.dataSource.getSingle((XVar)(ds)));
			if(XVar.Pack(rs))
			{
				dynamic data = XVar.Array();
				data = XVar.Clone(rs.fetchAssoc());
				if(XVar.Pack(data))
				{
					return CommonFunctions.runner_json_decode((XVar)(data["message"]));
				}
			}
			return false;
		}
		public virtual XVar saveUserData(dynamic _param_data, dynamic _param_update)
		{
			#region pass-by-value parameters
			dynamic data = XVar.Clone(_param_data);
			dynamic update = XVar.Clone(_param_update);
			#endregion

			dynamic dc = null;
			if(XVar.Pack(!(XVar)(this.enabled)))
			{
				return null;
			}
			dc = XVar.Clone(new DsCommand());
			dc.values.InitAndSetArrayItem(CommonFunctions.runner_json_encode((XVar)(data)), "message");
			if(XVar.Pack(update))
			{
				dc.filter = XVar.Clone(DataCondition._And((XVar)(new XVar(0, this.userCondition(), 1, this.typeCondition(new XVar(Constants.ntUSERDATA))))));
				return !(XVar)(!(XVar)(this.dataSource.updateSingle((XVar)(dc), new XVar(false))));
			}
			else
			{
				if(XVar.Pack(Security.loggedInAsUser()))
				{
					dc.values.InitAndSetArrayItem(Security.getUserName(), "user");
					dc.values.InitAndSetArrayItem(Security.currentProviderCode(), "provider");
				}
				else
				{
					dc.values.InitAndSetArrayItem(MVCFunctions.session_id(), "user");
				}
				dc.values.InitAndSetArrayItem(Constants.ntUSERDATA, "type");
				return !(XVar)(!(XVar)(this.dataSource.insertSingle((XVar)(dc))));
			}
			return null;
		}
		public virtual XVar getLastRead()
		{
			dynamic userData = XVar.Array();
			if(XVar.Pack(!(XVar)(this.enabled)))
			{
				return false;
			}
			userData = XVar.Clone(this.getUserData());
			if(XVar.Pack(userData))
			{
				return userData["lastRead"];
			}
			return 0;
		}
		public virtual XVar updateLastRead(dynamic _param_newId)
		{
			#region pass-by-value parameters
			dynamic newId = XVar.Clone(_param_newId);
			#endregion

			dynamic update = null, userData = XVar.Array();
			update = new XVar(true);
			userData = XVar.Clone(this.getUserData());
			if(XVar.Equals(XVar.Pack(userData), XVar.Pack(false)))
			{
				update = new XVar(false);
			}
			if(XVar.Pack(!(XVar)(userData)))
			{
				userData = XVar.Clone(XVar.Array());
			}
			userData.InitAndSetArrayItem(newId, "lastRead");
			this.saveUserData((XVar)(userData), (XVar)(update));
			return null;
		}
		protected virtual XVar userCondition(dynamic _param_strict = null)
		{
			#region default values
			if(_param_strict as Object == null) _param_strict = new XVar(false);
			#endregion

			#region pass-by-value parameters
			dynamic strict = XVar.Clone(_param_strict);
			#endregion

			dynamic conditions = XVar.Array(), provider = null, providerCondition = null, userId = null;
			if(XVar.Pack(Security.loggedInAsUser()))
			{
				provider = XVar.Clone(Security.currentProviderCode());
				userId = XVar.Clone(Security.getUserName());
			}
			else
			{
				provider = new XVar("");
				userId = XVar.Clone(MVCFunctions.session_id());
			}
			providerCondition = XVar.Clone((XVar.Pack(provider) ? XVar.Pack(DataCondition.FieldEquals(new XVar("provider"), (XVar)(provider))) : XVar.Pack(DataCondition.FieldIs(new XVar("provider"), new XVar(Constants.dsopEMPTY), new XVar("")))));
			conditions = XVar.Clone(new XVar(0, DataCondition._And((XVar)(new XVar(0, DataCondition.FieldEquals(new XVar("user"), (XVar)(userId)), 1, providerCondition)))));
			if(XVar.Pack(!(XVar)(strict)))
			{
				conditions.InitAndSetArrayItem(DataCondition.FieldIs(new XVar("user"), new XVar(Constants.dsopEMPTY), new XVar("")), null);
			}
			return DataCondition._Or((XVar)(conditions));
		}
		protected virtual XVar timeCondition()
		{
			dynamic conditions = XVar.Array();
			conditions = XVar.Clone(XVar.Array());
			conditions.InitAndSetArrayItem(DataCondition._Or((XVar)(new XVar(0, DataCondition.FieldIs(new XVar("expire"), new XVar(Constants.dsopMORE), (XVar)(MVCFunctions.now())), 1, DataCondition.FieldIs(new XVar("expire"), new XVar(Constants.dsopEMPTY), new XVar(""))))), null);
			return DataCondition._And((XVar)(conditions));
		}
		protected virtual XVar typeCondition(dynamic _param_type)
		{
			#region pass-by-value parameters
			dynamic var_type = XVar.Clone(_param_type);
			#endregion

			return DataCondition.FieldEquals(new XVar("type"), (XVar)(var_type));
		}
		protected virtual XVar idCondition(dynamic _param_lastId)
		{
			#region pass-by-value parameters
			dynamic lastId = XVar.Clone(_param_lastId);
			#endregion

			return DataCondition.FieldIs(new XVar("id"), new XVar(Constants.dsopMORE), (XVar)(lastId));
		}
		public virtual XVar create(dynamic _param_params)
		{
			#region pass-by-value parameters
			dynamic var_params = XVar.Clone(_param_params);
			#endregion

			dynamic dc = null, keys = XVar.Array(), ret = XVar.Array();
			dc = XVar.Clone(new DsCommand());
			keys = XVar.Clone(new XVar(0, "message", 1, "user", 2, "provider", 3, "title", 4, "url", 5, "icon", 6, "expire"));
			foreach (KeyValuePair<XVar, dynamic> k in keys.GetEnumerator())
			{
				if(XVar.Pack(var_params.KeyExists(k.Value)))
				{
					dc.values.InitAndSetArrayItem(var_params[k.Value], k.Value);
				}
			}
			if((XVar)(var_params["expire"])  && (XVar)(MVCFunctions.IsNumeric(var_params["expire"])))
			{
				dynamic expire = null;
				expire = XVar.Clone(CommonFunctions.dbFormatDateTime((XVar)(CommonFunctions.addMinutes((XVar)(CommonFunctions.db2time((XVar)(MVCFunctions.now()))), (XVar)(var_params["expire"])))));
				dc.values.InitAndSetArrayItem(expire, "expire");
			}
			dc.values.InitAndSetArrayItem(MVCFunctions.now(), "created");
			dc.values.InitAndSetArrayItem(Constants.ntMESSAGE, "type");
			ret = XVar.Clone(this.dataSource.insertSingle((XVar)(dc)));
			if(XVar.Pack(ret))
			{
				return ret["id"];
			}
			return false;
		}
	}
}
