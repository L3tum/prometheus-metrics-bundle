<?php

declare(strict_types=1);

namespace L3tum\PrometheusMetricsBundle\Metrics;

/**
 * MetricsGeneratorInterface is a deprecated basic interface that used to be implemented by any metrics collector.
 *
 * @deprecated in 1.8, use L3tum\PrometheusMetricsBundle\Metrics\MetricsCollectorInterface
 */
interface MetricsGeneratorInterface extends MetricsCollectorInterface
{
}
