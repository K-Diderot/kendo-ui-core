<?php

namespace Kendo\UI;

class GridFilterable extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Indicates whether second filter input is enabled/disabled.
    * @param boolean $value
    */
    public function extra($value) {
        return $this->setProperty('extra', $value);
    }

    /**
    * Sets the filter menu messages.
    * @param \Kendo\UI\GridFilterableMessages $value
    */
    public function messages(\Kendo\UI\GridFilterableMessages $value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * Enable/Disable and set the text of filter operators.
    * @param \Kendo\UI\GridFilterableOperators $value
    */
    public function operators(\Kendo\UI\GridFilterableOperators $value) {
        return $this->setProperty('operators', $value);
    }

//<< Properties
}

?>
