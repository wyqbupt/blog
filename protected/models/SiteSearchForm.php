<?php
//SiteSearchForm Module used by SiteSearch

class SiteSearchForm extends CFormModel
{
  public $string;

  public function rules() {
    return array(array('string', 'required'));
  }

  public function safeAttributes() {
    return array('string',);
  }

}