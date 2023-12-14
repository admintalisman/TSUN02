
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
			public static partial class Options____global____menu
			{
				static public XVar options()
				{
					return new XVar( "welcome", new XVar( "welcomePageSkip", false,
"welcomeItems", new XVar( "logo", new XVar( "menutItem", false ),
"menu", new XVar( "menutItem", false ),
"notifications", new XVar( "menutItem", false ),
"loginform_login", new XVar( "menutItem", false ),
"username_button", new XVar( "menutItem", false ) ) ),
"fields", new XVar( "gridFields", XVar.Array(),
"searchRequiredFields", XVar.Array(),
"searchPanelFields", XVar.Array(),
"fieldItems", new XVar(  ) ),
"layoutHelper", new XVar( "formItems", new XVar( "formItems", new XVar( "above-grid", XVar.Array(),
"supertop", new XVar( 0, "logo",
1, "menu",
2, "notifications",
3, "loginform_login",
4, "username_button" ),
"grid", XVar.Array() ),
"formXtTags", new XVar( "above-grid", XVar.Array(),
"grid", XVar.Array() ),
"itemForms", new XVar( "logo", "supertop",
"menu", "supertop",
"notifications", "supertop",
"loginform_login", "supertop",
"username_button", "supertop" ),
"itemLocations", new XVar(  ),
"itemVisiblity", new XVar( "menu", 3,
"username_button", 3,
"loginform_login", 3 ) ),
"itemsByType", new XVar( "logo", new XVar( 0, "logo" ),
"menu", new XVar( 0, "menu" ),
"notifications", new XVar( 0, "notifications" ),
"username_button", new XVar( 0, "username_button" ),
"loginform_login", new XVar( 0, "loginform_login" ),
"userinfo_link", new XVar( 0, "userinfo_link" ),
"logout_link", new XVar( 0, "logout_link" ),
"changepassword_link", new XVar( 0, "changepassword_link" ),
"adminarea_link", new XVar( 0, "adminarea_link" ) ),
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
"events", new XVar( "maps", XVar.Array(),
"mapsData", new XVar(  ),
"buttons", XVar.Array() ) );
				}
				static public XVar page()
				{
					return new XVar( "id", "menu",
"type", "menu",
"layoutId", "topbar",
"disabled", 0,
"default", 0,
"forms", new XVar( "above-grid", new XVar( "modelId", "empty-above-grid",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"supertop", new XVar( "modelId", "menu-topbar-menu",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ),
1, new XVar( "cell", "c2" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", new XVar( 0, "logo",
1, "menu" ) ),
"c2", new XVar( "model", "c2",
"items", new XVar( 0, "notifications",
1, "loginform_login",
2, "username_button" ) ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ),
"grid", new XVar( "modelId", "welcome",
"grid", new XVar( 0, new XVar( "cells", new XVar( 0, new XVar( "cell", "c1" ) ),
"section", "" ) ),
"cells", new XVar( "c1", new XVar( "model", "c1",
"items", XVar.Array() ) ),
"deferredItems", XVar.Array(),
"recsPerRow", 1 ) ),
"items", new XVar( "logo", new XVar( "type", "logo" ),
"menu", new XVar( "type", "menu" ),
"notifications", new XVar( "type", "notifications" ),
"username_button", new XVar( "type", "username_button",
"items", new XVar( 0, "userinfo_link",
1, "logout_link",
2, "adminarea_link",
3, "changepassword_link" ) ),
"loginform_login", new XVar( "type", "loginform_login",
"popup", false ),
"userinfo_link", new XVar( "type", "userinfo_link" ),
"logout_link", new XVar( "type", "logout_link" ),
"changepassword_link", new XVar( "type", "changepassword_link" ),
"adminarea_link", new XVar( "type", "adminarea_link" ) ),
"dbProps", new XVar(  ),
"version", 11,
"imageItem", new XVar( "type", "page_image" ),
"imageBgColor", "#f2f2f2",
"controlsBgColor", "white",
"imagePosition", "right",
"welcomePageStay", true );
				}
			}
		}