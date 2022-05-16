<?php

$dictionary['Lead']['fields']['relate_ab_1_address_book_id'] = array(
    'name' => 'relate_ab_1_address_book_id',
    'vname' => 'LBL_RELATE_AB_1_ADDRESS_BOOK_ID',
    'rname' => 'name',
    'type' => 'relate',
    'reportable' => false,
    'source' => 'non-db',
    'table' => 'ab_1_address_book',
    'id_name' => 'ab_1_address_book_id',
    'module' => 'AB_1_Address_Book',
);

$dictionary['Lead']['fields']['ab_1_address_book_id'] = array(
    'name' => 'ab_1_address_book_id',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_ID',
    'table' => 'leads',
    'module' => 'leads',
    'reportable' => true,
    'isnull' => 'false',
    'type' => 'id',
    'len' => '36',
    'size' => '20',
    'audited' => true,
    'duplicate_merge' => 'disabled',
);
?>