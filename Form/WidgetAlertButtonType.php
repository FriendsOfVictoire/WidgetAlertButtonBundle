<?php

namespace Victoire\Widget\AlertButtonBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Widget\ButtonBundle\Form\WidgetButtonType;

/**
 * WidgetAlertButton form type.
 */
class WidgetAlertButtonType extends WidgetButtonType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('message', 'textarea', [
            'label' => 'widget_alertbutton.form.message.label',
            'attr'  => [
                'class' => 'redactor',
            ],
        ]);
    }

    /**
     * bind form to WidgetAlertButton entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\AlertButtonBundle\Entity\WidgetAlertButton',
            'widget'             => 'AlertButton',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_alertbutton';
    }
}
