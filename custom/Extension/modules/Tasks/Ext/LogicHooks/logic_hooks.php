<?php
$hook_version = 1;
$hook_array = array();
// position, file, function

$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    150,
    'updateTaskIfAccountChanged',
    'custom/modules/Tasks/Tasks_AccountsLogicHook.php',
    'Tasks_AccountsLogicHook',
    'updateTaskIfAccountChanged',
);

$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    150,
    'updateRelatedAccountsInfo',
    'custom/modules/Tasks/Tasks_AccountsLogicHook.php',
    'Tasks_AccountsLogicHook',
    'updateRelatedAccountsInfo',
);

$hook_array['after_relationship_add'] = array();
$hook_array['after_relationship_add'][] = array(
    152,
    'addRelationshipWithSubTask',
    'custom/modules/Tasks/Tasks_AccountsLogicHook.php',
    'Tasks_AccountsLogicHook',
    'addRelationshipWithSubTask',
);
