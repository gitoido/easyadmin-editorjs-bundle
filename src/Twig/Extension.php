<?php

declare(strict_types=1);

namespace Setono\EasyadminEditorjsBundle\Twig;

use Override;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

final class Extension extends AbstractExtension
{
    /**
     * @return list<TwigFilter>
     */
    #[Override]
    public function getFilters(): array
    {
        return [
            new TwigFilter('editorjs_render', [Runtime::class, 'render'], ['is_safe' => ['html']]),
        ];
    }
}
