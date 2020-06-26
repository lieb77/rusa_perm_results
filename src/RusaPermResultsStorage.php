<?php

namespace Drupal\rusa_perm_results;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\rusa_perm_results\Entity\RusaPermResultsInterface;

/**
 * Defines the storage handler class for RUSA Perm Results entities.
 *
 * This extends the base storage class, adding required special handling for
 * RUSA Perm Results entities.
 *
 * @ingroup rusa_perm_results
 */
class RusaPermResultsStorage extends SqlContentEntityStorage implements RusaPermResultsStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(RusaPermResultsInterface $entity) {
    return $this->database->query(
      'SELECT vid FROM {rusa_perm_results_revision} WHERE id=:id ORDER BY vid',
      [':id' => $entity->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
      'SELECT vid FROM {rusa_perm_results_field_revision} WHERE uid = :uid ORDER BY vid',
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(RusaPermResultsInterface $entity) {
    return $this->database->query('SELECT COUNT(*) FROM {rusa_perm_results_field_revision} WHERE id = :id AND default_langcode = 1', [':id' => $entity->id()])
      ->fetchField();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update('rusa_perm_results_revision')
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
