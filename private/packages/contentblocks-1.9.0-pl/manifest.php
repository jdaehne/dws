<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'ContentBlocks is proprietary software, developed by Mark Hamstra for modmore. By purchasing ContentBlocks via https://www.modmore.com/extras/contentblocks/, you have received a usage license for a single (1) MODX Revolution installation, including one year (starting on date of purchase) of email support.

While we hope ContentBlocks is useful to you and we will try to help you successfully use ContentBlocks, modmore is not liable for loss of revenue, damages or other financial loss resulting from the installation or use of ContentBlocks.

By using and installing this package, you acknowledge that you shall only use this on a single MODX installation.

Redistribution in any shape or form is strictly prohibited. You may customize or change the provided source code to tailor ContentBlocks for your own use, as long as no attempt is made to remove license protection measures. By changing source code you acknowledge you void the right to support unless coordinated with modmore support.
',
    'readme' => '--------------------------------------------
ContentBlocks - Building content better.
--------------------------------------------
Author: Mark Hamstra - support@modmore.com
--------------------------------------------

A revolutionary way of editing content in MODX Revolution.
',
    'changelog' => 'ContentBlocks 1.9.0-pl
----------------------
Released on 2021-02-09

New features:
- Uploaded images can now be automatically cropped to a maximum size (defaulting to 4096x4096px) and have its embedded meta data removed (disabled by default)
- Uploaded images are now automatically rotated if needed
- Add redactor to contentblocks.defaults_allowed_inputs to allow Redactor 3 input types to be recognized as rich text. This only applies on new installations, so if you\'re upgrading, you\'ll need to add this to the setting manually. [#576]
- Relax required PHP version to 7.2+, while still checking for recommended versions
- Support basic placeholders in @CHUNK template tags, e.g. @CHUNK SomeChunk-[[+value]] [#593]
- Added a handful of new icons (thanks Yana!) [#364]

Bug fixes, improvements:
- Fix installation on MODX3 [F2065]
- Improve tooltip handling when adding content or layouts [S24342]
- Prevent fatal errors in snippets and plugin if an uninstallation fails [S25384]
- Fix saving availability options when creating a new field [#575]
- Prevent session locking when using PHP sessions from freezing the rebuild content console [#574/F1991]
- Update Imagine to v1.2.4 and add utility method getImagine() to ContentBlocks service class
- Move vendor directory one folder up

ContentBlocks 1.8.15-pl
----------------------
Released on 2020-02-07

- Now compatible with MODX3 (alpha2)
- Fix pagination missing from the chunk select, when editing a Chunk field that has a chunk selected [S21664]
- Small license check fixes
- Fix grid column sizes on MODX3
- Fix not being instantiated on MODX3 due to changed class names
- Prevent installation when server requirements aren\'t met

ContentBlocks 1.8.14-pl
----------------------
Released on 2019-11-15

- Fix consistent "Input <type> was requested but does not exist" false-negative [S21451]

ContentBlocks 1.8.13-pl
----------------------
Released on 2019-11-11

- Prevent enter from triggering deleting an image from a gallery [S21323]
- Prevent textarea styling from affecting the code view in Redactor 3
- Make sure all assets for input types are always loaded, to fix issues with creating new fields from third-party input types
- Make sure a selected chunk is shown when the chunk is not in the first set of 20 chunks [S20691]

ContentBlocks 1.8.12-pl
----------------------
Released on 2019-08-08

- Update crop file if it already exists [S20407]
- Make sure cropper errors are visible [S20651]
- Set a JavaScript variable to indicate ContentBlocks will render the content field; this way rich text editors can decide to not render the content in the background. This improves manager performance and prevents errors from getting triggered in the developer console (with Redactor 2.3.7).
- Add missing ContentBlocks_RenderContent event to package
- Make sure event output caused by content rendering (e.g. fetching TV paths or render events) does not leak out of ContentBlocks::generateHtml [S20522]
- Update the upload processor to catch renamed files on MODX 3 (note: MODX 3 is not officially supported yet) [#558]

ContentBlocks 1.8.11-pl
----------------------
Released on 2019-07-02

- Fix exceptions in parsing resources not being handled when rebuilding content
- Fix incorrect variable usage causing error in parser exception
- Fix inserting links in Redactor rich text settings due to z-index issues [S20388]
- Fix potential read errors for getimagesize() in gallery input

ContentBlocks 1.8.10-pl
----------------------
Released on 2019-06-21

- Add 3 new icons (layout_img_left, layout_img_right, layout_img_top) to the standard set, thanks to Ralph de Groot [S20181]
- Fix "Remove Image" buttons appearing behind image preview on settings [S20293, S20228, F1854]
- Fix link fields not showing field label when a resource was selected [F1850]

ContentBlocks 1.8.9-pl
----------------------
Released on 2019-05-27

- Remove always-visible scrollbar from image crop previews [S20151]
- Allow long labels on text/dropdown fields to flow normally [S20099]
- Clamp x/y positions of image crops to positive integers [#549]

ContentBlocks 1.8.8-pl
----------------------
Released on 2019-03-11

- Add [[+layout_title]] to fields as well [S19368]
- Prevent exception when using cbGetFieldContent to load a layout field [#441]

ContentBlocks 1.8.7-pl
----------------------
Released on 2019-02-08

- Add svg to the default accepted file types on the image input
- Fix the layout title not being set since 1.8.6 [S19368]
- Fix issues with templates being invisible with Ace installed and ace.grow enabled [S19331]
- Fix hitting enter in a list causing gallery items to be removed [#546]
- Integrate new minimum requirement checks per https://www.modmore.com/blog/2019/minimum-php-requirements/

ContentBlocks 1.8.6-pl
----------------------
Released on 2019-01-23

- The built-in layout title (click the layout name in the canvas) is now available in both [[+title]] and [[+layout_title]] placeholders
- When you have a layout setting with key "title", your layout setting now overrides the built-in layout title [S19264]
- Fix crops not being unset when removing an image from an image input [#542]

ContentBlocks 1.8.5-pl
----------------------
Released on 2019-01-08

- Fix image crops not using resource-based placeholders in the path [S18787]
- Fix array values (e.g. image crops) not being available in @CHUNK templates [#531]
- Add warning to the rich text setting type that it only works when exposed in a modal window


ContentBlocks 1.8.4-pl
----------------------
Released on 2018-12-28

- Fix installation on MODX3 again [S19048]

ContentBlocks 1.8.3-pl
----------------------
Released on 2018-12-04

- Fix drag & drop ordering of settings not working anymore [S18381]
- Fix image buttons not shown when an image setting is added to an image field [#539]
- Fix help links in the ContentBlocks component [#536]
- Tweak long setting labels to look prettier [#535]
- When rebuilding content, make sure [[+unique_idx]] is reset between resources [#532]
- Add Layout Settings to field templates as [[+layout_setting.SETTING_KEY]] [#529]
- Speed up rebuild content by only sleeping between processed resources, allowing skipped resources to move faster
- Remove unused phpthumb library
- Update package encryption to encryptedVehicle 2.0
- Package installation only checks the server requirements once now, before the rest of the installation

ContentBlocks 1.8.2-pl
----------------------
Released on 2018-10-05

- Add crop_jpeg_quality and crop_png_compression system settings to influence the quality of generated images
- Fix missing templates for the cropper when only the "Image with Title" input and not "Image" is used [S17718]

ContentBlocks 1.8.1-pl
----------------------
Released on 2018-08-17

- Prevent E_NOTICE undefined index resource in cbHasField [S17468]
- Fix image preview not showing up for image settings [S17485,17456]
- Fix image preview not showing up for the image with title input type [S17455]
- Remove stray console.log in image.js related to cropper configuration
- Fix cropper opening automatically even when it\'s disabled [S17455]
- Fix title on the image with title input type not saving [S17461]

ContentBlocks 1.8.0-pl
----------------------
Released on 2018-08-10

- Support multiple fields in cbHasField by providing a comma separated list to the &field property [S16875]
- Fix padding and scroll jumpiness caused by a clearfix on the contentblocks wrapper
- Fix the template builder not initialising
- Make [[+total]] available in the row templates of repeaters [S17261]
- If only one crop is configured on an image, automatically close the cropper after saving [#522]
- Add property to image fields to automatically open the cropper when an image is added [#520]
- Add property to image fields to replace the manager thumbnail with a defined crop when set [#521]
- Automatically focus search fields when opening add field/layout modal [#518]
- Add missing title to condensed list view icon [#512]
- Prevent users from dragging/inserting more than the maximum amount of configured images into a gallery field [#506]
- Fix image cropper not opening when clicking on the crop preview of an image (instead of image_with_title) input type
- Don\'t show crops preview for crops that were removed from the image configuration [#524]

ContentBlocks 1.8.0-rc2
----------------------
Released on 2018-07-11

- Fix "Cropper is not defined" error trying to open the cropper due to dependency missing in compiled assets
- Fix preview and crop images not loading in cropper when the file depending on where it is in the filesystem (or remote)
- Fix issues creating crops server-side related to media source settings, should now support S3 and other source types as well
- Fix save button not restoring to "Save" when an error occurs

ContentBlocks 1.8.0-rc1
----------------------
Released on 2018-07-11

New features:
- Add a new "Mini" layout style on repeaters for list-type repeaters where each entry is compressed into a single line
- Add canvas_position setting to determine where the content goes: inherit (default as before), block, tab1 or tab2; primarily meant for MODX3.
- Add image cropper to image and image with title fields [#259]
- Add rich text field/layout setting type, currently only supported when added to the setting modal window

Improvements:
- Make sure every import creates a backup export in core/export/
- Make the template builder use more of the screen size
- Change top menu from 2.2-style actions to namespace based controller routing
- Use proper semantic button on gallery items
- Modal window for settings has been made bigger

Bug fixes:
- Fix select boxes having the wrong height in some cases
- Fix installation in MODX3.
- Fix case-sensitive file extension check on upload preventing width/height from being returned to image inputs [S17074]
- Fix incorrect icon on Link field in the Basic Set created during installation [#510]
- Fix missing lexicon for process_tags, remove_content_dom setting, template descriptions for textarea and snippet input types [#509, #508, #511]
- Fix manager columns property on a repeater affecting nested repeaters [S17076]

ContentBlocks 1.7.5-pl
----------------------
Released on 2018-03-14

- Fix incorrect default icon for the list input type [S16160]
- Add tinyrte_lazy_init setting. When enabled, tinyrte instances are only created when focusing an input, saving memory if you have lots of fields
- Translation updates [S16211]

ContentBlocks 1.7.4-pl
----------------------
Released on 2018-02-06

- Fix license check running daily instead of weekly

ContentBlocks 1.7.3-pl
----------------------
Released on 2018-01-22

- Update modmore/alpacka to 1.0.0-pl to strip out left-over placeholders in upload paths (e.g. [[+alias]] if resource isn\'t created yet) [#469]
- Make sure $modx->resource is available before using it in cbGetFieldContent/cbHasField [#502]

ContentBlocks 1.7.2-pl
----------------------
Released on 2017-12-19

- Fix image thumbnails not working when the first media source does not point to the site root [S15704]

ContentBlocks 1.7.1-pl
----------------------
Released on 2017-09-12

- Make sure saving the resource before a dropdown fields\' options are loaded doesn\'t reset the value to the default [S14646]
- Fix modx browser being inaccessible when choosing an image for an image settings set to show in a modal [#495]

ContentBlocks 1.7.0-pl
----------------------
Released on 2017-09-04

- Add lexicon support for chunk properties
- Fix weird positioning on lists items if tinyrte is enabled [#493]

ContentBlocks 1.7.0-rc2
-----------------------
Released on 2017-08-08

- Fix error due to missing default context in template builder

ContentBlocks 1.7.0-rc1
-----------------------
Released on 2017-08-04

New features:
- Add layout switcher to change a layout to a different type while preserving content [#355]
- Add crumbs to the resource search to give more context about a specific resource
- Custom layout titles are now available with [[+title]] in layout templates [S12252]
- Image settings on field and layouts! [#89]
- Add search to add field/layout modals [#329]
- Add 2 new view modes for field/layout modals: one showing descriptions, and one more condensed (default configurable via system setting)
- Field/layout templates now support @CHUNK to create chunk tags with all available properties [#461]
- Now enabled on the LocationResources custom resource type by default
- Repeater items can now be displayed as columns instead of just rows

Improvements:
- Add pointer cursor to the link dropdown to indicate it can be clicked
- "Choose" button on image, gallery, and file fields opens to correct path within specified media source

Bug Fixes:
- The (hidden) content DOM elements will now be removed after ContentBlocks is initialised. This can help prevent
issues with markup conflicting with the manager. Disable the contentblocks.remove_content_dom setting to stop this.

ContentBlocks 1.6.5-pl
----------------------
Released on 2017-06-13

- Fix inability to collapse newly created repeater rows [#477]
- Fix incorrect multi-row layout in repeaters when using tinyrte on subfields [#476]
- Fix TinyMCE/TinyMCE RTE/CKEditor breaking when drag and dropping repeater rows [#473]
- Fix non-latin characters preventing recognition of an email address in link input/setting [#471]
- Fix inability to delete repeater rows inside a fixed-size repeater [#470]
- Fix incorrect sortorder when drag and drop sorting items in the component on page 2 and beyond [#456]
- Add missing drag and drop sorting on templates
- Fix custom titles not being stored for nested layouts [#458]

ContentBlocks 1.6.4-pl
----------------------
Released on 2017-03-31

- Accept empty property values as filled-in values [S11382]
- Fix missing key/width fields when duplicating a subfield in a repeater [S11386]
- Fix PHP 5.3 compatibility in dropdown getlist processor [S11400]
- Use [[+value]] instead of [[+tag]] on chunk fields for consistency [S11424]
- Fix TinyMCE RTE [#378] and CKEditor [#267] instances breaking when fields are dragged and dropped or layouts reordered

ContentBlocks 1.6.3-pl
----------------------
Released on 2017-03-07

- Fix selected resource title not being shown on link input types [#363]
- Fix default template assignment based on context [#449]
- Fix issue expanding/collapsing repeater (items) within a repeater [S10341]
- Fix error when opening the template builder [S11314]
- Fix invalid export filenames on windows due to : character
- Make component alignment consistent with the rest of MODX [#454]

ContentBlocks 1.6.2-pl
----------------------
Released on 2017-02-08

- Fix issue repeatedly opening the media browser on the file input type [S11088]
- Make sure $modx->resource is available to a dropdown populating snippet [#445]

ContentBlocks 1.6.1-pl
----------------------
Released on 2017-01-31

- Fix 401 unauthorized on the link typeahead prefetch [#447]
- Fix rebuilding content not checking for a context-specific use_contentblocks setting [#11060]
- Restore compatibility with PHP 5.3
- Fix bug where unlimited-item repeaters (maxItems == 0) could not be sorted

ContentBlocks 1.6.0-pl
----------------------
Released on 2017-01-19

- Remove stray console.log statement
- Update Alpacka to 0.4.0

ContentBlocks 1.6.0-rc2
-----------------------
Released on 2017-01-03

Bug fixes:
- Fix bug with repeater subfields not being found
- Fix bug with getLayoutFields which resulted in incorrect fields being returned if a layout contained a nested layout field
- Related to getLayoutFields bug fix, test if we\'re in a "repeat layout" event when adding layout fields; if so, don\'t show the "add layout" modal

ContentBlocks 1.6.0-rc1
-----------------------
Released on 2016-12-23

New features & improvements:
- Add ability to insert images by providing a url; images are downloaded to the server [#351]
- Hide Delete Item button on repeaters that have a fixed number of items [F392]
- If repeaters are set to a fixed number of 1 item, the item collapse button is also hidden [F392]
- Add checkered background for transparent images [S9968]
- Add support for the gallery input type in &innerLimit property of the cbGetFieldContent snippet [S9985]
- Ctrl/Cmd clicking a video search result will open it in a new tab
- Attempting to delete the default layout or field will show an error [#436]
- Ability to drag files from the file tree into image/gallery fields [#179]
- Internal dependencies (jquery, file upload, typeahead libs) have been updated [#433]
- Add defaults_allowed_inputs setting to manage which input types are available as field targets in default templates [S10491]
- Add show_resource_option setting, disable it to hide the "Use ContentBlocks" option on resources [#280]
- Show clear warning when layouts can not be found when generating the content to prevent broken pages [#405]

Accessibility/usability-related improvements:
- Fix missing focus styles on selects, text inputs and radio/checkbox [#429]
- Hide "x" from screen readers when accompanied by a textual label, like "delete" [#425]
- Add title/aria-label to close modal button [#425]
- Add higher contrast hover/focus indication for "Add Content Here" button [#426]
- Add title/aria-label to move layout up/down buttons [#424]
- Add title/aria-label to "Add Content Here" button [#420]
- Change button hover/focus styles to ensure enough contrast [#427]
- Button hover/focus styles for destructive actions are now in red
- Clean up formatting in tinyrte link modal
- Clean up styling in add content/layout modal
- Video search results can now be navigated with the keyboard [#390]

Bug fixes:
- Fix possible broken canvas caused by textarea field
- Fix positioning of loading mask on fields
- Prevent E_NOTICE for repeater subitems that have been removed [S10493]
- Fix comma-separated select/radio setting values preselecting the wrong options [S9748]
- Add missing contentblocks.file.upload_path setting [S10614]
- Fix parsing issue in cbGetFieldContent where nested items don\'t get processed first
- Fix paste cleanup in IE11
- Fix default media sources working in multi-context setups [#434]

ContentBlocks 1.5.2-pl
----------------------
Released on 2016-12-08

- Fix error where blank default settings would not display properly ("=Default")

ContentBlocks 1.5.1-pl
----------------------
Released on 2016-09-23

- Fix "Add content here" button being hidden within layouts in a repeater

ContentBlocks 1.5.0-pl
----------------------
Released on 2016-09-13

- Fix chunk inputs in the template builder

ContentBlocks 1.5.0-rc2
-----------------------
Released on 2016-09-05

- Prevent images/common objects from taking more than 100% width in a dynamic chunk preview [#412]
- Store nested field data in $linear variable so that cbHasField / cbGetFieldContent can access the data of nested fields
- Fix clearing Layout/Template filter resetting the grid to show fields [S9791]
- Add empty alt attribute to default image input, and htmlent filter to image with title input [#418]

ContentBlocks 1.5.0-rc1
-----------------------
Released on 2016-08-03

New Features:
- Full control over what users can do in the ContentBlocks component with a new Access Policy with 35 permissions [#389]
- Add property add_first_item to repeaters to control if an empty first item should be automatically added [#386]
- Property added to enable TinyRTE on textfield, textarea and quote input types [#347]
- Added ability to duplicate a field/layout setting
- Add new dropdown input type [#217]
- Chunk fields will now show a dynamically updated preview

Improvements:
- Select, radio and checkbox settings now support "value==Displayed Value" format on top of "Displayed Value=value"
- Detect when alerts have been dismissed in the browser to still allow removing fields/layouts

Fixes:
- Fix incorrect strpos check causing the parser to be called more often than necessary [#399]
- Fix "available templates" on layout fields not being respected when adding a layout between existing layouts [#398]
- Prevent js error when generating the canvas on an existing non-richtext resource
- Fix exposed radio/checkbox settings sharing the same name attribute [#406]

Deprecations:
- "Displayed Value=value" format for field and layout settings and new dropdown input will be removed in 2.0. Recommended to use the new "value==Displayed Value" instead.

ContentBlocks 1.4.5-pl
----------------------
Released on 2016-05-18

- Update ace to build 18.02.16 (src-min-noconflict) to resolve conflicts with the MODX Ace package in the component

ContentBlocks 1.4.4-pl
----------------------
Released on 2016-05-17

- Load translations from lexicon before rendering to make sure they\'re always applied [#394]
- Fix issue outputting empty list items [#333]
- Fix html in setting default values getting parsed in the grid [#325]
- Prevent moving list items into unrelated sortables [#334]
- Fix syntax highlighting on code input when the Ace package is installed and active

ContentBlocks 1.4.3-pl
----------------------
Released on 2016-04-25

- Fix video input breaking the MODX Media Manager and dropdown TVs, caused by Google JS API [#387]
- Fix issue selecting availability fields in certain languages due to max length option [#388]

ContentBlocks 1.4.2-pl
----------------------
Released on 2016-04-11

- Fix MySQL error caused by the templates "Target Field" dropdown [S8482]
- Fix viewing layouts and templates on layout fields when "allowed templates" or "allowed layouts" is set to -1. [S8356]

ContentBlocks 1.4.1-pl
----------------------
Released on 2016-04-04

- Only hide delete button on repeater fields [#380]
- Fix E_NOTICE caused by lexicon files
- Fix the template builder being broken since 1.4 [#385]
- Hide filter options on subfield grids [#383]
- Fix ID conflicts in the subfield grids when editing a repeater

ContentBlocks 1.4.0-pl
----------------------
Released on 2016-03-23

New Features:
- Categories! You can now organise your fields, layouts and templates into neat categories to keep \'m organised.
- Filters and search in the component for fields, layouts and templates
- New License System! We\'ve enabled support for our new license system, which includes free development licenses

Improvements:
- All indexed varchar fields are now limited to 190 characters to account for indexes on MySQL Strict mode [#379]

ContentBlocks 1.3.6-pl
----------------------
Released on 2016-03-15

- Fix links on gallery input types [S8247]
- Fix setting option values using lexicons [#375]
- Fix edge case where integer setting values could break the canvas
- Fix subfield action buttons appearing where they shouldn\'t in repeaters

ContentBlocks 1.3.5-pl
----------------------
Released on 2016-03-07

- Make sure the key and width of repeater subfields are required [S8028]
- Fix fatal error in case a repeater subfield did not have a key [S8028]
- Add "fontawesome" icon (Thanks Sebastian!) [#370]
- Prevent importing subfields from wiping all fields [#369]
- Fix variable names in RenderContent event [#373]

ContentBlocks 1.3.4-pl
----------------------
Released on 2016-02-16

- Fix issue where TV tags would not get parsed properly (Update to Alpacka v0.2.1, #366)
- Fix issue emptying TinyRTE-enabled inputs always keeping the last character (#279, S7934)
- Correct some links that have changed to prevent redirects

ContentBlocks 1.3.3-pl
----------------------
Released on 2016-02-10

- Fix incorrect caching of resources in rebuild_content processor

ContentBlocks 1.3.2-pl
----------------------
Released on 2016-02-04

- Prevent fatal error when trying to edit a non-existent resource (Thanks Johan!)
- Fix error when running rebuild_content as a Scheduler task

ContentBlocks 1.3.1-pl
----------------------
Released on 2016-02-01

- Fix image with title bug causing the canvas to never show up
- Fix issue with multiple 100% cols not resizing properly
- Fix broken canvas if thumbnail_size property isn\'t set on a gallery
- Set a border-bottom on empty columns for more consistency in layouts

ContentBlocks 1.3.0-pl
----------------------
Released on 2016-01-28

- Add missing plugin event relation for FileSluggy compatibility
- Remove duplicate "Show Link Field" property on Gallery fields
- Prevent various E_NOTICE and E_WARN errors (Undefined indexes: link, process_tags, unchecked getimagesize() calls)
- Fix column heights not getting reset upon removing a repeater row (#360)
- Move "Add Layout" button to a full width bar (#359)
- Update to Alpacka 0.2.0 (fixes context-specific settings in manager-side js)

ContentBlocks 1.3.0-rc6
-----------------------
Released on 2016-01-20

- Fix broken thumbnail generation (introduced in rc5)
- Fix Repeaters not showing saved content (introduced in rc5)
- Add missing contentblocks.base_url_mode setting needed to control image url generation on multi context sites
- Fix templates always inserting at the bottom
- Update to Alpacka 0.1.2 (fixes [[+resource]] path variable)

ContentBlocks 1.3.0-rc5
-----------------------
Released on 2016-01-19

- Fix issue in multi-context sites where images may not show up [S7665]
- Fix unexpected results in the chunk input when empty values are not passed to the tag [S7659]
- Remove Add Layout button overlaying delete/field settings on layout fields [#356]
- Fix positioning of Add Layout button in layout fields
- Fix control over the sortorder of subfields in a repeater [S7719]
- Fix loading a RTE for the template builder in the component
- Fix issue accessing resizeimage processor on case-sensitive server environments

ContentBlocks 1.3.0-rc4
-----------------------
Released on 2016-01-14

- Improve compatibility with FileSluggy (and similar extras) that sanitize and rename files on upload

ContentBlocks 1.3.0-rc3
-----------------------
Released on 2016-01-06

- Add schema defaults for icons so strict mysql doesn\'t fail to create repeater subfields
- Fix incorrect display of availability and settings grids
- Add pointer cursor to the radio and checkbox labels

ContentBlocks 1.3.0-rc2
-----------------------
Released on 2016-01-04

- Prevent Repeater subfields from showing up in the Add Content modal [S7545]

ContentBlocks 1.3.0-rc1
-----------------------
Released on 2015-12-23

New features:
- New "Add Layout" button to insert layouts at any point in the canvas (#103)
- Allow more than one row of columns per layout (#310)
- Click a layout title in the Canvas to give it a different title on that specific row (#272)
- Add [[+width]] and [[+height]] placeholders to image and gallery inputs (#274)
- Repeater input now also has a "Add Item" button at the top for inserting new items before existing ones (#242)
- Add expandAllLayouts and collapseAllLayouts methods to the js class
- Parse Resource tags (e.g. [[*pagetitle]]) on save and rebuild (#252)
- Make all settings context-aware for context-specific overrides
- Upload path placeholders now include all resource fields, tvs (with tv. prefix), some settings and (ultimate) parent id and alias (#196, #247)
- Allow template properties to grow in height for all input types
- Add checkbox and radio setting types for fields and layouts
- Image fields can now automatically create thumbnails for improved back-end performance (#257)
- Image and gallery fields will now store the urls as relative urls when possible, increasing portability (#286)
- Add ContentBlocks_RebuildContent, AfterRebuildContent and RenderContent system events (#132, #243, #283)
- Add option to set a minimum number of repeater items (#308)
- Add single-field, single-layout, and single-template exporting (#255)
- Add .contentblocks-field-richtext class to richtext field wrapper template

Improvements:
- Better keyboard accessibility through additional focus styles
- Make sure the default value field for settings is a textarea instead of textfield (#256)
- Make the rebuild time guesstimate slightly more accurate
- Add ability to set the number of decimals on cbFileFormatSize [#320]
- Add ability to set an inner limit and/or offset for repeaters in cbGetFieldContent (#330, thanks Thomas Jakobi!)
- Filter out revisions from Extras.io Preview/Workflow extras in the link input [#317]
- Autogrow TinyRTE to make sure it shows all the content without scrollbars [#341]
- Make use of the modmore/Alpacka composer package for standard, shared functionality.
- Make sure all vtab panels can scroll if their content is too large to fit

Fixed:
- Fix loading of field properties within a repeater group [#315]
- Fix usage of [[+idx]] within cbGetFieldContent
- Fix table input going nuts with more than 10 rows (thanks Luk!) [#277]
- Fix table context menu hiding behind other elements [#339]
- Fix CSS conflict with SimpleCart causing scroll issues in vtabs

ContentBlocks 1.2.7-pl
----------------------
Released on 2015-07-23

- Hardened XHR security to prevent leaking session IDs cross-domain (#304)
- Fix hardcoded "Insert Content" and "Insert Layout" modal titles (#313)
- Fix jump in positioning of layout options by hidden up/down buttons for ordering layouts (#311)
- Fix issue where nested layout fields caused the regular parser being restored, which then parsed subsequent tags that should be left untouched during the save (#302)
- Center "Add Item" button on repeaters to be more consistent with other actions (#293)

ContentBlocks 1.2.6-pl
----------------------
Released on 2015-06-09

- Fix issue where removing layouts did not affect the layouts-per-page calculation
- Fix ultimate parent-based default template selection (#291)
- Fix TinyRTE missing styling and buttons bar on Windows/Firefox (#287)
- Add some missing indices to the database tables (#290)
- Make sure select option recognises an empty string as value (#288)
- Fix upload to media sources with a full url as baseUrl
- Set Ace minLines option to 1 for smaller code inputs

ContentBlocks 1.2.5-pl
----------------------
Released on 2015-05-15

- Make sure Ace extends infinitely for better scrolling
- Fix several database issues with strict SQL modes
- Fix issue where duplicating a field lost some of its values (availability, template) (#278)
- Make sure the sort order is set to a good number automatically when creating a new field/layout
- Fix issue where nested repeaters might not work (#281)
- Fix wrong template in the default Link field
- Improve error reporting when a template for the canvas can\'t be loaded

ContentBlocks 1.2.4-pl
----------------------
Released on 2015-03-30

- Fix issue processing table inputs with only one row (#268)
- Make sure lexicon topics are always loaded for custom input types
- Make sure the resource is set when rebuilding content
- Fix default upload directory values not inheriting from the contentblocks.image.upload_path system setting
- Fix source override not being applied in file input
- Prevent E_NOTICE error when parsing settings

ContentBlocks 1.2.3-pl
----------------------
Released on 2015-02-17

- Fix missing upload progress bar on file input
- Allow categories to be specified by name on chunk selector
- Allow using "/" in upload fields to place files at the root of a media source
- Add instructional placeholder to link fields
- Fix bug where nested repeaters created rows in their parent repeaters
- Hide "Add item" button on repeater when limit reached
- Allow code as a target field type for defaults

ContentBlocks 1.2.2-pl
----------------------
Released on 2015-01-30

- Fix missing "add content here" button between fields on nested layouts, if the nested layout is the last field in the row
- Fix undefined error when the max number of files in a file input has been reached
- Fix weird jump when editing a code input (#146)
- Enable soft wrapping on code input for better overall editing experience

ContentBlocks 1.2.1-pl
----------------------
Released on 2015-01-16

- On image-with-title input type, fix title field getting duplicated when adding an image
- Fix some E_NOTICE errors in processing
- Fix issue editing a field after duplicating it
- Fix issue uploading images/files to an Amazon S3 media source
- Add collapsibility to repeater fields and items
- Fix problem with template settings: make fields, layouts, and templates into copies before working with them instead of treating them as references

ContentBlocks 1.2.0-pl
----------------------
Released on 2014-11-26

- Fix icons on default fields added in rc2
- Fix display issue with multiple link settings (missing clearfix, some extra padding, cleaner typeahead results)
- Fix [[+link]] value being set to [[~]], instead of being empty when no link was added
- Fix issue saving field data edited inline in a repeater group
- Make windows that can potentially get really high open at the top of the screen
- Fix issue with links causing certain links to be wiped on page reload
- Fix issue uploading files/images in MODX 2.2.x
- Improve file input delete button styling (thanks Luk!)
- Improvement to icon handling for file input

ContentBlocks 1.2.0-rc2
-----------------------
Released on 2014-11-11

- Fix issue with default templates not working properly due to plugin event
- Improve styling of nested repeater fields to better distinguish each instance
- Fix issue with title field not getting a height with TinyRTE enabled
- Ensure tabbing the list input retains the proper focus when using TinyRTE
- Add some new input types to the default fields offered during setup
- Fix modal positioning in older webkit browsers (thanks Luk!)
- Add [[+parent_field_id]] placeholder within nested layout fields

ContentBlocks 1.2.0-rc1
-----------------------
Released on 2014-10-28

New Features:
- New default templates feature which allows fine-grained control over the default canvas on new resources
- New "file" input type for adding a list of files similar to the gallery input
- New "repeater" input type, which shows grouped fields which can be repeated together
- New "link" input, which includes typeahead search for resource links, plus URL and email address support
- New "link" setting type for adding field/layout settings that need to link somewhere
- New optional link field to gallery items
- New link button added to TinyRTE to use the new link input functionality
- New [[+unique_idx]] placeholder to layouts and fields with a really unique idx
- New cbGetFieldContent snippet, which allows accessing specific fields from the ContentBlocks canvas
- New settings to specify a custom icon url outside the ContentBlocks directory
- New cbBaseInput->getDependantInputs method so composite input types can declare dependent input types

Improvements:
- Styling and functionality updates for modal windows (esc now closes them!)
- Ensure that setting tags like [[++site_name]] aren\'t prematurely parsed by the ContentBlocks parser, enables better multi-context usage
- Make sure hitting ctrl/cmd+s in a TinyRTE-enabled field properly triggers save on the resource
- Include iframe transport library for better upload browser support
- Include CSS and JS source maps into the package to prevent 404s when opening the console
- Expose ContentBlocks->resource for use in input type processing
- If input types are missing, fail politely with an error message instead of a fatal js error
- Make sure contentblocks.debug setting also applies to what input type assets are loaded
- When moving layouts the canvas now nicely scrolls to the new layout position so you keep your position
- List items can now be drag/dropped for sorting
- Improve sorting experience by setting the proper height on the placeholder
- Layouts can be expanded and contracted to shorten long or confusing pages in the editor

Bug fixes:
- Fix TinyRTE so links are stored more reliably
- Fix issue where a lot of properties could push the save buttons off screen when editing a field
- Fix issue with the properties tab not being generated consistently
- Fix missing label on Layout fields
- Fix unsetting "Only allow as nested layout" checkbox on Layout > Availability
- Fix issue with nested layouts, repeaters, and content duplicating itself

ContentBlocks 1.1.3-pl
----------------------
Released on 2014-10-20

- Change error messages to use ExtJS-style alerts instead of browser-style
- Fix undefined default template on chunk input
- Make video modal more user friendly by always keeping the search in view, no double scrollbars
- Setting max number of images on a gallery field to 0 now means there is no limit
- Fix issue with settings on nested layout fields being copied to their children

ContentBlocks 1.1.2-pl2
-----------------------
Released on 2014-09-16

- Fix sporadic issue with inserting nested layouts on complex pages
- Fix default code input template; should not have had htmlent output modifier
- Fix issue with video previews not showing up on https
- Add [[+layout_idx]] placeholder to fields
- Fix placeholders for table input in pre-installed field set
- Fix annoying popup when inserting a template that contains nested layouts
- Fix issue where table input did not have width set properly when the canvas is first loaded

ContentBlocks 1.1.1-pl
----------------------
Released on 2014-08-01

- Fix default layout fallback when the requested layout is not found
- Fix validation issues when creating a template because of missing icon by setting a default
- Fix issue instantiating Code inputs if the Ace package is installed, but not used
- Fix endless loop when a stored snippet or chunk is no longer available but selected anyway
- Fix opening MODX Browser for inserting images into galleries
- Resolve some further issues with rebuilding content in 2.3 and downloading console output
- Fix chunk input refusing to load in 2.3
- Fix issue where Firefox would endlessly regenerate TinyRTE instances
- Return a value in the plugin to make sure it doesn\'t log 1\'s in 2.3.0
- Fix issue with list inputs repeating values
- Resolve build issue affecting snippets, causing errors to be shown during upgrade
- Fix issue where exposed settings would override resource fields of the same name on save
- Fix issue where layout settings wouldn\'t be processed for tags, even if the box was checked
- Fix issue where multiple settings would cause the template builder to not show any of them
- Fix occasional issue where parser wasn\'t loaded in getObjectsForCanvas, so the template builder failed to load properly
- Add some new icons

ContentBlocks 1.1.0-pl
----------------------
Released on 2014-07-18

- Fix issue where the "Use ContentBlocks?" resource setting did not change to "No"
- Add ability to process template tags in settings optionally
- Fix issue with ContentBlocksExtraSelectors and 3PCs
- Fix rebuilding content in 2.3. Also requires MODX 2.3.1.
- Fix issue where the "Use ContentBlocks?" resource setting refreshed the page when creating new documents
- Further design tweaks for 2.3 and the layout input type
- Auto select snippet/chunk if there\'s only one result
- Update default accepted_resource_types value to include all 3rd party custom resources that are known to be supported
- Prevent generating transient layouts that causes issues with parsing

ContentBlocks 1.1.0-rc2
-----------------------
Released on 2014-07-08 (pre-release)

- Fix issue editing fields and layouts in the component when the Ace package is installed
- Fix issue where installer did not create Templates table

ContentBlocks 1.1.0-rc1
-----------------------
Released on 2014-07-08 (pre-release)


New Features
- Add ability to insert new content between existing blocks with new "+" buttons
- Add optional description field to Gallery input
- Add new Chunk Selector input type (allows the editor to choose from a list of chunks and adding properties)
- Add Yellow Text inspired tiny RTE for list, heading and image with title input types
- Improve compatibility with third party custom resource types by allowing a .contentblocks_replacement class to be defined as target, and setting a class on the wrapper with the class key for targeting styling tweaks and a .contentblocks_loaded class on the body for container styling tweaks.
- Add button to repeat a layout for quick duplication.
- Option to Expose field and layout settings so they appear right in the canvas instead of hidden behind a modal window
- Nested layouts with a new "Layout" input type
- Fields, layouts and settings are now translateable through Lexicons
- Templates, a combination of layouts and fields for quick insertion, are now available

Improvements:
- Add German (thanks Christian Bartels!), French (thanks Julien Studer!), Dutch (thanks Bert Oost!) and Swedish (thanks Joakim Nyman!) translations, plus a start on Polish and Russian via https://crowdin.net/project/modmore-contentblocks
- Fix several instances of hardcoded text, now uses lexicon strings as they should have.
- Prevent page generation from marking the resource form as dirty
- Make sure invalid content warnings in the rebuild content process show as error
- Parser improvement (search & replace placeholders for speed and nested placeholders before using the parser)
- Add [[+value]] as alias for [[+tag]] placeholder for chunk & snippet templates.
- Add 2.3-specific styling to fit in with the new design
- Pass field settings through to the chunk or snippet call in chunk and snippet inputs
- Clear cache after rebuilding the content
- Add titles and descriptions to the lexicon for system settings
- Improved JavaScript performance (esp. on big pages) due to delegate event handling and deferred canvas generation
- Improved upload filename sanitisation with support for Transliteration, and a new mechanism to prevent overwriting existing files.
- Pass [[+layout_id]] and [[+layout_column]] through to all field templates
- Pass [[+chunk_name]] and [[+snippet_name]] through to template on chunk, chunk selector, and snippet inputs
- Add new getLexiconTopics() method to inputs to allow loading input-specific lexicon topics
- Make local grid windows open as modal to prevent closing parent window prematurely
- Add drag & drop sorting to grids in the component (fields, layouts, settings etc)
- Add new confirmBeforeDelete input JS method and built-in data checking to prevent unnecessary confirm prompts when deleting fields
- Add animation to moving layouts to clearly communicate what is happening
- Automatically refresh page after changing the use_contentblocks setting

Fixes:
- Fix issue with images in image input not showing up properly.
- Fix bug installing default bootstrap layout
- Fix "image with title" input inheritance from "image" input
- Fix incorrect default value on Code input encode entities property
- Fix default icon on textfield input
- Fix "layouts" field not having its value loaded when editing a field
- Fix boolean property handling with new ContentBlocks.toBoolean method
- Prevent JS error trying to add the "Use ContentBlocks" setting on custom resources
- Only allow "save and close" on existing fields/layouts to prevent duplicate additions on subsequent saves
- Fix using field settings in list input wrapper template
- Don\'t allow spaces in setting keys
- Disable upload-by-paste on image/gallery inputs
- Fix issue in certain environments where subsequent uploads fail due to keep-alive header
- Fix issue with CRCs where newly created resources would not properly register it using ContentBlocks
- Change default heading level from installed field set from h6 to h2
- Fix issue where removing the last layout did not unset the last content
- Make sure Media Source combo works across 2.2 and 2.3
- Fix the unicode cog not always showing up by replacing with an SVG and Font Awesome in 2.3
- Fix TinyMCE breaking when sorting images
- Fix repeated values in Table input cells, clean rows to make sure there isn\'t an extra row and column on the output. [BREAKING: change [[+value]] to [[+cell]] and [[+row]] in cell and row tpls, respectively]

ContentBlocks 1.0.1
-------------------
Released on 2014-05-05

- Fix CB being disabled unintentionally when using Quick Create/Update Resource
- Add Rebuild Content button to CMP for rebuilding all resources on a site
- Fix E_NOTICE error stemming from the ContentBlocks.summarizeContent function
- Minor change to linear content summary to make it easier to use
- Fix video preview pane showing up when it shouldn\'t (taking up a bunch of space)
- Fix issue loading assets when compress_js is enabled
- Fix field setting placeholders not being set in templates for chunk, gallery, list, snippet and table inputs
- Fix issue with field settings not being loaded after a page refresh (x2)

ContentBlocks 1.0.0
-------------------
Released on 2014-04-30

- Dynamically add a resource setting to enable/disable ContentBlocks on the resource
- Add ability to override system media source in image and gallery input types
- Fix "Choose image" functionality in image and gallery input types refusing to load a second time
- Fix issue with TinyMCE when drag/dropping a richtext field by reinitialising the editor after drop
- Cachebust loaded assets based on ContentBlocks version.
- Use minified + concatenated files unless contentblocks.debug is enabled.
- (Finally) add tooltips to add content and add layout modals for user-defined descriptions.
- Improve behavior of hitting enter in the List input
- Add ability to import & export Fields & Layouts with an XML file

ContentBlocks 0.11.0
--------------------
Released on 2014-04-26

- Minor CSS tweaks, inspired by the oEmbed Input (installable separately).
- Add [[+reference]] renderer to column and setting grids to show placeholder usage
- Add field settings feature!
- Instead of hardcoding common field actions (up to this point only "Delete Field") in each template, add it dynamically.

ContentBlocks 0.10.3
--------------------
Released on 2014-04-22

- Make sure adding a field sets default properties if no properties are set manually.
- Fix parsing issue (manifesting with list fields) causing recursive funkyness.

ContentBlocks 0.10.2
--------------------
Released on 2014-04-14

- Fix loading custom parser class and restoring normal parser when non-core parsers are used (fastField, pdoTools)

ContentBlocks 0.10.1
--------------------
Released on 2014-04-12

- Fix database change in 0.10.0

ContentBlocks 0.10.0
--------------------
Released on 2014-04-12

- Add "Save" and "Save and Close" buttons to Field/Layout edit windows for better continues editing.
- Add cbHasField utility snippet for conditionally doing stuff based on usage (or not) of a specific field.
- When saving a resource, also prepare a linear content array and a field count summary.
- Save the CB content data before generating the content HTML, just in case generating the HTML causes errors that could lead to lost content.
- Prettify date on YouTube video results, formatted using the configured manager date format.
- Add [[+idx]] placeholders to layouts and field templates.
- Make sure manual input for snippet properties is possible if snippets have no defined properties
- Improve the way templates are handled/parsed with a custom parser class.
- Add ID to field/layout names in component.
- Improve error handling in Chunk and Snippet input types
- Add ability to restrict fields to specific layouts.
- Add usergroup constraint to field and layout availability.
- Sort snippets A-Z.
- Add description to field availability
- Add ability to add a custom preview to Chunk inputs
- Make sure saving a field does not unset properties
- Fix boolean selection for Code input (encode entities) and Snippet input (allow uncached) so they can be unset.
- Fix typo in default heading field properties
- In custom inputs allow custom lexicons to be used through cbInput.getName in field list

ContentBlocks 0.9.1
-------------------
Released on 2014-04-04

- Make cbInput.getFieldName public
- Make sure 3rd party inputs do not get weird names in the component grid
- Add note to setup about duplicates during upgrade
- Add option to change the thumbnail size on Gallery inputs
- Show error if no snippets are available for a specific Snippet field.
- Enforce Gallery\'s max_images property with the new Choose feature
- Make sure the field options box only shows up when the "select" fieldtype is chosen
- Accept a single value (w/o separate display value) in the select field options for layout settings
- Prevent removing last item in lists, causing the field to become unusable

ContentBlocks 0.9.0
-------------------
Released on 2014-04-01

# New Features & Improvements:
- Layout Settings allow the editor to add classes
- Adding conditions for when specific Fields & Layouts are available
- Choose existing images to add to a Gallery input
- Use Ace (separate MODX package) in editing Field and Layout templates when installed
- Get rid of gray backgrounds on grids in the vertical tabs (Thx Bert Oost!)
- Add Entities property to the Code input to make it easier to display code and MODX tags
- Add chunk combo for choosing the Chunk to use in the Chunk input.

# Bug fixes:
- Fix z-index on ContentBlocks modals when Redactor is installed
- Make sure deleting a field marks the resource as dirty
- Fix icon on pre-installed Snippet field
- Fix overzealous scroll bars on modals
- Make sure column references can only contain alphanumeric and underscores

ContentBlocks 0.8.3
-------------------
Released on 2014-03-28

- Fixes for setup options

ContentBlocks 0.8.2
-------------------
Released on 2014-03-28

- Add quick set up options to install default sets of layouts and fields
- Fix missing list styles in Redactor
- Add ability to set snippets as uncached with the Snippet input type
- Add chunk input type (Thx Jeroen Kenters) + properties.
- Use minified snippet js

ContentBlocks 0.8.1
-------------------
Released on 2014-03-25

- Remove loud logging statement

ContentBlocks 0.8.0
-------------------
Released on 2014-03-24

- Attempt to catch parsing errors with a try/catch block
- Enable/disable ContentBlocks based on the resource type, by default only enabled on modDocument and mgResource.
- Add ability to move entire layouts up & down
- [BC BREAK] Re-do table input based on HandsonTable (handsontable.com)
- Fix MODX tags from being parsed in the content on the manager page
- Pre-process templates and values to prevent parsing of chunks/snippets/etc during resource save
- Add Snippets input type
- Implement lexicons for i18n
- Implement proper templating for table input
- Allow customising of available languages and default language for Code inputs
- Remove ID definitions in actual input templates, instead these are now set on the wrapping list item.
- Fix E_NOTICE error in cbField class
- [BC BREAK] Refactor to allow for more flexible/encapsulated input types (breaking change for custom inputs)
- Fix weird bug because layout/field templates are loaded in the manager head
- Disable maximising button on window with vertical tabs to preserve the layout
- Prevent output from ContentBlocks_RegisterInputs plugins bubbling through to OnDocFormRender

ContentBlocks 0.2.6
-------------------
Released on 2014-02-27

- Fix critical error editing/duplicating layouts.

ContentBlocks 0.2.5
-------------------
Released on 2014-02-27

- Add icon for horizontal rule
- Add tooltips to field properties to indicate usage and mention available placeholders for templates.
- Add tab-aware Help button for more information about Layouts and Fields.
- Improvements to the component:
--- Show chosen icons in the grid
--- Use a row expander to quickly view the description, if it\'s set
--- Allow inline editing of the sort order for quicker reordering
--- Provide a description of Layouts and Fields on their tabs
- Fix lists and tables not properly adjusting the column heights on changes

ContentBlocks 0.2.4
-------------------
Released on 2014-02-25

Fix upgrade from pre 0.2

ContentBlocks 0.2.3
-------------------
Released on 2014-02-24

- Add max images property to the gallery input
- Fix selecting videos beyond the first results
- Make sure layout and field tiles are all the same height, while accounting for longer titles
- Make Heading input configurable to allow customising available options and default level.
- Add modEvent to the build
- Improve managing columns in the component.

ContentBlocks 0.2.2
-------------------
Released on 2014-02-21

- Default the image browser to the media source as defined in the contentblocks.image.source setting.
- Fix choosing images from media sources that have a different baseUrl than /
- Fix issue deleting non-existent/default layout
- Change "Content Blocks Admin" to "Content Blocks"
- Fix icons on case-sensitive file systems

ContentBlocks 0.2.1
-------------------
Released on 2014-02-19

- Add description to inputs in the input combo box
- Automatically pre-fill the default icon and template when creating a field and choosing an input
- Change Field window to use vertical tabs for general and properties
- Fix reordering of fields not enabling the save button
- Make sure the video input is consistent by using the [[+value]] instead of [[+video_id]] placeholder
- Fix issues with required layout being gone by assuming a simple single column
- Prevent updates from updating modMenu/modAction record
- Add default_layout and default_layout_part settings to build

ContentBlocks 0.2.0
-------------------
Released on 2014-02-18

- Inputs now have all their logic and definitions in one place.
- Parsing content is now done by the input types, allowing handling of composite field templates.
- Inputs can define input-specific properties, which are shown in the cmp edit input modal upon selection.
- Custom inputs are now possible using the ContentBlocks_RegisterInputs plugin event.
- Fix column height corrections in situations with multiple layouts.

ContentBlocks 0.1.5
-------------------
Released on 2014-02-13

- Make sure retina icons are used for a DPR of > 1.
- Fix TinyMCE width rendering
- Add ability to choose an existing image via the media browser for image and image_with_title inputs
- Add contentblocks.disabled setting to disable ContentBlocks on specific contexts or system-wide
- Improve select box styling

ContentBlocks 0.1.4
-------------------
Released on 2014-02-10

- Hide Layout Settings button as it\'s not yet used
- Ensure the icons combo has the proper height because of loading images
- Make sure changes to fields trigger a change in the resource form
- Fix issue initialising when richtext or textarea inputs are not used

ContentBlocks 0.1.3
-------------------
Released on 2014-02-10

- Initial ALPHA release for distribution.
',
    'setup-options' => 'contentblocks-1.9.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'faf11f45b15fe25d9500428359bc5a8c',
      'native_key' => 'contentblocks',
      'filename' => 'modNamespace/4223b5411ac63bc40cddda9ed6a13d94.vehicle',
      'namespace' => 'contentblocks',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '2e01afa30b18e91f05d975813ef1dceb',
      'native_key' => '2e01afa30b18e91f05d975813ef1dceb',
      'filename' => 'xPDOFileVehicle/a1dd85158b0e949a5fbb6d3f12d2d0a0.vehicle',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => '84de92e0f0f9912b9ffe1bd87e3d151e',
      'native_key' => '84de92e0f0f9912b9ffe1bd87e3d151e',
      'filename' => 'xPDOFileVehicle/0075b5966d78712752bc5b2dd540a7a6.vehicle',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '05dccd6016e3005c9174d029744146ce',
      'native_key' => 'ContentBlocks_RegisterInputs',
      'filename' => 'modEvent/f9a4bc79c94473dcb548495fc54bc8c3.vehicle',
      'namespace' => 'contentblocks',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => 'cd4f229caf66c75c608fb5ccddc49d21',
      'native_key' => 'ContentBlocks_RebuildContent',
      'filename' => 'modEvent/3f7be48cc1821aa36aaf01887285d009.vehicle',
      'namespace' => 'contentblocks',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modEvent',
      'guid' => '5a6553ee0c9147bfb1b7824daa99cbb8',
      'native_key' => 'ContentBlocks_AfterRebuildContent',
      'filename' => 'modEvent/c492718f4ebd6b85748433c401861bba.vehicle',
      'namespace' => 'contentblocks',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a5576a64d377aaab086fb9f1e91142f2',
      'native_key' => 'contentblocks.code.theme',
      'filename' => 'modSystemSetting/cd25cfb8335cdf41a23def8b07b6001a.vehicle',
      'namespace' => 'contentblocks',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '51b9ab3ac268ac7a482640e116506b0e',
      'native_key' => 'contentblocks.image.source',
      'filename' => 'modSystemSetting/21c5b7ac3cd6ff4e6413c51ce00793a8.vehicle',
      'namespace' => 'contentblocks',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '3f27dd08cbfd22ddcaac547d2a0b6960',
      'native_key' => 'contentblocks.image.upload_path',
      'filename' => 'modSystemSetting/68755b3eba567993e5da1e0ba7daeeb5.vehicle',
      'namespace' => 'contentblocks',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '2dce13f18d5555ddf4251a3e3fd54e4b',
      'native_key' => 'contentblocks.image.crop_path',
      'filename' => 'modSystemSetting/6c4a464a4a896764886b3f323ab1e464.vehicle',
      'namespace' => 'contentblocks',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '14ce83906fccfe3d8d206a1a59deba3a',
      'native_key' => 'contentblocks.image.max_upload_width',
      'filename' => 'modSystemSetting/5736854c74e44dbed2e4ac09f7a9fa6c.vehicle',
      'namespace' => 'contentblocks',
    ),
    11 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e222c5a18745b9b77cddfaf8cadfabe8',
      'native_key' => 'contentblocks.image.max_upload_height',
      'filename' => 'modSystemSetting/7658dfb89aa1e8e724298faf0531bc3f.vehicle',
      'namespace' => 'contentblocks',
    ),
    12 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '0a9cf1bbbcb8c0e6209c0ba23c80c8d4',
      'native_key' => 'contentblocks.image.strip_meta',
      'filename' => 'modSystemSetting/6b4de268e410f8a760cd4e3d3643b8e7.vehicle',
      'namespace' => 'contentblocks',
    ),
    13 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd896070252faa84d7313dd92e9e62922',
      'native_key' => 'contentblocks.crop_jpeg_quality',
      'filename' => 'modSystemSetting/158f8d36d5a649b55433e4c1e7a39a12.vehicle',
      'namespace' => 'contentblocks',
    ),
    14 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '134312fa0100ce1cebb862e82e58c698',
      'native_key' => 'contentblocks.crop_png_compression',
      'filename' => 'modSystemSetting/120b8109f89fd650c411d51d8e3c5b07.vehicle',
      'namespace' => 'contentblocks',
    ),
    15 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '004a00a1685712bea7696313179546ba',
      'native_key' => 'contentblocks.file.upload_path',
      'filename' => 'modSystemSetting/b8a318f176f8ddfd692154338e737157.vehicle',
      'namespace' => 'contentblocks',
    ),
    16 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a0555189d8c46baf82096a00bdd782a8',
      'native_key' => 'contentblocks.image.hash_name',
      'filename' => 'modSystemSetting/a3013d84639c7d5030cd523500b13e3a.vehicle',
      'namespace' => 'contentblocks',
    ),
    17 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ea0e8d58b712a092e5160cd59fc9c297',
      'native_key' => 'contentblocks.image.prefix_time',
      'filename' => 'modSystemSetting/2e6f88aab2bcb71e04f7d344141a6cb7.vehicle',
      'namespace' => 'contentblocks',
    ),
    18 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '1c82b0453dfb31e9443101be4c559f4c',
      'native_key' => 'contentblocks.image.sanitize',
      'filename' => 'modSystemSetting/bc7d1023259d2f878c3fe4a0b95d63b8.vehicle',
      'namespace' => 'contentblocks',
    ),
    19 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '25198a5bad6d26ffe2d80e3f718b10bf',
      'native_key' => 'contentblocks.base_url_mode',
      'filename' => 'modSystemSetting/e294e1f1889a61cb7887804dabee0021.vehicle',
      'namespace' => 'contentblocks',
    ),
    20 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b8540a3c13d08261b2d5861acc8c3d64',
      'native_key' => 'contentblocks.link.link_detection_pattern',
      'filename' => 'modSystemSetting/e580767ad4f44fda030dff32a9767b2c.vehicle',
      'namespace' => 'contentblocks',
    ),
    21 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '00d466899b4d95a69699015b9728290b',
      'native_key' => 'contentblocks.sanitize_replace',
      'filename' => 'modSystemSetting/a45652b796da9fc604bd6601df30ebc0.vehicle',
      'namespace' => 'contentblocks',
    ),
    22 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f40dab4aba4be7359b4d730b4d323374',
      'native_key' => 'contentblocks.sanitize_pattern',
      'filename' => 'modSystemSetting/978e27f0e8aa79aa64ea0c6e44203b94.vehicle',
      'namespace' => 'contentblocks',
    ),
    23 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4da6a4f62a7563ac710a28350df38a53',
      'native_key' => 'contentblocks.translit',
      'filename' => 'modSystemSetting/b881a0561295358fbd763ae4e6df6984.vehicle',
      'namespace' => 'contentblocks',
    ),
    24 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4376681bb547581e994893b2ecbe172e',
      'native_key' => 'contentblocks.translit_class',
      'filename' => 'modSystemSetting/8ea769d8cc9b43afc2f29ccec2315099.vehicle',
      'namespace' => 'contentblocks',
    ),
    25 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8641633987629ffc4ec5e7e719f99a44',
      'native_key' => 'contentblocks.translit_class_path',
      'filename' => 'modSystemSetting/f7dbe9d2d0697bb38ea43418dea61f28.vehicle',
      'namespace' => 'contentblocks',
    ),
    26 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '5e73ddcea3a3744ed5ac671c3fdd1c91',
      'native_key' => 'contentblocks.disabled',
      'filename' => 'modSystemSetting/3f678fc06f0c284d17c2d98d3c9e44c3.vehicle',
      'namespace' => 'contentblocks',
    ),
    27 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '44e982f5acf063d32809e6a46055a91b',
      'native_key' => 'contentblocks.show_resource_option',
      'filename' => 'modSystemSetting/39ee618f47f9519d4772b24169c2d656.vehicle',
      'namespace' => 'contentblocks',
    ),
    28 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4389d72734a5dfb53fc5570f29a2af18',
      'native_key' => 'contentblocks.canvas_position',
      'filename' => 'modSystemSetting/116f172a69daff3c276ca32ae6e37c12.vehicle',
      'namespace' => 'contentblocks',
    ),
    29 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f7aa8e0bf0368b1b3ad98890aaa004fc',
      'native_key' => 'contentblocks.accepted_resource_types',
      'filename' => 'modSystemSetting/8e1b3602ac5d16b6430fb4070e81e682.vehicle',
      'namespace' => 'contentblocks',
    ),
    30 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '742c5216f17cf99b3f69cf9f2454ae58',
      'native_key' => 'contentblocks.implode_string',
      'filename' => 'modSystemSetting/abb19c664743273de444a1ae29074fe1.vehicle',
      'namespace' => 'contentblocks',
    ),
    31 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '679ab62ca7f4a6852922da7dc69b87eb',
      'native_key' => 'contentblocks.custom_icon_path',
      'filename' => 'modSystemSetting/806f751ad5a0f626b2594c2cb182940a.vehicle',
      'namespace' => 'contentblocks',
    ),
    32 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ad9ec14032640ff72d0377e06fb84a07',
      'native_key' => 'contentblocks.custom_icon_url',
      'filename' => 'modSystemSetting/8c6304b37a57fb3d7d0f46b2f075bb9d.vehicle',
      'namespace' => 'contentblocks',
    ),
    33 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd0356f7da67ce0aeafcc25320a43e0cb',
      'native_key' => 'contentblocks.tinyrte_lazy_init',
      'filename' => 'modSystemSetting/edaf5f0fa3b1322f4e533cd3959a27c3.vehicle',
      'namespace' => 'contentblocks',
    ),
    34 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cc0ffe53e5c3bc67da39032d6e5c41d7',
      'native_key' => 'contentblocks.default_layout',
      'filename' => 'modSystemSetting/ee29cf254562b439c6388c815fe2d878.vehicle',
      'namespace' => 'contentblocks',
    ),
    35 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'f3d22047b21839bdc2a5a2172601eb48',
      'native_key' => 'contentblocks.default_layout_part',
      'filename' => 'modSystemSetting/a310c3ea1511d15280ac19d6bf84612a.vehicle',
      'namespace' => 'contentblocks',
    ),
    36 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6ca915901425395313cca71c47d973d6',
      'native_key' => 'contentblocks.default_field',
      'filename' => 'modSystemSetting/e59fe6bec72fe44b600c540d7905e16b.vehicle',
      'namespace' => 'contentblocks',
    ),
    37 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'cc4614afb04ca32e158787c280c2cffd',
      'native_key' => 'contentblocks.defaults_allowed_inputs',
      'filename' => 'modSystemSetting/20fde09971b2284e8ea053474c413427.vehicle',
      'namespace' => 'contentblocks',
    ),
    38 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b635a0e8abbc996199c56e0e5b1de884',
      'native_key' => 'contentblocks.debug',
      'filename' => 'modSystemSetting/a53cbc92f61ee948f768d65e23fa425d.vehicle',
      'namespace' => 'contentblocks',
    ),
    39 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '29be9e9c4a3ac685cb2d987466f0466d',
      'native_key' => 'contentblocks.clear_cache_after_rebuild',
      'filename' => 'modSystemSetting/6a3197f25ca86ecdf08f713b2fb6ac36.vehicle',
      'namespace' => 'contentblocks',
    ),
    40 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '7bb7bf69526afc57d43a1e5c8fd3f950',
      'native_key' => 'contentblocks.hide_logo',
      'filename' => 'modSystemSetting/1985a52e0cf749ff890056fec1d086d5.vehicle',
      'namespace' => 'contentblocks',
    ),
    41 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '8b7073767b613e8f340d7ac226ae477d',
      'native_key' => 'contentblocks.typeahead.include_introtext',
      'filename' => 'modSystemSetting/ff078764791178d77393a4f1159c3fa0.vehicle',
      'namespace' => 'contentblocks',
    ),
    42 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '95a596bd8ba87f0898d36eefcdd04738',
      'native_key' => 'contentblocks.remove_content_dom',
      'filename' => 'modSystemSetting/f885b84ff7ceb19844c8634ea9f82195.vehicle',
      'namespace' => 'contentblocks',
    ),
    43 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4e839a3d1764e6e8d1427b42cb417003',
      'native_key' => 'contentblocks.default_modal_view',
      'filename' => 'modSystemSetting/1749fd7ed31968702e60d575592a5b7c.vehicle',
      'namespace' => 'contentblocks',
    ),
    44 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modAccessPolicyTemplate',
      'guid' => 'ef9524ade4719785fb7e206c6ae48e39',
      'native_key' => NULL,
      'filename' => 'modAccessPolicyTemplate/e3168ef5c57edb0e185c5d5e61c49d4d.vehicle',
      'namespace' => 'contentblocks',
    ),
    45 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '8573dc2bb35b74c545658274d1d3ae26',
      'native_key' => 'contentblocks.menu',
      'filename' => 'modMenu/c099c6c401f2a1366525564482bd988f.vehicle',
      'namespace' => 'contentblocks',
    ),
    46 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'encryptedVehicle',
      'class' => 'modCategory',
      'guid' => 'a8589b348c263a0364a67ae24bf1c36d',
      'native_key' => NULL,
      'filename' => 'modCategory/d7cf6623ca4a74f0cf8f2fe4f28a788f.vehicle',
      'namespace' => 'contentblocks',
    ),
    47 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOScriptVehicle',
      'class' => 'xPDOScriptVehicle',
      'guid' => '2af35b5c5becc447d9f9509341dccc78',
      'native_key' => '2af35b5c5becc447d9f9509341dccc78',
      'filename' => 'xPDOScriptVehicle/36a693a853fba2f0a28fc1fb8f55e61a.vehicle',
      'namespace' => 'contentblocks',
    ),
  ),
);