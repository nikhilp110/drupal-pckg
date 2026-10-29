<?php

declare(strict_types=1);

namespace DrupalPckg\Services;

use DrupalPckg\Utils\StringHelper;

final class PackageReporter
{
    /** @return array{name: string, slug: string, files: int} */
    public function report(string $packageName, int $fileCount): array
    {
        return [
            'name' => $packageName,
            'slug' => StringHelper::slugify($packageName),
            'files' => $fileCount,
        ];
    }
}
