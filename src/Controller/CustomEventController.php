<?php
namespace Drupal\custom_event\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\custom_event\Event\CustomEvent;

/**
 * Provides route responses for the Example module.
 */
class CustomEventController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function customPage() {
    \Drupal::service('event_dispatcher')->dispatch(CustomEvent::CUSTOM_EVENT, new CustomEvent());
    $element = array(
      '#markup' => 'Custom Event',
    );
    return $element;
  }

}