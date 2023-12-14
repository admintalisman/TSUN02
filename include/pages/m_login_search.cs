
		// dbo.m_login
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
			public static partial class Options_m_login_search
			{
				static public XVar options()
				{
					return new XVar( "fields", new XVar( "gridFields", new XVar( 0, "login_id",
1, "username",
2, "password",
3, "fullname",
4, "email",
5, "isactive",
6, "add_user",
7, "add_date",
8, "edit_user",
9, "edit_date" ),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", XVar.Array(),
"fieldItems", new XVar( "login_id", new XVar( 0, "integrated_search_field" ),
"username", new XVar( 0, "integrated_search_field1" ),
"password", new XVar( 0, "integrated_search_field2" ),
"fullname", new XVar( 0, "integrated_search_field3" ),
"email", new XVar( 0, "integrated_search_field4" ),
"isactive", new XVar( 0, "integrated_search_field5" ),
"add_user", new XVar( 0, "integrated_search_field6" ),
"add_date", new XVar( 0, "integrated_search_field7" ),
"edit_user", new XVar( 0, "integrated_search_field8" ),
"edit_date", new XVar( 0, "integrated_search_field9" ) ) ),
"pageLinks", new XVar( "edit", false,
"add", false,
"view", false,
"print", false ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", XVar.Array(),
"below-grid", new XVar( 0, "search_search",
1, "search_reset",
2, "search_back_list",
3, "search_cancel" ),
"top", new XVar( 0, "search_header" ),
"grid", new XVar( 0, "integrated_search_field",
1, "integrated_search_field1",
2, "integrated_search_field2",
3, "integrated_search_field3",
4, "integrated_search_field4",
5, "integrated_search_field5",
6, "integrated_search_field6",
7, "integrated_search_field7",
8, "integrated_search_field8",
9, "integrated_search_field9" ) ),
"formXtTags", new XVar( "above-grid", XVar.Array() ),
"itemForms", new XVar( "search_search", "below-grid",
"search_reset", "below-grid",
"search_back_list", "below-grid",
"search_cancel", "below-grid",
"search_header", "top",
"integrated_search_field", "grid",
"integrated_search_field1", "grid",
"integrated_search_field2", "grid",
"integrated_search_field3", "grid",
"integrated_search_field4", "grid",
"integrated_search_field5", "grid",
"integrated_search_field6", "grid",
"integrated_search_field7", "grid",
"integrated_search_field8", "grid",
"integrated_search_field9", "grid" ),
"itemLocations", new XVar( "integrated_search_field", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field1", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field2", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field3", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field4", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field5", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field6", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field7", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field8", new XVar( "location", "grid",
"cellId", "c3" ),
"integrated_search_field9", new XVar( "location", "grid",
"cellId", "c3" ) ),
"itemVisiblity", new XVar(  ) ),
"itemsByType", new XVar( "search_header", new XVar( 0, "search_header" ),
"search_reset", new XVar( 0, "search_reset" ),
"search_back_list", new XVar( 0, "search_back_list" ),
"search_search", new XVar( 0, "search_search" ),
"search_cancel", new XVar( 0, "search_cancel" ),
"integrated_search_field", new XVar( 0, "integrated_search_field",
1, "integrated_search_field1",
2, "integrated_search_field2",
3, "integrated_search_field3",
4, "integrated_search_field4",
5, "integrated_search_field5",
6, "integrated_search_field6",
7, "integrated_search_field7",
8, "integrated_search_field8",
9, "integrated_search_field9" ) ),
"cellMaps", new XVar( "grid", new XVar( "cells", new XVar( "c3", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "integrated_search_field",
1, "integrated_search_field1",
2, "integrated_search_field2",
3, "integrated_search_field3",
4, "integrated_search_field4",
5, "integrated_search_field5",
6, "integrated_search_field6",
7, "integrated_search_field7",
8, "integrated_search_field8",
9, "integrated_search_field9" ),
"fixedAtServer", true,
"fixedAtClient", false ) ),
"width", 1,
"height", 1 ) ) ),
"loginForm", new XVar( "loginForm", 3 ),
"page", new XVar( "verticalBar", false,
"labeledButtons", new XVar( "update_records", new XVar(  ),
"print_pages", new XVar(  ),
"register_activate_message", new XVar(  ),
"details_found", new XVar(  ) ),
"hasCustomButtons", false,
"customButtons", XVar.Array(),
"hasNotifications", false ),
"misc", new XVar( "type", "search",
"breadcrumb", false ),
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "search",
"type", "search",
"layoutId", "nomenu",
"disabled", 0,
"default", 0,
"forms", new XVar( "above-grid", new XVar( "modelId", "search-above-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1",
"colspan", 2 ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"below-grid", new XVar( "modelId", "search-below-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "search_search",
1, "search_reset",
2, "search_back_list",
3, "search_cancel" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"top", new XVar( "modelId", "search-header",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "search_header" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"grid", new XVar( "modelId", "simple-search",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c3" ) ),
"section", "" ) ),
"cells", new XVar( "c3", new XVar( "model", "c3",
"items", new XVar( 0, "integrated_search_field",
1, "integrated_search_field1",
2, "integrated_search_field2",
3, "integrated_search_field3",
4, "integrated_search_field4",
5, "integrated_search_field5",
6, "integrated_search_field6",
7, "integrated_search_field7",
8, "integrated_search_field8",
9, "integrated_search_field9" ) ) ),
"deferredItems", XVar.Array(),
"separateLabels", false ) ),
"items", new XVar( "search_header", new XVar( "type", "search_header" ),
"search_reset", new XVar( "type", "search_reset" ),
"search_back_list", new XVar( "type", "search_back_list" ),
"search_search", new XVar( "type", "search_search" ),
"search_cancel", new XVar( "type", "search_cancel" ),
"integrated_search_field", new XVar( "field", "login_id",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field1", new XVar( "field", "username",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field2", new XVar( "field", "password",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field3", new XVar( "field", "fullname",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field4", new XVar( "field", "email",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field5", new XVar( "field", "isactive",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field6", new XVar( "field", "add_user",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field7", new XVar( "field", "add_date",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field8", new XVar( "field", "edit_user",
"type", "integrated_search_field",
"orientation", 0,
"required", false ),
"integrated_search_field9", new XVar( "field", "edit_date",
"type", "integrated_search_field",
"orientation", 0,
"required", false ) ),
"dbProps", new XVar(  ),
"version", 11,
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}