<?php

declare(strict_types=1);

namespace Tests\L3tum\PrometheusMetricsBundle\Metrics;

use L3tum\PrometheusMetricsBundle\Metrics\MetricsCollectorInterface;
use L3tum\PrometheusMetricsBundle\Metrics\MetricsCollectorRegistry;
use PHPUnit\Framework\TestCase;

class MetricsCollectorsRegistryTest extends TestCase
{
    public function testRegisterAndGetMetricsCollectors(): void
    {
        $collector1 = $this->createMock(MetricsCollectorInterface::class);
        $collector2 = $this->createMock(MetricsCollectorInterface::class);

        $registry = new MetricsCollectorRegistry();
        $registry->registerMetricsCollector($collector1);
        $registry->registerMetricsCollector($collector2);

        self::assertEquals([$collector1, $collector2], $registry->getMetricsCollectors());
    }
}
