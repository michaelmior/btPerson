<?
	Loader::block('library_file');
	defined('C5_EXECUTE') or die(_("Access Denied."));	
	class PersonBlockController extends BlockController {

		protected $btInterfaceWidth = 300;
		protected $btInterfaceHeight = 300;
		protected $btTable = 'btPerson';

		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Adds a person block with name and photo linked to email address.");
		}
		
		public function getBlockTypeName() {
			return t("Person");
		}		
		
		public function getJavaScriptStrings() {
			return array(
				'image-required' => t('You must select an image.')
			);
		}
	
		function getFileID() {return $this->fID;}
		function getFileObject() {
			return File::getByID($this->fID);
		}		
		function getName() {return $this->name;}
		function getEmail() {return $this->email;}
	}
?>
