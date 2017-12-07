<?php

namespace  Drupal\custom_event;

class CustomService {

  public function  runLogFunction() {
    \Drupal::logger('custom_evernt_demo')->notice('Custom event was executed');
  }
}