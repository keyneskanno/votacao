<?php

namespace Drupal\webform_media\Form;

use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\media\MediaTypeInterface;
use Drupal\media_library\Form\AddFormBase;
use Drupal\webform\WebformInterface;

/**
 * Defines a class for media library integration.
 */
class WebformMediaAddForm extends AddFormBase {

  /**
   * {@inheritdoc}
   */
  protected function buildInputElement(array $form, FormStateInterface $form_state) {
    $media_type = $this->getMediaType($form_state);
    /** @var \Drupal\media_library\MediaLibraryState $state */
    $state = $this->getMediaLibraryState($form_state);
    if (!$state->hasSlotsAvailable()) {
      return $form;
    }

    // Add a container to group the input elements for styling purposes.
    $form['container'] = [
      '#type' => 'container',
    ];

    $form['container']['field_media_webform_media'] = [
      '#description' => $this->getSourceFieldDefinition($media_type)->getDescription(),
      '#title' => $this->getSourceFieldDefinition($media_type)->getLabel(),
      '#type' => 'select',
      '#options' => array_map(function (WebformInterface $webform) {
        return $webform->label();
      }, $this->entityTypeManager->getStorage('webform')->loadMultiple()),
    ];

    $form['container']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add'),
      '#button_type' => 'primary',
      '#submit' => ['::addButtonSubmit'],
      '#ajax' => [
        'callback' => '::updateFormCallback',
        'wrapper' => 'media-library-wrapper',
        'url' => Url::fromRoute('media_library.ui'),
        'options' => [
          'query' => $this->getMediaLibraryState($form_state)->all() + [
            FormBuilderInterface::AJAX_FORM_REQUEST => TRUE,
          ],
        ],
      ],
    ];

    return $form;
  }

  /**
   * Submit handler for the add button.
   *
   * @param array $form
   *   The form render array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The form state.
   */
  public function addButtonSubmit(array $form, FormStateInterface $form_state) {
    $this->processInputValues([$form_state->getValue('field_media_webform_media')], $form, $form_state);
  }

  /**
   * Returns the definition of the source field for a media type.
   *
   * @param \Drupal\media\MediaTypeInterface $media_type
   *   The media type to get the source definition for.
   *
   * @return \Drupal\Core\Field\FieldDefinitionInterface|null
   *   The field definition.
   */
  protected function getSourceFieldDefinition(MediaTypeInterface $media_type) {
    return $media_type->getSource()->getSourceFieldDefinition($media_type);
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'webform_media_library_webform_add';
  }

}
