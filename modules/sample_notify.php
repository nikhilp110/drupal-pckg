<?php

declare(strict_types=1);

/**
 * Sample Drupal-style helper used to exercise multi-file PR notifications.
 */
function sample_notify_message(string $actor, int $prNumber): string
{
    return sprintf('New PR number %d created by %s', $prNumber, $actor);
}
