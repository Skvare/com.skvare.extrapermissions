# com.skvare.extrapermissions

Add additional permission to control data being exported out from CiviCRM

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.0+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.skvare.extrapermissions@https://github.com/Skvare/com.skvare.extrapermissions/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/Skvare/com.skvare.extrapermissions.git
cv en extrapermissions
```

## Usage

This extension add permission for each component, so event user is civicrm administrator, we can control on user to 
avoid data being exported out from the CRM System.

There is addtional permission to control sending email to multiple contact (upto 50) from Search task action.