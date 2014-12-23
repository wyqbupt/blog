<?php

class SiteSearch extends CPortlet {

  public $title='Site Search';

  public function renderContent() {
    $form = new SiteSearchForm();
    $this->render('siteSearch', array('form'=>$form));
  }

}

