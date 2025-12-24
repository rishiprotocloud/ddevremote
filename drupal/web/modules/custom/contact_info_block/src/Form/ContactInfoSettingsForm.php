<?php
namespace Drupal\contact_info_block\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactInfoSettingsForm extends ConfigFormBase {
  protected function getEditableConfigNames() {
    return ['contact_info_block.settings'];
  }

  public function getFormId() {
    return 'contact_info_settings_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('contact_info_block.settings');

    $form['email'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('email'),
    ];
    $form['email_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Icon Class'),
      '#default_value' => $config->get('email_icon'),
      '#description' => $this->t('e.g. fa-envelope'),
    ];
    $form['location'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Location'),
      '#default_value' => $config->get('location'),
    ];
    $form['location_icon'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Location Icon Class'),
      '#default_value' => $config->get('location_icon'),
      '#description' => $this->t('e.g. fa-map-marker-alt'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('contact_info_block.settings')
      ->set('email', $form_state->getValue('email'))
      ->set('email_icon', $form_state->getValue('email_icon'))
      ->set('location', $form_state->getValue('location'))
      ->set('location_icon', $form_state->getValue('location_icon'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}

?>