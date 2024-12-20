<?php declare(strict_types=1);

namespace MichaelCozzolino\SymfonyRouteGeneratorBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

class MichaelCozzolinoSymfonyRouteGeneratorBundleExtension extends Extension
{
    /**
     * @param array<array<mixed>> $configs
     * @param ContainerBuilder    $container
     *
     * @throws Exception
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new PhpFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.php');
    }
}
