<? 
defined('C5_EXECUTE') or die(_("Access Denied."));
$includeAssetLibrary = true; 
$assetLibraryPassThru = array(
	'type' => 'image'
);

$al = Loader::helper('concrete/asset_library');

?>
<div class="ccm-block-field-group">
<h2><?=t('Name')?></h2>
<?= $form->text('name', $name, array('style' => 'width: 280px;')); ?>
</div>

<div class="ccm-block-field-group">
<h2><?=t('Email')?></h2>
<?= $form->text('email', $email, array('style' => 'width: 280px;')); ?>
</div>

<div class="ccm-block-field-group">
<h2><?=t('Image')?></h2>
<?=$al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);?>
</div>
