
		// vt_register_doc
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
			public static partial class Options_vt_register_doc_list
			{
				static public XVar options()
				{
					return new XVar( "list", new XVar( "inlineAdd", false,
"detailsAdd", false,
"inlineEdit", false,
"spreadsheetMode", false,
"reorderRows", false,
"addToBottom", false,
"delete", false,
"updateSelected", false,
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
"totals", new XVar( "t_register_doc_id", new XVar( "totalsType", "" ),
"t_register_doc_no", new XVar( "totalsType", "" ),
"t_register_date", new XVar( "totalsType", "" ),
"t_register_location_id", new XVar( "totalsType", "" ),
"t_register_doc_owner", new XVar( "totalsType", "" ),
"t_register_images", new XVar( "totalsType", "" ),
"t_register_note", new XVar( "totalsType", "" ),
"t_register_status", new XVar( "totalsType", "" ),
"add_user", new XVar( "totalsType", "" ),
"add_date", new XVar( "totalsType", "" ),
"edit_user", new XVar( "totalsType", "" ),
"edit_date", new XVar( "totalsType", "" ) ),
"fields", new XVar( "gridFields", new XVar( 0, "t_register_doc_no",
1, "t_register_date",
2, "t_register_location_id",
3, "t_register_doc_owner",
4, "t_register_status",
5, "t_register_images",
6, "t_register_note" ),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", new XVar( 0, "t_register_note",
1, "t_register_status",
2, "t_register_doc_owner",
3, "t_register_location_id",
4, "t_register_date",
5, "t_register_doc_no" ),
"filterFields", XVar.Array(),
"inlineAddFields", XVar.Array(),
"inlineEditFields", XVar.Array(),
"fieldItems", new XVar( "t_register_doc_no", new XVar( 0, "simple_grid_field1",
1, "simple_grid_field" ),
"t_register_date", new XVar( 0, "simple_grid_field2",
1, "simple_grid_field8" ),
"t_register_location_id", new XVar( 0, "simple_grid_field3",
1, "simple_grid_field9" ),
"t_register_doc_owner", new XVar( 0, "simple_grid_field4",
1, "simple_grid_field10" ),
"t_register_status", new XVar( 0, "simple_grid_field5",
1, "simple_grid_field11" ),
"t_register_images", new XVar( 0, "simple_grid_field6",
1, "simple_grid_field12" ),
"t_register_note", new XVar( 0, "simple_grid_field7",
1, "simple_grid_field13" ) ),
"hideEmptyFields", XVar.Array() ),
"pageLinks", new XVar( "edit", false,
"add", true,
"view", false,
"print", true ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", new XVar( 0, "add",
1, "details_found",
2, "page_size",
3, "print_panel" ),
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
2, "simple_grid_field8",
3, "simple_grid_field2",
4, "simple_grid_field9",
5, "simple_grid_field3",
6, "simple_grid_field10",
7, "simple_grid_field4",
8, "simple_grid_field11",
9, "simple_grid_field5",
10, "simple_grid_field12",
11, "simple_grid_field6",
12, "simple_grid_field13",
13, "simple_grid_field7",
14, "grid_checkbox_head",
15, "grid_checkbox" ) ),
"formXtTags", new XVar( "above-grid", new XVar( 0, "add_link",
1, "details_found",
2, "recsPerPage",
3, "print_friendly" ),
"below-grid", new XVar( 0, "pagination" ),
"top", new XVar( 0, "breadcrumb" ) ),
"itemForms", new XVar( "add", "above-grid",
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
"simple_grid_field8", "grid",
"simple_grid_field2", "grid",
"simple_grid_field9", "grid",
"simple_grid_field3", "grid",
"simple_grid_field10", "grid",
"simple_grid_field4", "grid",
"simple_grid_field11", "grid",
"simple_grid_field5", "grid",
"simple_grid_field12", "grid",
"simple_grid_field6", "grid",
"simple_grid_field13", "grid",
"simple_grid_field7", "grid",
"grid_checkbox_head", "grid",
"grid_checkbox", "grid" ),
"itemLocations", new XVar( "simple_grid_field", new XVar( "location", "grid",
"cellId", "headcell_field" ),
"simple_grid_field1", new XVar( "location", "grid",
"cellId", "cell_field" ),
"simple_grid_field8", new XVar( "location", "grid",
"cellId", "headcell_field1" ),
"simple_grid_field2", new XVar( "location", "grid",
"cellId", "cell_field1" ),
"simple_grid_field9", new XVar( "location", "grid",
"cellId", "headcell_field2" ),
"simple_grid_field3", new XVar( "location", "grid",
"cellId", "cell_field2" ),
"simple_grid_field10", new XVar( "location", "grid",
"cellId", "headcell_field3" ),
"simple_grid_field4", new XVar( "location", "grid",
"cellId", "cell_field3" ),
"simple_grid_field11", new XVar( "location", "grid",
"cellId", "headcell_field4" ),
"simple_grid_field5", new XVar( "location", "grid",
"cellId", "cell_field4" ),
"simple_grid_field12", new XVar( "location", "grid",
"cellId", "headcell_field5" ),
"simple_grid_field6", new XVar( "location", "grid",
"cellId", "cell_field5" ),
"simple_grid_field13", new XVar( "location", "grid",
"cellId", "headcell_field6" ),
"simple_grid_field7", new XVar( "location", "grid",
"cellId", "cell_field6" ),
"grid_checkbox_head", new XVar( "location", "grid",
"cellId", "headcell_checkbox" ),
"grid_checkbox", new XVar( "location", "grid",
"cellId", "cell_checkbox" ) ),
"itemVisiblity", new XVar( "print_panel", 5,
"menu", 3,
"simple_search", 3,
"search_panel", 5,
"list_options", 3,
"username_button", 3,
"loginform_login", 3 ) ),
"itemsByType", new XVar( "details_found", new XVar( 0, "details_found" ),
"page_size", new XVar( 0, "page_size" ),
"print_panel", new XVar( 0, "print_panel" ),
"print_scope", new XVar( 0, "print_scope" ),
"print_records", new XVar( 0, "print_records" ),
"print_button", new XVar( 0, "print_button" ),
"pagination", new XVar( 0, "pagination" ),
"search_panel_field", new XVar( 0, "search_panel_field7",
1, "search_panel_field5",
2, "search_panel_field4",
3, "search_panel_field3",
4, "search_panel_field2",
5, "search_panel_field1" ),
"advsearch_link", new XVar( 0, "advsearch_link" ),
"show_search_panel", new XVar( 0, "show_search_panel" ),
"hide_search_panel", new XVar( 0, "hide_search_panel" ),
"-", new XVar( 0, "-2",
1, "-1",
2, "-",
3, "-3" ),
"export", new XVar( 0, "export" ),
"import", new XVar( 0, "import" ),
"userinfo_link", new XVar( 0, "userinfo_link" ),
"logout_link", new XVar( 0, "logout_link" ),
"adminarea_link", new XVar( 0, "adminarea_link" ),
"changepassword_link", new XVar( 0, "changepassword_link" ),
"breadcrumb", new XVar( 0, "breadcrumb" ),
"logo", new XVar( 0, "logo" ),
"menu", new XVar( 0, "menu" ),
"simple_search", new XVar( 0, "simple_search" ),
"search_panel", new XVar( 0, "search_panel" ),
"list_options", new XVar( 0, "list_options" ),
"username_button", new XVar( 0, "username_button" ),
"loginform_login", new XVar( 0, "loginform_login" ),
"notifications", new XVar( 0, "notifications" ),
"add", new XVar( 0, "add" ),
"grid_field", new XVar( 0, "simple_grid_field1",
1, "simple_grid_field2",
2, "simple_grid_field3",
3, "simple_grid_field4",
4, "simple_grid_field5",
5, "simple_grid_field6",
6, "simple_grid_field7" ),
"grid_field_label", new XVar( 0, "simple_grid_field",
1, "simple_grid_field8",
2, "simple_grid_field9",
3, "simple_grid_field10",
4, "simple_grid_field11",
5, "simple_grid_field12",
6, "simple_grid_field13" ),
"grid_checkbox", new XVar( 0, "grid_checkbox" ),
"grid_checkbox_head", new XVar( 0, "grid_checkbox_head" ) ),
"cellMaps", new XVar( "grid", new XVar( "cells", new XVar( "headcell_checkbox", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "checkbox_column" ),
"items", new XVar( 0, "grid_checkbox_head" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_doc_no_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field1", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_date_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field8" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field2", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_location_id_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field9" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field3", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_doc_owner_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field10" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field4", new XVar( "cols", new XVar( 0, 5 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_status_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field11" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field5", new XVar( "cols", new XVar( 0, 6 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_images_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field12" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"headcell_field6", new XVar( "cols", new XVar( 0, 7 ),
"rows", new XVar( 0, 0 ),
"tags", new XVar( 0, "t_register_note_fieldheadercolumn" ),
"items", new XVar( 0, "simple_grid_field13" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_checkbox", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "checkbox_column" ),
"items", new XVar( 0, "grid_checkbox" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_doc_no_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field1" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field1", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_date_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field2" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field2", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_location_id_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field3" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field3", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_doc_owner_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field4" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field4", new XVar( "cols", new XVar( 0, 5 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_status_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field5" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field5", new XVar( "cols", new XVar( 0, 6 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_images_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field6" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_field6", new XVar( "cols", new XVar( 0, 7 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "t_register_note_fieldcolumn" ),
"items", new XVar( 0, "simple_grid_field7" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_checkbox", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field1", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field2", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field3", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field4", new XVar( "cols", new XVar( 0, 5 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field5", new XVar( "cols", new XVar( 0, 6 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"footcell_field6", new XVar( "cols", new XVar( 0, 7 ),
"rows", new XVar( 0, 2 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ) ),
"width", 8,
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
"items", new XVar( 0, "add" ) ),
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
"cells", new XVar( 0, new XVar( "cell", "headcell_checkbox" ),
1, new XVar( "cell", "headcell_field" ),
2, new XVar( "cell", "headcell_field1" ),
3, new XVar( "cell", "headcell_field2" ),
4, new XVar( "cell", "headcell_field3" ),
5, new XVar( "cell", "headcell_field4" ),
6, new XVar( "cell", "headcell_field5" ),
7, new XVar( "cell", "headcell_field6" ) ) ),
1, new XVar( "section", "body",
"cells", new XVar( 0, new XVar( "cell", "cell_checkbox" ),
1, new XVar( "cell", "cell_field" ),
2, new XVar( "cell", "cell_field1" ),
3, new XVar( "cell", "cell_field2" ),
4, new XVar( "cell", "cell_field3" ),
5, new XVar( "cell", "cell_field4" ),
6, new XVar( "cell", "cell_field5" ),
7, new XVar( "cell", "cell_field6" ) ) ),
2, new XVar( "section", "foot",
"cells", new XVar( 0, new XVar( "cell", "footcell_checkbox" ),
1, new XVar( "cell", "footcell_field" ),
2, new XVar( "cell", "footcell_field1" ),
3, new XVar( "cell", "footcell_field2" ),
4, new XVar( "cell", "footcell_field3" ),
5, new XVar( "cell", "footcell_field4" ),
6, new XVar( "cell", "footcell_field5" ),
7, new XVar( "cell", "footcell_field6" ) ) ) ),
"cells", new XVar( "headcell_field", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field" ),
"field", "t_register_doc_no",
"columnName", "field" ),
"cell_field", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field1" ),
"field", "t_register_doc_no",
"columnName", "field" ),
"footcell_field", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field1", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field8" ),
"field", "t_register_date",
"columnName", "field" ),
"cell_field1", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field2" ),
"field", "t_register_date",
"columnName", "field" ),
"footcell_field1", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field2", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field9" ),
"field", "t_register_location_id",
"columnName", "field" ),
"cell_field2", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field3" ),
"field", "t_register_location_id",
"columnName", "field" ),
"footcell_field2", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field3", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field10" ),
"field", "t_register_doc_owner",
"columnName", "field" ),
"cell_field3", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field4" ),
"field", "t_register_doc_owner",
"columnName", "field" ),
"footcell_field3", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field4", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field11" ),
"field", "t_register_status",
"columnName", "field" ),
"cell_field4", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field5" ),
"field", "t_register_status",
"columnName", "field" ),
"footcell_field4", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field5", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field12" ),
"field", "t_register_images",
"columnName", "field" ),
"cell_field5", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field6" ),
"field", "t_register_images",
"columnName", "field" ),
"footcell_field5", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_field6", new XVar( "model", "headcell_field",
"items", new XVar( 0, "simple_grid_field13" ),
"field", "t_register_note",
"columnName", "field" ),
"cell_field6", new XVar( "model", "cell_field",
"items", new XVar( 0, "simple_grid_field7" ),
"field", "t_register_note",
"columnName", "field" ),
"footcell_field6", new XVar( "model", "footcell_field",
"items", XVar.Array() ),
"headcell_checkbox", new XVar( "model", "headcell_checkbox",
"items", new XVar( 0, "grid_checkbox_head" ) ),
"cell_checkbox", new XVar( "model", "cell_checkbox",
"items", new XVar( 0, "grid_checkbox" ) ),
"footcell_checkbox", new XVar( "model", "footcell_checkbox",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ) ),
"items", new XVar( "details_found", new XVar( "type", "details_found" ),
"page_size", new XVar( "type", "page_size" ),
"print_panel", new XVar( "type", "print_panel",
"items", new XVar( 0, "print_scope",
1, "print_records",
2, "print_button" ) ),
"print_scope", new XVar( "type", "print_scope" ),
"print_records", new XVar( "type", "print_records" ),
"print_button", new XVar( "type", "print_button" ),
"pagination", new XVar( "type", "pagination" ),
"search_panel_field7", new XVar( "field", "t_register_note",
"type", "search_panel_field",
"required", false ),
"search_panel_field5", new XVar( "field", "t_register_status",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field4", new XVar( "field", "t_register_doc_owner",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field3", new XVar( "field", "t_register_location_id",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field2", new XVar( "field", "t_register_date",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"search_panel_field1", new XVar( "field", "t_register_doc_no",
"type", "search_panel_field",
"required", false,
"alwaysOnPanel", false ),
"advsearch_link", new XVar( "type", "advsearch_link" ),
"show_search_panel", new XVar( "type", "show_search_panel" ),
"hide_search_panel", new XVar( "type", "hide_search_panel" ),
"-2", new XVar( "type", "-" ),
"export", new XVar( "type", "export" ),
"-1", new XVar( "type", "-" ),
"import", new XVar( "type", "import" ),
"userinfo_link", new XVar( "type", "userinfo_link" ),
"logout_link", new XVar( "type", "logout_link" ),
"adminarea_link", new XVar( "type", "adminarea_link" ),
"changepassword_link", new XVar( "type", "changepassword_link" ),
"breadcrumb", new XVar( "type", "breadcrumb" ),
"logo", new XVar( "type", "logo" ),
"menu", new XVar( "type", "menu" ),
"simple_search", new XVar( "type", "simple_search" ),
"search_panel", new XVar( "type", "search_panel",
"items", new XVar( 0, "search_panel_field7",
1, "search_panel_field5",
2, "search_panel_field4",
3, "search_panel_field3",
4, "search_panel_field2",
5, "search_panel_field1" ) ),
"list_options", new XVar( "type", "list_options",
"items", new XVar( 0, "advsearch_link",
1, "show_search_panel",
2, "hide_search_panel",
3, "-2",
4, "-",
5, "-3",
6, "export",
7, "-1",
8, "import" ) ),
"username_button", new XVar( "type", "username_button",
"items", new XVar( 0, "userinfo_link",
1, "logout_link",
2, "adminarea_link",
3, "changepassword_link" ) ),
"loginform_login", new XVar( "type", "loginform_login",
"popup", false ),
"notifications", new XVar( "type", "notifications" ),
"-", new XVar( "type", "-" ),
"-3", new XVar( "type", "-" ),
"add", new XVar( "type", "add" ),
"simple_grid_field1", new XVar( "field", "t_register_doc_no",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field", new XVar( "type", "grid_field_label",
"field", "t_register_doc_no" ),
"simple_grid_field2", new XVar( "field", "t_register_date",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field8", new XVar( "type", "grid_field_label",
"field", "t_register_date" ),
"simple_grid_field3", new XVar( "field", "t_register_location_id",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field9", new XVar( "type", "grid_field_label",
"field", "t_register_location_id" ),
"simple_grid_field4", new XVar( "field", "t_register_doc_owner",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field10", new XVar( "type", "grid_field_label",
"field", "t_register_doc_owner" ),
"simple_grid_field5", new XVar( "field", "t_register_status",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field11", new XVar( "type", "grid_field_label",
"field", "t_register_status" ),
"simple_grid_field6", new XVar( "field", "t_register_images",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field12", new XVar( "type", "grid_field_label",
"field", "t_register_images" ),
"simple_grid_field7", new XVar( "field", "t_register_note",
"type", "grid_field",
"inlineAdd", false,
"inlineEdit", false ),
"simple_grid_field13", new XVar( "type", "grid_field_label",
"field", "t_register_note" ),
"grid_checkbox", new XVar( "type", "grid_checkbox" ),
"grid_checkbox_head", new XVar( "type", "grid_checkbox_head" ) ),
"dbProps", new XVar(  ),
"spreadsheetGrid", false,
"version", 11,
"pageWidth", "full",
"reorderRows", false,
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}