<?php

namespace Drupal\rusa_perm_results;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the RUSA Perm Results entity.
 *
 * @see \Drupal\rusa_perm_results\Entity\RusaPermResults.
 */
class RusaPermResultsAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\rusa_perm_results\Entity\RusaPermResultsInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished rusa perm results entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published rusa perm results entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit rusa perm results entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete rusa perm results entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add rusa perm results entities');
  }


}
