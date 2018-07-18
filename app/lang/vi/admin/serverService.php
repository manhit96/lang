<?php


return array(
	/*
	|--------------------------------------------------------------------------
	| Admin Server Service
	|--------------------------------------------------------------------------
	*/

		'title'							=> 'Server Service',
		'no_record_found'				=> 'No records found to list',
		'ignore_profit'					=> 'Ignore Profit',
		'add_profit'					=> 'Add Profit',
		'ignore_from_profit'			=> 'Ignore From Profit',
		'api_inventory_balance'			=> 'Api Inventory Balance',
		'service_group'					=> array(
			'title'							=> 'Add Service Group',
			'name'       					=> 'Name',
			'status'						=> 'Status',
			'list_title'					=> 'List  Service Group',
			'edit_title'					=> 'Edit  Service Group',
			'description'					=> 'Description',
			'imagelink'						=> 'Logo',
		),
		'add_server_service'				=> array(
			'title'							=> 'Add New Service ',
			'service_name'					=> 'Service Name',
			'service_group'					=> 'Service Listed In Group',
			'select_service_group'			=> 'Select Service Group',
			'api_server_delivery_time'		=> 'Api Server Delivery Time',
			'duplicate'						=> 'Duplicate',
			'process_time'					=> 'Delivery Time',
			'credit'						=> 'Credit',
			'knowledge_base'				=> 'Knowledge Base',
            'show_notification'             => 'Show Notification For User',
            'service_image'					=> 'Service Logo',
			'notify_mail'					=> 'Notify Mails',
			'status'						=> 'Status',
			'set_service_price'				=> 'Set Service Price',
			'success_message'				=> 'server service Added Successfully',
			'duplicate'						=> 'Duplicate',
			'new_service_name'				=> 'New Service Name',
			'verification'					=> 'Verification',
			'verification_tip_msg'			=> 'User can send replied order for verification of this service',
			'response_delay_time'			=> 'Response Delay Time',
			'reset_discount'				=> 'Reset Discount',
			'reset_discount_button'			=> 'Reset all discount allow to user of this service ',
			'allow_cancel'					=> 'Cancel Order',
			'allow_cancel_tip_msg'			=> 'User can canceled order of this service',
			'new_order_notification'		=> 'New Order Notification by E-mail',
			'new_order_notification_tip_msg'=> 'Send order notification email other than admin. If its disable then admin and other supplier will not get emails.',
			'service_credit_mail'			=> 'Send Service Credit information to all Users',
			'service_promotion_mail'		=> 'Send Service Promotion information to all Users',
			'send_mail'						=> 'Send mail',
			'send_mail_notes'				=> 'User Notes',
			'hide_quantity'				    => 'Hide Quantity',
		),
		'remove_server_service'           => array(
			 'title'						=> 'Remove Service',
			 'remove_label'					=> 'Remove',
			 'soft_delete_label'			=> 'Soft Delete',
			 'hard_delete_label'			=> 'Physically Remove',
			 'remove_orders'				=> 'Remove Orders',
			 'pending_order_info'			=> 'This service has pending orders',
			 'remove_service_success'		=> 'Server Service Removed Successfully',
			 'remove_client_group'			=> 'Remove Client Group',
		),
		'list_server_service'				=> array(
			'title'							=> 'List Server Service',
			'id'							=> 'ID',
			'credit'						=> 'Credit',
			'service_credit'				=> 'Service Credit',
			'api_credit_balance'			=> 'Api Credit Balance',
			'service_name'					=> 'Server Service Name',
			'no_record_found'				=> 'No records found to list',
			'service_name'					=> 'Service Name',
			'service_group'					=> 'Service Group',
			'status'						=> 'Status',
			'serial_key'					=> 'Serial Key',
		),
		'service_update_setting'				=> array(
			'auto_update'					=> 'Auto Update Order Status for First time',
			'repeat_fetch'					=> 'Auto Update Order Status for Every time',
			'max_update'					=> 'Maximum Allowed Update',
			'times'							=> 'times',
			'for'							=> 'for',
			'minute'						=> 'Minutes',
			'hour'							=> 'Hours',
			'day'							=> 'Days',
			'after_order_label'				=> 'after the order placed for first time only',
			'repeat_fetch_label'			=> 'after  placeing order every time except first time',
		),
		'edit_server_service'				=> array(
			'title'							=> 'Edit Server Service',
			'notification_mail'				=> 'Notification email',
			'notification_mail_message'		=> 'The specified emails will receive notifications when order submitted for this service',
			'supplier_activation_mail_message'		=> 'The specified emails separated by comma will receive notifications when serial alloted for this service',
			'server_logo'						=> 'Logo',
			'duplicate_reference'					=> 'Service Type',
			'features'						=> 'Features',
			'refund_available_not_found'	=> 'Refund available if code is not found',
			'service_available_24'		=> 'Service Available 24/7',
			'unlock_guaranteed'				=> 'Unlock Guaranteed',
			'no_refund_for_bad_data'		=> 'No refund for bad requests',
			'working_on_business'			=> 'Working on Business days only ',
			'service_infomation'			=> 'Service Information',
			'model'							=> 'Brands / Models',
			'provider'						=> 'Country / Provider',
			'requires_pin'						=> 'PIN',
			'requires_kbh'						=> 'KBH',
			'requires_prd'						=> 'PRD',
			'requires_type'						=> 'TYPE',
			'requires_reference'				=> 'REFERENCE',
			'requires_locks'					=> 'LOCKS',
			'server_feild_settings'			=> 'Server Field Settings',
			'server_bulk'						=> 'Allow Bulk',
			'server_custom'					=> 'Custom Server Field',
			'server_custom_len'				=> 'Server Length',
			'server_custom_label'				=> 'Custom Server Name',
			'server_custom_information'		=> 'Custom Server Information',
			'server_custom_validate'			=> 'Accept Alphabet ',
			'custom_fields'					=> 'Custom Fields',
			'api'							=> 'Connect API',
			'api_select'					=> '--none--',
			'api_id'						=> 'API Services',
			'success_massage'				=> 'Server service Updated Successfully',
			'api_submit_status'				=> 'Auto Submit Api Order',
			'assign_brand'					=> 'Assign Brands',
			'brand'							=> 'Brand',
			'remove_service'				=> 'Remove Service',
			'purchase_cost_none_info'		=> 'Your Purchase cost not set yet <a href="VAR_LINK" class="fn_service_info">Click here</a> to set your purchase cost. ',
			'purchase_cost'					=> 'Purchase Cost:',
			'inventory'						=> 'Inventory',
			'current_stock'					=> 'Current Stock',
			'serial_key'					=> 'Serial Keys',
			'auto_assign'					=> 'Reply order from stock',
			'serial_key_note_msg'			=> 'Serial key separated by new line',
			'set_pricing'					=> '<a href="VAR_LINK" class="fn_set_purchase_cost btn btn-xs green-meadow">Set Pricing</a>',
			'stock_statement_title'			=> 'Stock Statement',
			'id_lbl'						=> 'ID',
			'serial_key'					=> 'Serial Key',
			'order_details'					=> 'Order Details',
			'date_added'					=> 'Date Added',
			'status'						=> 'Status',
			'status_deleted'				=> 'Deleted',
			'delete_confirm_msg'			=> 'Are you sure you want to Delete this Serial key?',
			'selected_delete_confirm_msg'	=> 'Are you sure you want to delete selected Serial keys?',
			'set_assign_confirm_msg'		=> 'Are you sure you want to Mark Serial key as Assigned?',
			'serial_key_removed_suc_msg'	=> 'Serial Key Deleted',
			'mark_assigned_suc_msg'			=> 'Serial Key Marked as Assigned',
			'serial_key_succ_msg'			=> 'Success: VAR_SUCCESS_COUNT',
			'serial_key_ignore_msg'			=> 'Ignored Duplicate Entries: VAR_ERROR_MSG',
			'serial_key_none_msg'			=> 'No serial key found to list',
			'serial_key_deleted_msg'		=> 'Selected serial keys deleted',
			'user_name'						=> 'Username',
			'group_name'					=> 'Group Name',
			'credits'						=> 'Credits',
			'purchase_cost'					=> 'Purchase Cost Per Unit',
			'supplier_activation_mail'		=> 'Supplier mail for activation',
			'current_stock'					=> 'Current Stock',
			'stock_calculation'				=> 'Stock Calculation',
			'service_types'				    => 'Service Types',
			'logo_err_msg'					=> 'Logo must be a file of type: ',
		),
		'server_service_fields'			=> array(
			'field_type'					=> 'Field Type',
			'name'							=> 'Name',
			'description'					=> 'Description',
			'field_option'					=> 'Field Options',
			'field_option_tooltip'			=> 'More then one values separated by commas',
			'validation'					=> 'Validation',
			'required'						=> 'Required',
			'status'						=> 'Status',
			'action'						=> 'Action',
		),
		'set_purchase_cost'			=> array(
			'title'							=> 'Purchase Cost',
		),
		'set_service_price'			=> array(
			'title'							=> 'Service Pricing',
			'currency_usd'					=> 'USD',
			'purchase_cost'					=> 'Purchase Cost',
			'credit'					    => 'Default Credit',
			'price_update_success'			=> 'Service Pricing Updated Successfully',
			'purchase_cost_update_success'			=> 'Purchase Cost Updated Successfully',
			'member_price_update_success'			=> 'Member Service Pricing Updated Successfully',
			'set_price_info'				=> 'Your Purchase cost not set yet <a href="VAR_PRICE_URL" class="fn_service_info">Click here</a> to set your purchase cost. ',
			'client_group_price'			=> 'Client Group Price',
		),
		'quick_edit_service'				=> array(
			'title'							=> 'Quick Edit Server service',
			'service_group'					=> 'Service Group',
			'empty_service_group'			=> 'Service Group -- Empty ( Add Service Group )',
			'service_name'					=> 'Service Name',
			'credit'						=> 'Credit',
			'process_time'					=> 'Process Time',
			'time_unit'						=> 'Time Unit',
			'action'						=> 'Action',
			'service_type'					=> 'Service Type',
			'support_service_for_one_year'	=> 'Support for one year',
			'support_service_for_two_years'	=> 'Support for two years',
			'disconnect_api_suc_msg'		=> 'Disconnected API for selected services',
			'remove_api_suc_msg'			=> 'Selected Services Removed Successfully',
			'disconnect_api_confirm_msg'	=> 'Are you sure to disconnect API for selected services ?',
			'select_action_err_msg'			=> 'Select the action',
			'remove_service_err_msg'		=> 'Are you sure to remove the selected services ?',
			'select_service_err_msg'		=> 'Select Any Service',
			'select_delete_type_err_msg'	=> 'Select Service Removal Type',
			'service_name_exist_err'		=> 'This service name already exists',
			'service_info_update_success'	=> 'Service Information updated Successfully',
			'credit_range_update_success'	=> 'Credit range updated Successfully',
			'quantity_range'				=> 'Quantity Range',
			'credit'						=> 'Credit',
			'supplier_cost'					=> 'Supplier Cost',
			'from_range'					=> 'From range',
			'to_range'						=> 'To range',
			'range'							=> 'Range',
			'add_credits_range'				=> 'Add Credits Range',
			'click_add_credits_range'		=> 'Click here to add credits range',
			'purchase_cost_invalid'			=> 'Purchase Cost format is invalid',
			'credit_cost_invalid'			=> 'Credit format is invalid',
			'apply_special_discount'		=> 'Apply Special discount price <small class="text-muted">(<strong>Note:</strong> Set Range price when special discount is not set)</small>',
			'service_type_del_confirm_msg'	=> 'Are you sure you wnat to delete Service Type?',
			'service_type_del_succ_msg'		=> 'Server Service Type deleted successfully!',
			'service_type_del_selected'		=> 'Delete Selected Service Type',
		),
		'order_history'						=> array(
			'title'							=> array(
			'all'							=> 'Show All Order History',
			'new'							=> 'New Order History',
			'accepted'						=> 'Accepted Order History',
			'rejected'						=> 'Rejected Order History',
			'cancelled'						=> 'Cancelled Order History',
			'completed'						=> 'Completed Order History',

			),
			'view_details_lbl'				=> 'View Details',
			'result'						=> 'Result',
			'job_data'						=> 'Job Data',
			'note'					=> 'Note',
			'estimated_start_in'			=> 'Estimated Start In',
			'calculation_start_on'			=> 'Started On',
			'calculation_solved_on'			=> 'Solved On',
			'calculation_percent_done'		=> 'Percent Done',
			'srch_order' 					=> 'Search Order',
			'server_user_name' 				=> 'Transfered to  User',
			'order_code' 					=> 'Order Code',
			'model_name' 					=> 'Model',
			'status_label' 					=> 'Status',
			'api_status_label' 				=> 'Order Status',
			'unlock_code' 					=> 'Unlock Code',
			'server_label' 					=> 'Server',
			'transfer_credit'				=> 'Credited Amount',
			'completed_on'					=> 'Completed On',
			'unlock_tool' 					=> 'Unlock Tool',
			'message'						=> 'Message',
			'tool_name' 					=> 'Tool',
			'service_name' 					=> 'Service',
			'id' 							=> 'Id',
			'date_added' 					=> 'Date Added',
			'server_name'					=> 'Service',
			'username' 						=> 'Username',
			'no_records_found' 				=> 'No records found',
			'user' 							=> 'User',
			'date_lbl' 						=> 'Date',
			'added_on'	 					=> 'Added on',
			'processing_time'	 			=> 'Processing Time',
			'replied_on'	 				=> 'Replied on',
			'completed_lbl'					=> 'Completed',
			'added_lbl'						=> 'Added',
			'order_for_verification_title'	=> 'Orders for Verification',
			'data'							=> 'Data',
		),
		'service_wise'					=> array(
			'title'							=> 'Server Order Service Wise',
			'service'						=> 'Service',
			'api_connection'				=> 'Api Connection',
			),
		'quick_accept'					=> array(
			'title'							=> 'Quick Accept Server Order',
			'service'						=> 'Service',
			'id'							=> 'ID',
			'order_code'					=> 'Order Code',
			'username'						=> 'Username',
			'credit'						=> 'Credit',
			'data'							=> 'Data',
			'server'							=> 'Server',
			'accept_all'					=> 'Accept All',
			'accept_selected'				=> 'Accept Selected',
			'rejected_selected'				=> 'Reject Selected',
			'empty_select'					=> 'You have to select one or more rows to carry out this operation!',
			'rejected_reason'				=> 'Rejected by admin request',
			'date'							=> 'Date',
			),
		'order_history_reply'			=> array(
			'title'							=> 'Reply Accepted Server Orders',
			'id'							=> 'ID',
			'service_name'					=> 'Service Name',
			'date_added'					=> 'Date',
			'total_credit'					=> 'Total Credit',
			'username'						=> 'Username',
			'server_label' 					=> 'Server',
			'reply_label' 					=> 'Reply',
			'reply_order_btn_label' 		=> 'Reply Order',
			'reply_selected_btn_label' 		=> 'Reply Selected',
			'reject_label' 					=> 'Reject',
			'tip_note' 						=> 'Note: Reply code or Write VAR_TIP_MSG',
			'reply_added_succ_msg' 			=> 'Server Service Orders Replies Added Successfully',
			'sel_reply_added_succ_msg' 		=> 'Replies Added for Selected Server Service Orders Successfully',
			'extract_all'					=> 'Extract All',
			'bulk_reply'					=> 'Bulk Reply',
			'reply_separated_by'			=> 'Reply Separated By',
			'rejected_word'					=> 'Rejected Word',
			'file_content_none_err'			=> 'Upload File or Bulk Reply',
			'uploader_allow_format_err_msg'	=> 'Invalid file format',
			'uploader_allow_size_err_msg'	=> 'Invalid file size',
			'bulk_reply_note_msg'			=> "This page allows you to reply bulk server in single file or in bulk number
Bulk number seperated by new line and reply code seperated by ',' , '-' etc. default seperator is space ex.(111111111111119 999999999999)
specify rejected word for reply reject order with server number",
			'bulk_reply_added_succ_msg' 	=> 'Server Service Orders Bulk Reply Added Successfully',
			'data'							=> 'Data',
			'notes'							=> 'Notes',
			),
			'customer_review'					=> array(
			'name'								=> 'Name',
			'email'								=> 'Email',
			'date'								=> 'Date',
			'comments'							=> 'Comments',
			'rating'							=> 'Rating/5',
			'ip'								=> 'Ip',
			'action'							=> 'Action',
			'status'							=> 'Status',
			),

	'List_All_server_Services'      => 'List All Server Services',
      'Quick_Edit_Server_Services'      => 'Quick Edit  Server Services',
      'Add_New_Services'          => 'Add New Services',
      'List_Service_Group'        => 'List Service Group',
      'Add_Service_Group'         => 'Add Service Group',
      'Quick_Edit' => 'Quick Edit',
      'Apply_On_Selected' => 'Apply On Selected',
      'Save_All' => 'Save All',


      'Overview'            => 'Overview',
      'Field'             => 'Field',
      'Api_Connections'       => 'Api Connections',
      'Auto_Update_Settings'      => 'Auto Update Settings',
      'Discounted_Users'        => 'Discounted Users',
      'Customer_Review'       => 'Customer Review',
      'Inventory'           => 'Inventory',
      'Promotion'           => 'Promotion',
      'Subscription'          => 'Subscription',
      'Stock_Statement' => 'Stock Statement',
      'More' => 'More... ',
      'Subscriber_List'       => 'Subscriber List',
      'Promotion_Time/Happy_Hours' => 'Promotion Time / Happy Hours',
      'Through_Date' => 'Through   Date',
      'Start_On' => 'Start On',
      'End_On' => 'End On',
      'Repeat_Every_Month' => 'Repeat  Every Month',
      'Through_days' => 'Through days',

      'Sunday'            => 'Sunday',
      'Monday'            => 'Monday',
      'Tuesday'           => 'Tuesday',
      'Wednesdsy'           => 'Wednesdsy',
      'Thrusday'            => 'Thrusday',
      'Friday'            => 'Friday',
      'Saturday'            => 'Saturday',

      'Repeat_Every_Week' => 'Repeat Every Week',
      'EveryTime' => 'EveryTime',
      'Every_day_repeat_promotion_credit' => 'Every day repeat promotion credit',
         'Promotion_Discount' => 'Promotion Discount',
         'Current_Price' => 'Current Price',
         'Retail_Price' => 'Retail Price',

          'server_details' => 'Server details',
         'Settings&Custom' => 'Settings & Custom',
         'API_details' => 'API details',
         'Auto_Update_Settings' => 'Auto Update Settings',
         'Discounted_Users_List' => 'Discounted Users List',
         // {{trans("admin/serverService.Quick_Edit")}}
		'Meta_details' => 'Meta Details',
		'meta_title' => 'Meta Title',
		'meta_description' => 'Meta Description',
		'meta_keyword'	=> 'Meta Keyword',
		'meta_title_hint'=>'Leave blank to use Service Name as SEO title'
);