<?php
// created: 2018-06-11 14:48:35
$dictionary["sa_orders_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sa_orders_contacts' => 
    array (
      'lhs_module' => 'SA_Orders',
      'lhs_table' => 'sa_orders',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_orders_contacts_c',
      'join_key_lhs' => 'sa_orders_contactssa_orders_ida',
      'join_key_rhs' => 'sa_orders_contactscontacts_idb',
    ),
  ),
  'table' => 'sa_orders_contacts_c',
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
      'name' => 'sa_orders_contactssa_orders_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_orders_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_orders_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_orders_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_orders_contactssa_orders_ida',
        1 => 'sa_orders_contactscontacts_idb',
      ),
    ),
  ),
);