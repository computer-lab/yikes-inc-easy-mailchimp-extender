<?php

/* Clear All Transient Data */
	// Delete list data transient
	delete_transient( 'yikes-easy-mailchimp-list-data' );

/* Clear All Plugin Options */
	delete_option( 'yikes-mc-api-key' );
	delete_option( 'yikes-mc-api-validation' );
	delete_option( 'yikes-mc-debug' );
	delete_option( 'yikes-mc-double-optin-message' );
	delete_option( 'yikes-mc-flavor' );
	delete_option( 'yikes-mc-lists' );
	delete_option( 'yikes-mc-optin' );
	delete_option( 'yikes-mc-optIn-checkbox' );
	delete_option( 'yikes-mc-recaptcha-api-key' );
	delete_option( 'yikes-mc-recaptcha-private-api-key' );
	delete_option( 'yikes-mc-recaptcha-setting' );
	delete_option( 'yikes-mc-single-optin-message' );
	delete_option( 'yikes-mc-yks-mailchimp-jquery-datepicker' );
	delete_option( 'yikes-mc-yks-mailchimp-optin-checkbox-text' );
	delete_option( 'yikes-mc-yks-mailchimp-optIn-default-list' );
	delete_option( 'yikes-mc-yks-mailchimp-required-text' );
	delete_option( 'yikes-mc-single-optin-message' );
	delete_option( 'yikes-mc-api-invalid-key-response' );

?>