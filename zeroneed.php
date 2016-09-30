<?php
//--------------------------------------------------------------------------------------------------
// ZERONEED PHP WEB FRAMEWORK
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Start
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$start = microtime();

//--------------------------------------------------------------------------------------------------
// REQUEST_URI
//--------------------------------------------------------------------------------------------------
//
//  @return REQUEST_URI
//
//--------------------------------------------------------------------------------------------------
define('REQUEST_URI', $_SERVER['REQUEST_URI'] ?? NULL);

//--------------------------------------------------------------------------------------------------
// DS
//--------------------------------------------------------------------------------------------------
//
// @return const DIRECTORY_SEPARATOR
//
//--------------------------------------------------------------------------------------------------
define('DS', DIRECTORY_SEPARATOR);

//--------------------------------------------------------------------------------------------------
// REAL_BASE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
define('REAL_BASE_DIR', realpath(__DIR__) . DS);

//--------------------------------------------------------------------------------------------------
// Current Working Dir
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
chdir(REAL_BASE_DIR);

//--------------------------------------------------------------------------------------------------
// INTERNAL_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/
//
//--------------------------------------------------------------------------------------------------
define('INTERNAL_DIR', REAL_BASE_DIR . 'Internal' . DS);

//--------------------------------------------------------------------------------------------------
// Require Base Level
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Priority/BaseLevel.php
//
//--------------------------------------------------------------------------------------------------
require_once INTERNAL_DIR . 'Priority/BaseLevel.php';

//--------------------------------------------------------------------------------------------------
// Invalid PHP Version
//--------------------------------------------------------------------------------------------------
//
// Versiyon Kontrolü Yapılıyor.
//
//--------------------------------------------------------------------------------------------------
if( ! isPhpVersion(REQUIRED_PHP_VERSION) )
{
    trace('Invalid PHP Version! Required PHP version ["'.REQUIRED_PHP_VERSION.'"] and should be over!');
}

//--------------------------------------------------------------------------------------------------
// PROJECTS_CONFIG
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Projects.php
//
//--------------------------------------------------------------------------------------------------
define('PROJECTS_CONFIG', require_once PROJECTS_DIR . 'Projects.php');

//--------------------------------------------------------------------------------------------------
// DEFAULT_PROJECT
//--------------------------------------------------------------------------------------------------
//
// @return Frontend/
//
//--------------------------------------------------------------------------------------------------
define('DEFAULT_PROJECT', PROJECTS_CONFIG['directory']['default']);

//--------------------------------------------------------------------------------------------------
// Require High Level
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Priority/HighLevel.php
//
//--------------------------------------------------------------------------------------------------
require_once INTERNAL_DIR . 'Priority/HighLevel.php';

//--------------------------------------------------------------------------------------------------
// Internal Current Project
//--------------------------------------------------------------------------------------------------
//
// @param void
//
//--------------------------------------------------------------------------------------------------
internalCurrentProject();

//--------------------------------------------------------------------------------------------------
// Core File
//--------------------------------------------------------------------------------------------------
//
// Internal/Core/Required.php
//
//--------------------------------------------------------------------------------------------------
require_once REQUIRED_FILE;

//--------------------------------------------------------------------------------------------------
// Finish
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$finish = microtime();

//--------------------------------------------------------------------------------------------------
// Benchmark Table
//--------------------------------------------------------------------------------------------------
//
// Benchmark
//
//--------------------------------------------------------------------------------------------------
internalBenchmarkReport($start, $finish);
