<?php 
 //WARNING: The contents of this file are auto-generated



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
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
);

$dictionary['Contact']['fields']['custom_identity'] = array(
        'name' => 'custom_identity',
        'vname' => 'LBL_CUSTOM_IDENTITY',
        'type' => 'int',
);

$dictionary['Contact']['fields']['custom_contact_status'] = array(
        'name' => 'custom_contact_status',
        'vname' => 'LBL_CUSTOM_CONTACT_STATUS',
        'type' => 'enum',
        'options' => 'c_status_types',
);

$dictionary['Contact']['fields']['account_name']['join_link_name'] = 'accounts_contacts_link';

$dictionary['Contact']['fields']['account_employees_c'] = array (
	'name' => 'account_employees_c',
	'id_name' => 'account_id',
	'type' => 'relate',
	'rname' => 'employees',
	'vname' => 'LBL_ACCOUNT_EMPLOYEES',
	'link' => 'accounts',
	'module' => 'Accounts',
	'source' => 'non-db',
	'dbType' => 'non-db',
	'studio' => 'visible',
	'massupdate' => false,
	'join_name'=>'accounts',
	'join_link_name'=>'accounts_contacts_link',
);


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


 // created: 2022-05-05 16:58:43
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2022-05-05 16:58:43
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2022-05-05 16:58:43
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2022-05-05 16:58:43
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>