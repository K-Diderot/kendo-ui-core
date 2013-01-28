<?php

namespace Kendo\UI;

class GridColumn extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Definition of column cells' HTML attributes. Reserved words in Javascript should be enclosed in quotation marks.
    * @param Object $value
    */
    public function attributes($value) {
        return $this->setProperty('attributes', $value);
    }

    /**
    * Definition of command column. The supported built-in commands are: "create", "cancel", "save", "destroy".
    * @param string|\Kendo\UI\GridColumnCommand $value
    */
    public function command($value) {
        return $this->setProperty('command', $value);
    }

    /**
    * Sets the editor option of the GridColumn.
    * Provides a way to specify custom editor for this column.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function editor($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('editor', $value);
    }

    /**
    * Specified whether the column content is escaped. Disable encoding if the data contains HTML markup.
    * @param boolean $value
    */
    public function encoded($value) {
        return $this->setProperty('encoded', $value);
    }

    /**
    * The field from the datasource that will be displayed in the column.
    * @param string $value
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * Specifies whether given column is filterable.
    * @param boolean|\Kendo\UI\GridColumnFilterable $value
    */
    public function filterable($value) {
        return $this->setProperty('filterable', $value);
    }

    /**
    * The format that will be applied on the column cells.
    * @param string $value
    */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
    * Definition of column header cell's HTML attributes. Reserved words in Javascript should be enclosed in quotation marks.
    * @param Object $value
    */
    public function headerAttributes($value) {
        return $this->setProperty('headerAttributes', $value);
    }

    /**
    * The template for column's header cell. If sorting is enabled, it will be wrapped in a <a class="k-link"> element, so the template should consist of only inline elements
in order to have valid HTML markup in the Grid.
    * @param string $value
    */
    public function headerTemplate($value) {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
    * Specifies whether given column is hidden.
    * @param boolean $value
    */
    public function hidden($value) {
        return $this->setProperty('hidden', $value);
    }

    /**
    * Specifies whether given column is sortable.
    * @param boolean $value
    */
    public function sortable($value) {
        return $this->setProperty('sortable', $value);
    }

    /**
    * The template for column's cells.
    * @param string $value
    */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
    * The aggregates to be used when grouping is applied
    * @param array $value
    */
    public function aggregates($value) {
        return $this->setProperty('aggregates', $value);
    }

    /**
    * The template for group header item.
    * @param string $value
    */
    public function groupHeaderTemplate($value) {
        return $this->setProperty('groupHeaderTemplate', $value);
    }

    /**
    * The template for column's cell in group footer item.
    * @param string $value
    */
    public function groupFooterTemplate($value) {
        return $this->setProperty('groupFooterTemplate', $value);
    }

    /**
    * The template for column's cell in footer item.
    * @param string $value
    */
    public function footerTemplate($value) {
        return $this->setProperty('footerTemplate', $value);
    }

    /**
    * The text that will be displayed in the column header.
    * @param string $value
    */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
    * The width of the column.
    * @param string $value
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Indicates whether the column should be visible in column menu.
    * @param boolean $value
    */
    public function menu($value) {
        return $this->setProperty('menu', $value);
    }

//<< Properties
}

?>
