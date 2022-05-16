<?php
// Do not store anything in this file that is not part of the array or the hook
//version.  This file will be automatically rebuilt in the future.
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
