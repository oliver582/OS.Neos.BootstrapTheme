<?php
namespace OS\Neos\BootstrapTheme\DataSource;

use TYPO3\Neos\Service\DataSource\AbstractDataSource;
use TYPO3\TYPO3CR\Domain\Model\NodeInterface;

class AnimateDataSource extends AbstractDataSource {

    /**
     * @var string
     */
    static protected $identifier = 'os-animate-css';

    /**
     * Get data
     *
     * @param NodeInterface $node The node that is currently edited (optional)
     * @param array $arguments Additional arguments (key / value)
     * @return array JSON serializable data
     */
    public function getData(NodeInterface $node = NULL, array $arguments)
    {
        return array(

            # Attention Seekers
            array("value" => "bounce", "label" => "bounce", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "flash", "label" => "flash", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "pulse", "label" => "pulse", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "rubberBand", "label" => "rubberBand", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "shake", "label" => "shake", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "swing", "label" => "swing", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "tada", "label" => "tada", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "wobble", "label" => "wobble", "group" => "Attention Seekers", "icon" => "icon-spinner"),
            array("value" => "jello", "label" => "jello", "group" => "Attention Seekers", "icon" => "icon-spinner"),

            # Bouncing Entrances
            array("value" => "bounceIn", "label" => "bounceIn", "group" => "Bouncing Entrances", "icon" => "icon-spinner"),
            array("value" => "bounceInDown", "label" => "bounceInDown", "group" => "Bouncing Entrances", "icon" => "icon-arrow-down"),
            array("value" => "bounceInLeft", "label" => "bounceInLeft", "group" => "Bouncing Entrances", "icon" => "icon-arrow-right"),
            array("value" => "bounceInRight", "label" => "bounceInRight", "group" => "Bouncing Entrances", "icon" => "icon-arrow-left"),
            array("value" => "bounceInUp", "label" => "bounceInUp", "group" => "Bouncing Entrances", "icon" => "icon-arrow-up"),

            # Bouncing Exits
            array("value" => "bounceOut", "label" => "bounceOut", "group" => "Bouncing Exits", "icon" => "icon-spinner"),
            array("value" => "bounceOutDown", "label" => "bounceOutDown", "group" => "Bouncing Exits", "icon" => "icon-arrow-down"),
            array("value" => "bounceOutLeft", "label" => "bounceOutLeft", "group" => "Bouncing Exits", "icon" => "icon-arrow-right"),
            array("value" => "bounceOutRight", "label" => "bounceOutRight", "group" => "Bouncing Exits", "icon" => "icon-arrow-left"),
            array("value" => "bounceOutUp", "label" => "bounceOutUp", "group" => "Bouncing Exits", "icon" => "icon-arrow-up"),

            # Fading Entrances
            array("value" => "fadeIn", "label" => "fadeIn", "group" => "Fading Entrances", "icon" => "icon-spinner"),
            array("value" => "fadeInDown", "label" => "fadeInDown", "group" => "Fading Entrances", "icon" => "icon-arrow-down"),
            array("value" => "fadeInDownBig", "label" => "fadeInDownBig", "group" => "Fading Entrances", "icon" => "icon-arrow-down"),
            array("value" => "fadeInLeft", "label" => "fadeInLeft", "group" => "Fading Entrances", "icon" => "icon-arrow-right"),
            array("value" => "fadeInLeftBig", "label" => "fadeInLeftBig", "group" => "Fading Entrances", "icon" => "icon-arrow-right"),
            array("value" => "fadeInRight", "label" => "fadeInRight", "group" => "Fading Entrances", "icon" => "icon-arrow-left"),
            array("value" => "fadeInRightBig", "label" => "fadeInRightBig", "group" => "Fading Entrances", "icon" => "icon-arrow-left"),
            array("value" => "fadeInUp", "label" => "fadeInUp", "group" => "Fading Entrances", "icon" => "icon-arrow-up"),
            array("value" => "fadeInUpBig", "label" => "fadeInUpBig", "group" => "Fading Entrances", "icon" => "icon-arrow-up"),

            # Fading Exits
            array("value" => "fadeOut", "label" => "fadeOut", "group" => "Fading Exits", "icon" => "icon-spinner"),
            array("value" => "fadeOutDown", "label" => "fadeOutDown", "group" => "Fading Exits", "icon" => "icon-arrow-down"),
            array("value" => "fadeOutDownBig", "label" => "fadeOutDownBig", "group" => "Fading Exits", "icon" => "icon-arrow-down"),
            array("value" => "fadeOutLeft", "label" => "fadeOutLeft", "group" => "Fading Exits", "icon" => "icon-arrow-right"),
            array("value" => "fadeOutLeftBig", "label" => "fadeOutLeftBig", "group" => "Fading Exits", "icon" => "icon-arrow-right"),
            array("value" => "fadeOutRight", "label" => "fadeOutRight", "group" => "Fading Exits", "icon" => "icon-arrow-left"),
            array("value" => "fadeOutRightBig", "label" => "fadeOutRightBig", "group" => "Fading Exits", "icon" => "icon-arrow-left"),
            array("value" => "fadeOutUp", "label" => "fadeOutUp", "group" => "Fading Exits", "icon" => "icon-arrow-up"),
            array("value" => "fadeOutUpBig", "label" => "fadeOutUpBig", "group" => "Fading Exits", "icon" => "icon-arrow-up"),

            # Flippers
            array("value" => "flip", "label" => "flip", "group" => "Flippers", "icon" => "icon-spinner"),
            array("value" => "flipInX", "label" => "flipInX", "group" => "Flippers", "icon" => "icon-spinner"),
            array("value" => "flipInY", "label" => "flipInY", "group" => "Flippers", "icon" => "icon-spinner"),
            array("value" => "flipOutX", "label" => "flipOutX", "group" => "Flippers", "icon" => "icon-spinner"),
            array("value" => "flipOutY", "label" => "flipOutY", "group" => "Flippers", "icon" => "icon-spinner"),

            # Lightspeed
            array("value" => "lightSpeedIn", "label" => "lightSpeedIn", "group" => "Lightspeed", "icon" => "icon-arrow-left"),
            array("value" => "lightSpeedOut", "label" => "lightSpeedOut", "group" => "Lightspeed", "icon" => "icon-arrow-right"),

            # Rotating Entrances
            array("value" => "rotateIn", "label" => "rotateIn", "group" => "Rotating Entrances", "icon" => "icon-spinner"),
            array("value" => "rotateInDownLeft", "label" => "rotateInDownLeft", "group" => "Rotating Entrances", "icon" => "icon-spinner"),
            array("value" => "rotateInDownRight", "label" => "rotateInDownRight", "group" => "Rotating Entrances", "icon" => "icon-spinner"),
            array("value" => "rotateInUpLeft", "label" => "rotateInUpLeft", "group" => "Rotating Entrances", "icon" => "icon-spinner"),
            array("value" => "rotateInUpRight", "label" => "rotateInUpRight", "group" => "Rotating Entrances", "icon" => "icon-spinner"),

            # Rotating Exits
            array("value" => "rotateOut", "label" => "rotateOut", "group" => "Rotating Exits", "icon" => "icon-spinner"),
            array("value" => "rotateOutDownLeft", "label" => "rotateOutDownLeft", "group" => "Rotating Exits", "icon" => "icon-spinner"),
            array("value" => "rotateOutDownRight", "label" => "rotateOutDownRight", "group" => "Rotating Exits", "icon" => "icon-spinner"),
            array("value" => "rotateOutUpLeft", "label" => "rotateOutUpLeft", "group" => "Rotating Exits", "icon" => "icon-spinner"),
            array("value" => "rotateOutUpRight", "label" => "rotateOutUpRight", "group" => "Rotating Exits", "icon" => "icon-spinner"),

            # Sliding Entrances
            array("value" => "slideInUp", "label" => "slideInUp", "group" => "Sliding Entrances", "icon" => "icon-arrow-up"),
            array("value" => "slideInDown", "label" => "slideInDown", "group" => "Sliding Entrances", "icon" => "icon-arrow-down"),
            array("value" => "slideInLeft", "label" => "slideInLeft", "group" => "Sliding Entrances", "icon" => "icon-arrow-right"),
            array("value" => "slideInRight", "label" => "slideInRight", "group" => "Sliding Entrances", "icon" => "icon-arrow-left"),

            # Sliding Exits
            array("value" => "slideOutUp", "label" => "slideOutUp", "group" => "Sliding Exits", "icon" => "icon-arrow-up"),
            array("value" => "slideOutDown", "label" => "slideOutDown", "group" => "Sliding Exits", "icon" => "icon-arrow-down"),
            array("value" => "slideOutLeft", "label" => "slideOutLeft", "group" => "Sliding Exits", "icon" => "icon-arrow-right"),
            array("value" => "slideOutRight", "label" => "slideOutRight", "group" => "Sliding Exits", "icon" => "icon-arrow-right"),

            # Zoom Entrances
            array("value" => "zoomIn", "label" => "zoomIn", "group" => "Zoom Entrances", "icon" => "icon-spinner"),
            array("value" => "zoomInDown", "label" => "zoomInDown", "group" => "Zoom Entrances", "icon" => "icon-arrow-down"),
            array("value" => "zoomInLeft", "label" => "zoomInLeft", "group" => "Zoom Entrances", "icon" => "icon-arrow-right"),
            array("value" => "zoomInRight", "label" => "zoomInRight", "group" => "Zoom Entrances", "icon" => "icon-arrow-left"),
            array("value" => "zoomInUp", "label" => "zoomInUp", "group" => "Zoom Entrances", "icon" => "icon-arrow-up"),

            # Zoom Exits
            array("value" => "zoomOut", "label" => "zoomOut", "group" => "Zoom Exits", "icon" => "icon-spinner"),
            array("value" => "zoomOutDown", "label" => "zoomOutDown", "group" => "Zoom Exits", "icon" => "icon-arrow-down"),
            array("value" => "zoomOutLeft", "label" => "zoomOutLeft", "group" => "Zoom Exits", "icon" => "icon-arrow-right"),
            array("value" => "zoomOutRight", "label" => "zoomOutRight", "group" => "Zoom Exits", "icon" => "icon-arrow-left"),
            array("value" => "zoomOutUp", "label" => "zoomOutUp", "group" => "Zoom Exits", "icon" => "icon-arrow-up"),

            # Specials
            array("value" => "hinge", "label" => "hinge", "group" => "Specials", "icon" => "icon-spinner"),
            array("value" => "rollIn", "label" => "rollIn", "group" => "Specials", "icon" => "icon-arrow-right"),
            array("value" => "rollOut", "label" => "rollOut", "group" => "Specials", "icon" => "icon-arrow-left")

        );
    }
}