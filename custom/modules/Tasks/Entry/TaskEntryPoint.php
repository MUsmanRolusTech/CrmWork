<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
echo 'Task Entry Point ';
$taskID = $_REQUEST['record'];
$task = BeanFactory::getBean('Tasks', $taskID);
echo "<pre>";
print_r($task);