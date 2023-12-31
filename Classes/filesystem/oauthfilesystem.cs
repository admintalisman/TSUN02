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
	public partial class OAuthFileSystem : RunnerFileSystem
	{
		protected dynamic sessionKey;
		protected dynamic privateStorageKey;
		protected static bool skipOAuthFileSystemCtor = false;
		public OAuthFileSystem(dynamic var_params) // proxy constructor
			:base((XVar)var_params) {}

		protected virtual XVar _getConnection()
		{
			return null;
		}
		protected virtual XVar getConnection()
		{
			dynamic rest = null;
			rest = XVar.Clone(this._getConnection());
			if(XVar.Pack(!(XVar)(rest.getOauthToken())))
			{
				this.applyOauthToken();
			}
			return rest;
		}
		protected virtual XVar getAuthorizedRequest(dynamic _param_url, dynamic _param_httpMethod = null)
		{
			#region default values
			if(_param_httpMethod as Object == null) _param_httpMethod = new XVar("POST");
			#endregion

			#region pass-by-value parameters
			dynamic url = XVar.Clone(_param_url);
			dynamic httpMethod = XVar.Clone(_param_httpMethod);
			#endregion

			dynamic rest = null, var_request = null;
			var_request = XVar.Clone(new HttpRequest((XVar)(url), (XVar)(httpMethod)));
			rest = XVar.Clone(this.getConnection());
			if(XVar.Pack(!(XVar)(rest.requestAddAuth((XVar)(var_request)))))
			{
				this.setLastError((XVar)(rest.lastError()));
				CommonFunctions.storageSet((XVar)(this.sessionKey), new XVar(Constants.gatINVALID));
			}
			return var_request;
		}
		public virtual XVar accessTokenOK()
		{
			return CommonFunctions.storageGet((XVar)(this.sessionKey)) == Constants.gatSAVED;
		}
		protected virtual XVar applyOauthToken()
		{
			dynamic dropboxAccessToken = null;
			dropboxAccessToken = XVar.Clone(MVCFunctions.loadPrivateData((XVar)(this.privateStorageKey)));
			if(XVar.Pack(dropboxAccessToken))
			{
				dynamic rest = null;
				rest = XVar.Clone(this._getConnection());
				rest.setOauthToken((XVar)(dropboxAccessToken));
				return true;
			}
			return false;
		}
		public virtual XVar loadAccessToken()
		{
			dynamic rest = null, var_request = null;
			if(XVar.Pack(this.accessTokenOK()))
			{
				return null;
			}
			rest = XVar.Clone(this._getConnection());
			if(CommonFunctions.storageGet((XVar)(this.sessionKey)) != Constants.gatINVALID)
			{
				if(XVar.Pack(rest.getOauthToken()))
				{
					this.saveOauthToken((XVar)(rest.getOauthToken()));
					CommonFunctions.storageSet((XVar)(this.sessionKey), new XVar(Constants.gatSAVED));
					return null;
				}
				if(XVar.Pack(this.applyOauthToken()))
				{
					CommonFunctions.storageSet((XVar)(this.sessionKey), new XVar(Constants.gatSAVED));
					return null;
				}
			}
			Security.saveRedirectURL();
			var_request = XVar.Clone(rest.createUserAuthRequest((XVar)(new XVar("token_access_type", "offline"))));
			rest.setAuthorizationRequest((XVar)(var_request));
			CommonFunctions.storageSet((XVar)(this.sessionKey), new XVar(Constants.gatNONE));
			MVCFunctions.HeaderRedirect((XVar)(MVCFunctions.Concat("", var_request.getUrl())));
			MVCFunctions.ob_flush();
			HttpContext.Current.Response.End();
			throw new RunnerInlineOutputException();
			return null;
		}
		public virtual XVar saveOauthToken(dynamic _param_token)
		{
			#region pass-by-value parameters
			dynamic token = XVar.Clone(_param_token);
			#endregion

			MVCFunctions.savePrivateData((XVar)(this.privateStorageKey), (XVar)(token));
			return CommonFunctions.storageGet((XVar)(this.sessionKey)) == Constants.gatSAVED;
		}
	}
}
