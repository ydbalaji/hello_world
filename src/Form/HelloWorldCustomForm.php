<?php

namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class HelloWorldCustomForm.
 */
class HelloWorldCustomForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'hello_world_custom_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['firstname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('FirstName'), 
      '#maxlength' => 255,
      '#size' => 64,
      '#weight' => '0',
    ];
    $form['lastname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Lastname'),
      '#maxlength' => 255,
      '#size' => 64,
      '#weight' => '0',
    ];
    $form['email'] = [
      '#type' => 'email',
      '#maxlength' => 255,
      '#size' => 64,
      '#title' => $this->t('email'),
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
