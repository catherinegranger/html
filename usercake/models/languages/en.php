<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

//Account
$lang = array_merge($lang,array(
	"ACCOUNT_SPECIFY_USERNAME" 		=> "Please enter your username",
	"ACCOUNT_SPECIFY_PASSWORD" 		=> "Please enter your password",
	"ACCOUNT_SPECIFY_EMAIL"			=> "Please enter your email address",
	"ACCOUNT_INVALID_EMAIL"			=> "Invalid email address",
	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "Username or email address is invalid",
	"ACCOUNT_EMAIL_OR_PASS_INVALID"		=> "Email or password is invalid",
	"ACCOUNT_USER_OR_PASS_INVALID"		=> "Username or password is invalid",
	"ACCOUNT_ALREADY_ACTIVE"		=> "Your account is already activated",
	"ACCOUNT_INACTIVE"			=> "Your account has not been activated. Check your emails / spam folder for account activation instructions",
	"ACCOUNT_USER_CHAR_LIMIT"		=> "Your username must be between %m1% and %m2% characters in length",
	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "Your display name must be between %m1% and %m2% characters in length",
	"ACCOUNT_PASS_CHAR_LIMIT"		=> "Your password must be between %m1% and %m2% characters in length",
	"ACCOUNT_TITLE_CHAR_LIMIT"		=> "Titles must be between %m1% and %m2% characters in length",
	"ACCOUNT_PASS_MISMATCH"			=> "Your password and confirmation password must match",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "Display name can only include alpha-numeric characters",
	"ACCOUNT_USERNAME_IN_USE"		=> "Username %m1% is already in use",
	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "Display name %m1% is already in use",
	"ACCOUNT_EMAIL_IN_USE"			=> "Email %m1% is already in use",
	"ACCOUNT_LINK_ALREADY_SENT"		=> "An activation email has already been sent to this email address in the last %m1% hour(s)",
	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "We have emailed you a new activation link, please check your email",
	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "Please enter your new password",	
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "Please confirm your new password",
	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "New password must be between %m1% and %m2% characters in length",	
	"ACCOUNT_PASSWORD_INVALID"		=> "Current password doesn't match the one we have on record",	
	"ACCOUNT_DETAILS_UPDATED"		=> "Account details updated",
	"ACCOUNT_ACTIVATION_MESSAGE"		=> "You need to activate your account before you can login. Please follow the link below to activate your account.\n %m1%/activate_account/%m2%",							
	"ACCOUNT_ACTIVATION_COMPLETE"		=> "You have successfully activated your account. You can now login <a href=\"login\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_ADMIN"	=> "The user has been successfully registered.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "You have successfully registered. You can now login <a href=\"login\">here</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "You have successfully registered. You will soon receive an activation email. 
	You must activate your account before logging in.",
	"ACCOUNT_NOTHING_TO_UPDATE"     	=> "There was nothing to update in your account information",
	"ACCOUNT_LOGIN_NOTHING_TO_UPDATE"	=> "There was nothing to update in your login information",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "You cannot update with the same password",
	"ACCOUNT_PASSWORD_UPDATED"		=> "Account password updated",
	"ACCOUNT_EMAIL_UPDATED"			=> "Account email updated",
	"ACCOUNT_UPDATED"			=> "Account updated",
	"ACCOUNT_ACTIVE"         		=> "Your Account is already activated. You can now login <a href=\"login\">here</a>",
	"ACCOUNT_TOKEN_NOT_FOUND"		=> "Your Activation Token does not exist",
	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "Username can only include alpha-numeric characters",
	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "You have successfully deleted %m1% users",
	"ACCOUNT_MANUALLY_ACTIVATED"		=> "%m1%'s account has been manually activated",
	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "Displayname changed to %m1%",
	"ACCOUNT_TITLE_UPDATED"			=> "%m1%'s title changed to %m2%",
	"ACCOUNT_PERMISSION_ADDED"		=> "Added access to %m1% permission levels",
	"ACCOUNT_PERMISSION_REMOVED"		=> "Removed access from %m1% permission levels",
	"ACCOUNT_INVALID_USERNAME"		=> "Invalid username",
	"ACCOUNT_SPECIFY_FIELD"			=> "Required field missing: %m1%",
	"ACCOUNT_VALID_FIELD"			=> "Required field valid: %m1%",
	"ACCOUNT_VALID_FIELD_CHANGE"		=> "Required field valid: %m1% for recipient: %m2%",
	"ACCOUNT_SPECIFY_FIELD"	        	=> "The following information is missing: %m1%",
	"ACCOUNT_SUBSCRIPTION_UPDATED"		=> "Account subscription updated",

	"SUBSCRIPTION_CANCEL_NOSUBSCRIPTION"   	=> "There is no subscription to cancel",
	"SUBSCRIPTION_CANCEL_ERROR"     	=> "Error while cancelling the subscription: %m1%",
	"SUBSCRIPTION_UPDATE_NOSUBSCRIPTION"   	=> "There is no subscription to update",
	"SUBSCRIPTION_UPDATE_ERROR"     	=> "Error while updating the subscription: %m1%",
	"SUBSCRIPTION_CREATE_HASSUBSCRIPTION"   => "You already have a subscription",
	"SUBSCRIPTION_CREATE_ERROR"     	=> "Error while creating the subscription: %m1%",
	"SUBSCRIPTION_CREATE_SUCCESS"     	=> "Thanks for joining Vino Danubia! Your payment will be processed and an e-mail confirmation will be sent to you",
	"SUBSCRIPTION_UPDATE_SUCCESS"     	=> "Your subscription has been successfully updated",
	"SUBSCRIPTION_CANCEL_SUCCESS"     	=> "Your subscription has been successfully cancelled",
	"SUBSCRIPTION_MISSINGCARDINFO"     	=> "Some credit card information is missing",
	"WINECLUB_CART_ERROR"           	=> "Your shopping cart has currently %m1% bottles. It has to contain between 6 and 12 bottles or any multiple of 6 bottles to meet our wine club free shipping rule",
	"WINECLUB_CART_WARNING"           	=> "Your shopping cart needs to contain between 6 and 12 bottles or any multiple of 6 bottles to meet our wine club free shipping rule",
	));

//Solve360
$lang = array_merge($lang,array(
	"SOLVE_ADD_CONTACT_SUCCESS"		=> "Thanks for joining our mailing list.",
	"SOLVE_ADD_CONTACT_FAIL"		=> "Sorry an error occurred. We couldn't add you to our mailing list.",
	));

//BillShip
$lang = array_merge($lang,array(
	"BILLSHIP_SPECIFY_BILLFIELD"		=> "The following billing information is missing: %m1%",
	"BILLSHIP_SPECIFY_SHIPFIELD"		=> "The following shipping information is missing: %m1%",
	"BILLSHIP_INVALID_EMAIL"		=> " %m1% is an invalid email address",
	"BILLSHIP_CANNOTSHIP_STATE"		=> "Sorry, we cannot ship this order to %m1%.",
	"BILLSHIP_EXPENSIVE_STATE"		=> "Sorry, in order to ship to %m1%, please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699",
	"BILLSHIP_TEXAS"	        	=> "For shipment to %m1%, please contact us at webshop@bluedanubewine.com or +1 (650) 941-4699",
	"BILLSHIP_FOREIGN"	        	=> "Sorry, we cannot ship outside the United States",
	"BILLSHIP_CANNOTDELIVER_ZIPCODE"	=> "Sorry, there is no local delivery for zipcode: %m1%",
	"BILLSHIP_CANNOTDELIVER_QUANTITY"	=> "Sorry, our local delivery service is only available for a minimum order of 3 bottles",
	));

//Cart
$lang = array_merge($lang,array(
	"CART_UPDATE_SUCCESS"		        => "Your cart has been updated",
	"CART_NEGATIVE_QUANTITY"	        => "No quantities less than one. You can delete items in your cart",
	"CART_DISCOUNT_EXPIRED"	                => "This offer code has expired",
	"CART_DISCOUNT_MEMBERLOGIN"             => "This offer code is reserved for wine club members, please login first",
	"CART_DISCOUNT_LOGIN"                   => "Please login before using this offer code",
	"CART_DISCOUNT_USED"	                => "This offer code has been already used",
	"CART_DISCOUNT_MIN_BOTTLES"             => "This offer code can only be applied for orders of 5 bottles and up",
	"CART_DISCOUNT_STRICT_MIN_BOTTLES"      => "This offer code can only be applied for orders of 5 bottles",
	"CART_DISCOUNT_MEMBERONLY"              => "This offer code is reserved for wine club members",
	"CART_DISCOUNT_SUCCESS"	                => "Your offer code %m1% has been applied.",
	"CART_DISCOUNT_645"	                => "Order 5 bottles and you'll receive a free sixth mystery bottle.",
	"CART_DISCOUNT_ERROR"	                => "Sorry, the offer code %m1% is not valid",
	"CART_ONETIME_DISCOUNT_ERROR"	        => "Sorry, this offer code can only be used once",
	"CART_DISCOUNT_SHIPPING_WARNING"        => "Free shipping is only for orders of 6 bottles or a multiple of 6 bottles",
        "CART_NEED_ONE_MORE_BOTTLE"             => "You currently have %m1% bottles in your order. Add one more bottle to get free shipping.",
        "CART_NEED_ONE_LESS_BOTTLE"             => "You currently have %m1% bottles in your order. Remove one bottle to get free shipping.",
	));

//Gift Card
$lang = array_merge($lang,array(
	"GIFTCARD_SUCCESS"		        => "Your gift card has been successfully created",
	"GIFTCARD_NEGATIVE_VALUE"	        => "Sorry, the dollar value has to be positive",
	"GIFTCARD_SPECIFY_EMAIL"	        => "The `%m1%` email is required",
	"GIFTCARD_INVALID_EMAIL"	        => "The `%m1%` email you have entered is not valid",
	"GIFTCARD_SPECIFY_YOUR_EMAIL"	        => "Your email is required",
	"GIFTCARD_INVALID_YOUR_EMAIL"	        => "The email you have entered is not valid",
	"GIFTCARD_SPECIFY_NAME"	                => "The `%m1%` name is required",
	"GIFTCARD_SPECIFY_MESSAGE"              => "A personalized message is required",
	"GIFTCARD_NOT_FOUND"	        	=> "Your Gift Card Activation Token does not exist",
	"GIFTCARD_NO_CODE"	        	=> "Sorry, the gift card code is required",
	"GIFTCARD_NO_ID"	        	=> "Sorry, missing gift card information",
	"GIFTCARD_THANKYOU_SUCCESS"	        => "A thank you email has been sent to %m1%",
	"GIFTCARD_WRONG_CODE"	        	=> "Sorry, the gift card code you entered is invalid",
	"GIFTCARD_EMPTY"	        	=> "Sorry, there's no balance left on this gift card",
	"GIFTCARD_MAXEDOUT"	        	=> "Sorry, your gift card's balance is negative. Please contact us regarding your order",
	"GIFTCARD_REDEEM_SUCCESS"        	=> "Your gift card has been successfully applied. Click `Place Your Order` to omplete your order.",
	));


//Configuration
$lang = array_merge($lang,array(
	"CONFIG_NAME_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_URL_CHAR_LIMIT"			=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "Email activation must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Activation Threshold must be between %m1% and %m2% hours",
	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "Language path must be between %m1% and %m2% characters in length",
	"CONFIG_LANGUAGE_INVALID"		=> "There is no file for the language key `%m1%`",
	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "Template path must be between %m1% and %m2% characters in length",
	"CONFIG_TEMPLATE_INVALID"		=> "There is no file for the template key `%m1%`",
	"CONFIG_EMAIL_INVALID"			=> "The email you have entered is not valid",
	"CONFIG_INVALID_URL_END"		=> "Please include the ending / in your site's URL",
	"CONFIG_UPDATE_SUCCESSFUL"		=> "Your site's configuration has been updated. You may need to load a new page for all the settings to take effect",
	));

//Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_EMAIL_INVALID"              => "Sorry, there's no account that corresponds to the email you provided",	
	"FORGOTPASS_INVALID_TOKEN"		=> "Your activation token is not valid",
	"FORGOTPASS_NEW_PASS_EMAIL"		=> "We have emailed you a new password",
	"FORGOTPASS_REQUEST_CANNED"		=> "Lost password request cancelled",
	"FORGOTPASS_REQUEST_EXISTS"		=> "There is already a outstanding lost password request on this account",
	"FORGOTPASS_REQUEST_SUCCESS"		=> "We have emailed you instructions on how to regain access to your account",
	));

//Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR"				=> "Fatal error attempting mail, contact your server administrator",
	"MAIL_TEMPLATE_BUILD_ERROR"		=> "Error building email template",
	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "Unable to open mail-templates directory. Perhaps try setting the mail directory to %m1%",
	"MAIL_TEMPLATE_FILE_EMPTY"		=> "Template file is empty... nothing to send",
	));

//Miscellaneous
$lang = array_merge($lang,array(
	"CAPTCHA_FAIL"				=> "Failed security question",
	"CONFIRM"				=> "Confirm",
	"DENY"					=> "Deny",
	"SUCCESS"				=> "Success",
	"ERROR"					=> "Error",
	"NOTHING_TO_UPDATE"			=> "Nothing to update",
	"SQL_ERROR"				=> "Fatal SQL error",
	"FEATURE_DISABLED"			=> "This feature is currently disabled",
	"PAGE_PRIVATE_TOGGLED"			=> "This page is now %m1%",
	"PAGE_ACCESS_REMOVED"			=> "Page access removed for %m1% permission level(s)",
	"PAGE_ACCESS_ADDED"			=> "Page access added for %m1% permission level(s)",
	));

//Permissions
$lang = array_merge($lang,array(
	"PERMISSION_CHAR_LIMIT"			=> "Permission names must be between %m1% and %m2% characters in length",
	"PERMISSION_NAME_IN_USE"		=> "Permission name %m1% is already in use",
	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "Successfully deleted %m1% permission level(s)",
	"PERMISSION_CREATION_SUCCESSFUL"	=> "Successfully created the permission level `%m1%`",
	"PERMISSION_NAME_UPDATE"		=> "Permission level name changed to `%m1%`",
	"PERMISSION_REMOVE_PAGES"		=> "Successfully removed access to %m1% page(s)",
	"PERMISSION_ADD_PAGES"			=> "Successfully added access to %m1% page(s)",
	"PERMISSION_REMOVE_USERS"		=> "Successfully removed %m1% user(s)",
	"PERMISSION_ADD_USERS"			=> "Successfully added %m1% user(s)",
	"CANNOT_DELETE_NEWUSERS"		=> "You cannot delete the default 'new user' group",
	"CANNOT_DELETE_ADMIN"			=> "You cannot delete the default 'admin' group",
	));
?>