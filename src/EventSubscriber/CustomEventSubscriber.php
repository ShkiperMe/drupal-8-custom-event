<?php

namespace Drupal\custom_event\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\custom_event\Event\CustomEvent;

/**
 * Logs the creation of a new node.
 */
class CustomEventSubscriber implements EventSubscriberInterface {

  /**
   * Log message.
   */
  public function onCustomEventExecute() {
    $service = \Drupal::service('custom_event.log_message_service');
    $service->runLogFunction();
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[CustomEvent::CUSTOM_EVENT][] = ['onCustomEventExecute'];
    return $events;
  }
}