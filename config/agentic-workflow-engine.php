<?php

return [
    'enabled' => env('AGENTIC_WORKFLOW_ENGINE_ENABLED', true),
    'timeout' => env('AGENTIC_WORKFLOW_ENGINE_TIMEOUT', 30),
    'log_channel' => env('AGENTIC_WORKFLOW_ENGINE_LOG', 'stack'),
];
