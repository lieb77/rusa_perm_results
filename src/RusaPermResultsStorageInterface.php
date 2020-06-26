<?php

namespace Drupal\rusa_perm_results;

use Drupal\Core\Entity\ContentEntityStorageInterface;
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
interface RusaPermResultsStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of RUSA Perm Results revision IDs for a specific RUSA Perm Results.
   *
   * @param \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface $entity
   *   The RUSA Perm Results entity.
   *
   * @return int[]
   *   RUSA Perm Results revision IDs (in ascending order).
   */
  public function revisionIds(RusaPermResultsInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as RUSA Perm Results author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   RUSA Perm Results revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface $entity
   *   The RUSA Perm Results entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(RusaPermResultsInterface $entity);

  /**
   * Unsets the language for all RUSA Perm Results with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
