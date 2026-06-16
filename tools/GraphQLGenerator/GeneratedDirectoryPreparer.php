<?php

declare(strict_types=1);

final class GeneratedDirectoryPreparer
{
    public function prepare(string $target): void
    {
        foreach (GENERATED_DIRECTORIES as $directory) {
            $this->removeDirectory($target . '/' . $directory);
            mkdir($target . '/' . $directory, 0777, true);
        }
    }

    private function removeDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($iterator as $file) {
            if ($file->isDir()) {
                rmdir($file->getPathname());
            } else {
                unlink($file->getPathname());
            }
        }

        rmdir($directory);
    }
}
