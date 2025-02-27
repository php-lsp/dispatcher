<?php

declare(strict_types=1);

namespace Lsp\Dispatcher\Argument\Provider;

use Lsp\Contracts\Router\MatchedRouteInterface;

interface ArgumentProviderInterface
{
    /**
     * @param (\Closure(mixed...): mixed) $handler
     * @return iterable<array-key, mixed>
     */
    public function getAllArguments(MatchedRouteInterface $route, \Closure $handler): iterable;
}
