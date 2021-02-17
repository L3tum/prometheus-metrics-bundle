<?php

declare(strict_types=1);

namespace L3tum\PrometheusMetricsBundle;

use L3tum\PrometheusMetricsBundle\DependencyInjection\Compiler\IgnoredRoutesPass;
use L3tum\PrometheusMetricsBundle\DependencyInjection\Compiler\RegisterMetricsCollectorPass;
use L3tum\PrometheusMetricsBundle\DependencyInjection\Compiler\ResolveAdapterDefinitionPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class L3tumPrometheusMetricsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ResolveAdapterDefinitionPass());
        $container->addCompilerPass(new IgnoredRoutesPass());
        $container->addCompilerPass(new RegisterMetricsCollectorPass());
    }
}
