<?php

require_once 'extrapermissions.civix.php';
// phpcs:disable
use CRM_Extrapermissions_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function extrapermissions_civicrm_config(&$config) {
  _extrapermissions_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function extrapermissions_civicrm_xmlMenu(&$files) {
  _extrapermissions_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function extrapermissions_civicrm_install() {
  _extrapermissions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function extrapermissions_civicrm_postInstall() {
  _extrapermissions_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function extrapermissions_civicrm_uninstall() {
  _extrapermissions_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function extrapermissions_civicrm_enable() {
  _extrapermissions_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function extrapermissions_civicrm_disable() {
  _extrapermissions_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function extrapermissions_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _extrapermissions_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function extrapermissions_civicrm_managed(&$entities) {
  _extrapermissions_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function extrapermissions_civicrm_caseTypes(&$caseTypes) {
  _extrapermissions_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function extrapermissions_civicrm_angularModules(&$angularModules) {
  _extrapermissions_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function extrapermissions_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _extrapermissions_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function extrapermissions_civicrm_entityTypes(&$entityTypes) {
  _extrapermissions_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function extrapermissions_civicrm_themes(&$themes) {
  _extrapermissions_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function extrapermissions_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function extrapermissions_civicrm_navigationMenu(&$menu) {
//  _extrapermissions_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _extrapermissions_civix_navigationMenu($menu);
//}

/**
 * invoke permissions hook
 * @param array $permissions
 */
function extrapermissions_civicrm_permission(&$permissions) {
  $prefix = ts('CiviCRM') . ': ';
  $permissions = $permissions + [
      'send email to contacts' => $prefix . ts('Send Email from Search'),
      'export contact' => $prefix . ts('Export Contact'),
      'export contribution' => $prefix . ts('Export Contribution'),
      'export membership' => $prefix . ts('Export Membership'),
      'export event' => $prefix . ts('Export Event'),
      'export grant' => $prefix . ts('Export Grant'),
      'export case' => $prefix . ts('Export Case'),
      'export activity' => $prefix . ts('Export Activity'),
      'export campaign' => $prefix . ts('Export Aampaign'),
    ];
}


/**
 * @param $objectName
 * @param $tasks
 */
function extrapermissions_civicrm_searchTasks( $objectName, &$tasks ) {
  $objectTypes = ['contact', 'contribution', 'membership', 'event', 'grant', 'case', 'activity', 'campaign'];
  if (in_array($objectName, $objectTypes)) {
    if (!CRM_Core_Permission::check('export ' . $objectName)) {
      if (array_key_exists(CRM_Core_Task::TASK_EXPORT, $tasks)) {
        unset($tasks[CRM_Core_Task::TASK_EXPORT]);
      }
    }
    if (!CRM_Core_Permission::check('send email to contacts')) {
      if (array_key_exists(CRM_Core_Task::TASK_EMAIL, $tasks)) {
        unset($tasks[CRM_Core_Task::TASK_EMAIL]);
      }
    }
  }
}
