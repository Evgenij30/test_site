<?
namespace app\components;
use yii\base\Widget;
//use yii\helpers\Html;
use app\modules\admin\models\Categori;


class MenuWidget extends Widget{
/*
	public $tpl;
	public $data;
	public $tree;
	public $menuHtml;

	public function init(){
		parent::init();
		if ($this->tpl === null){
			$this->tpl='menu';
		}
		$this->tpl .='.php';
	}
*/
	public function run(){
		$categoris=Categori::find()->all();
		return $this->render('menu', compact('categoris'));
	}

}

?>

