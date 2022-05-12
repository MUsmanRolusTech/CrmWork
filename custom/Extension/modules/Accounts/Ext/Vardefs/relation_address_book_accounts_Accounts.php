<?php

$dictionary["Account"]["fields"]["ab_1_address_book_acounts_1_name"] = array(
  'name' => 'ab_1_address_book_acounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_ACCOUNTS_1_FROM_AB_1_ADDRESS_BOOK_TITLE',
  'save' => true,
  'id_name' => 'crm_address_book_id',
  'link' => 'ab_1_address_book_accounts_1',
  'table' => 'ab_1_address_book',
  'module' => 'AB_1_Address_Book',
  'rname' => 'name',
);

$dictionary["Account"]["fields"]["ab_1_address_book_accounts_1"] = array(
  'name' => 'ab_1_address_book_accounts_1',
  'type' => 'link',
  'relationship' => 'ab_1_address_book_accounts_1',
  'source' => 'non-db',
  'module' => 'AB_1_Address_Book',
  'bean_name' => 'AB_1_Address_Book',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_ACCOUNTS_1_FROM_AB_1_ADDRESS_BOOK_TITLE',
  'id_name' => 'crm_address_book_id',
);

$dictionary["Account"]["fields"]["crm_address_book_id"] = array(
  'name' => 'crm_address_book_id',
  'type' => 'link',
  'relationship' => 'ab_1_address_book_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);

$dictionary["Account"]["relationships"]["ab_1_address_book_accounts"] = array(
  'lhs_module' => 'AB_1_Address_Book',
  'lhs_table' => 'ab_1_address_book',
  'lhs_key' => 'id',
  'rhs_module' => 'Accounts',
  'rhs_table' => 'accounts',
  'rhs_key' => 'crm_address_book_id',
  'relationship_type' => 'one-to-many'
);
