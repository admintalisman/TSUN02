using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_ugmembers : tDALTable
    {
        public XVar UserName;
        public XVar GroupID;
        public XVar Provider;
        public static void Init()
        {
            XVar dalTablet_ugmembers = XVar.Array();
            dalTablet_ugmembers["UserName"] = new XVar("type", 200, "varname", "UserName", "name", "UserName", "autoInc", "0");
            dalTablet_ugmembers["GroupID"] = new XVar("type", 3, "varname", "GroupID", "name", "GroupID", "autoInc", "0");
            dalTablet_ugmembers["Provider"] = new XVar("type", 200, "varname", "Provider", "name", "Provider", "autoInc", "0");
	        dalTablet_ugmembers.InitAndSetArrayItem(true, "UserName", "key");
	        dalTablet_ugmembers.InitAndSetArrayItem(true, "GroupID", "key");
	        dalTablet_ugmembers.InitAndSetArrayItem(true, "Provider", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_ugmembers"] = dalTablet_ugmembers;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_ugmembers()
        {
            			this.m_TableName = "dbo.t_ugmembers";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_ugmembers";
        }
    }
}