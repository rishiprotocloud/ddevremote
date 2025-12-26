<?php
namespace Drupal\contact_info_block\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ContactInfoSettingsForm extends ConfigFormBase {
  public function getFormId() {
    return 'contact_info_block_settings_form';
  }

  protected function getEditableConfigNames() {
    return ['contact_info_block.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('contact_info_block.settings');
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email'),
      '#default_value' => $config->get('email'),
    ];
    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('contact_info_block.settings')
      ->set('email', $form_state->getValue('email'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}


?>