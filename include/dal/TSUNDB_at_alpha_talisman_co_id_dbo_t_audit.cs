using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_audit : tDALTable
    {
        public XVar id;
        public XVar datetime;
        public XVar ip;
        public XVar user;
        public XVar table;
        public XVar action;
        public XVar description;
        public static void Init()
        {
            XVar dalTablet_audit = XVar.Array();
            dalTablet_audit["id"] = new XVar("type", 3, "varname", "id", "name", "id", "autoInc", "1");
            dalTablet_audit["datetime"] = new XVar("type", 135, "varname", "datetime", "name", "datetime", "autoInc", "0");
            dalTablet_audit["ip"] = new XVar("type", 200, "varname", "ip", "name", "ip", "autoInc", "0");
            dalTablet_audit["user"] = new XVar("type", 200, "varname", "user", "name", "user", "autoInc", "0");
            dalTablet_audit["table"] = new XVar("type", 200, "varname", "table", "name", "table", "autoInc", "0");
            dalTablet_audit["action"] = new XVar("type", 200, "varname", "action", "name", "action", "autoInc", "0");
            dalTablet_audit["description"] = new XVar("type", 201, "varname", "description", "name", "description", "autoInc", "0");
	        dalTablet_audit.InitAndSetArrayItem(true, "id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_audit"] = dalTablet_audit;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_audit()
        {
            			this.m_TableName = "dbo.t_audit";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_audit";
        }
    }
}