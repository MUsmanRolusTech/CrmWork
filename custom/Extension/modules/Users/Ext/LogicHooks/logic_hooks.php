<?php
$hook_version = 1;
$hook_array = array();
// position, file, function

$hook_array['after_login'] = array();
$hook_array['after_login'][] = array(
    201,
    'afterLoginUserShowDate',
    'custom/modules/Update_ModulesState.php',
    'Update_ModulesState',
    'afterLoginUserShowDate'
);