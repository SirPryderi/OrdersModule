<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array(
    0 =>
        array(
            'acceptable_sugar_versions' =>
                array(
                    0 => '',
                ),
        ),
    1 =>
        array(
            'acceptable_sugar_flavors' =>
                array(
                    0 => 'CE',
                    1 => 'PRO',
                    2 => 'ENT',
                ),
        ),
    'readme' => '',
    'key' => 'SA',
    'author' => 'Vittorio Iocolano',
    'description' => '',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Orders',
    'published_date' => '2018-06-11 14:48:35',
    'type' => 'module',
    'version' => 1528728517,
    'remove_tables' => 'prompt',
);


$installdefs = array(
    'id' => 'Orders',
    'beans' =>
        array(
            0 =>
                array(
                    'module' => 'SA_Orders',
                    'class' => 'SA_Orders',
                    'path' => 'modules/SA_Orders/SA_Orders.php',
                    'tab' => true,
                ),
            1 =>
                array(
                    'module' => 'SA_LineItems',
                    'class' => 'SA_LineItems',
                    'path' => 'modules/SA_LineItems/SA_LineItems.php',
                    'tab' => false,
                ),
        ),
    'layoutdefs' =>
        array(
            0 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/layoutdefs/sa_orders_accounts_Accounts.php',
                    'to_module' => 'Accounts',
                ),
            1 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/layoutdefs/sa_orders_contacts_Contacts.php',
                    'to_module' => 'Contacts',
                ),
            2 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/layoutdefs/sa_orders_contacts_SA_Orders.php',
                    'to_module' => 'SA_Orders',
                ),
        ),
    'relationships' =>
        array(
            0 =>
                array(
                    'meta_data' => '<basepath>/SugarModules/relationships/relationships/sa_orders_accountsMetaData.php',
                ),
            1 =>
                array(
                    'meta_data' => '<basepath>/SugarModules/relationships/relationships/sa_orders_contactsMetaData.php',
                ),
            2 =>
                array(
                    'meta_data' => '<basepath>/SugarModules/relationships/relationships/sa_orders_line_itemsMetaData.php',
                ),
        ),
    'image_dir' => '<basepath>/icons',
    'copy' =>
        array(
            0 =>
                array(
                    'from' => '<basepath>/SugarModules/modules/SA_Orders',
                    'to' => 'modules/SA_Orders',
                ),
            1 =>
                array(
                    'from' => '<basepath>/SugarModules/modules/SA_LineItems',
                    'to' => 'modules/SA_LineItems',
                ),
        ),
    'language' =>
        array(
            0 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/language/SA_Orders.php',
                    'to_module' => 'SA_Orders',
                    'language' => 'en_us',
                ),
            1 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/language/Accounts.php',
                    'to_module' => 'Accounts',
                    'language' => 'en_us',
                ),
            2 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
                    'to_module' => 'Contacts',
                    'language' => 'en_us',
                ),
            3 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/language/SA_Orders.php',
                    'to_module' => 'SA_Orders',
                    'language' => 'en_us',
                ),
            4 =>
                array(
                    'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
                    'to_module' => 'application',
                    'language' => 'en_us',
                ),
        ),
    'vardefs' =>
        array(
            0 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_accounts_SA_Orders.php',
                    'to_module' => 'SA_Orders',
                ),
            1 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_accounts_Accounts.php',
                    'to_module' => 'Accounts',
                ),
            2 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_contacts_Contacts.php',
                    'to_module' => 'Contacts',
                ),
            3 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_contacts_SA_Orders.php',
                    'to_module' => 'SA_Orders',
                ),
            4 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_line_items_SA_Orders.php',
                    'to_module' => 'SA_Orders',
                ),
            5 =>
                array(
                    'from' => '<basepath>/SugarModules/relationships/vardefs/sa_orders_line_items_SA_LineItems.php',
                    'to_module' => 'SA_LineItems',
                ),
        ),
    'layoutfields' =>
        array(
            0 =>
                array(
                    'additional_fields' =>
                        array(),
                ),
        ),
);