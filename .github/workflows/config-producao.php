<?php  // Moodle configuration file - PRODUÇÃO (gerado pelo GitHub Actions)

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'u378832002_arabuena';
$CFG->dbuser    = 'u378832002_arabuena';
$CFG->dbpass    = 'MOODLE_DB_PASS';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://arabuena.com/ava/moodle';
$CFG->dataroot  = '/home/u378832002/domains/arabuena.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');
