<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'This license is a legal agreement between you and modmore for the use of the Redactor extra for MODX. By downloading or installing Redactor, you agree to the terms and conditions of this license. modmore reserves the right to alter this agreement at any time, for any reason, without notice.

modmore grants you a non-exclusive non-transferable license to use Redactor on one MODX installation, identified by its domain name. A license code is embedded in this package, which is associated with your account on modmore.com and is not transferable to other accounts. Changes to the MODX installation, such as moving to a different domain, invalidates this license. For your convenience, you will receive automatic instructions on resolving such invalidations via email.

Neither the installable package nor the source code may be redistributed, changed, stripped of its license information or license verification code, or otherwise modified without upfront written permission. Any attempt to block, jeopardize or fool built-in protections and/or license verification is strictly forbidden and cause for account termination.

Should you require multiple environments (test/staging) for a single MODX installations, each environment requires its own license. Free development licenses may be available. Please see: https://modmore.com/free-development-licenses/

Support is available for the most recent major version via support@modmore.com. Upon the release of a new major version or discontinuation, support will remain available for 6 months. For the current supported versions and timelines, please see: https://modmore.com/about/support/

modmore is not liable for any damages directly or indirectly caused by usage of Redactor.

modmore may revoke this license at any time.

---

This extra includes third party software, for which we are thankful.

- Redactor.js by Imperavi (imperavi.com), including plugins, OEM License.
- CodeMirror, MIT license
- Autocomplete.js by Algolia, MIT license
',
    'readme' => 'Welcome to Redactor 3.

Redactor is a powerful and user friendly rich text editor for MODX. It is based on the commercial Redactor editor built by Imperavi, enhanced with MODX-specific customisations and management.

With Redactor you get a tightly integrated editor experience. The editor integrates with the MODX media manager and media sources, allows direct linking to resources, and looks great within the manager design.

Redactor also integrates nicely with other extras. Third party extras can seamlessly enable Redactor on fields they want to use a rich text editor for. We love pairing Redactor with ContentBlocks ourselves.

For more information about the functionality offered by Redactor 3, please visit https://modmore.com/redactor/ or the documentation at https://docs.modmore.com/en/Redactor/v3.x/index.html

Standard unlimited support is included with your license purchase. If you have questions or need help, please email support@modmore.com.
',
    'changelog' => 'Redactor 3.2.1-pl
------------------
Released on 2024-06-07

- Fix issue with uploads on MODX3 with upload_translit enabled [#542]

Redactor 3.2.0-pl
------------------
Released on 2023-11-21

- Promote to stable release.

Redactor 3.2.0-rc1
------------------
Released on 2023-11-09

- Fix copy/pasting URLs getting the manager url prepended, also cleaning up any instances that may already be there on load [#540, #523, #471, #381]
- Support inserting multiple images at once (requires MODX 3.1, see modxcms/revolution#16348)
- Change http:// to https:// when inserting a link without the protocol [#541]
- Add ability to disable the fixed toolbar in the Toolbar tab of the configurator [#524]

Redactor 3.1.6-pl
------------------
Released on 2022-12-12

- Disable fixed toolbar when air mode is active to avoid conflicts [S31035]
- Fix inability to get back to visual mode after activating source mode with the air toolbar [S31035]

Redactor 3.1.5-pl
------------------
Released on 2022-11-24

- Fix using the Redactor input type for ContentBlocks while using a different (or no) editor by default [S34411]

Redactor 3.1.4-pl
------------------
Released on 2022-09-26

- Fix path placeholders not working [F2379]
- Fix some more strict type checks that would prevent functionality from working in 3.0
- Fix uploaded file url generation losing the first filename character in some edge cases [#528]

Redactor 3.1.3-pl
------------------
Released on 2022-09-19

- Fix TypeError when Redactor encounters an image without a src
- Add redactor.allow_data_uris system setting to opt-in to supporting data URIs for images
- Fix error in Redactor TV on MODX3 [#535]
- Fix template-specific configuration set not applying in MODX3 [#534]

Redactor 3.1.2-pl
------------------
Released on 2021-10-27

- Further license-related tweaks for MODX 3.0.0-alpha3

Redactor 3.1.1-pl
------------------
Released on 2021-10-27

- Allow installation on MODX 3.0.0-alpha3
- Updated Redactor.js from v3.4.8 to v3.5.2, for details: https://imperavi.com/redactor/log/

Redactor 3.1.0-pl
------------------
Released on 2021-02-09

- Adjust z-index for fullscreen Ace editor to prevent navbar issues [F2035-11]
- Fix z-index for redactor modals hiding behind MIGX and other popups after a Redactor.js update changed modal IDs [#522]
- Update divider plugin to work more reliably with improved toolbar.addButton behavior in redactor.js
- Sort button-related plugins by order in which they are used, to improve reliability of positioning [#519, S24844]
- Update Redactor.js from v3.4.5 to v3.4.8, including improved XSS protections: https://imperavi.com/redactor/log/
- Patch toolbar.addButton with fix for buttons disappearing if the button before it isn\'t yet loaded
- Add ability to customise the font family and color options available in fontfamily and fontcolor dropdowns [#509]

Redactor 3.0.2-pl
------------------
Released on 2020-10-27

- Allow installation on PHP 7.1 again
- Guard against calling MODx.loadRTE/loadRedactorConfigurationSet without an element [#22971]
- Make sure resources are marked as having changes pending when editing in the RTE [#515]
- Fix image resize handler not being visible when Redactor is used in a modal popup [#507]
- Updated Redactor.js from v3.3.3 to 3.4.5, for details: https://imperavi.com/redactor/log/

Redactor 3.0.1-pl
------------------
Released on 2020-04-06

- Fix resource-related path placeholders not working [#21971]

Redactor 3.0.0-pl
------------------
Released on 2020-02-14

- Fix error in MODX3 due to strict typing
- Update to redactor.js v3.3.3; this prevents the editor from breaking when unlisting content. [#502]
- Automatically enable the imported configuration set when upgrading from v2 [#504]
- Add the .redactor-editor content style class to the set imported from v2 [S21929]
- Support custom configuration set to use with MIGX TVs, see: https://docs.modmore.com/en/Redactor/v3.x/Usage/MIGX.html [#501]

Changelog for redactor.js v3.3.3:
- Fixed: When formatting the list, the content is removed if the editor within the list.
- Fixed: Adding rows and columns to the table is available even if the cursor is not in the table.
- Improved: XSS sanitize when inserting svg and img.
- New: Setting source.codemirrorSrc if codemirror is used as a module.

Redactor 3.0.0-rc3
------------------
Released on 2020-02-05

- Prevent installation from continuing if server requirements aren\'t met
- Fix autocomplete for links only working in the first redactor instance per page (e.g. in ContentBlocks) [#500]
- Fix CSS scoping issue for CodeMirror, causing conflict with standalone CodeMirror extension [#503]

Redactor 3.0.0-rc2
------------------
Released on 2020-01-16

- Don\'t load English translation file to avoid emptying plugin translation strings (alignment, clips) [S21859]
- Fix z-index issues with the MODX media browser, by not overriding the z-index to make it appear in front of Redactor-built modals but closing the initiating Redactor modal window instead. [S21859]
- Add support for shift+tab to outdent within lists [B31]
- Fix replaced images not being saved [B31]
- Restore fixed toolbar to normal toolbar when opening full screen mode [#492]
- Split autoparse options in the configurator to a separate tab
- Add options for resource links: limit to current context, include introtext [S21862]
- Make directory depth for the simple browser configurable
- When adding a link, the resource search will now automatically query for the selected text
- Fix link styles not working correctly with multiple classnames
- Fix image styles not preselecting current styles when it has multiple classnames

Redactor 3.0.0-rc1
------------------
Released on 2020-01-14

Welcome to Redactor 3. A refreshed and modernised take on the rich text editor.

This is a major release and paid upgrade for users of Redactor 2. Learn more in the release announcement: https://modmore.com/blog/2020/redactor-3/

Some of the highlights in Redactor 3:

- Configuration is now managed with Configuration Sets. After installation, browse to Extras > Redactor Configuration to start. On upgrade, your previous settings will be (as much as possible) migrated to the new format, including context-specific overrides
- Much simpler media manager is now included by default. You can also use the standard MODX browser, or both!
- New input type for ContentBlocks allowing you to choose a configuration set per field
- You can now choose a configuration set per template
- New `divider` button lets you visually separate toolbar buttons
- Different themes are now supported, including the new default, a Redactor 2-inspired theme, and one filled with rainbows
- New properties plugin to set IDs and classes on any block element
- Improved core editing experience with better cleanup and some long-standing issues resolved
- redactor.css setting now support a comma separated list of CSS files rather than just one
- Sanitising file names now supports transliteration
- New Image Styles option lets you define classes that can be added to an image
- Experimental support for Fred
- Redactor plugins from Imperavi, which often do not ship with a translation, can now be translated through the MODX lexicon system

Powered by Imperavi\'s redactor.js v3.3.2.
',
    'standard-set' => '<?xml version="1.0" encoding="UTF-8"?>
<data package="redactor" exported="2019-08-26@13:09:31" total="2">
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Standard]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, bold, italic, underline, divider, table, link, image, file, divider, ol, ul, indent, outdent, divider, redo, undo, divider, html","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, h5, h6, blockquote, pre","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"200","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"ltr","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"pre, h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, p, figure, figcaption","pasteInlineTags":"a, img, br, strong, ins, code, del, span, samp, kbd, sup, sub, mark, var, cite, small, b, u, em, i","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"1","imageFloatMargin":"1em","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"1","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/assets\\/","fileSimpleBrowser":"1","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/assets\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/assets\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/assets\\/","linkTitle":"1","linkNewTab":"1","linkNofollow":"0","linkToAnchor":"0","linkSize":"30","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"0","tabKey":"1"}]]></content>
	</redConfigurationSet>
	<redConfigurationSet>
		<class_key><![CDATA[redConfigurationSet]]></class_key>
		<name><![CDATA[Minimal]]></name>
		<description><![CDATA[]]></description>
		<content><![CDATA[{"buttons":"format, divider, bold, italic, underline, deleted, divider, link, image","buttonsTextLabeled":"0","formatting":"p, h2, h3, h4, blockquote, code","formattingAdd":"","air":"0","toolbar":"1","toolbarContext":"1","lang":"en","theme":"default","minHeight":"100","maxHeight":"","maxWidth":"","animation":"1","structure":"0","counter":"0","stylesClass":"redactor-styles","direction":"","cleanOnEnter":"1","cleanInlineOnEnter":"1","removeScript":"1","removeNewLines":"0","removeComments":"1","pasteClean":"1","pastePlainText":"0","pasteLinks":"1","pasteLinkTarget":"false","pasteImages":"1","pasteBlockTags":"h1, h2, h3, h4, h5, h6, table, tbody, thead, tfoot, th, tr, td, ul, ol, li, blockquote, pre","pasteInlineTags":"strong, b, u, em, i, code, del, span, ins, samp, kbd, sup, sub, mark, var, cite, small","pasteKeepStyle":"","pasteKeepClass":"","pasteKeepAttrs":"","markup":"p","enterKey":"1","breakline":"0","preClass":"false","preSpaces":"4","tabAsSpaces":"","imageFigure":"1","imageCaption":"1","imagePosition":"0","imageFloatMargin":"10px","imageEditable":"1","imageResizable":"1","dragUpload":"1","clipboardUpload":"1","baseurlsMode":"relative","imageSimpleBrowser":"0","imageSimpleBrowserSource":"1","imageSimpleBrowserPath":"\\/","fileSimpleBrowser":"0","fileSimpleBrowserSource":"1","fileSimpleBrowserPath":"\\/","imageMODXBrowser":"1","imageMODXBrowserSource":"1","imageMODXBrowserPath":"\\/","fileMODXBrowser":"1","fileMODXBrowserSource":"1","fileMODXBrowserPath":"\\/","linkTitle":"1","linkNewTab":"0","linkNofollow":"0","linkToAnchor":"0","linkSize":"50","linkValidation":"1","definedlinks":"","autoparse":"1","autoparseLinks":"1","autoparseImages":"1","autoparseVideo":"1","source":"1","sourceCodemirror":"1","showSource":"0","limiter":"","clips":"","textexpander":"","variables":"","placeholder":"false","spellcheck":"1","grammarly":"1","tabKey":"1"}]]></content>
	</redConfigurationSet>
</data>',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '97b283e3644fc6bad160b2c8d4b3bf1d',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/1ab120d6eb9b5c147a35abc1bf270341.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '68179b3fef54c56107a5516ee1f84d9f',
      'native_key' => '68179b3fef54c56107a5516ee1f84d9f',
      'filename' => 'xPDOFileVehicle/e48528a03521dbf43a61d3e1027d81d1.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '9d35ba46b035148dd6050c9af98cc102',
      'native_key' => '9d35ba46b035148dd6050c9af98cc102',
      'filename' => 'xPDOFileVehicle/ed870054071220e97e07a9ce35285784.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '798f973fe5b10a8e084d9cf780899db0',
      'native_key' => 'redactor.configuration_set',
      'filename' => 'modSystemSetting/7a5650007eba87a29cd1edfd48c6b9fd.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4c6f3374789c5dbc17a7f2d1ef4548e7',
      'native_key' => 'redactor.introtext',
      'filename' => 'modSystemSetting/ab84567042ed6b3179ebcf7544f3af8c.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e0ff445406b70f5700107a7a9c865e9',
      'native_key' => 'redactor.introtext.configuration_set',
      'filename' => 'modSystemSetting/18dec9f70a4da05e2a0db9b270201b74.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '857202eb82d7847337e33d5228fd91ce',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/f38631ce15ab10d4f6479555bb5fc3cd.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0c67a9672b3efc309d32f0499ad8bb24',
      'native_key' => 'redactor.js',
      'filename' => 'modSystemSetting/3d531f2f4faf861c3b6eb2351159d54d.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '890609cf9612e07dd29265ead40624a4',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/9977885e7b5ff827470f2cd66c3837a9.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7651482ea0337070738cb7a32c83343b',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/0ff18116e8c274243b175f87723ceb46.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'c7a86a94d05cad7d161f205f1a0cbb50',
      'native_key' => 'redactor.translit',
      'filename' => 'modSystemSetting/94fd4d665c745ea1881e612fca61d834.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8247d95b4da1c96cd03d58719683ffe8',
      'native_key' => 'redactor.translit_class',
      'filename' => 'modSystemSetting/51b3f1b454efd55dc6567baa1aa510dc.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'bcd6d18c449012f06a19c88df281f74e',
      'native_key' => 'redactor.translit_class_path',
      'filename' => 'modSystemSetting/9e5556419ed189ddf12cb23558a25a69.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a28301265206725b75804f46d282cc89',
      'native_key' => 'redactor.allow_data_uris',
      'filename' => 'modSystemSetting/203dbabe7377fed51663b2ae8b9116f9.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'c67cf8f202611714e44767a565e28a6b',
      'native_key' => 'redactor.configuration',
      'filename' => 'modMenu/f380db436b46717f0527a4d3d2738e6b.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '3c0d03d776006603c93d865bed2a4ded',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/e6e58dc1840c3638de628b40282e5a00.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'encryptedVehicle',
      'class' => 'modPlugin',
      'guid' => 'ebfc664018f6875f62919e9d4ce0982e',
      'native_key' => NULL,
      'filename' => 'modPlugin/ac30585f3c0d93ac58ef5531b4b401fb.vehicle',
      'namespace' => 'redactor',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '5968129eae904038fbef079a14392ab8',
      'native_key' => '5968129eae904038fbef079a14392ab8',
      'filename' => 'xPDOScriptVehicle/31f03cdc8d8ae1c60f79f9ff14d9a664.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);