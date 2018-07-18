<?php


return array(
	/*
	|--------------------------------------------------------------------------
	| Admin API Settings
	|--------------------------------------------------------------------------
	*/

		'title'							=> 'API Server Settings',
		'no_record_found'				=> 'No records found to list',
		'api_server_name'				=> 'API Server Name',
		'server_name'					=> 'Server Name',
        'service_type'                  => 'Type',
		'list_api_page_title'			=> 'List Api Services',
		'service_name'					=> 'Service Name',
		'exchange_credit_cost'			=> 'Exchange Credit Cost',
		'id'							=> 'Id',
		'api'							=> 'Api Name',
		'none_err_msg'					=> 'No Records Found',
		'status'						=> 'Status',
		'active_lbl'					=> 'Allow to Disconnect',
		'service_disconnected'			=> 'Service DisConnect',
		'api_name'						=> 'Api Name',
        'purchase'                      => 'Purchase',
        'regular'                       => 'Default',
		'group_name'					=> 'Group Name',
		'additional_amount'				=> 'Additional Amount',
		'amount_type'					=>	'Amount Type',
		'add_services'					=> 'Add Selected Services',
		'add_service'					=>	'Add Service',
		'credit'						=> 'Credit',
		'group'							=> 'Group Name',
		'price'							=>	'Price',
		'action'						=>	'Action',
		'select_any_one'				=>	'Select Any One',
		'add_api_server_services_title'	=>	'Add Api Server Services',
		'list'							=> array(
		'active'						=> 'Activated',
		'inactive'						=> 'Inactivated',
		'edit_synchronize'				=> 'Edit & Synchronize',
		'add_service '				    => 'Add Services from API',		
		),
		'edit'							=> array(
		'synchronize'					=> 'Synchronize',
		'name'							=> 'Name',
		'connect_other_gsm_hub_site'	=> 'Connect Other Gsm Hub site',
		'connect_other_bruteforce_hub_site' => 'Connect Other Bruteforce Hub site',
		'auto_submit_api_order'			=> 'Auto Submit Api Order',
		'syncbrand'						=> 'Synchronize Brand / Model list.',
		'synccontry'					=> 'Synchronize Country / Provider Network list.',
		'syncmep'						=> 'Synchronize MEP list.',
		'setupmyserver'					=> 'Setup my all services same as this api services.',
		'deleteservices'				=> 'Delete all my current imei service list/groups.',
		'delmodels'						=> 'Delete all Brand / Model list before synchronize.',
		'delprovider'					=> 'Delete all Country / Provider Network list before synchronize.',
		'delmep'					    => 'Delete all MEP list before synchronize.',
		'fee_percent'					=> 'Additional % for the credits',
		'fee_flat'					    => 'Additional flat amount for the credits',
		'credit_threshold_limit'		=> 'Credit Balance threshold limit',
		'notification_emails'			=> 'Notification emails (separated by comma)',
		'cdr_available'					=> 'CDR available',
		'api_currency'					=> 'API Currency',
		'cdr_available_notes'			=> 'If cdr option is available with this site, check here and configure the CDR details in the site.',
		),
		'cron'							=> array(
		'title'							=> 'Cron Url',
		'cron_to_enable'				=> 'To enable APi automation features to run, make sure you set up a cron job to run Every minute.Create the following Cron Job using PHP',
		'cron_separate_cron_job_imei'	=> 'OR Set Up separate cron jobs by api server (recommended)',
		'cron_separate_cron_job_file'	=> 'For File Service api set up this crons separately and run every 10 minute',
		'cron_separate_cron_job_server'	=> 'For Server Service api set up this crons separately and run every 10 minute',
		),
		'maintenance'					=> array(
		'title'							=> 'Maintenance Mode',
		'status'						=> 'System In ',
		'to_timming'					=> 'Approx Maintenance Backtime ',
		'notification'					=> 'Maintenance Message ',
		'hours'							=> 'Hours',
		),
		'API_Server' => 'API Server',
		'API_Server_Detail' => 'API Server Detail',

);