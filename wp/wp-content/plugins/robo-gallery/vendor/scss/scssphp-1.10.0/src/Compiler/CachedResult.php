<?php

/**
 * SCSSPHP
 *
 * @copyright 2012-2020 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://scssphp.github.io/scssphp
 */

namespace ScssPhpRBE\ScssPhp\Compiler;

use ScssPhpRBE\ScssPhp\CompilationResult;

/**
 * @internal
 */
final class CachedResult
{
    /**
     * @var CompilationResult
     */
    private $result;

    /**
     * @var array<string, int>
     */
    private $parsedFiles;

    /**
     * @var array
     * @phpstan-var list<array{currentDir: string|null, path: string, filePath: string}>
     */
    private $resolvedImports;

    /**
     * @param CompilationResult  $result
     * @param array<string, int> $parsedFiles
     * @param array              $resolvedImports
     *
     * @phpstan-param list<array{currentDir: string|null, path: string, filePath: string}> $resolvedImports
     */
    public function __construct(CompilationResult $result, array $parsedFiles, array $resolvedImports)
    {
        $this->result = $result;
        $this->parsedFiles = $parsedFiles;
        $this->resolvedImports = $resolvedImports;
    }

    /**
     * @return CompilationResult
     */
    public function getResult(): CompilationResult
    {
        return $this->result;
    }

    /**
     * @return array<string, int>
     */
    public function getParsedFiles(): array
    {
        return $this->parsedFiles;
    }

    /**
     * @return array
     *
     * @phpstan-return list<array{currentDir: string|null, path: string, filePath: string}>
     */
    public function getResolvedImports(): array
    {
        return $this->resolvedImports;
    }
}
