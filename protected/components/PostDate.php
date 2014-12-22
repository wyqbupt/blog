<?php

class PostDate extends CPortlet {
  public $cssClass='postdate';
  public $ct;
 
  protected function renderContent()
  {
    echo "<center><font size=\"3\">\n";
    print $this->ct;
    echo "</font></center>\n";
  }
}
