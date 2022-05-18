<?php
$hook_version = 1;
$hook_array = array();
// position, file, function 
/*$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    9,
    'updateBeforeModulesState',
    'custom/modules/Update_ModulesState.php',
    'Update_ModulesState',
    'updateBeforeModulesState'
);*/
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    101,
    'updateAfterModulesState',
    'custom/modules/Update_ModulesState.php',
    'Update_ModulesState',
    'updateAfterModulesState'
);

$hook_array['after_ui_frame'] = array();
$hook_array['after_ui_frame'][] = array(
    301,
    'afterUiFrameHook',
    'custom/modules/Update_ModulesState.php',
    'Update_ModulesState',
    'afterUiFrameHook'
);