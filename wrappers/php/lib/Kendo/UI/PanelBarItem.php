<?php

namespace Kendo\UI;

class PanelBarItem extends \Kendo\SerializableObject {
    function __construct($text = null) {
        $this->text($text);
    }


    public function createElement() {
        $element = new \Kendo\Html\Element('li');

        if ($this->getProperty('expanded')) {
            $element->attr('class', 'k-state-active');
        }

        if ($this->getProperty('enabled') === false) {
            $element->attr('disabled', 'disabled');
        }

        $text = $this->getProperty('text');

        if ($text) {
            $element->append(new \Kendo\Html\Text($text));
        }

        $content = $this->getProperty('content');

        if ($content) {
            $contentElement = new \Kendo\Html\Element('div');

            $contentElement->html($content);

            $element->append($contentElement);
        }

        $items = $this->getProperty('items');

        if ($items) {
            $itemContainer = new \Kendo\Html\Element('ul');

            foreach($items as $item) {
                $itemContainer->append($item->createElement());
            }

            $element->append($itemContainer);
        }

        return $element;
    }

//>> Properties

    /**
    * Specifies the text displayed by the item
    * @param string $value
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * Specifies the URL of the image displayed by the item
    * @param string $value
    */
    public function imageUrl($value) {
        return $this->setProperty('imageUrl', $value);
    }

    /**
    * Specifies the class name for the sprite image displayed by the item
    * @param string $value
    */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
    * Specifies whether the item is initially enabled
    * @param boolean $value
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * Specifies whether the item is initially selected
    * @param boolean $value
    */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
    * Specifies whether the item is initially expanded
    * @param boolean $value
    */
    public function expanded($value) {
        return $this->setProperty('expanded', $value);
    }

    /**
    * Specifies the url from which the item content will be loaded
    * @param string $value
    */
    public function contentUrl($value) {
        return $this->setProperty('contentUrl', $value);
    }

    /**
    * Sets the HTML content of the PanelBarItem.
    * @param string $value
    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
    * Starts output bufferring. Any following markup will be set as the content of the PanelBarItem.
    */
    public function startContent() {
        ob_start();
    }

    /**
    * Stops output bufferring and sets the preceding markup as the content of the PanelBarItem.
    */
    public function endContent() {
        $this->content(ob_get_clean());
    }
    /**
    * Adds \Kendo\UI\PanelBarItem.
    * @param \Kendo\UI\PanelBarItem $value
    */
    public function addItem(\Kendo\UI\PanelBarItem $value) {
        return $this->add('items', $value);
    }
//<< Properties
}

?>
