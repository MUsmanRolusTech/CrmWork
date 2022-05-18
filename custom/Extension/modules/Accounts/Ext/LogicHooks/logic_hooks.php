<?php
$hook_version = 1;
$hook_array = array();
// position, file, function
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1,
    'createTaskAndLinkWithContacts',
    'custom/modules/Accounts/Accounts_TaskLinkContactsLogicHook.php',
    'Accounts_TaskLinkContactsLogicHook',
    'createTaskAndLinkWithContacts'
);
