
		// <global>
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
			public static partial class Options____global____admin_admembers_list
			{
				static public XVar options()
				{
					return new XVar( "fields", new XVar( "gridFields", XVar.Array(),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", XVar.Array(),
"fieldItems", new XVar(  ) ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", new XVar( 0, "simple_search",
1, "admembers_add" ),
"below-grid", new XVar( 0, "pagination" ),
"top", XVar.Array(),
"grid", new XVar( 0, "admembers_header_checkbox",
1, "admembers_username_label",
2, "admembers_displayname_label",
3, "admembers_category_label",
4, "admembers_email_label",
5, "admembers_addlink",
6, "admembers_checkbox",
7, "admembers_username",
8, "admembers_displayname",
9, "admembers_category",
10, "admembers_email" ) ),
"formXtTags", new XVar( "below-grid", new XVar( 0, "pagination" ),
"top", XVar.Array() ),
"itemForms", new XVar( "simple_search", "above-grid",
"admembers_add", "above-grid",
"pagination", "below-grid",
"admembers_header_checkbox", "grid",
"admembers_username_label", "grid",
"admembers_displayname_label", "grid",
"admembers_category_label", "grid",
"admembers_email_label", "grid",
"admembers_addlink", "grid",
"admembers_checkbox", "grid",
"admembers_username", "grid",
"admembers_displayname", "grid",
"admembers_category", "grid",
"admembers_email", "grid" ),
"itemLocations", new XVar( "admembers_header_checkbox", new XVar( "location", "grid",
"cellId", "hcell_cb" ),
"admembers_username_label", new XVar( "location", "grid",
"cellId", "hcell_un" ),
"admembers_displayname_label", new XVar( "location", "grid",
"cellId", "hcell_dn" ),
"admembers_category_label", new XVar( "location", "grid",
"cellId", "hcell_category" ),
"admembers_email_label", new XVar( "location", "grid",
"cellId", "hcell_email" ),
"admembers_addlink", new XVar( "location", "grid",
"cellId", "cell_addLink" ),
"admembers_checkbox", new XVar( "location", "grid",
"cellId", "cell_cb" ),
"admembers_username", new XVar( "location", "grid",
"cellId", "cell_un" ),
"admembers_displayname", new XVar( "location", "grid",
"cellId", "cell_dn" ),
"admembers_category", new XVar( "location", "grid",
"cellId", "cell_category" ),
"admembers_email", new XVar( "location", "grid",
"cellId", "cell_email" ) ),
"itemVisiblity", new XVar( "simple_search", 3 ) ),
"itemsByType", new XVar( "admembers_header_checkbox", new XVar( 0, "admembers_header_checkbox" ),
"admembers_username_label", new XVar( 0, "admembers_username_label" ),
"admembers_displayname_label", new XVar( 0, "admembers_displayname_label" ),
"admembers_category_label", new XVar( 0, "admembers_category_label" ),
"admembers_email_label", new XVar( 0, "admembers_email_label" ),
"admembers_addlink", new XVar( 0, "admembers_addlink" ),
"admembers_checkbox", new XVar( 0, "admembers_checkbox" ),
"admembers_username", new XVar( 0, "admembers_username" ),
"admembers_displayname", new XVar( 0, "admembers_displayname" ),
"admembers_category", new XVar( 0, "admembers_category" ),
"admembers_email", new XVar( 0, "admembers_email" ),
"admembers_add", new XVar( 0, "admembers_add" ),
"simple_search", new XVar( 0, "simple_search" ),
"pagination", new XVar( 0, "pagination" ) ),
"cellMaps", new XVar( "grid", new XVar( "cells", new XVar( "hcell_addLink", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", XVar.Array(),
"fixedAtServer", false,
"fixedAtClient", false ),
"hcell_cb", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_header_checkbox" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"hcell_un", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_username_label" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"hcell_dn", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_displayname_label" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"hcell_category", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_category_label" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"hcell_email", new XVar( "cols", new XVar( 0, 5 ),
"rows", new XVar( 0, 0 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_email_label" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"cell_addLink", new XVar( "cols", new XVar( 0, 0 ),
"rows", new XVar( 0, 1 ),
"tags", new XVar( 0, "add_link" ),
"items", new XVar( 0, "admembers_addlink" ),
"fixedAtServer", false,
"fixedAtClient", false ),
"cell_cb", new XVar( "cols", new XVar( 0, 1 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_checkbox" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"cell_un", new XVar( "cols", new XVar( 0, 2 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_username" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"cell_dn", new XVar( "cols", new XVar( 0, 3 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_displayname" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"cell_category", new XVar( "cols", new XVar( 0, 4 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_category" ),
"fixedAtServer", true,
"fixedAtClient", false ),
"cell_email", new XVar( "cols", new XVar( 0, 5 ),
"rows", new XVar( 0, 1 ),
"tags", XVar.Array(),
"items", new XVar( 0, "admembers_email" ),
"fixedAtServer", true,
"fixedAtClient", false ) ),
"width", 6,
"height", 2 ) ) ),
"page", new XVar( "verticalBar", false,
"labeledButtons", new XVar( "update_records", new XVar(  ),
"print_pages", new XVar(  ),
"register_activate_message", new XVar(  ),
"details_found", new XVar(  ) ),
"hasCustomButtons", false,
"customButtons", XVar.Array(),
"hasNotifications", false ),
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ),
"adGroups", new XVar(  ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "admin_admembers_list",
"type", "admin_admembers_list",
"layoutId", "topbar",
"disabled", 0,
"default", 0,
"forms", new XVar( "above-grid", new XVar( "modelId", "admin-admembers-above-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "simple_search",
1, "admembers_add" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"below-grid", new XVar( "modelId", "list-below-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "pagination" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"top", new XVar( "modelId", "admin-header",
"grid", XVar.Array(),
"cells", new XVar(  ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"grid", new XVar( "modelId", "admin-admembers-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "hcell_addLink" ),
1, new XVar( "cell", "hcell_cb" ),
2, new XVar( "cell", "hcell_un" ),
3, new XVar( "cell", "hcell_dn" ),
4, new XVar( "cell", "hcell_category" ),
5, new XVar( "cell", "hcell_email" ) ),
"section", "head" ),
1, new XVar( "cells", new XVar( 0, new XVar( "cell", "cell_addLink" ),
1, new XVar( "cell", "cell_cb" ),
2, new XVar( "cell", "cell_un" ),
3, new XVar( "cell", "cell_dn" ),
4, new XVar( "cell", "cell_category" ),
5, new XVar( "cell", "cell_email" ) ),
"section", "body" ) ),
"cells", new XVar( "hcell_addLink", new XVar( "model", "hcell_addLink",
"items", XVar.Array() ),
"hcell_cb", new XVar( "model", "hcell_cb",
"items", new XVar( 0, "admembers_header_checkbox" ) ),
"hcell_un", new XVar( "model", "hcell_un",
"items", new XVar( 0, "admembers_username_label" ) ),
"hcell_dn", new XVar( "model", "hcell_dn",
"items", new XVar( 0, "admembers_displayname_label" ) ),
"hcell_category", new XVar( "model", "hcell_category",
"items", new XVar( 0, "admembers_category_label" ) ),
"hcell_email", new XVar( "model", "hcell_email",
"items", new XVar( 0, "admembers_email_label" ) ),
"cell_addLink", new XVar( "model", "cell_addLink",
"items", new XVar( 0, "admembers_addlink" ) ),
"cell_cb", new XVar( "model", "cell_cb",
"items", new XVar( 0, "admembers_checkbox" ) ),
"cell_un", new XVar( "model", "cell_un",
"items", new XVar( 0, "admembers_username" ) ),
"cell_dn", new XVar( "model", "cell_dn",
"items", new XVar( 0, "admembers_displayname" ) ),
"cell_category", new XVar( "model", "cell_category",
"items", new XVar( 0, "admembers_category" ) ),
"cell_email", new XVar( "model", "cell_email",
"items", new XVar( 0, "admembers_email" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ) ),
"items", new XVar( "admembers_header_checkbox", new XVar( "type", "admembers_header_checkbox" ),
"admembers_username_label", new XVar( "type", "admembers_username_label" ),
"admembers_displayname_label", new XVar( "type", "admembers_displayname_label" ),
"admembers_category_label", new XVar( "type", "admembers_category_label" ),
"admembers_email_label", new XVar( "type", "admembers_email_label" ),
"admembers_addlink", new XVar( "type", "admembers_addlink" ),
"admembers_checkbox", new XVar( "type", "admembers_checkbox" ),
"admembers_username", new XVar( "type", "admembers_username" ),
"admembers_displayname", new XVar( "type", "admembers_displayname" ),
"admembers_category", new XVar( "type", "admembers_category" ),
"admembers_email", new XVar( "type", "admembers_email" ),
"admembers_add", new XVar( "type", "admembers_add" ),
"simple_search", new XVar( "type", "simple_search" ),
"pagination", new XVar( "type", "pagination" ) ),
"dbProps", new XVar(  ),
"version", 11,
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}