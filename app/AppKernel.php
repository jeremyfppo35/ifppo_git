<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new IFppo\CommerceBundle\IFppoCommerceBundle(),
            new Ali\DatatableBundle\AliDatatableBundle(),
            new SaadTazi\GChartBundle\SaadTaziGChartBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new IFppo\MenuBundle\IFppoMenuBundle(),
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            new IFppo\TechniqueBundle\IFppoTechniqueBundle(),
            new IFppo\TestJeremy\Bundle\IFppoTestJeremyBundle(),
            new IFppo\ScanProdBundle\IFppoScanProdBundle(),
            new IFppo\PrevisionnelBundle\IFppoPrevisionnelBundle(),            
            new FOS\UserBundle\FOSUserBundle(),
            new IFppo\UtilisateurBundle\IFppoUtilisateurBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();            
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
