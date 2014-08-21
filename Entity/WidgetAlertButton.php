<?php
namespace Victoire\Widget\AlertButtonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\ButtonBundle\Entity\WidgetButton;

/**
 * WidgetAlertButton
 *
 * @ORM\Table("vic_widget_alertbutton")
 * @ORM\Entity
 */
class WidgetAlertButton extends WidgetButton
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    protected $message;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return '#'.$this->id.' - '.$this->id;
    }


    /**
     * Set message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

}
