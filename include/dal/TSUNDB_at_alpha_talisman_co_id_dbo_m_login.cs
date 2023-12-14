using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_login : tDALTable
    {
        public XVar login_id;
        public XVar username;
        public XVar password;
        public XVar fullname;
        public XVar email;
        public XVar isactive;
        public XVar add_user;
        public XVar add_date;
        public XVar edit_user;
        public XVar edit_date;
        public XVar userpic;
        public XVar ext_security_id;
        public static void Init()
        {
            XVar dalTablem_login = XVar.Array();
            dalTablem_login["login_id"] = new XVar("type", 3, "varname", "login_id", "name", "login_id", "autoInc", "1");
            dalTablem_login["username"] = new XVar("type", 202, "varname", "username", "name", "username", "autoInc", "0");
            dalTablem_login["password"] = new XVar("type", 202, "varname", "password", "name", "password", "autoInc", "0");
            dalTablem_login["fullname"] = new XVar("type", 202, "varname", "fullname", "name", "fullname", "autoInc", "0");
            dalTablem_login["email"] = new XVar("type", 202, "varname", "email", "name", "email", "autoInc", "0");
            dalTablem_login["isactive"] = new XVar("type", 3, "varname", "isactive", "name", "isactive", "autoInc", "0");
            dalTablem_login["add_user"] = new XVar("type", 202, "varname", "add_user", "name", "add_user", "autoInc", "0");
            dalTablem_login["add_date"] = new XVar("type", 135, "varname", "add_date", "name", "add_date", "autoInc", "0");
            dalTablem_login["edit_user"] = new XVar("type", 202, "varname", "edit_user", "name", "edit_user", "autoInc", "0");
            dalTablem_login["edit_date"] = new XVar("type", 135, "varname", "edit_date", "name", "edit_date", "autoInc", "0");
            dalTablem_login["userpic"] = new XVar("type", 205, "varname", "userpic", "name", "userpic", "autoInc", "0");
            dalTablem_login["ext_security_id"] = new XVar("type", 202, "varname", "ext_security_id", "name", "ext_security_id", "autoInc", "0");
	        dalTablem_login.InitAndSetArrayItem(true, "login_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_tblm_login"] = dalTablem_login;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_login()
        {
            			this.m_TableName = "dbo.m_login";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_tblm_login";
        }
    }
}