<?php
/**
 * COmanage Registry LDAP Provisioner Model
 *
 * Copyright (C) 2012 University Corporation for Advanced Internet Development, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright     Copyright (C) 2012 University Corporation for Advanced Internet Development, Inc.
 * @link          http://www.internet2.edu/comanage COmanage Project
 * @package       registry-plugin
 * @since         COmanage Registry v0.8
 * @license       Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @version       $Id$
 */

class LdapProvisioner extends AppModel {
  // Required by COmanage Plugins
  public $cmPluginType = "provisioner";

/*  
  // Expose Menu Items
  public $cmPluginMenus = array(
    "cmp" => array("Plugin CMP Title" =>
                   array('controller' => "ldap_provisioners",
                         'action'     => "cmp")),
    // These will automatically have CO ID appended
    "cos" => array("Plugin CO Title" =>
                   array('controller' => "ldap_provisioners",
                         'action'     => "index")),
    "copeople" => array("Plugin CO People Title" =>
                        array('controller' => "ldap_provisioners",
                              'action'     => "index2")),
    "coconfig" => array("Plugin CO Config Title" =>
                        array('controller' => "ldap_provisioners",
                              'action'     => "config")),
    // This will automatically have CO Person ID and CO ID appended
    "coperson" => array("Plugin My Account Title" =>
                        array('controller' => "ldap_records",
                              'action'     => "view")),
  );
*/
}