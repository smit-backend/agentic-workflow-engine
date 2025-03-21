<?php

declare(strict_types=1);

namespace SmitBackend\AgentFlow\Contracts;

/**
 * Interface AgentToolInterface
 *
 * @package SmitBackend\AgentFlow
 */
interface AgentToolInterface
{
    public function execute(array $payload = []): mixed;
}
