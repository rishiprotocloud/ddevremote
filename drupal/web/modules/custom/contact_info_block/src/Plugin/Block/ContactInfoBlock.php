<?php
namespace Drupal\contact_info_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Contact Info' Block.
 *
 * @Block(
 *   id = "contact_info_block",
 *   admin_label = @Translation("Contact Info Block")
 * )
 */
class ContactInfoBlock extends BlockBase {

  public function build() {
    $config = \Drupal::config('contact_info_block.settings');
    return [
      '#markup' => '<div class="contact-info">' .
        '<span><i class="fas ' . $config->get('email_icon') . '"></i> ' . $config->get('email') . '</span>' .
        '<span><i class="fas ' . $config->get('location_icon') . '"></i> ' . $config->get('location') . '</span>' .
        '</div>',
      '#attached' => [
        'library' => ['contact_info_block/fontawesome'],
      ],
    ];
  }
}

?>