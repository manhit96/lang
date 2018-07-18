<?php


return array(
	/*
	|--------------------------------------------------------------------------
	| Admin IMEI Service
	|--------------------------------------------------------------------------
	*/

		'title'							=> 'Client Group',
		'membership_types'				=>  array('onetime' => 'Onetime', 'monthly' => 'Monthly', 'custom' => 'Custom'),
		'group_listing'				=> array(
			'srch_group'					=> 'Search Group',
			'group_lbl'						=> 'Group',
			'actions_lbl'					=> 'Actions',
			'delete_lbl'					=> 'Delete',
			'set_pricing'					=> 'Set Pricing',
			'members'						=> 'Members',
			'add_group'						=> 'Add Group',
			'no_records_found'				=> 'No Records Found',
			'group_delete_success'			=> 'Group Deleted Successfully',
			'group_add_success'				=> 'Group Added Successfully',
			'group_delete_confirm'			=> 'Are you sure you want to delete ?',
		),
		'edit_group'				=> array(
			'title'					=>  'Edit Group',
			'group_name'			=>  'Group Name',
			'membership_type'		=>  'Membership Type',
			'invalid_group'		=>  'Invalid Group',
			'group_update_success'		=>  'Group Updated Successfully',
		),
		'view_members'				=> array(
			'title'					=>  'Members',
			'id_lbl'			=>  'ID',
			'username_lbl'		=>  'Username',
			'email_lbl'		=>  'Email',
			'credit_lbl'		=>  'Credit',
		),
		'set_pricing'				=> array(
			'title'					=>  'Set Pricing',
			'pricing_update_success'  => 'Pricing Updated Successfully',
			'update_discount_group'  => 'Update discount for this groups user',
			'update_discount_info'  => 'Tick this to apply price and service changes to this group owner now',
			'usd_lbl'				=>  'USD',
			'custom_credit_usd_lbl'				=>  'Custom Credit [USD]',
			'reset_discount'				=>  'Reset Discount',
			'reset_discount_msg'				=>  'Discount Resetted Successfully',
			'reset_discount_delete_msg'				=>  'Are you sure want to reset Discount of All services?',
			'credit_usd_lbl'		=>  'Credit [USD]',
			'group_credit_usd_lbl'		=>  'User Group Credit [USD]',
		)

);