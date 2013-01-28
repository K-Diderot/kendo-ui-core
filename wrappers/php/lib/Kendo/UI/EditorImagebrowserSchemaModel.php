<?php

namespace Kendo\UI;

class EditorImagebrowserSchemaModel extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The name of the field which acts as an identifier.
    * @param string $value
    */
    public function id($value) {
        return $this->setProperty('id', $value);
    }

    /**
    * 
    * @param \Kendo\UI\EditorImagebrowserSchemaModelFields $value
    */
    public function fields(\Kendo\UI\EditorImagebrowserSchemaModelFields $value) {
        return $this->setProperty('fields', $value);
    }

//<< Properties
}

?>
