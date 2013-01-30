<?php

namespace Kendo\Dataviz\UI;

class LinearGaugeScaleLabels extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The background color of the labels.
Any valid CSS color string will work here, including hex and rgb
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
    * The border of the labels.
    * @param \Kendo\Dataviz\UI\LinearGaugeScaleLabelsBorder|array $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The text color of the labels.
Any valid CSS color string will work here, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The font style of the labels.
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
    * The format of the labels.
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
    * The margin of the labels.
    * @param float| $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
    * The padding of the labels.
    * @param float| $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
    * The label template.
Template variables:
    * @param string|\kendo\JavaScriptFunction $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * The visibility of the labels.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\LinearGaugeScaleLabels
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

//<< Properties
}

?>
