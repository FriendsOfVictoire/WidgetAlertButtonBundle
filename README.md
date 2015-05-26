##Victoire's AlertButton Bundle
============

Need to add an alert button in your Victoire website ?

#Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

#Install the AlertBundle Button :

Run the following composer command :

    php composer.phar require victoire/alertbutton-widget

#Reminder

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
