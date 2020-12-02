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
    'changelog' => 'Redactor 3.0.2-pl
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
      'guid' => '94ee12979e77f65f537a226aecf41e54',
      'native_key' => 'redactor',
      'filename' => 'modNamespace/522096376daa49e53cb0fa8de8629828.vehicle',
      'namespace' => 'redactor',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '063bcc2d54a5155c612abf79fc45fda2',
      'native_key' => '063bcc2d54a5155c612abf79fc45fda2',
      'filename' => 'xPDOFileVehicle/cea7c462d5f9b66cc57fead8b2517367.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '26caba9e9f5e09eed8953b736e72d184',
      'native_key' => '26caba9e9f5e09eed8953b736e72d184',
      'filename' => 'xPDOFileVehicle/f4552431ed3e6212faa0e887f006a78f.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3b7608a82f7dcebbce2b58389433e115',
      'native_key' => 'redactor.configuration_set',
      'filename' => 'modSystemSetting/b7afd5bbf714430b13af9e1297e06758.vehicle',
      'namespace' => 'redactor',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2590a0a56c491afeaeebdfbbb218b23c',
      'native_key' => 'redactor.introtext',
      'filename' => 'modSystemSetting/1bd5dddbc8b7155ebc47eb6a86f5c9ce.vehicle',
      'namespace' => 'redactor',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '9290f25b4ab7d57119656df797cd9c44',
      'native_key' => 'redactor.introtext.configuration_set',
      'filename' => 'modSystemSetting/f147d22c1efe8b5a9b1707fc4d1dcf37.vehicle',
      'namespace' => 'redactor',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '75d60192ea5ebe5173c91f683b2589ec',
      'native_key' => 'redactor.css',
      'filename' => 'modSystemSetting/27ee89f405c3b8144cfe167d96ee454a.vehicle',
      'namespace' => 'redactor',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6e66aefb2cb1379135d9186c57bc04c6',
      'native_key' => 'redactor.js',
      'filename' => 'modSystemSetting/958d100ca93fc85003080cab967831fd.vehicle',
      'namespace' => 'redactor',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5588ea9eeeacb1db16a21d9745c3fc7a',
      'native_key' => 'redactor.sanitizePattern',
      'filename' => 'modSystemSetting/ce809034b5263279622888b33696eb40.vehicle',
      'namespace' => 'redactor',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '837767e60e567baf31a82bd11221babd',
      'native_key' => 'redactor.sanitizeReplace',
      'filename' => 'modSystemSetting/14e0a56b21593d31dc40440abe6a25ac.vehicle',
      'namespace' => 'redactor',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '879e0f31ed0c180d5a386b77ec1b6050',
      'native_key' => 'redactor.translit',
      'filename' => 'modSystemSetting/c0179a45f75c0ef665ef3de541e01e51.vehicle',
      'namespace' => 'redactor',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '10b9e8baa0872032e64354e806c4703c',
      'native_key' => 'redactor.translit_class',
      'filename' => 'modSystemSetting/2ee9f0b561701d10357224b86ef36929.vehicle',
      'namespace' => 'redactor',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '144ec6da2a2467d58caed7c60d183d9e',
      'native_key' => 'redactor.translit_class_path',
      'filename' => 'modSystemSetting/ae8fafcafdf58c52f3c87409da2d32ab.vehicle',
      'namespace' => 'redactor',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '92c4d6ad4169fc6c2edd10f7de724cab',
      'native_key' => 'redactor.configuration',
      'filename' => 'modMenu/11bf573cf88ac1ad8f375898243225be.vehicle',
      'namespace' => 'redactor',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => '38d1d427e6a3c9f7f0f5bf75e5912fb7',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/bc62ff16a717ddf0653e1c5b3a83fc6c.vehicle',
      'namespace' => 'redactor',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'encryptedVehicle',
      'class' => 'modPlugin',
      'guid' => 'c316c114ae03c4781157e221f2bd7838',
      'native_key' => NULL,
      'filename' => 'modPlugin/0d3f2e3807701fba9f8af2b873452d05.vehicle',
      'namespace' => 'redactor',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '81c8789af20d267fb44eff8fa1784cf0',
      'native_key' => '81c8789af20d267fb44eff8fa1784cf0',
      'filename' => 'xPDOScriptVehicle/3a788992ef58f97d01265aa91558c9f2.vehicle',
      'namespace' => 'redactor',
    ),
  ),
);