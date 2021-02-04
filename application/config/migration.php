<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Migrations */
$config['migration_enabled'] = FALSE;

/* Migration Type */
$config['migration_type'] = 'timestamp';

/* Migrations Table */
$config['migration_table'] = 'migrations';

/* Auto Migrate To Latest */
$config['migration_auto_latest'] = FALSE;

/* Migrations Version */
$config['migration_version'] = 0;

/* Migrations Path */
$config['migration_path'] = APPPATH.'migrations/';
