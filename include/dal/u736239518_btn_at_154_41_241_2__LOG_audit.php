<?php
$dalTableLOG_audit = array();
$dalTableLOG_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableLOG_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime", "autoInc" => "0");
$dalTableLOG_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTableLOG_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTableLOG_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table", "autoInc" => "0");
$dalTableLOG_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action", "autoInc" => "0");
$dalTableLOG_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTableLOG_audit["id"]["key"]=true;

$dal_info["u736239518_btn_at_154_41_241_2__LOG_audit"] = &$dalTableLOG_audit;
?>