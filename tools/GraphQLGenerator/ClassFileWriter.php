<?php

declare(strict_types=1);

final class ClassFileWriter
{
    public function write(string $directory, string $className, string $contents): void
    {
        file_put_contents($directory . '/' . $className . '.php', $contents . "\n");
    }
}
