using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_meeting_room : tDALTable
    {
        public XVar fldm_meeting_room_id;
        public XVar fldm_meeting_room_name;
        public XVar fldm_meeting_room_location_id;
        public XVar fldm_meeting_room_isactive;
        public static void Init()
        {
            XVar dalTablem_meeting_room = XVar.Array();
            dalTablem_meeting_room["m_meeting_room_id"] = new XVar("type", 3, "varname", "fldm_meeting_room_id", "name", "m_meeting_room_id", "autoInc", "1");
            dalTablem_meeting_room["m_meeting_room_name"] = new XVar("type", 202, "varname", "fldm_meeting_room_name", "name", "m_meeting_room_name", "autoInc", "0");
            dalTablem_meeting_room["m_meeting_room_location_id"] = new XVar("type", 3, "varname", "fldm_meeting_room_location_id", "name", "m_meeting_room_location_id", "autoInc", "0");
            dalTablem_meeting_room["m_meeting_room_isactive"] = new XVar("type", 3, "varname", "fldm_meeting_room_isactive", "name", "m_meeting_room_isactive", "autoInc", "0");
	        dalTablem_meeting_room.InitAndSetArrayItem(true, "m_meeting_room_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_tblm_meeting_room"] = dalTablem_meeting_room;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_meeting_room()
        {
            			this.m_TableName = "dbo.m_meeting_room";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_tblm_meeting_room";
        }
    }
}