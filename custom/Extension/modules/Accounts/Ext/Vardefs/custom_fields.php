<?php
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

$dictionary['Account']['fields']['custom_status'] = array(
        'name' => 'custom_status',
        'vname' => 'LBL_CUSTOM_STATUS',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
);

$dictionary['Account']['fields']['crm_t_status'] = array(
        'name' => 'crm_t_status',
        'vname' => 'LBL_CRM_T_STATUS',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => true,
);