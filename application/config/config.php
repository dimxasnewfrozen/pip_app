<?php 

$config['app_folder'] = 'pip_app';
$config['base_url']   = 'http://localhost/pip_app'; // Base URL including trailing slash (e.g. http://localhost/)
$config['view_path']  = APP_DIR . '/views';
$config['css_url']	  = $config['base_url']  . '/assets/css';
$config['js_url'] 	  = $config['base_url']  . '/assets/js';
$config['img_url'] 	  = $config['base_url']  . '/assets/img';


$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['db_host'] = ''; // Database host (e.g. localhost)
$config['db_name'] = ''; // Database name
$config['db_username'] = ''; // Database username
$config['db_password'] = ''; // Database password

?>