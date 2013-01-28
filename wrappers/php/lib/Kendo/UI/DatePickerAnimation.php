<?php

namespace Kendo\UI;

class DatePickerAnimation extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The animation(s) used for hiding of the pop-up.
    * @param \Kendo\UI\DatePickerAnimationClose $value
    */
    public function close(\Kendo\UI\DatePickerAnimationClose $value) {
        return $this->setProperty('close', $value);
    }

    /**
    * The animation(s) used for displaying of the pop-up.
    * @param \Kendo\UI\DatePickerAnimationOpen $value
    */
    public function open(\Kendo\UI\DatePickerAnimationOpen $value) {
        return $this->setProperty('open', $value);
    }

//<< Properties
}

?>
