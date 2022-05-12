<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary['Account']['fields']['custom_mobile'] = array(
        'name' => 'custom_mobile',
        'vname' => 'LBL_CUSTOM_MOBILE',
        'type' => 'varchar',
        'len' => '510',
        'importable' => 'false',
);

$dictionary['Account']['fields']['custom_sur_name'] = array(
        'name' => 'custom_sur_name',
        'vname' => 'LBL_CUSTOM_SUR_NAME',
        'type' => 'char',
        'len' => '255',
        'importable' => 'true',
);

$dictionary['Account']['fields']['relate_field_contact_id'] = array(
        'name' => 'relate_field_contact_id',
        'vname' => 'LBL_RELATE_FIELD_CONTACT_ID',
        'rname' => 'name',
        'type' => 'relate',
        'reportable' => false,
        'source' => 'non-db',
        'table' => 'accounts',
        'id_name' => 'csm_contact_id',
        'module' => 'Accounts',
);

$dictionary['Account']['fields']['csm_contact_id'] = array(
        'name' => 'csm_contact_id',
        'vname' => 'LBL_CSM_CONTACT_ID',
        'table' => 'accounts',
        'module' => 'Accounts',
        'reportable' => true,
        'isnull' => 'false',
        'type' => 'id',
        'audited' => true,
        'duplicate_merge' => 'disabled',
);

// created: 2022-05-11 15:17:35
$dictionary["Account"]["fields"]["accounts_fp_events_1"] = array (
  'name' => 'accounts_fp_events_1',
  'type' => 'link',
  'relationship' => 'accounts_fp_events_1',
  'source' => 'non-db',
  'module' => 'FP_events',
  'bean_name' => 'FP_events',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
);


 // created: 2022-05-05 16:58:43
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2022-05-05 16:58:43
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2022-05-10 17:01:22
$dictionary['Account']['fields']['contact_user_id_c']['inline_edit']='';
$dictionary['Account']['fields']['contact_user_id_c']['labelValue']='contact user id';

 

 // created: 2022-05-11 14:45:57
$dictionary['Account']['fields']['event_relate_field_c']['inline_edit']='1';
$dictionary['Account']['fields']['event_relate_field_c']['labelValue']='Event Relate Field';

 

 // created: 2022-05-05 16:58:43
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2022-05-10 18:18:32
$dictionary['Account']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2022-05-10 14:44:26
$dictionary['Account']['fields']['relate_test_c']['inline_edit']='1';
$dictionary['Account']['fields']['relate_test_c']['labelValue']='relate test';

 

 // created: 2022-05-10 18:22:41
$dictionary['Account']['fields']['contact_id1_c']['inline_edit']=1;

 

 // created: 2022-05-10 17:01:22
$dictionary['Account']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2022-05-10 18:22:41
$dictionary['Account']['fields']['main_contact_id_c']['inline_edit']='1';
$dictionary['Account']['fields']['main_contact_id_c']['labelValue']='Main Contact ID';

 

 // created: 2022-05-11 14:45:57
$dictionary['Account']['fields']['fp_events_id_c']['inline_edit']=1;

 

 // created: 2022-05-05 16:58:43
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>