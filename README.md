Victoire DCMS AlertButton Bundle
============

##What is the purpose of this bundle

This bundle gives you access to the *AlertButton Widget*.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the AlertButton Bundle :

Run the following composer command :

    php composer.phar require friendsofvictoire/alertbutton-widget

###Reminder

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
