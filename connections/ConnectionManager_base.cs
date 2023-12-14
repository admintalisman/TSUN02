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
	public partial class ConnectionManager_Base : XClass
	{
		protected dynamic cache = XVar.Array();
		protected dynamic _connectionsData;
		protected dynamic _connectionsIdByName = XVar.Array();
		protected dynamic _tablesConnectionIds;
		public ConnectionManager_Base()
		{
			this._setConnectionsData();
			this._setTablesConnectionIds();
		}
		public virtual XVar getTableConnId(dynamic _param_tName)
		{
			#region pass-by-value parameters
			dynamic tName = XVar.Clone(_param_tName);
			#endregion

			return this._tablesConnectionIds[tName];
		}
		public virtual XVar byTable(dynamic _param_tName)
		{
			#region pass-by-value parameters
			dynamic tName = XVar.Clone(_param_tName);
			#endregion

			dynamic connId = null;
			connId = XVar.Clone(this._tablesConnectionIds[tName]);
			if(XVar.Pack(!(XVar)(connId)))
			{
				return this.getDefault();
			}
			return this.byId((XVar)(connId));
		}
		public virtual XVar byName(dynamic _param_connName)
		{
			#region pass-by-value parameters
			dynamic connName = XVar.Clone(_param_connName);
			#endregion

			dynamic connId = null;
			connId = XVar.Clone(this.getIdByName((XVar)(connName)));
			if(XVar.Pack(!(XVar)(connId)))
			{
				return this.getDefault();
			}
			return this.byId((XVar)(connId));
		}
		protected virtual XVar getIdByName(dynamic _param_connName)
		{
			#region pass-by-value parameters
			dynamic connName = XVar.Clone(_param_connName);
			#endregion

			return this._connectionsIdByName[connName];
		}
		public virtual XVar byId(dynamic _param_connId)
		{
			#region pass-by-value parameters
			dynamic connId = XVar.Clone(_param_connId);
			#endregion

			if(XVar.Pack(!(XVar)(this.cache.KeyExists(connId))))
			{
				dynamic conn = null;
				conn = XVar.Clone(this.getConnection((XVar)(connId)));
				if(XVar.Pack(!(XVar)(conn)))
				{
					conn = XVar.Clone(GlobalVars.restApis.getConnection((XVar)(connId)));
				}
				if(XVar.Pack(!(XVar)(conn)))
				{
					conn = XVar.Clone(this.getDefault());
				}
				this.cache.InitAndSetArrayItem(conn, connId);
			}
			return this.cache[connId];
		}
		public virtual XVar getDefault()
		{
			return this.byId(new XVar("TSUNDB_at_alpha_talisman_co_id"));
		}
		public virtual XVar getDefaultConnId()
		{
			return "TSUNDB_at_alpha_talisman_co_id";
		}
		public virtual XVar getForLogin()
		{
			return this.byId((XVar)(this.getLoginConnId()));
		}
		public virtual XVar getLoginConnId()
		{
			dynamic db = XVar.Array();
			db = Security.dbProvider();
			if(XVar.Pack(db))
			{
				return db["table"]["connId"];
			}
			return "";
		}
		public virtual XVar getForAudit()
		{
			return this.byId(new XVar("TSUNDB_at_alpha_talisman_co_id"));
			return null;
		}
		public virtual XVar getForLocking()
		{
			return this.byId(new XVar("TSUNDB_at_alpha_talisman_co_id"));
			return null;
		}
		public virtual XVar getForUserGroups()
		{
			return this.byId((XVar)(this.getUserGroupsConnId()));
		}
		public virtual XVar getUserGroupsConnId()
		{
			return "TSUNDB_at_alpha_talisman_co_id";
			return null;
		}
		public virtual XVar getForSavedSearches()
		{
			return this.byId((XVar)(this.getSavedSearchesConnId()));
		}
		public virtual XVar getSavedSearchesConnId()
		{
			return "TSUNDB_at_alpha_talisman_co_id";
			return null;
		}
		public virtual XVar getForWebReports()
		{
			return this.byId((XVar)(this.getSavedSearchesConnId()));
		}
		public virtual XVar getWebReportsConnId()
		{
			return "TSUNDB_at_alpha_talisman_co_id";
			return null;
		}
		protected virtual XVar getConnection(dynamic _param_connId)
		{
			#region pass-by-value parameters
			dynamic connId = XVar.Clone(_param_connId);
			#endregion

			return false;
		}
		public virtual XVar getConectionsIds()
		{
			dynamic connectionsIds = XVar.Array();
			connectionsIds = XVar.Clone(XVar.Array());
			foreach (KeyValuePair<XVar, dynamic> data in this._connectionsData.GetEnumerator())
			{
				connectionsIds.InitAndSetArrayItem(data.Key, null);
			}
			return connectionsIds;
		}
		protected virtual XVar _setConnectionsData()
		{
			return null;
		}
		protected virtual XVar _setTablesConnectionIds()
		{
			dynamic connectionsIds = XVar.Array();
			connectionsIds = XVar.Clone(XVar.Array());
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_login");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "admin_rights");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "admin_members");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "admin_users");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "vt_register_doc");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.t_register_doc");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_mapping_location");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_location_office");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_location_office1");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_employee");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_employee1");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.t_visitor_log");
			connectionsIds.InitAndSetArrayItem("TSUNDB_at_alpha_talisman_co_id", "dbo.m_meeting_room");
			this._tablesConnectionIds = connectionsIds;
			return null;
		}
		public virtual XVar checkTablesSubqueriesSupport(dynamic _param_dataSourceTName1, dynamic _param_dataSourceTName2)
		{
			#region pass-by-value parameters
			dynamic dataSourceTName1 = XVar.Clone(_param_dataSourceTName1);
			dynamic dataSourceTName2 = XVar.Clone(_param_dataSourceTName2);
			#endregion

			dynamic connId1 = null, connId2 = null;
			connId1 = XVar.Clone(this._tablesConnectionIds[dataSourceTName1]);
			connId2 = XVar.Clone(this._tablesConnectionIds[dataSourceTName2]);
			if(connId1 != connId2)
			{
				return false;
			}
			if((XVar)(this._connectionsData[connId1]["dbType"] == Constants.nDATABASE_Access)  && (XVar)(dataSourceTName1 == dataSourceTName2))
			{
				return false;
			}
			return true;
		}
		public virtual XVar CloseConnections()
		{
			foreach (KeyValuePair<XVar, dynamic> connection in this.cache.GetEnumerator())
			{
				if(XVar.Pack(connection.Value))
				{
					connection.Value.close();
				}
			}
			return null;
		}
	}
}
