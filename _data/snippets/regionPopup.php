id: 48
source: 2
name: regionPopup
category: 'Snippets and Output-Filters'
properties: 'a:0:{}'

-----

/*
 * regionPopup
 *
 * Shows popup if no region is defined
 *
 * Usage examples:
 * [[!regionPopup]]
 *
 * @author Jan Dähne <jan.daehne@quadro-system.de>
 */
 
$tpl = $modx->getOption('tpl', $scriptProperties, 'regionPopup', true);
 
if ($_GET['cc'] == 'default') {
    return $modx->getChunk($tpl, array());
}

return;