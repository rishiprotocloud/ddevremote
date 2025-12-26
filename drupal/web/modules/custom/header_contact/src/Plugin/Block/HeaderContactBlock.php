<?php

namespace Drupal\header_contact\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Header Contact' block.
 *
 * @Block(
 *   id = "header_contact_block",
 *   admin_label = @Translation("Header Contact Info"),
 *   category = @Translation("Custom")
 * )
 */
class HeaderContactBlock extends BlockBase {

  public function build() {
    $config = \Drupal::config('header_contact.settings');
    $items_text = $config->get('items') ?? '';
    $lines = array_filter(explode("\n", trim($items_text)));

    $items = [];
    foreach ($lines as $line) {
      $parts = explode('|', trim($line), 4);
      if (count($parts) >= 3) {
        $items[] = [
          'icon' => $parts[0] ?? '',
          'label' => $parts[1] ?? '',
          'value' => $parts[2] ?? '',
          'link' => $parts[3] ?? '',
        ];
      }
    }

    return [
      '#theme' => 'header_contact_block',
      '#items' => $items,
      '#cache' => ['max-age' => 0], // अगर config change पर update चाहिए
    ];
  }
}