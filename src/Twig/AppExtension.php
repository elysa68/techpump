<?php
/**
 * Author: Elisa Gutiérrez
 * Date: 21/11/2022
 */

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    protected string $projectDir;

    public function __construct(
        $projectDir
    ) {
        $this->projectDir = $projectDir . '/';
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('assetExists', [$this, 'assetExists']),
        ];
    }

    public function assetExists($file): int
    {
        $routeFile = $this->projectDir . 'public/'.$file;
        if (is_file($routeFile)) {
            return true;
        }
        return false;
    }
}
