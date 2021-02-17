<?php

declare(strict_types=1);

namespace Tests\L3tum\PrometheusMetricsBundle\Controller;

use L3tum\PrometheusMetricsBundle\Controller\MetricsController;
use L3tum\PrometheusMetricsBundle\Metrics\Renderer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class MetricsControllerTest extends TestCase
{
    public function testPrometheus(): void
    {
        $response = new Response();
        $renderer = $this->createMock(Renderer::class);
        $renderer->expects(self::once())->method('renderResponse')->willReturn($response);
        $controller = new MetricsController($renderer);
        $result = $controller->prometheus();
        self::assertSame($response, $result);
    }
}
