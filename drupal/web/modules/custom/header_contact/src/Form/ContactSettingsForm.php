<?php

namespace Drupal\header_contact\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactSettingsForm extends ConfigFormBase {

  protected function getEditableConfigNames() {
    return ['header_contact.settings'];
  }

  public function getFormId() {
    return 'header_contact_settings_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('header_contact.settings');

    $form['items'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Contact Items (one per line: icon_class|label|value|link)'),
      '#description' => $this->t('Example:<br>fas fa-envelope|Email|info@company.com|mailto:info@company.com<br>fas fa-map-marker-alt|Address|Sunny Isles Beach, FL 33160|<br>fas fa-phone|Phone|+1-123-456-7890|tel:+11234567890'),
      '#default_value' => $config->get('items') ?? "fas fa-envelope|Email|info@company.com|mailto:info@company.com\nfas fa-map-marker-alt|Address|Sunny Isles Beach, FL 33160|",
      '#rows' => 10,
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('header_contact.settings')
      ->set('items', $form_state->getValue('items'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}