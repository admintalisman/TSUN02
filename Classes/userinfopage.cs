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
	public partial class UserInfoPage : EditPage
	{
		protected static bool skipUserInfoPageCtor = false;
		public UserInfoPage(dynamic var_params)
			:base((XVar)var_params)
		{
			if(skipUserInfoPageCtor)
			{
				skipUserInfoPageCtor = false;
				return;
			}
		}
		public static XVar processUserInfoPageSecurity(dynamic _param_table)
		{
			#region pass-by-value parameters
			dynamic table = XVar.Clone(_param_table);
			#endregion

			dynamic sessionLevel = null;
			if(XVar.Pack(!(XVar)(Security.providerUsersInDb((XVar)(Security.currentProvider())))))
			{
				MVCFunctions.HeaderRedirect(new XVar("menu"));
			}
			Security.processLogoutRequest();
			sessionLevel = XVar.Clone(Security.userSessionLevel());
			if((XVar)(!(XVar)(Security.isGuest()))  && (XVar)(XVar.Equals(XVar.Pack(sessionLevel), XVar.Pack(Constants.LOGGED_2FSETUP_PENDING))))
			{
				if(XVar.Pack(!(XVar)(Security.verifySafeCSRF())))
				{
					return false;
				}
				return true;
			}
			Security.tryRelogin();
			if((XVar)(CommonFunctions.isLogged())  && (XVar)(!(XVar)(Security.isGuest())))
			{
				return true;
			}
			if(XVar.Pack(Security.isGuest()))
			{
				MVCFunctions.HeaderRedirect(new XVar("menu"));
				return false;
			}
			CommonFunctions.redirectToLogin();
			return false;
		}
		public override XVar process()
		{
			dynamic templatefile = null;
			if(XVar.Pack(GlobalVars.globalEvents.exists(new XVar("BeforeProcessUserinfo"))))
			{
				GlobalVars.globalEvents.BeforeProcessUserinfo(this);
			}
			if(this.action == "save2f")
			{
				this.process2f();
				return null;
			}
			if(this.action == "confirm2f")
			{
				this.confirm2f();
				return null;
			}
			if((XVar)(this.action == "edited")  && (XVar)(XVar.Equals(XVar.Pack(this.mode), XVar.Pack(Constants.USERINFO_SIMPLE))))
			{
				this.processDataInput();
				this.reportFieldsSaveStatus();
				return null;
			}
			if(this.action == "generateSecret")
			{
				this.regenerateTotp();
				return null;
			}
			if(XVar.Pack(this.pSet.hasCaptcha()))
			{
				this.displayCaptcha();
			}
			this.prgReadMessage();
			this.doCommonAssignments();
			this.prepareBreadcrumbs();
			this.prepareCollapseButton();
			this.prepare2fControls();
			if(XVar.Equals(XVar.Pack(this.mode), XVar.Pack(Constants.USERINFO_SIMPLE)))
			{
				this.prepareReadonlyFields();
				this.prepareEditControls();
			}
			else
			{
				this.hideUserinfoItems();
			}
			this.addButtonHandlers();
			this.addCommonJs();
			templatefile = XVar.Clone(this.templatefile);
			if(XVar.Pack(GlobalVars.globalEvents.exists(new XVar("BeforeShowUserinfo"))))
			{
				GlobalVars.globalEvents.BeforeShowUserinfo((XVar)(this.xt), ref templatefile, (XVar)(this.getCurrentRecordInternal()), this);
			}
			this.display((XVar)(this.templatefile));
			return null;
		}
		protected virtual XVar regenerateTotp()
		{
			dynamic twofData = null, twofSettings = XVar.Array();
			twofData = XVar.Clone(this.loadTwofData());
			twofSettings = Security.twoFactorSettings();
			if((XVar)(!(XVar)(twofSettings["available"]))  || (XVar)(!(XVar)(twofSettings["types"]["totp"])))
			{
				this.send2fError(new XVar("TOTP authentication is not available"));
			}
			if((XVar)(!(XVar)(twofData.enable))  || (XVar)(twofData.method != "totp"))
			{
				this.send2fError(new XVar("TOTP authentication is not enabled"));
			}
			twofData.secret = XVar.Clone(CommonFunctions.generateTotpSecret());
			twofData.confirmNeeded = new XVar(true);
			CommonFunctions.storageSet(new XVar("2factor_update"), (XVar)(twofData.serialize()));
			this.send2fConfirmRequest((XVar)(twofData));
			return null;
		}
		protected override XVar buildNewRecordData()
		{
			dynamic blobfields = null, efilename_values = XVar.Array(), evalues = XVar.Array();
			evalues = XVar.Clone(XVar.Array());
			efilename_values = XVar.Clone(XVar.Array());
			blobfields = XVar.Clone(XVar.Array());
			foreach (KeyValuePair<XVar, dynamic> f in this.pSet.getPageFields().GetEnumerator())
			{
				dynamic control = null;
				if((XVar)(f.Value == Security.usernameField())  || (XVar)(f.Value == Security.extIdField()))
				{
					continue;
				}
				control = XVar.Clone(this.getControl((XVar)(f.Value), (XVar)(this.id)));
				control.readWebValue((XVar)(evalues), (XVar)(blobfields), new XVar(null), new XVar(null), (XVar)(efilename_values));
			}
			foreach (KeyValuePair<XVar, dynamic> value in efilename_values.GetEnumerator())
			{
				evalues.InitAndSetArrayItem(value.Value, value.Key);
			}
			this.newRecordData = XVar.Clone(evalues);
			return null;
		}
		public override XVar processDataInput()
		{
			dynamic dcUpdate = null, prep = XVar.Array(), userInfoWhere = null;
			if(XVar.Pack(!(XVar)(CommonFunctions.isPostRequest())))
			{
				return false;
			}
			this.buildNewRecordData();
			if(XVar.Pack(!(XVar)(this.recheckUserPermissions())))
			{
				this.oldRecordData = XVar.Clone(this.newRecordData);
				this.cachedRecord = XVar.Clone(this.newRecordData);
				return false;
			}
			this.oldRecordData = XVar.Clone(this.getFieldControlsData());
			if(XVar.Pack(!(XVar)(this.checkCaptcha())))
			{
				return false;
			}
			dcUpdate = XVar.Clone(this.getUpdateDataCommand());
			prep = XVar.Clone(this.dataSource.prepareSQL((XVar)(dcUpdate)));
			userInfoWhere = XVar.Clone(prep["where"]);
			if(XVar.Pack(GlobalVars.globalEvents.exists(new XVar("BeforeEditUserinfo"))))
			{
				dynamic ret = null, usermessage = null;
				usermessage = new XVar("");
				ret = XVar.Clone(GlobalVars.globalEvents.BeforeEditUserinfo((XVar)(this.newRecordData), (XVar)(userInfoWhere), (XVar)(this.oldRecordData), ref usermessage, this));
				if(usermessage != XVar.Pack(""))
				{
					this.setMessage((XVar)(usermessage));
				}
				if(XVar.Pack(!(XVar)(ret)))
				{
					return false;
				}
			}
			if(XVar.Pack(!(XVar)(this.checkDeniedDuplicatedValues())))
			{
				return false;
			}
			this.updatedSuccessfully = XVar.Clone(this.dataSource.updateSingle((XVar)(dcUpdate), new XVar(false)));
			if(XVar.Pack(!(XVar)(this.updatedSuccessfully)))
			{
				this.setDatabaseError((XVar)(this.dataSource.lastError()));
				return false;
			}
			this.auditLog((XVar)(dcUpdate.values));
			this.cachedRecord = new XVar(null);
			this.ProcessFiles();
			this.setSuccessfulEditMessage();
			Security.refreshUserdata();
			Security.refreshDisplayName();
			this.callAfterSuccessfulSave();
			if(XVar.Pack(GlobalVars.globalEvents.exists(new XVar("AfterEditUserinfo"))))
			{
				foreach (KeyValuePair<XVar, dynamic> v in this.oldRecordData.GetEnumerator())
				{
					if(XVar.Pack(!(XVar)(this.newRecordData.KeyExists(v.Key))))
					{
						this.newRecordData.InitAndSetArrayItem(v.Value, v.Key);
					}
				}
				GlobalVars.globalEvents.AfterEditUserinfo((XVar)(this.newRecordData), (XVar)(userInfoWhere), (XVar)(this.oldRecordData), this);
			}
			return true;
		}
		public override XVar setDatabaseError(dynamic _param_message)
		{
			#region pass-by-value parameters
			dynamic message = XVar.Clone(_param_message);
			#endregion

			if(this.mode != Constants.EDIT_INLINE)
			{
				this.message = XVar.Clone(MVCFunctions.Concat("<strong>", "Record was NOT edited", "</strong><br><br>", message));
			}
			else
			{
				this.message = XVar.Clone(MVCFunctions.Concat("Record was NOT edited", ". ", message));
			}
			this.messageType = new XVar(Constants.MESSAGE_ERROR);
			return null;
		}
		protected override XVar setSuccessfulEditMessage()
		{
			if(XVar.Pack(this.isMessageSet()))
			{
				return null;
			}
			this.messageType = new XVar(Constants.MESSAGE_INFO);
			this.setMessage(new XVar(MVCFunctions.Concat("<strong>", "User profile updated", "</strong>")));
			XSession.Session["message_userinfo"] = MVCFunctions.Concat(this.message, "");
			XSession.Session["message_userinfo_type"] = this.messageType;
			return null;
		}
		protected override XVar checkDeniedDuplicatedValues()
		{
			return this.checkDeniedDuplicatedForUpdate((XVar)(this.oldRecordData), (XVar)(this.newRecordData));
		}
		public override XVar getUpdateDataCommand()
		{
			dynamic dc = null;
			dc = XVar.Clone(this.getSubsetDataCommand());
			dc.values = this.newRecordData;
			return dc;
		}
		protected override XVar callAfterSuccessfulSave()
		{
			foreach (KeyValuePair<XVar, dynamic> f in this.getPageFields().GetEnumerator())
			{
				this.getControl((XVar)(f.Value), (XVar)(this.id)).afterSuccessfulSave();
			}
			return null;
		}
		protected virtual XVar reportFieldsSaveStatus()
		{
			dynamic returnJSON = XVar.Array();
			returnJSON = XVar.Clone(XVar.Array());
			returnJSON.InitAndSetArrayItem(this.updatedSuccessfully, "success");
			returnJSON.InitAndSetArrayItem(this.message, "message");
			if(XVar.Pack(!(XVar)(this.isCaptchaOk)))
			{
				returnJSON.InitAndSetArrayItem(this.getCaptchaFieldName(), "wrongCaptchaFieldName");
			}
			if(XVar.Pack(this.updatedSuccessfully))
			{
				dynamic controlValues = XVar.Array(), data = XVar.Array();
				data = XVar.Clone(this.getFieldControlsData());
				if(XVar.Pack(!(XVar)(data)))
				{
					data = XVar.Clone(this.newRecordData);
				}
				foreach (KeyValuePair<XVar, dynamic> f in this.pSet.getPageFields().GetEnumerator())
				{
					if(XVar.Pack(!(XVar)(CommonFunctions.IsBinaryType((XVar)(this.pSet.getFieldType((XVar)(f.Value)))))))
					{
						controlValues.InitAndSetArrayItem(data[f.Value], f.Value);
					}
				}
				returnJSON.InitAndSetArrayItem(controlValues, "controlValues");
			}
			MVCFunctions.Echo(CommonFunctions.printJSON((XVar)(returnJSON)));
			MVCFunctions.ob_flush();
			HttpContext.Current.Response.End();
			throw new RunnerInlineOutputException();
			return null;
		}
		protected override XVar prgReadMessage()
		{
			if((XVar)(!(XVar)(this.isSimpleMode()))  || (XVar)(!(XVar)(XSession.Session.KeyExists("message_userinfo"))))
			{
				return null;
			}
			this.setMessage((XVar)(XSession.Session["message_userinfo"]));
			this.messageType = XVar.Clone(XSession.Session["message_userinfo_type"]);
			XSession.Session.Remove("message_userinfo");
			return null;
		}
		public override XVar getCurrentRecordInternal()
		{
			dynamic dc = null, fetchedArray = null;
			if(XVar.Pack(!(XVar)(this.cachedRecord == null)))
			{
				return this.cachedRecord;
			}
			dc = XVar.Clone(this.getSubsetDataCommand());
			fetchedArray = XVar.Clone(this.dataSource.getSingle((XVar)(dc)).fetchAssoc());
			this.cachedRecord = XVar.Clone(this.cipherer.DecryptFetchedArray((XVar)(fetchedArray)));
			return this.cachedRecord;
		}
		public override XVar getDataSourceFilterCriteria(dynamic _param_ignoreFilterField = null)
		{
			#region default values
			if(_param_ignoreFilterField as Object == null) _param_ignoreFilterField = new XVar("");
			#endregion

			#region pass-by-value parameters
			dynamic ignoreFilterField = XVar.Clone(_param_ignoreFilterField);
			#endregion

			return Security.currentUserCondition();
		}
		protected override XVar doCommonAssignments()
		{
			this.headerCommonAssign();
			this.setLangParams();
			this.xt.assign(new XVar("message_block"), new XVar(true));
			if(XVar.Pack(this.isMessageSet()))
			{
				this.xt.assign(new XVar("message"), (XVar)(this.message));
				this.xt.assign(new XVar("message_class"), (XVar)((XVar.Pack(this.messageType == Constants.MESSAGE_ERROR) ? XVar.Pack("alert alert-danger") : XVar.Pack("alert alert-success"))));
			}
			else
			{
				this.hideElement(new XVar("message"));
			}
			this.assignFieldBlocksAndLabels();
			this.assignBody();
			return null;
		}
		protected override XVar getFieldControlValues()
		{
			return this.getFieldControlsData();
		}
		public override XVar getEditFormat(dynamic _param_fName, dynamic _param_pSet_packed = null)
		{
			#region packeted values
			ProjectSettings _param_pSet = XVar.UnPackProjectSettings(_param_pSet_packed);
			#endregion

			#region default values
			if(_param_pSet as Object == null) _param_pSet = null;
			#endregion

			#region pass-by-value parameters
			dynamic fName = XVar.Clone(_param_fName);
			ProjectSettings pSet = XVar.Clone(_param_pSet);
			#endregion

			if((XVar)(fName == Security.usernameField())  || (XVar)(fName == Security.extIdField()))
			{
				return Constants.EDIT_FORMAT_READONLY;
			}
			return base.getEditFormat((XVar)(fName), (XVar)(pSet));
		}
		public override XVar prepareEditControls()
		{
			dynamic data = null;
			data = XVar.Clone(this.getFieldControlValues());
			foreach (KeyValuePair<XVar, dynamic> fName in this.pSet.getPageFields().GetEnumerator())
			{
				this.prepareEditControl((XVar)(fName.Value), (XVar)(data));
			}
			return null;
		}
		public override XVar getFieldControlsData()
		{
			return this.getCurrentRecordInternal();
		}
		protected override XVar recheckUserPermissions()
		{
			return true;
		}
		public override XVar element2Item(dynamic _param_name)
		{
			#region pass-by-value parameters
			dynamic name = XVar.Clone(_param_name);
			#endregion

			if(name == "message")
			{
				return new XVar(0, "fields_message");
			}
			return base.element2Item((XVar)(name));
		}
		protected virtual XVar prepare2fControls()
		{
			dynamic data = XVar.Array(), twofSettings = XVar.Array(), userOption = null;
			if(XVar.Pack(!(XVar)(Security.twoFactorAvailable())))
			{
				return null;
			}
			data = XVar.Clone(this.getCurrentRecordInternal());
			if(XVar.Pack(!(XVar)(data)))
			{
				return null;
			}
			this.hideItemType(new XVar("twofactor_setup_comment"));
			twofSettings = Security.twoFactorSettings();
			this.xt.assign(new XVar("twof_phone_value"), (XVar)(data[twofSettings["phoneField"]]));
			this.xt.assign(new XVar("twof_email_value"), (XVar)(data[twofSettings["emailField"]]));
			userOption = XVar.Clone(data[twofSettings["twoFactorField"]] + 0);
			this.xt.assign((XVar)(MVCFunctions.Concat("twof_", Security.twoFactorMethod((XVar)(userOption)), "_attrs")), new XVar("checked"));
			if(XVar.Pack(Security.twoFactorEnabled((XVar)(userOption))))
			{
				this.xt.assign(new XVar("twof_enable_attrs"), new XVar("checked"));
			}
			if(this.mode == Constants.USERINFO_SIMPLE)
			{
				this.xt.assign(new XVar("twof_save_attrs"), new XVar("disabled"));
			}
			if(!XVar.Equals(XVar.Pack(Security.userSessionLevel()), XVar.Pack(Constants.LOGGED_2FSETUP_PENDING)))
			{
				this.pageData.InitAndSetArrayItem(Security.twoFactorEnabled((XVar)(userOption)), "saved2fEnable");
				this.pageData.InitAndSetArrayItem(Security.twoFactorMethod((XVar)(userOption)), "saved2fMethod");
				if(this.pageData["saved2fMethod"] == "email")
				{
					this.pageData.InitAndSetArrayItem(Security.twoFactorMethod((XVar)(data[twofSettings["emailField"]])), "saved2fEmail");
				}
				if(this.pageData["saved2fMethod"] == "phone")
				{
					this.pageData.InitAndSetArrayItem(Security.twoFactorMethod((XVar)(data[twofSettings["phoneField"]])), "saved2fPhone");
				}
			}
			else
			{
				this.xt.assign(new XVar("twof_enable_attrs"), new XVar("checked"));
			}
			return null;
		}
		protected static XVar get2fDataFromRequest()
		{
			dynamic email = null, enable = null, method = null, phone = null, twofData = null;
			enable = XVar.Clone(MVCFunctions.postvalue(new XVar("enable")));
			method = XVar.Clone(MVCFunctions.postvalue(new XVar("method")));
			email = XVar.Clone(MVCFunctions.postvalue(new XVar("email")));
			phone = XVar.Clone(MVCFunctions.postvalue(new XVar("phone")));
			twofData = XVar.Clone(new TwoFactorData());
			twofData.enable = XVar.Clone(enable);
			twofData.method = XVar.Clone(method);
			if(XVar.Equals(XVar.Pack(method), XVar.Pack("email")))
			{
				twofData.email = XVar.Clone(email);
			}
			else
			{
				if(XVar.Equals(XVar.Pack(method), XVar.Pack("phone")))
				{
					twofData.phone = XVar.Clone(phone);
				}
				else
				{
					if(!XVar.Equals(XVar.Pack(method), XVar.Pack("totp")))
					{
						twofData.enable = new XVar(false);
					}
				}
			}
			return twofData;
		}
		protected virtual XVar loadTwofData()
		{
			dynamic data = XVar.Array(), twofData = null, twofSettings = XVar.Array(), userOption = null;
			data = XVar.Clone(this.getCurrentRecordInternal());
			if(XVar.Pack(!(XVar)(data)))
			{
				return null;
			}
			twofSettings = Security.twoFactorSettings();
			twofData = XVar.Clone(new TwoFactorData());
			userOption = XVar.Clone(data[twofSettings["twoFactorField"]] + 0);
			twofData.enable = XVar.Clone(Security.twoFactorEnabled((XVar)(userOption)));
			twofData.method = XVar.Clone(Security.twoFactorMethod((XVar)(userOption)));
			twofData.secret = XVar.Clone(data[twofSettings["codeField"]]);
			twofData.email = XVar.Clone(data[twofSettings["emailField"]]);
			twofData.phone = XVar.Clone(data[twofSettings["phoneField"]]);
			return twofData;
		}
		protected virtual XVar update2fAuthData(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic data = XVar.Array(), twofSettings = XVar.Array(), userOption = null;
			if(XVar.Pack(!(XVar)(twofData.enable)))
			{
				return null;
			}
			data = XVar.Clone(this.getCurrentRecordInternal());
			twofSettings = Security.twoFactorSettings();
			userOption = XVar.Clone(data[twofSettings["twoFactorField"]] + 0);
			if(XVar.Pack(!(XVar)(Security.twoFactorEnabled((XVar)(userOption)))))
			{
				twofData.confirmNeeded = new XVar(true);
			}
			if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("totp")))
			{
				twofData.secret = XVar.Clone(data[twofSettings["codeField"]]);
				if(XVar.Pack(!(XVar)(CommonFunctions.validateTotpSecret((XVar)(twofData.secret)))))
				{
					twofData.secret = XVar.Clone(CommonFunctions.generateTotpSecret());
					twofData.confirmNeeded = new XVar(true);
				}
			}
			else
			{
				if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("email")))
				{
					dynamic email = null;
					email = XVar.Clone(data[twofSettings["emailField"]]);
					if((XVar)(email == XVar.Pack(""))  || (XVar)(!XVar.Equals(XVar.Pack(twofData.email), XVar.Pack(email))))
					{
						twofData.confirmNeeded = new XVar(true);
					}
				}
				else
				{
					if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("phone")))
					{
						dynamic phone = null;
						phone = XVar.Clone(data[twofSettings["phoneField"]]);
						if((XVar)(phone == XVar.Pack(""))  || (XVar)(!XVar.Equals(XVar.Pack(twofData.phone), XVar.Pack(phone))))
						{
							twofData.confirmNeeded = new XVar(true);
						}
					}
				}
			}
			return null;
		}
		protected virtual XVar verify2fSettings(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic twofSettings = XVar.Array();
			twofSettings = Security.twoFactorSettings();
			if((XVar)(twofData.enable)  && (XVar)(!(XVar)(twofSettings["types"][twofData.method])))
			{
				this.send2fError(new XVar("Unsupported authentication type"));
				return false;
			}
			if((XVar)(!(XVar)(twofData.enable))  && (XVar)(twofSettings["required"]))
			{
				twofData.enable = new XVar(true);
			}
			return true;
		}
		protected virtual XVar process2f()
		{
			dynamic twofData = null;
			if(XVar.Pack(!(XVar)(CommonFunctions.isPostRequest())))
			{
				return null;
			}
			twofData = XVar.Clone(UserInfoPage.get2fDataFromRequest());
			if(XVar.Pack(!(XVar)(this.verify2fSettings((XVar)(twofData)))))
			{
				return null;
			}
			this.update2fAuthData((XVar)(twofData));
			if(XVar.Pack(!(XVar)(twofData.confirmNeeded)))
			{
				this.save2fData((XVar)(twofData));
				if(Security.userSessionLevel() != Constants.LOGGED_FULL)
				{
					Security.elevateSession();
					Security.auditLoginSuccess();
					Security.callAfterLogin();
				}
				this.send2fSuccess((XVar)(twofData));
				return null;
			}
			twofData.code = XVar.Clone(CommonFunctions.generateUserCode((XVar)(CommonFunctions.GetGlobalData(new XVar("smsCodeLength"), new XVar(6)))));
			CommonFunctions.storageSet(new XVar("2factor_update"), (XVar)(twofData.serialize()));
			this.send2fCode((XVar)(twofData));
			this.send2fConfirmRequest((XVar)(twofData));
			return null;
		}
		protected virtual XVar send2fError(dynamic _param_message, dynamic _param_status = null)
		{
			#region default values
			if(_param_status as Object == null) _param_status = new XVar("error");
			#endregion

			#region pass-by-value parameters
			dynamic message = XVar.Clone(_param_message);
			dynamic status = XVar.Clone(_param_status);
			#endregion

			MVCFunctions.Echo(MVCFunctions.my_json_encode((XVar)(new XVar("status", status, "message", message))));
			MVCFunctions.ob_flush();
			HttpContext.Current.Response.End();
			throw new RunnerInlineOutputException();
			return null;
		}
		protected virtual XVar send2fCode(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic ret = XVar.Array();
			if((XVar)(twofData.method != "email")  && (XVar)(twofData.method != "phone"))
			{
				return null;
			}
			ret = XVar.Clone(Security.sendTwoFactorCode((XVar)(twofData.method), (XVar)((XVar.Pack(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("email"))) ? XVar.Pack(twofData.email) : XVar.Pack(twofData.phone))), (XVar)(twofData.code)));
			if(XVar.Pack(!(XVar)(ret["success"])))
			{
				this.send2fError((XVar)(MVCFunctions.Concat("Error sending message. ", ret["message"])));
			}
			return null;
		}
		protected virtual XVar send2fConfirmRequest(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic var_response = XVar.Array();
			var_response = XVar.Clone(new XVar("status", "confirm", "method", twofData.method));
			if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("totp")))
			{
				var_response.InitAndSetArrayItem(twofData.secret, "secret");
				var_response.InitAndSetArrayItem(this.getTotpUrl((XVar)(twofData.secret)), "totpUrl");
			}
			else
			{
				if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("email")))
				{
					var_response.InitAndSetArrayItem(twofData.email, "email");
				}
				else
				{
					if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("phone")))
					{
						var_response.InitAndSetArrayItem(twofData.phone, "phone");
					}
				}
			}
			MVCFunctions.Echo(MVCFunctions.my_json_encode((XVar)(var_response)));
			MVCFunctions.ob_flush();
			HttpContext.Current.Response.End();
			throw new RunnerInlineOutputException();
			return null;
		}
		protected virtual XVar send2fSuccess(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic var_response = XVar.Array();
			var_response = XVar.Clone(new XVar("enable", twofData.enable, "status", "saved", "method", twofData.method));
			if(twofData.method == "email")
			{
				var_response.InitAndSetArrayItem(twofData.email, "email");
			}
			if(twofData.method == "phone")
			{
				var_response.InitAndSetArrayItem(twofData.phone, "phone");
			}
			if(XVar.Equals(XVar.Pack(this.mode), XVar.Pack(Constants.USERINFO_2FACTOR)))
			{
				if(XVar.Pack(XSession.Session["MyURL"]))
				{
					var_response.InitAndSetArrayItem(XSession.Session["MyURL"], "redirect");
				}
				else
				{
					var_response.InitAndSetArrayItem(MVCFunctions.GetTableLink(new XVar("menu")), "redirect");
				}
			}
			MVCFunctions.Echo(MVCFunctions.my_json_encode((XVar)(var_response)));
			MVCFunctions.ob_flush();
			HttpContext.Current.Response.End();
			throw new RunnerInlineOutputException();
			return null;
		}
		protected virtual XVar getTotpUrl(dynamic _param_secret)
		{
			#region pass-by-value parameters
			dynamic secret = XVar.Clone(_param_secret);
			#endregion

			dynamic encodedProjectName = null, encodedSecret = null, encodedUsername = null, twofSettings = XVar.Array();
			twofSettings = Security.twoFactorSettings();
			encodedProjectName = XVar.Clone(MVCFunctions.RawUrlEncode((XVar)(twofSettings["projectName"])));
			encodedUsername = XVar.Clone(MVCFunctions.RawUrlEncode((XVar)(this.getUserName())));
			encodedSecret = XVar.Clone(MVCFunctions.RawUrlEncode((XVar)(secret)));
			return MVCFunctions.Concat("otpauth://totp/", encodedProjectName, ":", encodedUsername, "?secret=", encodedSecret, "&issuer=", encodedProjectName);
		}
		protected virtual XVar confirm2f()
		{
			dynamic code = null, twofData = null;
			code = XVar.Clone(MVCFunctions.postvalue(new XVar("code")));
			twofData = XVar.Clone(TwoFactorData.deserialize((XVar)(CommonFunctions.storageGet(new XVar("2factor_update")))));
			if(XVar.Pack(!(XVar)(twofData)))
			{
				this.send2fError(new XVar("Session is lost. Refresh the page and try again."));
			}
			if(XVar.Pack(!(XVar)(this.verify2fCode((XVar)(twofData), (XVar)(code)))))
			{
				this.send2fError(new XVar("Wrong code"), new XVar("wrong"));
			}
			this.save2fData((XVar)(twofData));
			if(Security.userSessionLevel() != Constants.LOGGED_FULL)
			{
				Security.elevateSession();
				Security.auditLoginSuccess();
				Security.callAfterLogin();
			}
			this.send2fSuccess((XVar)(twofData));
			return null;
		}
		protected virtual XVar verify2fCode(dynamic _param_twofData, dynamic _param_code)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			dynamic code = XVar.Clone(_param_code);
			#endregion

			if((XVar)(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("email")))  || (XVar)(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("phone"))))
			{
				return twofData.code == code;
			}
			if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("totp")))
			{
				return code == MVCFunctions.calculateTotpCode((XVar)(twofData.secret));
			}
			return null;
		}
		protected virtual XVar save2fData(dynamic _param_twofData)
		{
			#region pass-by-value parameters
			dynamic twofData = XVar.Clone(_param_twofData);
			#endregion

			dynamic data = XVar.Array(), dc = null, method = null, twofSettings = XVar.Array();
			twofSettings = Security.twoFactorSettings();
			dc = XVar.Clone(this.getSubsetDataCommand());
			if(XVar.Pack(!(XVar)(twofData.enable)))
			{
				data = XVar.Clone(this.getCurrentRecordInternal());
				method = XVar.Clone(Security.twoFactorMethod((XVar)(data[twofSettings["twoFactorField"]])));
			}
			else
			{
				method = XVar.Clone(twofData.method);
			}
			data = XVar.Clone(this.getCurrentRecordInternal());
			dc.values.InitAndSetArrayItem(Security.getTwoFactorValue((XVar)(twofData.enable), (XVar)(method)), twofSettings["twoFactorField"]);
			if(XVar.Pack(twofData.enable))
			{
				if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("email")))
				{
					dc.values.InitAndSetArrayItem(twofData.email, twofSettings["emailField"]);
				}
				else
				{
					if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("phone")))
					{
						dc.values.InitAndSetArrayItem(twofData.phone, twofSettings["phoneField"]);
					}
					else
					{
						if(XVar.Equals(XVar.Pack(twofData.method), XVar.Pack("totp")))
						{
							dc.values.InitAndSetArrayItem(twofData.secret, twofSettings["codeField"]);
						}
					}
				}
			}
			if(XVar.Pack(!(XVar)(this.dataSource.updateSingle((XVar)(dc), new XVar(false)))))
			{
				this.send2fError((XVar)(this.dataSource.lastError()));
			}
			this.auditLog((XVar)(dc.values));
			Security.refreshUserdata();
			return null;
		}
		public override XVar addCommonJs()
		{
			base.addCommonJs();
			this.AddJSFile(new XVar("include/qrcode/qrcode2.js"));
			this.AddJSFile(new XVar("include/qrcode/jquery.qrcode.js"));
			return null;
		}
		protected virtual XVar getUserName()
		{
			dynamic sessionLevel = null;
			sessionLevel = XVar.Clone(Security.userSessionLevel());
			if(XVar.Equals(XVar.Pack(sessionLevel), XVar.Pack(Constants.LOGGED_FULL)))
			{
				return Security.getUserName();
			}
			return Security.provisionalUsername();
		}
		public static XVar readPageModeFromRequest()
		{
			if((XVar)(MVCFunctions.postvalue(new XVar("mode")) == "2factor")  || (XVar)(Security.userSessionLevel() == Constants.LOGGED_2FSETUP_PENDING))
			{
				return Constants.USERINFO_2FACTOR;
			}
			return Constants.USERINFO_SIMPLE;
		}
		protected virtual XVar hideUserinfoItems()
		{
			this.hideAllFormItems(new XVar("grid"));
			this.showItemType(new XVar("twofactor_label"));
			if(XVar.Equals(XVar.Pack(Security.userSessionLevel()), XVar.Pack(Constants.LOGGED_2FSETUP_PENDING)))
			{
				this.showItemType(new XVar("twofactor_setup_comment"));
			}
			else
			{
				this.showItemType(new XVar("twofactor_comment"));
			}
			this.showItemType(new XVar("twofactor_settings"));
			return null;
		}
		public override XVar setTemplateFile()
		{
			return RunnerPage.setTemplateFile(this);
		}
		protected override XVar prepareBreadcrumbs()
		{
			dynamic breadcrumb = null, crumb = XVar.Array();
			this.xt.assign(new XVar("breadcrumb"), new XVar(true));
			this.xt.assign(new XVar("crumb_home_link"), (XVar)(MVCFunctions.runner_htmlspecialchars((XVar)(MVCFunctions.GetLocalLink(new XVar("menu"))))));
			crumb = XVar.Clone(XVar.Array());
			crumb.InitAndSetArrayItem(true, "crumb_title_span");
			crumb.InitAndSetArrayItem(this.getPageTitle((XVar)(this.pageType), (XVar)(this.tName), (XVar)(this.pSet)), "crumb_title");
			breadcrumb = XVar.Clone(new XVar(0, crumb));
			this.xt.assign_loopsection(new XVar("crumb"), (XVar)(breadcrumb));
			return null;
		}
		public virtual XVar auditLog(dynamic _param_values)
		{
			#region pass-by-value parameters
			dynamic values = XVar.Clone(_param_values);
			#endregion

			dynamic audit = null, keys = null;
			audit = XVar.Clone(CommonFunctions.GetAuditObject());
			if(XVar.Pack(!(XVar)(audit)))
			{
				return null;
			}
			keys = XVar.Clone(new XVar(Security.currentUserIdField(), Security.getUserId()));
			values.InitAndSetArrayItem(Security.getUserId(), Security.currentUserIdField());
			audit.LogEdit((XVar)(Security.loginTable()), (XVar)(values), (XVar)(Security.currentUserData()), (XVar)(keys));
			return null;
		}
		public override XVar getSingleRecordCommand()
		{
			return this.getSubsetDataCommand();
		}
		public override XVar createProjectSettings()
		{
			this.pSet = XVar.UnPackProjectSettings(new ProjectSettings((XVar)(this.tName), (XVar)(this.pageType), (XVar)(this.pageName), (XVar)(this.pageTable)));
			return null;
		}
	}
	public partial class TwoFactorData : XClass
	{
		public dynamic enable;
		public dynamic code;
		public dynamic method;
		public dynamic secret;
		public dynamic email;
		public dynamic phone;
		public dynamic confirmNeeded;
		public virtual XVar serialize()
		{
			dynamic ret = XVar.Array();
			ret = XVar.Clone(XVar.Array());
			ret.InitAndSetArrayItem(this.enable, "enable");
			ret.InitAndSetArrayItem(this.code, "code");
			ret.InitAndSetArrayItem(this.method, "method");
			ret.InitAndSetArrayItem(this.secret, "secret");
			ret.InitAndSetArrayItem(this.email, "email");
			ret.InitAndSetArrayItem(this.phone, "phone");
			ret.InitAndSetArrayItem(this.confirmNeeded, "confirmNeeded");
			return ret;
		}
		public static XVar deserialize(dynamic _param_params)
		{
			#region pass-by-value parameters
			dynamic var_params = XVar.Clone(_param_params);
			#endregion

			dynamic ret = null;
			ret = XVar.Clone(new TwoFactorData());
			CommonFunctions.RunnerApply((XVar)(ret), (XVar)(var_params));
			return ret;
		}
	}
}
