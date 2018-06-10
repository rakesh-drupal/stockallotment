<?php

namespace Drupal\amp_run\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ampViewForm extends FormBase {

  public function getFormId() {
    return 'amp_view_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['search_fieldset'] = [
      '#type' => 'fieldset',
      '#title' => 'Search'
    ];
    
    $form['search_fieldset']['start_date'] = array(
      '#type' => 'date',
      '#title' => 'Start date',
      '#default_value' => (!empty($_GET['start_date']) ) ? $_GET['start_date'] : NULL,
    );
    
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {

  }
}
