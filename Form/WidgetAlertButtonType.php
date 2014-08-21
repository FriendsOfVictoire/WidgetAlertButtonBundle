<?php

namespace Victoire\Widget\AlertButtonBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Widget\ButtonBundle\Form\WidgetButtonType;


/**
 * WidgetAlertButton form type
 */
class WidgetAlertButtonType extends WidgetButtonType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('message', 'redactor', array(
            'label' => 'widget_alertbutton.form.message.label'
        ));
        parent::buildForm($builder, $options);

    }


    /**
     * bind form to WidgetAlertButton entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\AlertButtonBundle\Entity\WidgetAlertButton',
            'widget'             => 'alertbutton',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_alertbutton';
    }
}
