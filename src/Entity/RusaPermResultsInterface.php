<?php

namespace Drupal\rusa_perm_results\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining RUSA Perm Results entities.
 *
 * @ingroup rusa_perm_results
 */
interface RusaPermResultsInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the RUSA Perm Results name.
   *
   * @return string
   *   Name of the RUSA Perm Results.
   */
  public function getName();

  /**
   * Sets the RUSA Perm Results name.
   *
   * @param string $name
   *   The RUSA Perm Results name.
   *
   * @return \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface
   *   The called RUSA Perm Results entity.
   */
  public function setName($name);

  /**
   * Gets the RUSA Perm Results creation timestamp.
   *
   * @return int
   *   Creation timestamp of the RUSA Perm Results.
   */
  public function getCreatedTime();

  /**
   * Sets the RUSA Perm Results creation timestamp.
   *
   * @param int $timestamp
   *   The RUSA Perm Results creation timestamp.
   *
   * @return \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface
   *   The called RUSA Perm Results entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the RUSA Perm Results revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the RUSA Perm Results revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface
   *   The called RUSA Perm Results entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the RUSA Perm Results revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the RUSA Perm Results revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface
   *   The called RUSA Perm Results entity.
   */
  public function setRevisionUserId($uid);

}
