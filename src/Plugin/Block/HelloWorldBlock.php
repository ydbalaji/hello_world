<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'HelloWorldBlock' block.
 *
 * @Block(
 *  id = "hello_world_block",
 *  admin_label = @Translation("Hello world block"),
 * )
 */
class HelloWorldBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['city'] = [
      '#type' => 'textfield',
      '#title' => $this->t('city'),
      '#default_value' => $this->configuration['city'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];
    $form['state'] = [
      '#type' => 'textfield',
      '#title' => $this->t('state'),
      '#default_value' => $this->configuration['state'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['city'] = $form_state->getValue('city');
    $this->configuration['state'] = $form_state->getValue('state');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['hello_world_block_city']['#markup'] = '<p>' . $this->configuration['city'] . '</p>';
    $build['hello_world_block_state']['#markup'] = '<p>' . $this->configuration['state'] . '</p>';

    return $build;
  }

}
