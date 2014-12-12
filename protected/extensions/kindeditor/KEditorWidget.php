<?php

/**
 * ��ʹ�÷���:
 * <?php $this->widget('ext.kindeditor.KEditorWidget',array(
 *     'id'=>'Item_content',	# Textarea id
 * )); ?>
 */

class KEditorWidget extends CInputWidget
{
    public $id;
    public $language = 'zh_CN';
    public $paramOptions = '{}';

    /**
     * ��ʼ�����.
     */
    public function init()
    {
         // ��ֹ��������ִ��.
         if (Yii::app() instanceof CConsoleApplication)
              return;

         /** @var CClientScript $cs */
         $cs = Yii::app()->getClientScript(); 
         $cs->registerScriptFile($this->assetsUrl.'/kindeditor-min.js', CClientScript::POS_HEAD);
    }

    /**
     * �������.
     */
    public function run()
    {
        $script = "KindEditor.ready(function(K){window.editor=K.create('#".$this->id."',".$this->paramOptions.");});";
        /** @var CClientScript $cs */
        $cs = Yii::app()->getClientScript();
        $cs->registerScript($this->id, $script, CClientScript::POS_HEAD);
        $cs->registerScriptFile($this->assetsUrl.'/lang/'.$this->language.'.js', CClientScript::POS_HEAD);
    }

    public function getAssetsUrl()
    {
        $assetsPath = Yii::getPathOfAlias('ext.kindeditor');
        $assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, YII_DEBUG);
        return $assetsUrl;
    }
}

?>