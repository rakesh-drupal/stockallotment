<?php

namespace Drupal\amp_run\Controller;

use Drupal\Core\Controller\ControllerBase;

class AmpViewPage extends ControllerBase {
    
  public function viewPage(){
    $content['temp']['#markup'] = 'This is dummy message for testing checking.';  
    return $content;
  }
  
}