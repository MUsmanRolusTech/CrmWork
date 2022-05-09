<?php

$dictionary['Contact']['fields']['custom_phone_no'] = array(
        'name' => 'custom_phone_no',
        'vname' => 'LBL_CUSTOM_PHONE_NO',
        'type' => 'varchar',
        'len' => '24',
        'importable' => 'false',
);

$dictionary['Contact']['fields']['created_date_time'] = array(
        'name' => 'created_date_time',
        'vname' => 'LBL_CREATED_DATE_TIME',
        'type' => 'datetime',
);

$dictionary['Contact']['fields']['identity'] = array(
        'name' => 'identity',
        'vname' => 'LBL_IDENTITY',
        'type' => 'int',
);

$dictionary['Contact']['fields']['custom_contact_status'] = array(
        'name' => 'custom_contact_status',
        'vname' => 'LBL_CUSTOM_CONTACT_STATUS',
        'type' => 'enum',
        'options' => array(
                'Approved' => 'Approved',
                'Disapproved' => 'Disapproved',
        ),
);
