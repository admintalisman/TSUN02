using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_register_doc : tDALTable
    {
        public XVar t_register_doc_id;
        public XVar t_register_doc_no;
        public XVar t_register_date;
        public XVar t_register_location_id;
        public XVar t_register_doc_owner;
        public XVar t_register_images;
        public XVar t_register_note;
        public XVar t_register_status;
        public XVar add_user;
        public XVar add_date;
        public XVar edit_user;
        public XVar edit_date;
        public static void Init()
        {
            XVar dalTablet_register_doc = XVar.Array();
            dalTablet_register_doc["t_register_doc_id"] = new XVar("type", 3, "varname", "t_register_doc_id", "name", "t_register_doc_id", "autoInc", "1");
            dalTablet_register_doc["t_register_doc_no"] = new XVar("type", 202, "varname", "t_register_doc_no", "name", "t_register_doc_no", "autoInc", "0");
            dalTablet_register_doc["t_register_date"] = new XVar("type", 135, "varname", "t_register_date", "name", "t_register_date", "autoInc", "0");
            dalTablet_register_doc["t_register_location_id"] = new XVar("type", 3, "varname", "t_register_location_id", "name", "t_register_location_id", "autoInc", "0");
            dalTablet_register_doc["t_register_doc_owner"] = new XVar("type", 3, "varname", "t_register_doc_owner", "name", "t_register_doc_owner", "autoInc", "0");
            dalTablet_register_doc["t_register_images"] = new XVar("type", 202, "varname", "t_register_images", "name", "t_register_images", "autoInc", "0");
            dalTablet_register_doc["t_register_note"] = new XVar("type", 202, "varname", "t_register_note", "name", "t_register_note", "autoInc", "0");
            dalTablet_register_doc["t_register_status"] = new XVar("type", 3, "varname", "t_register_status", "name", "t_register_status", "autoInc", "0");
            dalTablet_register_doc["add_user"] = new XVar("type", 202, "varname", "add_user", "name", "add_user", "autoInc", "0");
            dalTablet_register_doc["add_date"] = new XVar("type", 135, "varname", "add_date", "name", "add_date", "autoInc", "0");
            dalTablet_register_doc["edit_user"] = new XVar("type", 202, "varname", "edit_user", "name", "edit_user", "autoInc", "0");
            dalTablet_register_doc["edit_date"] = new XVar("type", 135, "varname", "edit_date", "name", "edit_date", "autoInc", "0");
	        dalTablet_register_doc.InitAndSetArrayItem(true, "t_register_doc_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_register_doc"] = dalTablet_register_doc;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_register_doc()
        {
            			this.m_TableName = "dbo.t_register_doc";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_register_doc";
        }
    }
}