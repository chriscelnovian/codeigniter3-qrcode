<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Base Site URL */
$config['base_url'] = getenv('BASE_URL');

/* Index File */
$config['index_page'] = '';

/* URI Protocol */
$config['uri_protocol']	= 'REQUEST_URI';

/* URL Suffix */
$config['url_suffix'] = '';

/* Default Language */
$config['language']	= 'english';

/* Default Character Set */
$config['charset'] = 'UTF-8';

/* System Hooks */
$config['enable_hooks'] = FALSE;

/* Class Extension Prefix */
$config['subclass_prefix'] = 'MY_';

/* Composer Auto Loading */
$config['composer_autoload'] = FALSE;

/* Allowed URL Characters */
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/* Enable Query Strings */
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';

/*Allow $_GET array */
$config['allow_get_array'] = TRUE;

/* Error Logging Threshold */
$config['log_threshold'] = 0;

/* Error Logging Directory Path */
$config['log_path'] = '';

/* Log File Extension */
$config['log_file_extension'] = '';

/* Log File Permissions */
$config['log_file_permissions'] = 0644;

/* Date Format for Logs */
$config['log_date_format'] = 'Y-m-d H:i:s';

/* Error Views Directory Path */
$config['error_views_path'] = '';

/* Cache Directory Path */
$config['cache_path'] = '';

/* Cache Include Query String */
$config['cache_query_string'] = FALSE;

/* Encryption Key */
$config['encryption_key'] = '';

/* Session Variables */
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;

/* Cookie Related Variables */
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;

/* Standardize Newlines */
$config['standardize_newlines'] = FALSE;

/* Global XSS Filtering */
$config['global_xss_filtering'] = FALSE;

/* Cross Site Request Forgery */
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();

/* Output Compression */
$config['compress_output'] = FALSE;

/* Master Time Reference */
$config['time_reference'] = 'local';

/* Rewrite PHP Short Tags */
$config['rewrite_short_tags'] = FALSE;

/* Reverse Proxy IPs */
$config['proxy_ips'] = '';
