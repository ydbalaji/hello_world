<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 */
class HelloController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
   
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello'),
    ];
  }
  /**
   * World.
   *
   * @return string
   *   Return Hello string.
   */
  public function world($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: world with parameter(s):'.$name)
    ];
  }
  /**
   * Testpage.
   *
   * @return string
   *   Return Hello string.
   */
  public function testpage() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: testpage')
    ];
  }

}
