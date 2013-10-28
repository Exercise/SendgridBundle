<?php

namespace Exercise\SendgridBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('exercise_sendgrid');

        $rootNode
            ->children()
                ->scalarNode('api_user')->isRequired()->end()
                ->scalarNode('api_key')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}
