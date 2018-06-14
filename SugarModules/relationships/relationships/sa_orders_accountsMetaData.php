<?php
// created: 2018-06-11 14:48:35
$dictionary["sa_orders_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sa_orders_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'SA_Orders',
      'rhs_table' => 'sa_orders',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sa_orders_accounts_c',
      'join_key_lhs' => 'sa_orders_accountsaccounts_ida',
      'join_key_rhs' => 'sa_orders_accountssa_orders_idb',
    ),
  ),
  'table' => 'sa_orders_accounts_c',
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
      'name' => 'sa_orders_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sa_orders_accountssa_orders_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sa_orders_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sa_orders_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sa_orders_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sa_orders_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sa_orders_accountssa_orders_idb',
      ),
    ),
  ),
);