using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_ugrights : tDALTable
    {
        public XVar fldTableName;
        public XVar GroupID;
        public XVar AccessMask;
        public XVar Page;
        public static void Init()
        {
            XVar dalTablet_ugrights = XVar.Array();
            dalTablet_ugrights["TableName"] = new XVar("type", 200, "varname", "fldTableName", "name", "TableName", "autoInc", "0");
            dalTablet_ugrights["GroupID"] = new XVar("type", 3, "varname", "GroupID", "name", "GroupID", "autoInc", "0");
            dalTablet_ugrights["AccessMask"] = new XVar("type", 200, "varname", "AccessMask", "name", "AccessMask", "autoInc", "0");
            dalTablet_ugrights["Page"] = new XVar("type", 201, "varname", "Page", "name", "Page", "autoInc", "0");
	        dalTablet_ugrights.InitAndSetArrayItem(true, "TableName", "key");
	        dalTablet_ugrights.InitAndSetArrayItem(true, "GroupID", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_ugrights"] = dalTablet_ugrights;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_ugrights()
        {
            			this.m_TableName = "dbo.t_ugrights";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_ugrights";
        }
    }
}