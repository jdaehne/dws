<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2016 Mark Hamstra Web Development <hello@markhamstra.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
',
    'readme' => '# SiteDash Client

SiteDash Client is a companion package for MODX Revolution go with the SiteDash service.

SiteDash Client allows SiteDash to retrieve information about your MODX site, server,
installed packages, and other information. That information is sent to SiteDash, which
tries to make sense out of it, and present it back to you in a convenient dashboard.



## Installation

During installation you\'ll be asked to provide a Site Key. Visit the SiteDash website,
signup or login, and create a site to generate a unique Site Key.

Once generate, paste the Site Key into the setup options field, which will then handle
exchanging keys that are used to cryptographically sign further communication.

It is strongly recommended to set up your site to use HTTPS. This will ensure that
communication between SiteDash and your website is encrypted. On HTTP we check the
authenticity, but the returned information may be readable by attackers in the middle.



## What information is collected?

The Client sends back a lot of information, allowing SiteDash to provide you with good
insights you may not have seen otherwise.

The collected information includes:

- MODX Version number
- MODX Manager URL, language, and the selected rich text editor
- Indication if the core folder is moved out of the root
- PHP Version number
- PDO Driver name, client version, and server version.
- Total amount of disk space available, and free disk space avaialble
- Configured memory limit and max execution time
- Server IP address, hostname, software, and protocol
- HTTPS flag indicating if the request used HTTPS
- List of configured package providers with for each:
   - provider name
   - configured service URL
   - username
- List of the packages that have been installed, including older versions, with
  the following information for each:
  - Signature (e.g. redactor-2.2.0-pl)
  - Created/updated/installed timestamps
  - Provider installed from
  - Package name
  - Version number

The collected information is added to the SiteDash database, and processed further
in various ways. This processing may include deduplication, adding more detail from
other sources, or interpreting raw data into trends or potential improvements.

SiteDash may also connect to your site directly to probe for other information or
checks. For example, you may see requests from SiteDash attempting to access your
core folder if it is not outside the webroot.

',
    'changelog' => 'SiteDash Client 1.3.3-pl
-------------------------
Released on 2020-03-31

- Fix updating packages on MODX 3 (tested with alpha2)
- Fix memory monitoring using the wrong value (MemFree instead of MemAvailable) causing elevated memory values [S22408]

SiteDash Client 1.3.2-pl
-------------------------
Released on 2020-03-27

- Return mysqldump output in the user visible message when encountering an error [S21887]
- Increase timeouts for backup and upgrade to 120 seconds [S22377]
- Exclude the sessions table from the backup to make it quicker on large sites

Dependencies:
- Updated symfony/process from v3.4.20 to v3.4.38

SiteDash Client 1.3.1-pl
-------------------------
Released on 2019-11-25

- Silence open_basedir related PHP warnings in status endpoint for extended monitoring

SiteDash Client 1.3.0-pl
-------------------------
Released on 2019-11-15

- Add support for custom error log paths [R56]
- Return a nice error when the backup failed to create the target directory [S21442]
- Restore PHP5 compatibility in status endpoint
- Update the way the number of CPU cores is determined in status endpoint

SiteDash Client 1.3.0-rc1
-------------------------
Released on 2019-11-12

New features:
- Allow remotely clearing the MODX cache (regular via modCacheManager, and forced by removing directories in core/cache)
- Check the size of the session table during refresh, to validate (in dashboard) if garbage collection on sessions is running properly
- New endpoint for extended monitoring (CPU/Memory usage/database health; in limited beta)

SiteDash Client 1.2.1-pl
-------------------------
Released on 2019-09-27

- [security] Prevent the MySQL password from potentially being in the returned message if the database backup fails

SiteDash Client 1.2.0-pl
-------------------------
Released on 2019-09-26

- Include the site name setting in the refresh response
- Simplify the response from remote core upgrades; should make the log easier to process in the dashboard
- Prepare remote core update for future support of updating to nightlies
- Skip overwriting config.core.php files when upgrading core [#85]
- Support proxies when downloading MODX [#64]
- Include database table prefix when refreshing information [#30]
- Fix incorrect savings percentage shown for compressing backup

SiteDash Client 1.1.2-pl
-------------------------
Released on 2019-09-16

- Check if the ZipArchive class is available before attempting an upgrade [S20710]
- Allow configuration of the PHP binary if it can\'t be automatically located [S20896]
- Rename incorrectly named interface/classes

SiteDash Client 1.1.1-pl
-------------------------
Released on 2019-04-24

- Include the DSN (database name and server) in the system information, to allow detecting changes

SiteDash Client 1.1.0-pl
-------------------------
Released on 2019-02-27

- Backups will now be compressed into a zip file to preserve space
- Return the upgrade logs when checking php executable fails
- Catch error when creating a new process [S19510]
- Fix unpacking the MODX zip on servers with NFS [S19512]
- Fix root files being placed in a deeply nested directory instead of the root [#65]

SiteDash Client 1.0.2-pl
-------------------------
Released on 2019-02-25

- Log the used PHP executable before running the upgrade
- Log if the PHP executable couldn\'t be determined and it\'s falling back to "php"

SiteDash Client 1.0.1-pl
-------------------------
Released on 2019-02-22

- Add check for the proc_get_status function; without it, we can\'t check the status of the executed command
- Make sure a failed backup sets the proper response code
- Prevent fatal error in refresh when the database connection is unavailable

SiteDash Client 1.0.0-pl
-------------------------
Released on 2018-12-10

- Downgrade symfony/process to 3.4.20 to support PHP 5.5.9+
- Provide the server with the assets_url to automatically support non-standard assets directories
- Backup process no longer depends on exec(), instead using proc_open (like upgrade) which has some wider server support

SiteDash Client 1.0.0-rc4
-------------------------
Released on 2018-11-29

- Try to automatically find the mysqldump executable before accepting the mysqldump_binary setting
- If the php executable can\'t automatically be determined, use simply php and assume it\'s available
- Check if the exec() function is available before trying the backup

SiteDash Client 1.0.0-rc3
-------------------------
Released on 2018-11-28

- Use Symfony/Process to run the setup for better security and stability
- Increase download timeout from 15 to 90 seconds

SiteDash Client 1.0.0-rc2
-------------------------
Released on 2018-11-27

- Loosen shell escaping to prevent issues with complex passwords not working for the backup
- Fix incorrect default for sitedashclient.php_binary setting
- Fix upgrade on advanced distributions where the core folder has been moved or a custom config key is used

SiteDash Client 1.0.0-rc1
-------------------------
Released on 2018-11-27

- First beta version of upgrading the MODX core!
- Make sure invalid requests still return a valid JSON response
- Add file hasher to use for validating upgrades and for keeping an eye on files changing unexpectedly
- Add backup command to create a local backup of the database and critical files
- Settings for PHP and mysqldump binaries to use

SiteDash Client 0.7.0-pl
------------------------
Released on 2018-08-02

- Make sure that packages have their names normalised when being loaded to fix inconsistencies
- Update default server url to the new SiteDash.app domain
- Now also reports the core path, base url/path and connectors url/path

SiteDash Client 0.6.0-pl
------------------------
Released on 2018-07-24

- Public release. Can update itself, too!

SiteDash Client 0.6.0-rc1
------------------------
Released on 2018-07-24

- Implement remote package upgrades
- Prevent E_WARN getting logged to the error log if disk_free_space or disk_total_space is in the disabled functions

SiteDash Client 0.5.0-pl
------------------------
Released on 2018-05-29

- Add session table health check to refresh
- Add a repair table command to allow the session table, and others, to be remotely repaired from SiteDash
- Add a database check that looks at all database tables for their status and used collations
- Fix the namespace assets_path not being set correctly (even though that\'s not used anywhere)

SiteDash Client 0.4.2-pl
------------------------
Released on 2018-02-28

- Fix overwriting authentication on upgrade to 0.4.1 (only for installs from modx.com) [S16309]

SiteDash Client 0.4.1-pl
------------------------
Released on 2018-02-25

- Fix "core out of webroot" check causing false negatives.

SiteDash Client 0.4.0-pl
------------------------
Released on 2017-11-22

- Now supports downloading the error log contents
- Client Version is now reported to SiteDash so it can detect what features are available

SiteDash Client 0.3.1-pl
------------------------
Released on 2017-09-26

- Now also includes the core folder if it isn\'t outside the webroot, so the server can check if it\'s protected when renamed

SiteDash Client 0.3.0-pl
------------------------
Released on 2017-09-24

- First packaged build',
    'setup-options' => 'sitedashclient-1.3.3-pl/setup-options.php',
    'requires' => 
    array (
      'modx' => '>=2.5.0',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'e3c2e4cdbdab8227ace579af98158b69',
      'native_key' => 'sitedashclient',
      'filename' => 'modNamespace/4bbc527dd1687bec05dc58dc3b18e165.vehicle',
      'namespace' => 'sitedashclient',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bc676259a93eca160ab219a2ddad25e2',
      'native_key' => 'sitedashclient.mysqldump_binary',
      'filename' => 'modSystemSetting/a34767b826faef544b0db935bea9b732.vehicle',
      'namespace' => 'sitedashclient',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '33cd704e8ae5908aec6b1039a8734f35',
      'native_key' => 'sitedashclient.php_binary',
      'filename' => 'modSystemSetting/21ea6761fe95c7a16a689a0a4d1b998e.vehicle',
      'namespace' => 'sitedashclient',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '884fe5a9dfdf0a72c6efaae1e119ff2a',
      'native_key' => 'sitedashclient.php_binary',
      'filename' => 'modSystemSetting/4094f6d74d5391d321c9f33898b4520e.vehicle',
      'namespace' => 'sitedashclient',
    ),
  ),
);