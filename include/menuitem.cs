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
	public partial class MenuItem : XClass
	{
		public dynamic depth;
		public dynamic id;
		public dynamic href;
		public dynamic var_params;
		public dynamic var_type;
		public dynamic name;
		public dynamic nameType;
		public dynamic style;
		public dynamic table;
		public dynamic linkType;
		public dynamic pageType;
		public dynamic pageId = XVar.Pack("");
		public dynamic showAsLink;
		public dynamic showAsGroup;
		public dynamic title;
		public dynamic openType;
		public dynamic children = XVar.Array();
		public dynamic parentItem = XVar.Pack(null);
		public dynamic pageName = XVar.Pack("");
		public dynamic menuTableMap;
		public dynamic pageObject;
		public dynamic currentItem = XVar.Pack(false);
		public dynamic menuId = XVar.Pack("");
		public dynamic menuMode = XVar.Pack("");
		public dynamic comments;
		public dynamic icon;
		public dynamic iconType;
		public dynamic iconShow;
		public dynamic color;
		public MenuItem(dynamic menuItemInfo, dynamic menuNodes, dynamic menuParent, dynamic menuTableMap, dynamic _param_pageObject, dynamic _param_menuId, dynamic _param_menuMode)
		{
			#region pass-by-value parameters
			dynamic pageObject = XVar.Clone(_param_pageObject);
			dynamic menuId = XVar.Clone(_param_menuId);
			dynamic menuMode = XVar.Clone(_param_menuMode);
			#endregion

			this.pageObject = XVar.Clone(pageObject);
			this.menuId = XVar.Clone(menuId);
			this.menuMode = XVar.Clone(menuMode);
			this.menuTableMap = menuTableMap;
			if(menuItemInfo["id"] == 0)
			{
				this.depth = new XVar(0);
			}
			else
			{
				this.depth = XVar.Clone(menuParent.depth + 1);
			}
			this.id = XVar.Clone(menuItemInfo["id"]);
			this.name = XVar.Clone(menuItemInfo["name"]);
			this.var_type = XVar.Clone(menuItemInfo["type"]);
			this.href = XVar.Clone(menuItemInfo["href"]);
			this.title = XVar.Clone(menuItemInfo["title"]);
			this.comments = XVar.Clone(menuItemInfo["comments"]);
			this.color = XVar.Clone(menuItemInfo["color"]);
			this.style = XVar.Clone(menuItemInfo["style"]);
			this.table = XVar.Clone(menuItemInfo["table"]);
			this.var_params = XVar.Clone(menuItemInfo["params"]);
			this.linkType = XVar.Clone(menuItemInfo["linkType"]);
			this.nameType = XVar.Clone(menuItemInfo["nameType"]);
			this.pageType = XVar.Clone(menuItemInfo["pageType"]);
			this.pageId = XVar.Clone(menuItemInfo["pageId"]);
			this.openType = XVar.Clone(menuItemInfo["openType"]);
			this.icon = XVar.Clone(menuItemInfo["icon"]);
			this.iconType = XVar.Clone(menuItemInfo["iconType"]);
			this.iconShow = XVar.Clone(menuItemInfo["iconShow"]);
			this.showAsLink = XVar.Clone(this.checkLinkShowStatus());
			this.buildTreeMenuStructure((XVar)(menuNodes));
			if((XVar)(this.var_type != "Separator")  && (XVar)(this.table))
			{
				dynamic pageType = null;
				pageType = XVar.Clone(MVCFunctions.strtolower((XVar)(this.pageType)));
				if(XVar.Pack(!(XVar)(this.menuTableMap.KeyExists(this.table))))
				{
					this.menuTableMap.InitAndSetArrayItem(XVar.Array(), this.table);
				}
				this.menuTableMap[this.table][pageType]++;
			}
			this.showAsGroup = XVar.Clone(this.checkGroupShowStatus());
		}
		public virtual XVar AddChild(dynamic child)
		{
			dynamic res = null;
			res = new XVar(true);
			if(XVar.Pack(GlobalVars.globalEvents.exists(new XVar("ModifyMenuItem"))))
			{
				res = XVar.Clone(GlobalVars.globalEvents.ModifyMenuItem((XVar)(child)));
			}
			if(XVar.Pack(res))
			{
				this.children.InitAndSetArrayItem(child, null);
				child.parentItem = XVar.Clone(this);
			}
			return null;
		}
		public virtual XVar setUrl(dynamic _param_href)
		{
			#region pass-by-value parameters
			dynamic href = XVar.Clone(_param_href);
			#endregion

			this.href = XVar.Clone(href);
			if(this.linkType == "Internal")
			{
				this.linkType = new XVar("External");
			}
			return null;
		}
		public virtual XVar getUrl()
		{
			return this.href;
		}
		public virtual XVar setParams(dynamic _param_params)
		{
			#region pass-by-value parameters
			dynamic var_params = XVar.Clone(_param_params);
			#endregion

			this.var_params = XVar.Clone(var_params);
			return null;
		}
		public virtual XVar getParams()
		{
			return this.var_params;
		}
		public virtual XVar setTitle(dynamic _param_title)
		{
			#region pass-by-value parameters
			dynamic title = XVar.Clone(_param_title);
			#endregion

			this.title = XVar.Clone(title);
			return null;
		}
		public virtual XVar getTitle()
		{
			return this.title;
		}
		public virtual XVar setTable(dynamic _param_table)
		{
			#region pass-by-value parameters
			dynamic table = XVar.Clone(_param_table);
			#endregion

			this.table = XVar.Clone(table);
			return null;
		}
		public virtual XVar getTable()
		{
			return this.table;
		}
		public virtual XVar setPageType(dynamic _param_pType)
		{
			#region pass-by-value parameters
			dynamic pType = XVar.Clone(_param_pType);
			#endregion

			this.pageType = XVar.Clone(pType);
			return null;
		}
		public virtual XVar getPageType()
		{
			return this.pageType;
		}
		public virtual XVar getLinkType()
		{
			return this.linkType;
		}
		public virtual XVar buildTreeMenuStructure(dynamic menuNodes)
		{
			dynamic i = null;
			while(GlobalVars.menuNodesIndex < MVCFunctions.count(menuNodes))
			{
				i = XVar.Clone(GlobalVars.menuNodesIndex);
				if(menuNodes[i]["parent"] != this.id)
				{
					break;
				}
				++(GlobalVars.menuNodesIndex);
				this.AddChild((XVar)(new MenuItem((XVar)(menuNodes[i]), (XVar)(menuNodes), this, (XVar)(this.menuTableMap), (XVar)(this.pageObject), (XVar)(this.menuId), (XVar)(this.menuMode))));
			}
			return null;
		}
		public virtual XVar checkLinkShowStatus()
		{
			if((XVar)(this.linkType == "External")  && (XVar)(0 < MVCFunctions.strlen((XVar)(this.href))))
			{
				return true;
			}
			if(this.linkType == "Separator")
			{
				return true;
			}
			if((XVar)(this.linkType == "Internal")  && (XVar)(this.linkAvailable()))
			{
				return true;
			}
			return false;
		}
		public virtual XVar isUserHaveTablePerm()
		{
			return this.pageObject.isUserHaveTablePerm((XVar)(this.table), (XVar)(this.pageType));
		}
		public virtual XVar linkAvailable()
		{
			return CommonFunctions.menuLinkAvailable((XVar)(this.table), (XVar)(this.pageType), (XVar)(this.pageId));
		}
		public virtual XVar checkGroupShowStatus()
		{
			dynamic i = null;
			if(XVar.Pack(!(XVar)(this.isGroup())))
			{
				return false;
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				if(XVar.Pack(this.children[i].checkGroupShowStatus()))
				{
					return true;
				}
				else
				{
					if((XVar)(this.children[i].isShowAsLink())  && (XVar)(!(XVar)(this.children[i].isSeparator())))
					{
						return true;
					}
				}
			}
			return false;
		}
		public virtual XVar isShowAsGroup()
		{
			return this.showAsGroup;
		}
		public virtual XVar isShowAsLink()
		{
			return this.showAsLink;
		}
		public virtual XVar isGroup()
		{
			return this.var_type == "Group";
		}
		public virtual XVar isSeparator()
		{
			return this.var_type == "Separator";
		}
		public virtual XVar makeOffset(dynamic _param_depth)
		{
			#region pass-by-value parameters
			dynamic depth = XVar.Clone(_param_depth);
			#endregion

			dynamic i = null, nbsps = null;
			nbsps = new XVar("");
			i = new XVar(0);
			for(;i < depth; i++)
			{
				nbsps = MVCFunctions.Concat(nbsps, "&nbsp;&nbsp;");
			}
			return nbsps;
		}
		public virtual XVar getIconHTML()
		{
			if((XVar)(!(XVar)(this.isBootstrap()))  || (XVar)(!(XVar)(this.icon)))
			{
				return "";
			}
			if(this.iconType == Constants.ICON_BOOTSTRAP_GLYPH)
			{
				return MVCFunctions.Concat("<span class=\"menu-icon glyphicon ", this.icon, "\"></span>");
			}
			else
			{
				if(this.iconType == Constants.ICON_FONT_AWESOME)
				{
					return MVCFunctions.Concat("<span class=\"menu-icon fa ", this.icon, "\"></span>");
				}
				else
				{
					if(this.iconType == Constants.ICON_FILE)
					{
						return MVCFunctions.Concat("<img class=\"menu-icon\" src=\"", MVCFunctions.GetRootPathForResources((XVar)(MVCFunctions.Concat("images/menuicons/", this.icon))), "\">");
					}
				}
			}
			return null;
		}
		public virtual XVar prepareWelcomeMenuItem(dynamic xt_packed)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			if(XVar.Pack(!(XVar)(this.isWelcome())))
			{
				return null;
			}
			if(this.color != "")
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_menulink_style")), (XVar)(MVCFunctions.Concat("style=\"background-color:", this.color, "\"")));
			}
			if(XVar.Pack(MVCFunctions.strlen((XVar)(this.comments))))
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_comments")), new XVar(true));
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_comments_text")), (XVar)(this.comments));
			}
			return null;
		}
		public virtual XVar assignMenuAttrsToTempl(dynamic xt_packed, dynamic _param_visibleElementIds = null)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			#region default values
			if(_param_visibleElementIds as Object == null) _param_visibleElementIds = new XVar(XVar.Array());
			#endregion

			#region pass-by-value parameters
			dynamic visibleElementIds = XVar.Clone(_param_visibleElementIds);
			#endregion

			dynamic displayElement = null, i = null, showSubmenu = null;
			this.prepareWelcomeMenuItem((XVar)(xt));
			if(XVar.Pack(this.isSeparator()))
			{
				if(this.name == "-------")
				{
					xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_separator")), new XVar("<hr>"));
				}
				else
				{
					xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_separator")), (XVar)(MVCFunctions.Concat("<a class=\"rnr-menu-usrsep\" style=\"", this.style, "\">", this.name, "</a>")));
				}
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_optionattrs")), new XVar("disabled"));
			}
			if((XVar)((XVar)((XVar)(!(XVar)(this.isShowAsGroup()))  && (XVar)(!(XVar)(this.isShowAsLink())))  && (XVar)(!(XVar)(this.isSeparator())))  && (XVar)(this.id != 0))
			{
				return null;
			}
			if(XVar.Pack(this.isShowAsGroup()))
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_groupimage")), new XVar(true));
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_groupclass")), new XVar("group"));
			}
			displayElement = new XVar(true);
			showSubmenu = new XVar(true);
			if(XVar.Pack(visibleElementIds))
			{
				displayElement = XVar.Clone(visibleElementIds[this.id]);
				if(XVar.Pack(!(XVar)(this.parentItem)))
				{
					showSubmenu = new XVar(true);
				}
				else
				{
					showSubmenu = XVar.Clone(!(XVar)(visibleElementIds.KeyExists(this.parentItem.id)));
				}
			}
			if(XVar.Pack(displayElement))
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_menulink")), new XVar(true));
			}
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_nbsps")), (XVar)(this.makeOffset((XVar)(this.depth))));
			if((XVar)(this.isShowAsLink())  || (XVar)(this.isShowAsGroup()))
			{
				this.assignLinks((XVar)(xt), (XVar)(showSubmenu));
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				this.children[i].assignMenuAttrsToTempl((XVar)(xt), (XVar)(visibleElementIds));
			}
			return null;
		}
		public virtual XVar getFirstLinkedChild()
		{
			dynamic i = null, linkedChild = null;
			if(XVar.Pack(this.isShowAsLink()))
			{
				return this;
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				linkedChild = XVar.Clone(this.children[i].getFirstLinkedChild());
				if(XVar.Pack(linkedChild))
				{
					return linkedChild;
				}
			}
			return null;
		}
		public virtual XVar getCurrentItem(dynamic _param_menuItemId)
		{
			#region pass-by-value parameters
			dynamic menuItemId = XVar.Clone(_param_menuItemId);
			#endregion

			dynamic currentChild = null, i = null;
			if((XVar)((XVar)(this.pageObject.getPageType())  && (XVar)(this.pageObject.tName == this.table))  && (XVar)((XVar)(this.pageType == "AdminArea")  || (XVar)(this.id != 0)))
			{
				if(1 < this.menuTableMap[this.table][MVCFunctions.strtolower((XVar)(this.pageType))])
				{
					if((XVar)(!(XVar)(menuItemId))  || (XVar)(menuItemId == this.id))
					{
						this.currentItem = new XVar(true);
						return this;
					}
				}
				else
				{
					if(this.pageObject.getPageType() == MVCFunctions.strtolower((XVar)(this.pageType)))
					{
						this.currentItem = new XVar(true);
						return this;
					}
					else
					{
						if((XVar)(!(XVar)(this.isSetParentElem()))  && (XVar)(!(XVar)(this.isThisPageInMenu())))
						{
							this.currentItem = new XVar(true);
							return this;
						}
					}
				}
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				currentChild = XVar.Clone(this.children[i].getCurrentItem((XVar)(menuItemId)));
				if(XVar.Pack(currentChild))
				{
					return currentChild;
				}
			}
			return null;
		}
		public virtual XVar getItemByTypeAndTable(dynamic _param_tName, dynamic _param_pType)
		{
			#region pass-by-value parameters
			dynamic tName = XVar.Clone(_param_tName);
			dynamic pType = XVar.Clone(_param_pType);
			#endregion

			dynamic currentChild = null, i = null;
			if((XVar)((XVar)(pType)  && (XVar)(tName == this.table))  && (XVar)((XVar)(pType == "AdminArea")  || (XVar)(this.id != 0)))
			{
				if(1 < this.menuTableMap[this.table][MVCFunctions.strtolower((XVar)(this.pageType))])
				{
					this.currentItem = new XVar(true);
					return this;
				}
				else
				{
					if(pType == MVCFunctions.strtolower((XVar)(this.pageType)))
					{
						this.currentItem = new XVar(true);
						return this;
					}
					else
					{
						if((XVar)(!(XVar)(this.isSetParentElem()))  && (XVar)(!(XVar)(this.isThisPageInMenu())))
						{
							this.currentItem = new XVar(true);
							return this;
						}
					}
				}
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				currentChild = XVar.Clone(this.children[i].getItemByTypeAndTable((XVar)(tName), (XVar)(pType)));
				if(XVar.Pack(currentChild))
				{
					return currentChild;
				}
			}
			return null;
		}
		public virtual XVar setCurrMenuElem(dynamic xt_packed)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			dynamic i = null;
			if((XVar)(this.pageObject.tName == this.table)  && (XVar)((XVar)(this.pageType == "AdminArea")  || (XVar)(this.id != 0)))
			{
				if((XVar)(XSession.Session.KeyExists("menuItemId"))  && (XVar)(1 < this.menuTableMap[this.table][MVCFunctions.strtolower((XVar)(this.pageType))]))
				{
					if(XSession.Session["menuItemId"] == this.id)
					{
						this.setAsCurrMenuElem((XVar)(xt));
						return true;
					}
				}
				else
				{
					if(this.pageObject.getPageType() == MVCFunctions.strtolower((XVar)(this.pageType)))
					{
						this.setAsCurrMenuElem((XVar)(xt));
						return true;
					}
					else
					{
						if((XVar)(!(XVar)(this.isSetParentElem()))  && (XVar)(!(XVar)(this.isThisPageInMenu())))
						{
							this.setAsCurrMenuElem((XVar)(xt));
							return true;
						}
					}
				}
			}
			i = new XVar(0);
			for(;i < MVCFunctions.count(this.children); i++)
			{
				if(XVar.Pack(this.children[i].setCurrMenuElem((XVar)(xt))))
				{
					if(XVar.Pack(this.isBootstrap()))
					{
						xt.assign((XVar)(MVCFunctions.Concat("submenu", this.id, "_class")), new XVar("in"));
					}
					else
					{
						this.setAsCurrMenuElem((XVar)(xt));
					}
					return true;
				}
			}
			return false;
		}
		public virtual XVar setAsCurrMenuElem(dynamic xt_packed)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_current")), new XVar("current"));
			if(XVar.Pack(this.isBootstrap()))
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_current")), new XVar("active"));
			}
			return null;
		}
		public virtual XVar getMenuItemAttributes(dynamic _param_showSubmenu = null)
		{
			#region default values
			if(_param_showSubmenu as Object == null) _param_showSubmenu = new XVar(true);
			#endregion

			#region pass-by-value parameters
			dynamic showSubmenu = XVar.Clone(_param_showSubmenu);
			#endregion

			dynamic attrs = XVar.Array();
			attrs = XVar.Clone(XVar.Array());
			if((XVar)(this.isShowAsGroup())  && (XVar)(showSubmenu))
			{
				if(XVar.Pack(this.isTreelike()))
				{
					attrs.InitAndSetArrayItem("menu-collapse", "data-toggle");
					attrs.InitAndSetArrayItem(MVCFunctions.Concat("#submenu", this.id), "data-target");
				}
				else
				{
					attrs.InitAndSetArrayItem("nested-dropdown", "data-toggle");
					attrs.InitAndSetArrayItem("true", "aria-haspopup");
					attrs.InitAndSetArrayItem("false", "aria-expanded");
				}
			}
			attrs.InitAndSetArrayItem(MVCFunctions.Concat("itemlink", this.id), "id");
			attrs.InitAndSetArrayItem(this.title, "itemtitle");
			if(this.style != "")
			{
				attrs.InitAndSetArrayItem(this.style, "style");
			}
			if(this.openType == "NewWindow")
			{
				attrs.InitAndSetArrayItem("external", "rel");
				attrs.InitAndSetArrayItem("_blank", "target");
				attrs.InitAndSetArrayItem("External", "link");
			}
			if((XVar)(this.linkType == "Internal")  && (XVar)(this.pageType == "webreports"))
			{
				attrs.InitAndSetArrayItem(MVCFunctions.GetTableLink(new XVar("webreport")), "href");
				attrs.InitAndSetArrayItem(MVCFunctions.GetTableLink(new XVar("webreport")), "value");
			}
			else
			{
				if(this.linkType == "Internal")
				{
					dynamic getParams = null, var_params = XVar.Array();
					var_params = XVar.Clone(XVar.Array());
					if(this.pageId != "")
					{
						var_params.InitAndSetArrayItem(MVCFunctions.Concat("page=", this.pageId), null);
					}
					if(1 < this.menuTableMap[this.table][MVCFunctions.strtolower((XVar)(this.pageType))])
					{
						var_params.InitAndSetArrayItem(MVCFunctions.Concat("menuItemId=", this.id), null);
					}
					if(XVar.Pack(this.var_params))
					{
						var_params.InitAndSetArrayItem(this.var_params, null);
					}
					getParams = XVar.Clone(MVCFunctions.implode(new XVar("&"), (XVar)(var_params)));
					attrs.InitAndSetArrayItem(MVCFunctions.GetTableLink((XVar)(CommonFunctions.GetTableURL((XVar)(this.table))), (XVar)(MVCFunctions.strtolower((XVar)(this.pageType))), (XVar)(getParams)), "href");
					attrs.InitAndSetArrayItem(MVCFunctions.GetTableLink((XVar)(CommonFunctions.GetTableURL((XVar)(this.table))), (XVar)(MVCFunctions.strtolower((XVar)(this.pageType))), (XVar)(getParams)), "value");
				}
				else
				{
					if(this.linkType == "External")
					{
						attrs.InitAndSetArrayItem(this.href, "href");
						attrs.InitAndSetArrayItem(this.href, "value");
					}
				}
			}
			return attrs;
		}
		public virtual XVar assignLinks(dynamic xt_packed, dynamic _param_showSubmenu = null)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			#region default values
			if(_param_showSubmenu as Object == null) _param_showSubmenu = new XVar(true);
			#endregion

			#region pass-by-value parameters
			dynamic showSubmenu = XVar.Clone(_param_showSubmenu);
			#endregion

			dynamic arrowIcon = null, attrs = XVar.Array(), groupOnlyAttrs = XVar.Array(), groupOnlyMode = null, icon = null, link_attrs = null, option_attrs = null, title = null;
			title = XVar.Clone(this.title);
			arrowIcon = new XVar("glyphicon-triangle-right");
			if(XVar.Pack(CommonFunctions.isRTL()))
			{
				arrowIcon = new XVar("glyphicon-triangle-left");
			}
			if((XVar)((XVar)(this.isBootstrap())  && (XVar)(this.isShowAsGroup()))  && (XVar)(!(XVar)(this.isWelcome())))
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_expand_icon")), new XVar(true));
			}
			icon = XVar.Clone(this.getIconHTML());
			if(XVar.Pack(icon))
			{
				if(this.iconShow == 1)
				{
					xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_icon")), (XVar)(MVCFunctions.Concat(icon, " ")));
				}
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_collicon")), (XVar)(MVCFunctions.Concat(icon, " ")));
			}
			else
			{
				xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_firstcap")), (XVar)(MVCFunctions.substr((XVar)(MVCFunctions.trim((XVar)(this.title))), new XVar(0), new XVar(1))));
			}
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_tooltip")), (XVar)(MVCFunctions.runner_htmlspecialchars((XVar)(this.title))));
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_title")), (XVar)(title));
			attrs = XVar.Clone(this.getMenuItemAttributes((XVar)(showSubmenu)));
			groupOnlyAttrs = XVar.Clone(XVar.Array());
			groupOnlyAttrs.InitAndSetArrayItem(true, "id");
			groupOnlyAttrs.InitAndSetArrayItem(true, "title");
			groupOnlyAttrs.InitAndSetArrayItem(true, "style");
			groupOnlyAttrs.InitAndSetArrayItem(true, "class");
			groupOnlyAttrs.InitAndSetArrayItem(true, "data-toggle");
			groupOnlyAttrs.InitAndSetArrayItem(true, "data-target");
			groupOnlyAttrs.InitAndSetArrayItem(true, "aria-haspopup");
			groupOnlyAttrs.InitAndSetArrayItem(true, "aria-expanded");
			groupOnlyMode = XVar.Clone((XVar)(!(XVar)(this.isShowAsLink()))  && (XVar)(this.isShowAsGroup()));
			if((XVar)((XVar)(this.isBootstrap())  && (XVar)(groupOnlyMode))  && (XVar)(!(XVar)(this.isTreelike())))
			{
				dynamic childWithLink = null;
				childWithLink = XVar.Clone(this.getFirstChildWithLink());
				if(XVar.Pack(childWithLink))
				{
					dynamic linkChildAttrs = XVar.Array();
					groupOnlyAttrs.InitAndSetArrayItem(true, "href");
					linkChildAttrs = XVar.Clone(childWithLink.getMenuItemAttributes());
					attrs.InitAndSetArrayItem(linkChildAttrs["href"], "href");
				}
			}
			option_attrs = new XVar("");
			link_attrs = new XVar("");
			foreach (KeyValuePair<XVar, dynamic> value in attrs.GetEnumerator())
			{
				if((XVar)(groupOnlyMode)  && (XVar)(!(XVar)(groupOnlyAttrs[value.Key])))
				{
					continue;
				}
				if(XVar.Pack(!(XVar)(value.Value)))
				{
					continue;
				}
				if((XVar)(value.Key == "value")  || (XVar)(value.Key == "link"))
				{
					option_attrs = MVCFunctions.Concat(option_attrs, " ", value.Key, "=\"", value.Value, "\"");
				}
				else
				{
					link_attrs = MVCFunctions.Concat(link_attrs, " ", value.Key, "=\"", value.Value, "\"");
				}
			}
			if(XVar.Pack(groupOnlyMode))
			{
				option_attrs = new XVar("disabled");
			}
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_menulink_attrs")), (XVar)(link_attrs));
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_optionattrs")), (XVar)(option_attrs));
			return null;
		}
		public virtual XVar getFirstChildWithLink()
		{
			if(XVar.Pack(this.isShowAsLink()))
			{
				return this;
			}
			foreach (KeyValuePair<XVar, dynamic> child in this.children.GetEnumerator())
			{
				if(XVar.Pack(child.Value.isShowAsLink()))
				{
					return child.Value;
				}
			}
			foreach (KeyValuePair<XVar, dynamic> child in this.children.GetEnumerator())
			{
				dynamic childWithLink = null;
				childWithLink = XVar.Clone(child.Value.getFirstChildWithLink());
				if(XVar.Pack(childWithLink))
				{
					return childWithLink;
				}
			}
			return null;
		}
		public virtual XVar assignGroupOnly(dynamic xt_packed)
		{
			#region packeted values
			XTempl xt = XVar.UnPackXTempl(xt_packed);
			#endregion

			dynamic attrForAssign = null;
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_title")), (XVar)(this.title));
			attrForAssign = XVar.Clone(MVCFunctions.Concat(" id=\"itemlink", this.id, "\" itemtitle=\"", this.title, "\" ", (XVar.Pack(this.style) ? XVar.Pack(MVCFunctions.Concat(" style=\"cursor:default;text-decoration:none; ", this.style, "\"")) : XVar.Pack(""))));
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_menulink_attrs")), (XVar)(attrForAssign));
			xt.assign((XVar)(MVCFunctions.Concat("item", this.id, "_optionattrs")), new XVar("disabled"));
			return null;
		}
		public virtual XVar isSetParentElem()
		{
			dynamic pageTypes = null, pageTypesInLowCase = null;
			if(XVar.Pack(!(XVar)(this.menuTableMap.KeyExists(this.table))))
			{
				return false;
			}
			pageTypes = XVar.Clone(new XVar(0, "list", 1, "chart", 2, "report", 3, "search", 4, "add", 5, "print"));
			pageTypesInLowCase = XVar.Clone(MVCFunctions.array_keys((XVar)(this.menuTableMap[this.table])));
			switch(((XVar)MVCFunctions.strtolower((XVar)(this.pageType))).ToString())
			{
				case "list":
					return false;
					break;
				case "chart":
					if(XVar.Pack(MVCFunctions.count(MVCFunctions.array_intersect((XVar)(MVCFunctions.array_slice((XVar)(pageTypes), new XVar(0), new XVar(1))), (XVar)(pageTypesInLowCase)))))
					{
						return true;
					}
					else
					{
						return false;
					}
					break;
				case "report":
					if(XVar.Pack(MVCFunctions.count(MVCFunctions.array_intersect((XVar)(MVCFunctions.array_slice((XVar)(pageTypes), new XVar(0), new XVar(2))), (XVar)(pageTypesInLowCase)))))
					{
						return true;
					}
					else
					{
						return false;
					}
					break;
				case "search":
					if(XVar.Pack(MVCFunctions.count(MVCFunctions.array_intersect((XVar)(MVCFunctions.array_slice((XVar)(pageTypes), new XVar(0), new XVar(3))), (XVar)(pageTypesInLowCase)))))
					{
						return true;
					}
					else
					{
						return false;
					}
					break;
				case "add":
					if(XVar.Pack(MVCFunctions.count(MVCFunctions.array_intersect((XVar)(MVCFunctions.array_slice((XVar)(pageTypes), new XVar(0), new XVar(4))), (XVar)(pageTypesInLowCase)))))
					{
						return true;
					}
					else
					{
						return false;
					}
					break;
				case "print":
					if(XVar.Pack(MVCFunctions.count(MVCFunctions.array_intersect((XVar)(MVCFunctions.array_slice((XVar)(pageTypes), new XVar(0), new XVar(5))), (XVar)(pageTypesInLowCase)))))
					{
						return true;
					}
					else
					{
						return false;
					}
					break;
				default:
					break;
			}
			return null;
		}
		public virtual XVar isThisPageInMenu()
		{
			return this.menuTableMap[this.table].KeyExists(this.pageObject.getPageType());
		}
		public virtual XVar changeKeysInLowerCaseFromArr(dynamic _param_arr)
		{
			#region pass-by-value parameters
			dynamic arr = XVar.Clone(_param_arr);
			#endregion

			dynamic lowArr = XVar.Array();
			lowArr = XVar.Clone(XVar.Array());
			foreach (KeyValuePair<XVar, dynamic> val in arr.GetEnumerator())
			{
				lowArr.InitAndSetArrayItem(MVCFunctions.strtolower((XVar)(val.Key)), null);
			}
			return lowArr;
		}
		public virtual XVar clearMenuSession()
		{
			if(XVar.Pack(XSession.Session.KeyExists("menuItemId")))
			{
				XSession.Session.Remove("menuItemId");
			}
			return null;
		}
		public static XVar setMenuSession()
		{
			if(XVar.Pack(MVCFunctions.postvalue(new XVar("menuItemId"))))
			{
				XSession.Session["menuItemId"] = MVCFunctions.postvalue(new XVar("menuItemId"));
			}
			return null;
		}
		public virtual XVar getItemDescendants(dynamic descendants, dynamic _param_level = null)
		{
			#region default values
			if(_param_level as Object == null) _param_level = new XVar(0);
			#endregion

			#region pass-by-value parameters
			dynamic level = XVar.Clone(_param_level);
			#endregion

			foreach (KeyValuePair<XVar, dynamic> child in this.children.GetEnumerator())
			{
				descendants.InitAndSetArrayItem(child.Value, null);
				if(XVar.Pack(level))
				{
					child.Value.getItemDescendants((XVar)(descendants), (XVar)(level - 1));
				}
			}
			return null;
		}
		public virtual XVar isBootstrap()
		{
			return this.pageObject.isBootstrap();
		}
		public virtual XVar isWelcome()
		{
			return this.menuId == Constants.WELCOME_MENU;
		}
		public virtual XVar isTreelike()
		{
			return (XVar)(Constants.MENU_VERTICAL == this.menuMode)  && (XVar)(ProjectSettings.isMenuTreelike((XVar)(this.menuId)));
		}
	}
}
