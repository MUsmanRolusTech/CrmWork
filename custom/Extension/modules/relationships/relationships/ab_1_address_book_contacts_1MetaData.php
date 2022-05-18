<?php
// created: 2022-05-12 12:08:41
$dictionary["ab_1_address_book_contacts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ab_1_address_book_contacts_1' => 
    array (
      'lhs_module' => 'AB_1_Address_Book',
      'lhs_table' => 'ab_1_address_book',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ab_1_address_book_contacts_1_c',
      'join_key_lhs' => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
      'join_key_rhs' => 'ab_1_address_book_contacts_1contacts_idb',
    ),
  ),
  'table' => 'ab_1_address_book_contacts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ab_1_address_book_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ab_1_address_book_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ab_1_address_book_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ab_1_address_book_contacts_1ab_1_address_book_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ab_1_address_book_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ab_1_address_book_contacts_1contacts_idb',
      ),
    ),
  ),
);