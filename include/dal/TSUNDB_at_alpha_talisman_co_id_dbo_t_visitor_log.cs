using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_visitor_log : tDALTable
    {
        public XVar t_visitor_log_id;
        public XVar t_visitor_log_name;
        public XVar t_visitor_log_company;
        public XVar t_visitor_log_location_id;
        public XVar t_visitor_log_time_in;
        public XVar t_visitor_log_time_out;
        public XVar t_visitor_log_images;
        public XVar t_visitor_log_owner;
        public XVar t_visitor_log_room_id;
        public XVar add_user;
        public XVar add_date;
        public XVar edit_user;
        public XVar edit_date;
        public static void Init()
        {
            XVar dalTablet_visitor_log = XVar.Array();
            dalTablet_visitor_log["t_visitor_log_id"] = new XVar("type", 3, "varname", "t_visitor_log_id", "name", "t_visitor_log_id", "autoInc", "1");
            dalTablet_visitor_log["t_visitor_log_name"] = new XVar("type", 202, "varname", "t_visitor_log_name", "name", "t_visitor_log_name", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_company"] = new XVar("type", 202, "varname", "t_visitor_log_company", "name", "t_visitor_log_company", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_location_id"] = new XVar("type", 3, "varname", "t_visitor_log_location_id", "name", "t_visitor_log_location_id", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_time_in"] = new XVar("type", 135, "varname", "t_visitor_log_time_in", "name", "t_visitor_log_time_in", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_time_out"] = new XVar("type", 135, "varname", "t_visitor_log_time_out", "name", "t_visitor_log_time_out", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_images"] = new XVar("type", 202, "varname", "t_visitor_log_images", "name", "t_visitor_log_images", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_owner"] = new XVar("type", 3, "varname", "t_visitor_log_owner", "name", "t_visitor_log_owner", "autoInc", "0");
            dalTablet_visitor_log["t_visitor_log_room_id"] = new XVar("type", 3, "varname", "t_visitor_log_room_id", "name", "t_visitor_log_room_id", "autoInc", "0");
            dalTablet_visitor_log["add_user"] = new XVar("type", 202, "varname", "add_user", "name", "add_user", "autoInc", "0");
            dalTablet_visitor_log["add_date"] = new XVar("type", 135, "varname", "add_date", "name", "add_date", "autoInc", "0");
            dalTablet_visitor_log["edit_user"] = new XVar("type", 202, "varname", "edit_user", "name", "edit_user", "autoInc", "0");
            dalTablet_visitor_log["edit_date"] = new XVar("type", 135, "varname", "edit_date", "name", "edit_date", "autoInc", "0");
	        dalTablet_visitor_log.InitAndSetArrayItem(true, "t_visitor_log_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_visitor_log"] = dalTablet_visitor_log;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_visitor_log()
        {
            			this.m_TableName = "dbo.t_visitor_log";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_visitor_log";
        }
    }
}