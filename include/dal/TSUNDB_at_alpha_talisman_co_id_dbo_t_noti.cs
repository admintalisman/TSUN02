using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_noti : tDALTable
    {
        public XVar id;
        public XVar message;
        public XVar user;
        public XVar provider;
        public XVar title;
        public XVar url;
        public XVar icon;
        public XVar created;
        public XVar expire;
        public XVar type;
        public XVar group;
        public static void Init()
        {
            XVar dalTablet_noti = XVar.Array();
            dalTablet_noti["id"] = new XVar("type", 3, "varname", "id", "name", "id", "autoInc", "1");
            dalTablet_noti["message"] = new XVar("type", 201, "varname", "message", "name", "message", "autoInc", "0");
            dalTablet_noti["user"] = new XVar("type", 200, "varname", "user", "name", "user", "autoInc", "0");
            dalTablet_noti["provider"] = new XVar("type", 200, "varname", "provider", "name", "provider", "autoInc", "0");
            dalTablet_noti["title"] = new XVar("type", 200, "varname", "title", "name", "title", "autoInc", "0");
            dalTablet_noti["url"] = new XVar("type", 201, "varname", "url", "name", "url", "autoInc", "0");
            dalTablet_noti["icon"] = new XVar("type", 200, "varname", "icon", "name", "icon", "autoInc", "0");
            dalTablet_noti["created"] = new XVar("type", 135, "varname", "created", "name", "created", "autoInc", "0");
            dalTablet_noti["expire"] = new XVar("type", 135, "varname", "expire", "name", "expire", "autoInc", "0");
            dalTablet_noti["type"] = new XVar("type", 3, "varname", "type", "name", "type", "autoInc", "0");
            dalTablet_noti["group"] = new XVar("type", 200, "varname", "group", "name", "group", "autoInc", "0");
	        dalTablet_noti.InitAndSetArrayItem(true, "id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_t_noti"] = dalTablet_noti;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_t_noti()
        {
            			this.m_TableName = "dbo.t_noti";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_t_noti";
        }
    }
}