<?php
$hook_version = 1;
$hook_array = array();
// position, file, function
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1,
    'updateRelatedCallsInfo',
    'modules/AB_1_Address_Book/AB_1_Address_Book_CallsLogicHook.php',
    'AB_1_Address_Book_CallsLogicHook',
    'updateRelatedCallsInfo'
);
