<?php

namespace Victoire\Widget\AlertButtonBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
        $builder->add('message', TextareaType::class, [
            'label' => 'widget_alertbutton.form.message.label',
            'attr'  => [
                'class' => 'redactor',
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\AlertButtonBundle\Entity\WidgetAlertButton',
            'widget'             => 'AlertButton',
            'translation_domain' => 'victoire',
        ]);
    }
}
