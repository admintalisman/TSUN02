using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace runnerDotNet
{
    public class dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_employee : tDALTable
    {
        public XVar fldm_employee_id;
        public XVar PRID;
        public XVar COMID;
        public XVar NIK;
        public XVar NAMA;
        public XVar EMAIL;
        public XVar POSITION;
        public XVar NOREKBCA;
        public XVar SECDATE;
        public XVar SECUSER;
        public XVar GENDER;
        public XVar AGAMA;
        public XVar BIRTHPLACE;
        public XVar BIRTHDAY;
        public XVar NOKTP;
        public XVar NOKK;
        public XVar NOHP;
        public XVar EMAILPRIBADI;
        public XVar ALAMATKTP;
        public XVar ALAMATDOM;
        public XVar DATEJOIN;
        public XVar DATEANGKAT;
        public XVar ISAKTIF;
        public XVar NONPWP;
        public XVar NPBJPSKES;
        public XVar NOBPJSTK;
        public XVar NOPASPOR;
        public XVar STATUSTAX;
        public XVar DARURATNAMA;
        public XVar DARURATHUB;
        public XVar DARURATTELP;
        public XVar USERID;
        public XVar LEVEL;
        public XVar UPRID;
        public XVar STATUSKAWIN;
        public XVar JMLANAK;
        public XVar NOASURANSI;
        public XVar NOPKS;
        public XVar DPKS;
        public XVar HANDLER;
        public static void Init()
        {
            XVar dalTablem_employee = XVar.Array();
            dalTablem_employee["m_employee_id"] = new XVar("type", 3, "varname", "fldm_employee_id", "name", "m_employee_id", "autoInc", "1");
            dalTablem_employee["PRID"] = new XVar("type", 200, "varname", "PRID", "name", "PRID", "autoInc", "0");
            dalTablem_employee["COMID"] = new XVar("type", 200, "varname", "COMID", "name", "COMID", "autoInc", "0");
            dalTablem_employee["NIK"] = new XVar("type", 200, "varname", "NIK", "name", "NIK", "autoInc", "0");
            dalTablem_employee["NAMA"] = new XVar("type", 200, "varname", "NAMA", "name", "NAMA", "autoInc", "0");
            dalTablem_employee["EMAIL"] = new XVar("type", 200, "varname", "EMAIL", "name", "EMAIL", "autoInc", "0");
            dalTablem_employee["POSITION"] = new XVar("type", 200, "varname", "POSITION", "name", "POSITION", "autoInc", "0");
            dalTablem_employee["NOREKBCA"] = new XVar("type", 200, "varname", "NOREKBCA", "name", "NOREKBCA", "autoInc", "0");
            dalTablem_employee["SECDATE"] = new XVar("type", 135, "varname", "SECDATE", "name", "SECDATE", "autoInc", "0");
            dalTablem_employee["SECUSER"] = new XVar("type", 200, "varname", "SECUSER", "name", "SECUSER", "autoInc", "0");
            dalTablem_employee["GENDER"] = new XVar("type", 200, "varname", "GENDER", "name", "GENDER", "autoInc", "0");
            dalTablem_employee["AGAMA"] = new XVar("type", 200, "varname", "AGAMA", "name", "AGAMA", "autoInc", "0");
            dalTablem_employee["BIRTHPLACE"] = new XVar("type", 200, "varname", "BIRTHPLACE", "name", "BIRTHPLACE", "autoInc", "0");
            dalTablem_employee["BIRTHDAY"] = new XVar("type", 135, "varname", "BIRTHDAY", "name", "BIRTHDAY", "autoInc", "0");
            dalTablem_employee["NOKTP"] = new XVar("type", 200, "varname", "NOKTP", "name", "NOKTP", "autoInc", "0");
            dalTablem_employee["NOKK"] = new XVar("type", 200, "varname", "NOKK", "name", "NOKK", "autoInc", "0");
            dalTablem_employee["NOHP"] = new XVar("type", 200, "varname", "NOHP", "name", "NOHP", "autoInc", "0");
            dalTablem_employee["EMAILPRIBADI"] = new XVar("type", 200, "varname", "EMAILPRIBADI", "name", "EMAILPRIBADI", "autoInc", "0");
            dalTablem_employee["ALAMATKTP"] = new XVar("type", 200, "varname", "ALAMATKTP", "name", "ALAMATKTP", "autoInc", "0");
            dalTablem_employee["ALAMATDOM"] = new XVar("type", 200, "varname", "ALAMATDOM", "name", "ALAMATDOM", "autoInc", "0");
            dalTablem_employee["DATEJOIN"] = new XVar("type", 135, "varname", "DATEJOIN", "name", "DATEJOIN", "autoInc", "0");
            dalTablem_employee["DATEANGKAT"] = new XVar("type", 135, "varname", "DATEANGKAT", "name", "DATEANGKAT", "autoInc", "0");
            dalTablem_employee["ISAKTIF"] = new XVar("type", 11, "varname", "ISAKTIF", "name", "ISAKTIF", "autoInc", "0");
            dalTablem_employee["NONPWP"] = new XVar("type", 200, "varname", "NONPWP", "name", "NONPWP", "autoInc", "0");
            dalTablem_employee["NPBJPSKES"] = new XVar("type", 200, "varname", "NPBJPSKES", "name", "NPBJPSKES", "autoInc", "0");
            dalTablem_employee["NOBPJSTK"] = new XVar("type", 200, "varname", "NOBPJSTK", "name", "NOBPJSTK", "autoInc", "0");
            dalTablem_employee["NOPASPOR"] = new XVar("type", 200, "varname", "NOPASPOR", "name", "NOPASPOR", "autoInc", "0");
            dalTablem_employee["STATUSTAX"] = new XVar("type", 200, "varname", "STATUSTAX", "name", "STATUSTAX", "autoInc", "0");
            dalTablem_employee["DARURATNAMA"] = new XVar("type", 200, "varname", "DARURATNAMA", "name", "DARURATNAMA", "autoInc", "0");
            dalTablem_employee["DARURATHUB"] = new XVar("type", 200, "varname", "DARURATHUB", "name", "DARURATHUB", "autoInc", "0");
            dalTablem_employee["DARURATTELP"] = new XVar("type", 200, "varname", "DARURATTELP", "name", "DARURATTELP", "autoInc", "0");
            dalTablem_employee["USERID"] = new XVar("type", 200, "varname", "USERID", "name", "USERID", "autoInc", "0");
            dalTablem_employee["LEVEL"] = new XVar("type", 200, "varname", "LEVEL", "name", "LEVEL", "autoInc", "0");
            dalTablem_employee["UPRID"] = new XVar("type", 200, "varname", "UPRID", "name", "UPRID", "autoInc", "0");
            dalTablem_employee["STATUSKAWIN"] = new XVar("type", 200, "varname", "STATUSKAWIN", "name", "STATUSKAWIN", "autoInc", "0");
            dalTablem_employee["JMLANAK"] = new XVar("type", 3, "varname", "JMLANAK", "name", "JMLANAK", "autoInc", "0");
            dalTablem_employee["NOASURANSI"] = new XVar("type", 200, "varname", "NOASURANSI", "name", "NOASURANSI", "autoInc", "0");
            dalTablem_employee["NOPKS"] = new XVar("type", 200, "varname", "NOPKS", "name", "NOPKS", "autoInc", "0");
            dalTablem_employee["DPKS"] = new XVar("type", 200, "varname", "DPKS", "name", "DPKS", "autoInc", "0");
            dalTablem_employee["HANDLER"] = new XVar("type", 200, "varname", "HANDLER", "name", "HANDLER", "autoInc", "0");
	        dalTablem_employee.InitAndSetArrayItem(true, "m_employee_id", "key");
            GlobalVars.dal_info["TSUNDB_at_alpha_talisman_co_id_dbo_tblm_employee"] = dalTablem_employee;
        }

        public  dalTable_TSUNDB_at_alpha_talisman_co_id_dbo_tblm_employee()
        {
            			this.m_TableName = "dbo.m_employee";
            this.m_infoKey = "TSUNDB_at_alpha_talisman_co_id_dbo_tblm_employee";
        }
    }
}