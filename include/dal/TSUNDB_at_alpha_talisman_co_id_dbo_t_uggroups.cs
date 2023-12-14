using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_uggroups : tDALTable
    {
        public XVar GroupID;
        public XVar Label;
        public XVar Provider;
        public XVar Comment;
        public static void Init()
        {
            XVar dalTablet_uggroups = XVar.Array();
            dalTablet_uggroups["GroupID"] = new XVar("type", 3, "varname", "GroupID", "name", "GroupID", "autoInc", "1");
            dalTablet_uggroups["Label"] = new XVar("type", 200, "varname", "Label", "name", "Label", "autoInc", "0");
            dalTablet_uggroups["Provider"] = new XVar("type", 200, "varname", "Provider", "name", "Provider", "autoInc", "0");
            dalTablet_uggroups["Comment"] = new XVar("type", 201, "varname", "Comment", "name", "Comment", "autoInc", "0");
	        dalTablet_uggroups.InitAndSetArrayItem(true, "GroupID", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_uggroups"] = dalTablet_uggroups;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_uggroups()
        {
            			this.m_TableName = "dbo.t_uggroups";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_uggroups";
        }
    }
}