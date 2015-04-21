Victoire CMS AlertButton Bundle
============

Need to add a alertbutton in a victoire cms website ?

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

    php composer.phar require victoire/alertbutton-widget

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\AlertButtonBundle\VictoireWidgetAlertButtonBundle(),
            );

            return $bundles;
        }
    }
