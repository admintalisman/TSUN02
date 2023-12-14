using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_mapping_location : tDALTable
    {
        public XVar fldm_mapping_location_id;
        public XVar username;
        public XVar fldm_location_id;
        public static void Init()
        {
            XVar dalTablem_mapping_location = XVar.Array();
            dalTablem_mapping_location["m_mapping_location_id"] = new XVar("type", 3, "varname", "fldm_mapping_location_id", "name", "m_mapping_location_id", "autoInc", "1");
            dalTablem_mapping_location["username"] = new XVar("type", 202, "varname", "username", "name", "username", "autoInc", "0");
            dalTablem_mapping_location["m_location_id"] = new XVar("type", 3, "varname", "fldm_location_id", "name", "m_location_id", "autoInc", "0");
	        dalTablem_mapping_location.InitAndSetArrayItem(true, "m_mapping_location_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_tblm_mapping_location"] = dalTablem_mapping_location;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_mapping_location()
        {
            			this.m_TableName = "dbo.m_mapping_location";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_tblm_mapping_location";
        }
    }
}