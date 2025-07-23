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


## Support and Contributing

- **Issues:** Report bugs and feature requests on [GitHub Issues](https://github.com/Skvare/com.skvare.extrapermissions/issues)

## Credits

Developed by [Skvare, LLC](https://skvare.com/contact) for the CiviCRM community.

## About Skvare

Skvare LLC specializes in CiviCRM development, Drupal integration, and providing technology solutions for nonprofit organizations, professional societies, membership-driven associations, and small businesses. We are committed to developing open source software that empowers our clients and the wider CiviCRM community.

**Contact Information**:
- Website: [https://skvare.com](https://skvare.com)
- Email: info@skvare.com
- GitHub: [https://github.com/Skvare](https://github.com/Skvare)

## Support

[Contact us](https://skvare.com/contact) for support or to learn more.

---

## Related Extensions

You might also be interested in other Skvare CiviCRM extensions:

- **Database Custom Field Check**: Prevents adding custom fields when table limits are reached
- **Image Resize**: Automatically resizes contact images for consistent display
- **Registration Button Label**: Customize button labels on event registration pages
- **Unlink User Account**: Safely unlink user accounts from contacts without deleting data

For a complete list of our open source contributions, visit our [GitHub organization page](https://github.com/Skvare).

