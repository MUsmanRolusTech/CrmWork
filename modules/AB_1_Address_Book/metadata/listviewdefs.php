<?php
$module_name = 'AB_1_Address_Book';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MOBILE_NO' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'OFFICE_NO' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
