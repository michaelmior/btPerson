<div class="ccm-person">
<?
defined('C5_EXECUTE') or die(_("Access Denied."));

echo "<div class=\"ccm-person-image\">";
echo "<img src=\"".$controller->getFileObject()->getURL()."\" />";
/*$fo = $controller->getFileObject();
echo $fo->getThumbnail(200,200);*/
echo "</div>";

echo "<div class=\"ccm-person-name\"><a href=\"mailto:".$controller->email."\">".$controller->name."</a></div>";
?>
<div style="clear:both"></div>
</div>
