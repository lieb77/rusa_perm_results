<?php

namespace Drupal\rusa_perm_results\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for RUSA Perm Results entities.
 */
class RusaPermResultsViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
