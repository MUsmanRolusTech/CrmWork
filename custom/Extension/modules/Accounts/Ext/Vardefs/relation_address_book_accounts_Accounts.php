<?php
$dictionary["Account"]["fields"]["ab_1_address_book_accounts_name"] = array(
    'name' => 'ab_1_address_book_accounts_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_ACCOUNTS_FROM_ADDRESS_BOOK_TITLE',
    'save' => true,
    'id_name' => 'ab_1_address_book_id',
    'link' => 'ab_1_address_book_accounts',
    'table' => 'ab_1_address_book',
    'module' => 'AB_1_Address_Book',
    'rname' => 'name',
);
$dictionary["Account"]["fields"]["ab_1_address_book_id"] = array(
    'name' => 'ab_1_address_book_id',
    'rname' => 'id',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_ID',
    'type' => 'id',
    'table' => 'ab_1_address_book',
    'isnull' => 'true',
    'module' => 'AB_1_Address_Book',
    'reportable' => false,
    'massupdate' => false,
    'inline_edit' => 1,
    'duplicate_merge' => 'disabled',
);
$dictionary["Account"]["fields"]["ab_1_address_book_accounts"] = array(
    'name' => 'ab_1_address_book_accounts',
    'type' => 'link',
    'relationship' => 'ab_1_address_book_accounts',
    'source' => 'non-db',
    'module' => 'AB_1_Address_Book',
    'bean_name' => 'AB_1_Address_Book',
    'vname' => 'LBL_AB_1_ADDRESS_BOOK_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'link_type' => 'one',
    'side' => 'left',
);
$dictionary["Account"]["relationships"]["ab_1_address_book_accounts"] = array(
    'lhs_module' => 'AB_1_Address_Book',
    'lhs_table' => 'ab_1_address_book',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'ab_1_address_book_id',
    'relationship_type' => 'one-to-many'
);
