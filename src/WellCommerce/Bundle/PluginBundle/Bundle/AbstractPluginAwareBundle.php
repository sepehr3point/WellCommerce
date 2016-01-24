<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\PluginBundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class AbstractPluginAwareBundle
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
abstract class AbstractPluginAwareBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        echo $this->getName();
        die();
    }
}
