<?php

declare(strict_types=1);

namespace L3tum\PrometheusMetricsBundle\Controller;

use L3tum\PrometheusMetricsBundle\Metrics\Renderer;

/**
 * Class MetricsController.
 */
class MetricsController
{
    /**
     * @var Renderer
     */
    private $renderer;

    public function __construct(Renderer $metricsRenderer)
    {
        $this->renderer = $metricsRenderer;
    }

    public function prometheus()
    {
        return $this->renderer->renderResponse();
    }
}
