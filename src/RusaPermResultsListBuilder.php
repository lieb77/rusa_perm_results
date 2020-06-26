<?php

namespace Drupal\rusa_perm_results;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of RUSA Perm Results entities.
 *
 * @ingroup rusa_perm_results
 */
class RusaPermResultsListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('RUSA Perm Results ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\rusa_perm_results\Entity\RusaPermResults $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.rusa_perm_results.edit_form',
      ['rusa_perm_results' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
