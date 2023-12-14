using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_location_office : tDALTable
    {
        public XVar fldm_location_id;
        public XVar fldm_location_name;
        public XVar fldm_location_address;
        public XVar fldm_location_kabupaten;
        public XVar fldm_location_provinsi;
        public static void Init()
        {
            XVar dalTablem_location_office = XVar.Array();
            dalTablem_location_office["m_location_id"] = new XVar("type", 3, "varname", "fldm_location_id", "name", "m_location_id", "autoInc", "0");
            dalTablem_location_office["m_location_name"] = new XVar("type", 202, "varname", "fldm_location_name", "name", "m_location_name", "autoInc", "0");
            dalTablem_location_office["m_location_address"] = new XVar("type", 202, "varname", "fldm_location_address", "name", "m_location_address", "autoInc", "0");
            dalTablem_location_office["m_location_kabupaten"] = new XVar("type", 3, "varname", "fldm_location_kabupaten", "name", "m_location_kabupaten", "autoInc", "0");
            dalTablem_location_office["m_location_provinsi"] = new XVar("type", 3, "varname", "fldm_location_provinsi", "name", "m_location_provinsi", "autoInc", "0");
	        dalTablem_location_office.InitAndSetArrayItem(true, "m_location_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_tblm_location_office"] = dalTablem_location_office;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_location_office()
        {
            			this.m_TableName = "dbo.m_location_office";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_tblm_location_office";
        }
    }
}