
		// v1
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
			public static partial class Options_v1_dashboard
			{
				static public XVar options()
				{
					return new XVar( "fields", new XVar( "gridFields", XVar.Array(),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", XVar.Array(),
"fieldItems", new XVar(  ) ),
"pageLinks", new XVar( "edit", false,
"add", false,
"view", false,
"print", false ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "grid", XVar.Array(),
"supertop", new XVar( 0, "logo",
1, "menu",
2, "simple_search",
3, "notifications",
4, "loginform_login",
5, "username_button" ),
"top", new XVar( 0, "breadcrumb" ) ),
"formXtTags", new XVar( "grid", XVar.Array(),
"top", new XVar( 0, "breadcrumb" ) ),
"itemForms", new XVar( "logo", "supertop",
"menu", "supertop",
"simple_search", "supertop",
"notifications", "supertop",
"loginform_login", "supertop",
"username_button", "supertop",
"breadcrumb", "top" ),
"itemLocations", new XVar(  ),
"itemVisiblity", new XVar( "menu", 3,
"simple_search", 3,
"username_button", 3,
"loginform_login", 3 ) ),
"itemsByType", new XVar( "userinfo_link", new XVar( 0, "userinfo_link" ),
"logout_link", new XVar( 0, "logout_link" ),
"adminarea_link", new XVar( 0, "adminarea_link" ),
"changepassword_link", new XVar( 0, "changepassword_link" ),
"breadcrumb", new XVar( 0, "breadcrumb" ),
"logo", new XVar( 0, "logo" ),
"menu", new XVar( 0, "menu" ),
"simple_search", new XVar( 0, "simple_search" ),
"username_button", new XVar( 0, "username_button" ),
"notifications", new XVar( 0, "notifications" ),
"loginform_login", new XVar( 0, "loginform_login" ) ),
"cellMaps", new XVar(  ) ),
"loginForm", new XVar( "loginForm", 0 ),
"page", new XVar( "verticalBar", false,
"labeledButtons", new XVar( "update_records", new XVar(  ),
"print_pages", new XVar(  ),
"register_activate_message", new XVar(  ),
"details_found", new XVar(  ) ),
"hasCustomButtons", false,
"customButtons", XVar.Array(),
"hasNotifications", true ),
"misc", new XVar( "type", "dashboard",
"breadcrumb", true ),
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ),
"dashboard", new XVar( "elements", XVar.Array() ),
"dashSearch", new XVar( "searchFields", new XVar(  ),
"allSearchFields", XVar.Array(),
"googleLikeFields", XVar.Array() ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "dashboard",
"type", "dashboard",
"layoutId", "topbar",
"disabled", 0,
"default", 0,
"forms", new XVar( "grid", new XVar( "modelId", "dashboard-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c" ) ),
"section", "" ),
1, new XVar( "section", "",
"cells", new XVar( 0, new XVar( "cell", "c2" ),
1, new XVar( "cell", "c3" ) ) ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", XVar.Array() ),
"c", new XVar( "model", "c1",
"items", XVar.Array() ),
"c2", new XVar( "model", "c1",
"items", XVar.Array() ),
"c3", new XVar( "model", "c1",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"supertop", new XVar( "modelId", "topbar-dashboard",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "logo",
1, "menu" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "simple_search",
1, "notifications",
2, "loginform_login",
3, "username_button" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"top", new XVar( "modelId", "dashboard-top",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "breadcrumb" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ) ),
"items", new XVar( "userinfo_link", new XVar( "type", "userinfo_link" ),
"logout_link", new XVar( "type", "logout_link" ),
"adminarea_link", new XVar( "type", "adminarea_link" ),
"changepassword_link", new XVar( "type", "changepassword_link" ),
"breadcrumb", new XVar( "type", "breadcrumb" ),
"logo", new XVar( "type", "logo" ),
"menu", new XVar( "type", "menu" ),
"simple_search", new XVar( "type", "simple_search" ),
"username_button", new XVar( "type", "username_button",
"items", new XVar( 0, "userinfo_link",
1, "logout_link",
2, "adminarea_link",
3, "changepassword_link" ) ),
"notifications", new XVar( "type", "notifications" ),
"loginform_login", new XVar( "type", "loginform_login" ) ),
"dbProps", new XVar(  ),
"version", 11,
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right" );
				}
			}
		}