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
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function extrapermissions_civicrm_install() {
  _extrapermissions_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function extrapermissions_civicrm_enable() {
  _extrapermissions_civix_civicrm_enable();
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
      'export campaign' => $prefix . ts('Export Campaign'),
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
