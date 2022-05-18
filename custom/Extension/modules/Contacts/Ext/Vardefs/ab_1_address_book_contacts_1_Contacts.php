<?php
// created: 2022-05-12 12:08:41
$dictionary["Contact"]["fields"]["ab_1_address_book_contacts_1"] = array (
  'name' => 'ab_1_address_book_contacts_1',
  'type' => 'link',
  'relationship' => 'ab_1_address_book_contacts_1',
  'source' => 'non-db',
  'module' => 'AB_1_Address_Book',
  'bean_name' => 'AB_1_Address_Book',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_CONTACTS_1_FROM_AB_1_ADDRESS_BOOK_TITLE',
  'id_name' => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
);
$dictionary["Contact"]["fields"]["ab_1_address_book_contacts_1_name"] = array (
  'name' => 'ab_1_address_book_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_CONTACTS_1_FROM_AB_1_ADDRESS_BOOK_TITLE',
  'save' => true,
  'id_name' => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
  'link' => 'ab_1_address_book_contacts_1',
  'table' => 'ab_1_address_book',
  'module' => 'AB_1_Address_Book',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["ab_1_address_book_contacts_1ab_1_address_book_ida"] = array (
  'name' => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
  'type' => 'link',
  'relationship' => 'ab_1_address_book_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AB_1_ADDRESS_BOOK_CONTACTS_1_FROM_CONTACTS_TITLE',
);
