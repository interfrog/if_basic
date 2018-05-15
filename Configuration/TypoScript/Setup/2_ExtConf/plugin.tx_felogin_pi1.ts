plugin.tx_felogin_pi1 {
	templateFile = {$config.pluginPath}/fe_login/fe_login.html
	welcomeMessage_stdWrap.wrap = <p>|</p>
	successMessage_stdWrap.wrap = <p>|</p>
	logoutMessage_stdWrap.wrap = <p>|</p>
	errorMessage_stdWrap.wrap = <p class="error">|</p>
	forgotMessage_stdWrap.wrap = <p>|</p>
	forgotErrorMessage_stdWrap.wrap = <p class="error forgot">|</p>
	forgotResetMessageEmailSentMessage_stdWrap.wrap = <p>|</p>
	changePasswordNotValidMessage_stdWrap.wrap = <p class="warning passwordNotValid">|</p>
	changePasswordTooShortMessage_stdWrap.wrap = <p class="warning passwordTooShort">|</p>
	changePasswordNotEqualMessage_stdWrap.wrap = <p class="warning passwordNotEqual">|</p>
	changePasswordMessage_stdWrap.wrap = <p>|</p>
	cookieWarning_stdWrap.wrap = <p class="error">|</p>
	changePasswordDoneMessage_stdWrap.wrap = <p class="success">|</p>
	email_from = admin@domain.de
	email_fromName = Administrator [CUSTOMER_NAME]
	feloginBaseURL = /
}