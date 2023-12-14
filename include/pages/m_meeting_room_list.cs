
		// dbo.m_meeting_room
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
			public static partial class Options_m_meeting_room_list
			{
				static public XVar options()
				{
					return new XVar( "list", new XVar( "inlineAdd", true,
"detailsAdd", true,
"inlineEdit", true,
"spreadsheetMode", false,
"addToBottom", false,
"delete", true,
"updateSelected", false,
"addInPopup", null,
"editInPopup", null,
"viewInPopup", null,
"clickSort", true,
"sortDropdown", false,
"showHideFields", false,
"reorderFields", false ),
"listSearch", new XVar( "alwaysOnPanelFields", XVar.Array(),
"searchPanel", true,
"fixedSearchPanel", false,
"simpleSearchOptions", false,
"searchSaving", false ),
"totals", new XVar( "m_meeting_room_id", new XVar( "totalsType", "" ),
"m_meeting_room_name", new XVar( "totalsType", "" ),
"m_meeting_room_location_id", new XVar( "totalsType", "" ),
"m_meeting_room_isactive", new XVar( "totalsType", "" ) ),
"fields", new XVar( "gridFields", new XVar( 0, "m_meeting_room_name",
1, "m_meeting_room_location_id",
2, "m_meeting_room_isactive" ),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", new XVar( 0, "m_meeting_room_name",
1, "m_meeting_room_location_id",
2, "m_meeting_room_isactive" ),
"filterFields", XVar.Array(),
"inlineAddFields", new XVar( 0, "m_meeting_room_name",
1, "m_meeting_room_location_id",
2, "m_meeting_room_isactive" ),
"inlineEditFields", new XVar( 0, "m_meeting_room_name",
1, "m_meeting_room_location_id",
2, "m_meeting_room_isactive" ),
"fieldItems", new XVar( "m_meeting_room_name", new XVar( 0, "simple_grid_field",
1, "simple_grid_field1" ),
"m_meeting_room_location_id", new XVar( 0, "simple_grid_field2",
1, "simple_grid_field4" ),
"m_meeting_room_isactive", new XVar( 0, "simple_grid_field3",
1, "simple_grid_field5" ) ),
"hideEmptyFields", XVar.Array() ),
"pageLinks", new XVar( "edit", false,
"add", false,
"view", false,
"print", true ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", new XVar( 0, "inline_add",
1, "inline_save_all",
2, "inline_cancel_all",
3, "delete",
4, "details_found",
5, "page_size",
6, "print_panel" ),
"below-grid", new XVar( 0, "pagination" ),
"supertop", new XVar( 0, "logo",
1, "menu",
2, "simple_search",
3, "list_options",
4, "notifications",
5, "loginform_login",
6, "username_button" ),
"left", new XVar( 0, "search_panel" ),
"top", new XVar( 0, "breadcrumb" ),
"grid", new XVar( 0, "simple_grid_field",
1, "simple_grid_field1",
2, "simple_grid_field4",
3, "simple_grid_field2",
4, "simple_grid_field5",
5, "simple_grid_field3",
6, "grid_checkbox_head",
7, "grid_checkbox",
8, "grid_inline_edit",
9, "grid_inline_save",
10, "grid_inline_cancel" ) ),
"formXtTags", new XVar( "above-grid", new XVar( 0, "inlineadd_link",
1, "saveall_link",
2, "cancelall_link",
3, "deleteselected_link",
4, "details_found",
5, "recsPerPage",
6, "print_friendly" ),
"below-grid", new XVar( 0, "pagination" ),
"top", new XVar( 0, "breadcrumb" ) ),
"itemForms", new XVar( "inline_add", "above-grid",
"inline_save_all", "above-grid",
"inline_cancel_all", "above-grid",
"delete", "above-grid",
"details_found", "above-grid",
"page_size", "above-grid",
"print_panel", "above-grid",
"pagination", "below-grid",
"logo", "supertop",
"menu", "supertop",
"simple_search", "supertop",
"list_options", "supertop",
"notifications", "supertop",
"loginform_login", "supertop",
"username_button", "supertop",
"search_panel", "left",
"breadcrumb", "top",
"simple_grid_field", "grid",
"simple_grid_field1", "grid",
"simple_grid_field4", "grid",
"simple_grid_field2", "grid",
"simple_grid_field5", "grid",
"simple_grid_field3", "grid",
"grid_checkbox_head", "grid",
"grid_checkbox", "grid",
"grid_inline_edit", "grid",
"grid_inline_save", "grid",
"grid_inline_cancel", "grid" ),
"itemLocations", new XVar( "simple_grid_field", new XVar( "location", "grid",
"cellId", "headcell_field" ),
"simple_grid_field1", new XVar( "location", "grid",
"cellId", "cell_field" ),
"simple_grid_field4", new XVar( "location", "grid",
"cellId", "headcell_field1" ),
"simple_grid_field2", new XVar( "location", "grid",
"cellId", "cell_field1" ),
"simple_grid_field5", new XVar( "location", "grid",
"cellId", "headcell_field2" ),
"simple_grid_field3", new XVar( "location", "grid",
"cellId", "cell_field2" ),
"grid_checkbox_head", new XVar( "location", "grid",
"cellId", "headcell_checkbox" ),
"grid_checkbox", new XVar( "location", "grid",
"cellId", "cell_checkbox" ),
"grid_inline_edit", new XVar( "location", "grid",
"cellId", "cell_icons" ),
"grid_inline_save", new XVar( "location", "grid",
"cellId", "cell_icons" ),
"grid_inline_cancel", new XVar( "location", "grid",
"cellId", "cell_icons" ) ),
"itemVisiblity", new XVar( "menu", 3,
"simple_search", 3,
"search_panel", 5,
"list_options", 3,
"username_button", 3,
"loginform_login", 3,
"print_panel", 5 ) ),
"itemsByType", new XVar( "page_size", new XVar( 0, "page_size" ),
"details_found", new XVar( 0, "details_found" ),
"breadcrumb", new XVar( 0, "breadcrumb" ),
"logo", new XVar( 0, "logo" ),
"menu", new XVar( 0, "menu" ),
"simple_search", new XVar( 0, "simple_search" ),
"pagination", new XVar( 0, "pagination" ),
"grid_checkbox", new XVar( 0, "grid_checkbox" ),
"grid_checkbox_head", new XVar( 0, "grid_checkbox_head" ),
"search_panel", new XVar( 0, "search_panel" ),
"list_options", new XVar( 0, "list_options" ),
"show_search_panel", new XVar( 0, "show_search_panel" ),
"hide_search_panel", new XVar( 0, "hide_search_panel" ),
"search_panel_field", new XVar( 0, "search_panel_field1",
1, "search_panel_field2",
2, "search_panel_field3" ),
"username_button", new XVar( 0, "username_button" ),
"loginform_login", new XVar( 0, "loginform_login" ),
"userinfo_link", new XVar( 0, "userinfo_link" ),
"logout_link", new XVar( 0, "logout_link" ),
"adminarea_link", new XVar( 0, "adminarea_link" ),
"changepassword_link", new XVar( 0, "changepassword_link" ),
"notifications", new XVar( 0, "notifications" ),
"print_panel", new XVar( 0, "print_panel" ),
"print_scope", new XVar( 0, "print_scope" ),
"print_button", new XVar( 0, "print_button" ),
"print_records", new XVar( 0, "print_records" ),
"export", new XVar( 0, "export" ),
"-", new XVar( 0, "-",
1, "-1",
2, "-2",
3, "-3" ),
"import", new XVar( 0, "import" ),
"advsearch_link", new XVar( 0, "advsearch_link" ),
"grid_field_label", new XVar( 0, "simple_grid_field",
1, "simple_grid_field4",
2, "simple_grid_field5" ),
"grid_field", new XVar( 0, "simple_grid_field1",
1, "simple_grid_field2",
2, "simple_grid_field3" ),
"inline_add", new XVar( 0, "inline_add" ),
"grid_inline_cancel", new XVar( 0, "grid_inline_cancel" ),
"grid_inline_save", new XVar( 0, "grid_inline_save" ),
"inline_save_all", new XVar( 0, "inline_save_all" ),
"inline_cancel_all", new XVar( 0, "inline_cancel_all" ),
"edit_selected", new XVar( 0, "edit_selected" ),
"grid_inline_edit", new XVar( 0, "grid_inline_edit" ),
"delete", new XVar( 0, "delete" ),
"delete_selected", new XVar( 0, "delete_selected" ) ),
"cellMaps", new XVar( "grid", new XVar( "cells", new XVar( "headcell_icons", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_checkbox", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "checkbox_column" ),
"items", new XVar( 0, "grid_checkbox_head" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "m_meeting_room_name_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field1", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "m_meeting_room_location_id_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field4" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field2", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "m_meeting_room_isactive_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field5" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_icons", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "inlineedit_column",
1, "inline_save",
2, "inline_cancel" ),
"items", new XVar( 0, "grid_inline_edit",
1, "grid_inline_save",
2, "grid_inline_cancel" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_checkbox", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "checkbox_column" ),
"items", new XVar( 0, "grid_checkbox" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "m_meeting_room_name_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field1" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field1", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "m_meeting_room_location_id_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field2" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field2", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "m_meeting_room_isactive_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field3" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_icons", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_checkbox", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field1", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field2", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ) ),
"width", 5,
"height", 3 ) ) ),
"loginForm", new XVar( "loginForm", 0 ),
"page", new XVar( "verticalBar", false,
"labeledButtons", new XVar( "update_records", new XVar(  ),
"print_pages", new XVar(  ),
"register_activate_message", new XVar(  ),
"details_found", new XVar( "details_found", new XVar( "tag", "DISPLAYING",
"type", 2 ) ) ),
"gridType", 0,
"recsPerRow", 1,
"hasCustomButtons", false,
"customButtons", XVar.Array(),
"hasNotifications", true ),
"misc", new XVar( "type", "list",
"breadcrumb", true ),
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ),
"dataGrid", new XVar( "groupFields", XVar.Array() ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "list",
"type", "list",
"layoutId", "topbar",
"disabled", 0,
"default", 0,
"forms", new XVar( "above-grid", new XVar( "modelId", "list-above-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "inline_add",
1, "inline_save_all",
2, "inline_cancel_all",
3, "delete" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "details_found",
1, "page_size",
2, "print_panel" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"below-grid", new XVar( "modelId", "list-below-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "pagination" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"supertop", new XVar( "modelId", "topbar-menu",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "logo",
1, "menu" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "simple_search",
1, "list_options",
2, "notifications",
3, "loginform_login",
4, "username_button" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"left", new XVar( "modelId", "list-vbar",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "search_panel" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"top", new XVar( "modelId", "list-top",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "breadcrumb" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"grid", new XVar( "modelId", "horizontal-grid",
"grid", new XVar( 0, new XVar( "section", "head",
"cells", new XVar( 0, new XVar( "cell", "headcell_icons" ),
1, new XVar( "cell", "headcell_checkbox" ),
2, new XVar( "cell", "headcell_field" ),
3, new XVar( "cell", "headcell_field1" ),
4, new XVar( "cell", "headcell_field2" ) ) ),
1, new XVar( "section", "body",
"cells", new XVar( 0, new XVar( "cell", "cell_icons" ),
1, new XVar( "cell", "cell_checkbox" ),
2, new XVar( "cell", "cell_field" ),
3, new XVar( "cell", "cell_field1" ),
4, new XVar( "cell", "cell_field2" ) ) ),
2, new XVar( "section", "foot",
"cells", new XVar( 0, new XVar( "cell", "footcell_icons" ),
1, new XVar( "cell", "footcell_checkbox" ),
2, new XVar( "cell", "footcell_field" ),
3, new XVar( "cell", "footcell_field1" ),
4, new XVar( "cell", "footcell_field2" ) ) ) ),
"cells", new XVar( "headcell_field", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field" ),
"field", "m_meeting_room_name",
"columnName", "field" ),
"cell_field", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field1" ),
"field", "m_meeting_room_name",
"columnName", "field" ),
"footcell_field", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field1", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field4" ),
"field", "m_meeting_room_location_id",
"columnName", "field" ),
"cell_field1", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field2" ),
"field", "m_meeting_room_location_id",
"columnName", "field" ),
"footcell_field1", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field2", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field5" ),
"field", "m_meeting_room_isactive",
"columnName", "field" ),
"cell_field2", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field3" ),
"field", "m_meeting_room_isactive",
"columnName", "field" ),
"footcell_field2", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_checkbox", new XVar( "model", "headcell_checkbox",
"items", new XVar( 0, "grid_checkbox_head" ) ),
"cell_checkbox", new XVar( "model", "cell_checkbox",
"items", new XVar( 0, "grid_checkbox" ) ),
"footcell_checkbox", new XVar( "model", "footcell_checkbox",
"items", XVar.Array() ),
"headcell_icons", new XVar( "model", "headcell_icons",
"items", XVar.Array() ),
"cell_icons", new XVar( "model", "cell_icons",
"items", new XVar( 0, "grid_inline_edit",
1, "grid_inline_save",
2, "grid_inline_cancel" ) ),
"footcell_icons", new XVar( "model", "footcell_icons",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ) ),
"items", new XVar( "page_size", new XVar( "type", "page_size" ),
"details_found", new XVar( "type", "details_found" ),
"breadcrumb", new XVar( "type", "breadcrumb" ),
"logo", new XVar( "type", "logo" ),
"menu", new XVar( "type", "menu" ),
"simple_search", new XVar( "type", "simple_search" ),
"pagination", new XVar( "type", "pagination" ),
"grid_checkbox", new XVar( "type", "grid_checkbox" ),
"grid_checkbox_head", new XVar( "type", "grid_checkbox_head" ),
"search_panel", new XVar( "type", "search_panel",
"items", new XVar( 0, "search_panel_field3",
1, "search_panel_field2",
2, "search_panel_field1" ) ),
"list_options", new XVar( "type", "list_options",
"items", new XVar( 0, "edit_selected",
1, "delete_selected",
2, "-3",
3, "advsearch_link",
4, "show_search_panel",
5, "hide_search_panel",
6, "-2",
7, "export",
8, "-1",
9, "import" ) ),
"show_search_panel", new XVar( "type", "show_search_panel" ),
"hide_search_panel", new XVar( "type", "hide_search_panel" ),
"search_panel_field1", new XVar( "field", "m_meeting_room_isactive",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field2", new XVar( "field", "m_meeting_room_location_id",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field3", new XVar( "field", "m_meeting_room_name",
"type", "search_panel_field",
"required", false ),
"username_button", new XVar( "type", "username_button",
"items", new XVar( 0, "userinfo_link",
1, "logout_link",
2, "adminarea_link",
3, "changepassword_link" ) ),
"loginform_login", new XVar( "type", "loginform_login",
"popup", false ),
"userinfo_link", new XVar( "type", "userinfo_link" ),
"logout_link", new XVar( "type", "logout_link" ),
"adminarea_link", new XVar( "type", "adminarea_link" ),
"changepassword_link", new XVar( "type", "changepassword_link" ),
"notifications", new XVar( "type", "notifications" ),
"print_panel", new XVar( "type", "print_panel",
"items", new XVar( 0, "print_scope",
1, "print_records",
2, "print_button" ) ),
"print_scope", new XVar( "type", "print_scope" ),
"print_button", new XVar( "type", "print_button" ),
"print_records", new XVar( "type", "print_records" ),
"export", new XVar( "type", "export" ),
"-", new XVar( "type", "-" ),
"import", new XVar( "type", "import" ),
"-1", new XVar( "type", "-" ),
"advsearch_link", new XVar( "type", "advsearch_link" ),
"-2", new XVar( "type", "-" ),
"simple_grid_field", new XVar( "type", "grid_field_label",
"field", "m_meeting_room_name" ),
"simple_grid_field1", new XVar( "field", "m_meeting_room_name",
"type", "grid_field",
"inlineAdd", true,
"inlineEdit", true ),
"simple_grid_field2", new XVar( "field", "m_meeting_room_location_id",
"type", "grid_field",
"inlineAdd", true,
"inlineEdit", true ),
"simple_grid_field3", new XVar( "field", "m_meeting_room_isactive",
"type", "grid_field",
"inlineAdd", true,
"inlineEdit", true ),
"inline_add", new XVar( "type", "inline_add" ),
"grid_inline_cancel", new XVar( "type", "grid_inline_cancel" ),
"grid_inline_save", new XVar( "type", "grid_inline_save" ),
"inline_save_all", new XVar( "type", "inline_save_all" ),
"inline_cancel_all", new XVar( "type", "inline_cancel_all" ),
"edit_selected", new XVar( "type", "edit_selected" ),
"-3", new XVar( "type", "-" ),
"grid_inline_edit", new XVar( "type", "grid_inline_edit" ),
"delete", new XVar( "type", "delete" ),
"delete_selected", new XVar( "type", "delete_selected" ),
"simple_grid_field4", new XVar( "type", "grid_field_label",
"field", "m_meeting_room_location_id" ),
"simple_grid_field5", new XVar( "type", "grid_field_label",
"field", "m_meeting_room_isactive" ) ),
"dbProps", new XVar(  ),
"spreadsheetGrid", false,
"version", 11,
"pageWidth", "full",
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}