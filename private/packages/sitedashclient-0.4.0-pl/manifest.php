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
    'changelog' => '++ SiteDash Client 0.4.0-pl
++ Released on 2017-11-22
+++++++++++++++++++++++++++
- Now supports downloading the error log contents
- Client Version is now reported to SiteDash so it can detect what features are available

++ SiteDash Client 0.3.1-pl
++ Released on 2017-09-26
+++++++++++++++++++++++++++
- Now also includes the core folder if it isn\'t outside the webroot, so the server can check if it\'s protected when renamed

++ SiteDash Client 0.3.0-pl
++ Released on 2017-09-24
+++++++++++++++++++++++++++
- First packaged build',
    'setup-options' => 'sitedashclient-0.4.0-pl/setup-options.php',
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
      'guid' => '253d5440cc408284054a1e109b1d2dc5',
      'native_key' => 'sitedashclient',
      'filename' => 'modNamespace/ce4b2b3395e2b840aa71bb658521d445.vehicle',
      'namespace' => 'sitedashclient',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '663534a4e4450d7baa56ae99dc00f1a5',
      'native_key' => 1,
      'filename' => 'modCategory/1c2239aef16c7c716d91355568846a0f.vehicle',
      'namespace' => 'sitedashclient',
    ),
  ),
);