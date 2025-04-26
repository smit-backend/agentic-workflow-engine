<?php

declare(strict_types=1);

namespace SmitBackend\AgentFlow;

use SmitBackend\AgentFlow\Contracts\AgentToolInterface;

/**
 * Class AgentCoordinator
 *
 * @package SmitBackend\AgentFlow
 */
class AgentCoordinator implements AgentToolInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
