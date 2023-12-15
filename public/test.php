<?php
// Fuel initialization (inspired from index.php)
define('DOCROOT', __DIR__.DIRECTORY_SEPARATOR);
define('APPPATH', realpath(__DIR__.'/../fuel/app/')
.DIRECTORY_SEPARATOR);
define('PKGPATH', realpath(__DIR__.'/../fuel/packages/')
.DIRECTORY_SEPARATOR);
define('COREPATH', realpath(__DIR__.'/../fuel/core/')
.DIRECTORY_SEPARATOR);
defined('FUEL_START_TIME') or define('FUEL_START_TIME',
microtime(true));
defined('FUEL_START_MEM') or define('FUEL_START_MEM',
memory_get_usage());
require COREPATH.'classes'.DIRECTORY_SEPARATOR.'autoloader.php';
class_alias('Fuel\\Core\\Autoloader', 'Autoloader');
require APPPATH.'bootstrap.php';
echo 'FuelPHP is initialized...';

// --- Creating new objects
$project = Model_Project::forge(); // = new Model_Project()
$project->name = 'lau';
$project->save();

// // --- Finding specific objects
// $project = Model_Project::find(3);
// \Debug::dump('lalala', $project);

// // --- Updating an object
// $project = Model_Project::find(1); // Load project with id = 1
// $project->name = 'First one';
// $project->save();

// // --- Deleting an object.
// $project = Model_Project::find(1); // Load project with id = 1
// $project->delete();

// $task = Model_Task::find(1, array('from_cache' => false));
// $project = $task->project;
// \Debug::dump('Project of task with id = 1', $project);

// $project = Model_Project::find(2, array('from_cache' => false));
// $tasks = $project->tasks;
// \Debug::dump('Tasks of project with id = 2', $tasks);

// $task = Model_Task::find(2, array('from_cache' => false));
// $task->project = Model_Project::find(1);
// $task->save();
// \Debug::dump('ssssssssss', $task);

// $task = Model_Task::find(2, array('from_cache' => false));
// $task->project_id = 2;
// $task->save();
// \Debug::dump('lllllllllllllll', $task);

// $project = Model_Project::find(2, array('from_cache' => false));
// \Debug::dump('Project with id = 2', $project->tasks);
// echo $project->tasks;





