<?php

namespace Drupal\webform_media\Plugin\media\Source;

use Drupal\media\MediaInterface;
use Drupal\media\MediaSourceBase;

/**
 * Defines a plugin to integrate webforms with media.
 *
 * @MediaSource(
 *   id = "webform_media",
 *   label = @Translation("Webform"),
 *   description = @Translation("Use webforms as media."),
 *   allowed_field_types = {"webform"},
 *   default_thumbnail_filename = "no-thumbnail.png",
 *   thumbnail_alt_metadata_attribute = "thumbnail_alt_value",
 *   forms = {
 *     "media_library_add" = "\Drupal\webform_media\Form\WebformMediaAddForm",
 *   }
 * )
 */
class Webform extends MediaSourceBase {

  /**
   * {@inheritdoc}
   */
  public function getMetadataAttributes() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getMetadata(MediaInterface $media, $attribute_name) {
    switch ($attribute_name) {
      case 'default_name':
        $source_field_name = $this->configuration['source_field'];
        if ($media->hasField($source_field_name) && !$media->get($source_field_name)->isEmpty() && $media->{$source_field_name}->entity) {
          return $media->{$source_field_name}->entity->label();
        }
        break;
    }

    return parent::getMetadata($media, $attribute_name);
  }

}
