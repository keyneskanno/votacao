<?php

namespace Drupal\custom_voting\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldWidget\OptionsButtonsWidget;

/**
 * Plugin implementation of the 'image_option_widget' widget.
 *
 * @FieldWidget(
 *   id = "image_option_widget",
 *   label = @Translation("Image option widget"),
 *   field_types = {
 *     "list_string"
 *   }
 * )
 */
class ImageOptionWidget extends OptionsButtonsWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, array &$form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    // Adiciona o campo para upload de imagem.
    $element['image'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('Image'),
      '#description' => $this->t('Upload an image for this option.'),
      '#upload_location' => 'public://custom_voting_images/',
      '#upload_validators' => [
        'file_validate_extensions' => ['png gif jpg jpeg'],
      ],
      '#delta' => $delta,
    ];

    return $element;
  }
}
