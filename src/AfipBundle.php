<?php

namespace Thedarsideofit\AfipBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Diego Ramirez <dramirez@hydras.com.ar>
 */
class AfipBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
