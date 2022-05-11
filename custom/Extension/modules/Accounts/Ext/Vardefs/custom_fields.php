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
        'id_name' => 'csm_contact_id',
        'type' => 'relate',
        'rname' => 'name',
        'vname' => 'LBL_RELATE_FIELD_CONTACT_ID',
        'module' => 'Contacts',
        'source' => 'non-db',
        'studio' => 'visible',
);

$dictionary['Account']['fields']['csm_contact_id'] = array(
        'inline_edit' => 1,
        'required' => false,
        'source' => 'custom_fields',
        'name' => 'csm_contact_id',
        'vname' => 'LBL_CSM_CONTACT_ID',
        'type' => 'id',
        'massupdate' => '0',
        'default' => NULL,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'reportable' => false,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '36',
        'size' => '20',
        'id' => 'Accountscsm_contact_id',
        'custom_module' => 'Accounts',
);