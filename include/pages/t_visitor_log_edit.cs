
		// dbo.t_visitor_log
		using System;
		using System.IO;
		using System.Collections.Generic;
		using System.Linq;
		using System.Text;
		using System.Web;
		using System.Web.Mvc;
		using System.Reflection;
		using runnerDotNet;
		namespace runnerDotNet
		{
			public static partial class Options_t_visitor_log_edit
			{
				static public XVar options()
				{
					return new XVar( "captcha", new XVar( "captcha", false ),
"fields", new XVar( "gridFields", new XVar( 0, "t_visitor_log_name",
1, "t_visitor_log_company",
2, "t_visitor_log_location_id",
3, "t_visitor_log_time_in",
4, "t_visitor_log_time_out",
5, "t_visitor_log_images",
6, "t_visitor_log_owner",
7, "t_visitor_log_room_id" ),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", XVar.Array(),
"updateOnEditFields", XVar.Array(),
"fieldItems", new XVar( "t_visitor_log_name", new XVar( 0, "integrated_edit_field1" ),
"t_visitor_log_company", new XVar( 0, "integrated_edit_field2" ),
"t_visitor_log_location_id", new XVar( 0, "integrated_edit_field3" ),
"t_visitor_log_time_in", new XVar( 0, "integrated_edit_field4" ),
"t_visitor_log_time_out", new XVar( 0, "integrated_edit_field5" ),
"t_visitor_log_images", new XVar( 0, "integrated_edit_field6" ),
"t_visitor_log_owner", new XVar( 0, "integrated_edit_field7" ),
"t_visitor_log_room_id", new XVar( 0, "integrated_edit_field8" ) ) ),
"pageLinks", new XVar( "edit", false,
"add", false,
"view", false,
"print", false ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", new XVar( 0, "edit_message" ),
"below-grid", new XVar( 0, "edit_save",
1, "edit_back_list",
2, "edit_close",
3, "hamburger" ),
"supertop", new XVar( 0, "logo",
1, "menu",
2, "notifications",
3, "loginform_login",
4, "username_button" ),
"top", new XVar( 0, "edit_header" ),
"grid", new XVar( 0, "integrated_edit_field1",
1, "integrated_edit_field2",
2, "integrated_edit_field7",
3, "integrated_edit_field8",
4, "integrated_edit_field5",
5, "integrated_edit_field6",
6, "integrated_edit_field3",
7, "integrated_edit_field4" ) ),
"formXtTags", new XVar( "above-grid", new XVar( 0, "message_block" ) ),
"itemForms", new XVar( "edit_message", "above-grid",
"edit_save", "below-grid",
"edit_back_list", "below-grid",
"edit_close", "below-grid",
"hamburger", "below-grid",
"logo", "supertop",
"menu", "supertop",
"notifications", "supertop",
"loginform_login", "supertop",
"username_button", "supertop",
"edit_header", "top",
"integrated_edit_field1", "grid",
"integrated_edit_field2", "grid",
"integrated_edit_field7", "grid",
"integrated_edit_field8", "grid",
"integrated_edit_field5", "grid",
"integrated_edit_field6", "grid",
"integrated_edit_field3", "grid",
"integrated_edit_field4", "grid" ),
"itemLocations", new XVar( "integrated_edit_field1", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_edit_field2", new XVar( "location", "grid",
"cellId", "c" ),
"integrated_edit_field7", new XVar( "location", "grid",
"cellId", "c10" ),
"integrated_edit_field8", new XVar( "location", "grid",
"cellId", "c11" ),
"integrated_edit_field5", new XVar( "location", "grid",
"cellId", "c12" ),
"integrated_edit_field6", new XVar( "location", "grid",
"cellId", "c13" ),
"integrated_edit_field3", new XVar( "location", "grid",
"cellId", "c14" ),
"integrated_edit_field4", new XVar( "location", "grid",
"cellId", "c15" ) ),
"itemVisiblity", new XVar( "menu", 3,
"username_button", 3,
"loginform_login", 3 ) ),
"itemsByType", new XVar( "edit_header", new XVar( 0, "edit_header" ),
"edit_message", new XVar( 0, "edit_message" ),
"edit_save", new XVar( 0, "edit_save" ),
"edit_back_list", new XVar( 0, "edit_back_list" ),
"edit_close", new XVar( 0, "edit_close" ),
"hamburger", new XVar( 0, "hamburger" ),
"edit_reset", new XVar( 0, "edit_reset" ),
"integrated_edit_field", new XVar( 0, "integrated_edit_field1",
1, "integrated_edit_field2",
2, "integrated_edit_field3",
3, "integrated_edit_field4",
4, "integrated_edit_field5",
5, "integrated_edit_field6",
6, "integrated_edit_field7",
7, "integrated_edit_field8" ),
"logo", new XVar( 0, "logo" ),
"menu", new XVar( 0, "menu" ),
"username_button", new XVar( 0, "username_button" ),
"loginform_login", new XVar( 0, "loginform_login" ),
"userinfo_link", new XVar( 0, "userinfo_link" ),
"logout_link", new XVar( 0, "logout_link" ),
"notifications", new XVar( 0, "notifications" ) ),
"cellMaps", new XVar( "grid", new XVar( "cells", new XVar( "c3", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field1" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field2" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c14", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field3" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c15", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field4" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c12", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field5" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c13", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field6" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c10", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 3 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field7" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"c11", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 3 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_edit_field8" ),
"fixedAtServer", true,
"fixedAtClient", false ) ),
"width", 2,
"height", 4 ) ) ),
"loginForm", new XVar( "loginForm", 0 ),
"page", new XVar( "verticalBar", false,
"labeledButtons", new XVar( "update_records", new XVar(  ),
"print_pages", new XVar(  ),
"register_activate_message", new XVar(  ),
"details_found", new XVar(  ) ),
"hasCustomButtons", false,
"customButtons", XVar.Array(),
"hasNotifications", true ),
"misc", new XVar( "type", "edit",
"breadcrumb", false,
"nextPrev", false ),
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ),
"edit", new XVar( "updateSelected", false ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "edit",
"type", "edit",
"layoutId", "topbar",
"disabled", 0,
"default", 1,
"forms", new XVar( "above-grid", new XVar( "modelId", "edit-above-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "edit_message" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"below-grid", new XVar( "modelId", "edit-below-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "edit_save",
1, "edit_back_list",
2, "edit_close" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "hamburger" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"supertop", new XVar( "modelId", "topbar-edit",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ),
2, new XVar( "cell", "c3" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "logo" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "menu" ) ),
"c3", new XVar( "model", "c3",
"items", new XVar( 0, "notifications",
1, "loginform_login",
2, "username_button" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"top", new XVar( "modelId", "edit-header",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "edit_header" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"grid", new XVar( "modelId", "simple-edit",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c3" ),
1, new XVar( "cell", "c" ) ),
"section", "" ),
1, new XVar( "section", "",
"cells", new XVar( 0, new XVar( "cell", "c14" ),
1, new XVar( "cell", "c15" ) ) ),
2, new XVar( "section", "",
"cells", new XVar( 0, new XVar( "cell", "c12" ),
1, new XVar( "cell", "c13" ) ) ),
3, new XVar( "section", "",
"cells", new XVar( 0, new XVar( "cell", "c10" ),
1, new XVar( "cell", "c11" ) ) ) ),
"cells", new XVar( "c3", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field1" ) ),
"c", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field2" ) ),
"c10", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field7" ) ),
"c11", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field8" ) ),
"c12", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field5" ) ),
"c13", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field6" ) ),
"c14", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field3" ) ),
"c15", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_edit_field4" ) ) ),
"deferredItems", XVar.Array(),
"columnCount", 1,
"inlineLabels", false,
"separateLabels", false ) ),
"items", new XVar( "edit_header", new XVar( "type", "edit_header" ),
"edit_message", new XVar( "type", "edit_message" ),
"edit_save", new XVar( "type", "edit_save" ),
"edit_back_list", new XVar( "type", "edit_back_list" ),
"edit_close", new XVar( "type", "edit_close" ),
"hamburger", new XVar( "type", "hamburger",
"items", new XVar( 0, "edit_reset" ) ),
"edit_reset", new XVar( "type", "edit_reset" ),
"integrated_edit_field1", new XVar( "field", "t_visitor_log_name",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field2", new XVar( "field", "t_visitor_log_company",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field3", new XVar( "field", "t_visitor_log_location_id",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field4", new XVar( "field", "t_visitor_log_time_in",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field5", new XVar( "field", "t_visitor_log_time_out",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field6", new XVar( "field", "t_visitor_log_images",
"type", "integrated_edit_field",
"orientation", 0,
"updateOnEdit", false ),
"integrated_edit_field7", new XVar( "field", "t_visitor_log_owner",
"type", "integrated_edit_field",
"orientation", 0 ),
"integrated_edit_field8", new XVar( "field", "t_visitor_log_room_id",
"type", "integrated_edit_field",
"orientation", 0 ),
"logo", new XVar( "type", "logo" ),
"menu", new XVar( "type", "menu" ),
"username_button", new XVar( "type", "username_button",
"items", new XVar( 0, "userinfo_link",
1, "logout_link" ) ),
"loginform_login", new XVar( "type", "loginform_login" ),
"userinfo_link", new XVar( "type", "userinfo_link" ),
"logout_link", new XVar( "type", "logout_link" ),
"notifications", new XVar( "type", "notifications" ) ),
"dbProps", new XVar(  ),
"version", 11,
"pageWidth", "full",
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}