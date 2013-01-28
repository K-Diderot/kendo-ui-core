<?php

namespace Kendo\Dataviz\UI;

class StockChartSeriesItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The type of the series. Available types:
    * @param string $value
    */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
    * The series line dash type.** Applicable only to line series **
    * @param string $value
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * Array of data items. The data item type can be either a:
    * @param array $value
    */
    public function data($value) {
        return $this->setProperty('data', $value);
    }

    /**
    * The data field containing the high value.** Available for candlestick and ohlc series only **
    * @param string $value
    */
    public function highField($value) {
        return $this->setProperty('highField', $value);
    }

    /**
    * The data field containing the series value.
    * @param string $value
    */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
    * Name template for auto-generated series when binding to grouped data.Template variables:
    * @param string $value
    */
    public function groupNameTemplate($value) {
        return $this->setProperty('groupNameTemplate', $value);
    }

    /**
    * The series name visible in the legend.
    * @param string $value
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Configures the appearance of highlighted points.** Applicable to candlestick and ohlc series. **
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemHighlight $value
    */
    public function highlight(\Kendo\Dataviz\UI\StockChartSeriesItemHighlight $value) {
        return $this->setProperty('highlight', $value);
    }

    /**
    * Aggregate function for date series.This function is used when a category (an year, month, etc.) contains two or more points.
The function return value is displayed instead of the individual points.
    * @param string $value
    */
    public function aggregate($value) {
        return $this->setProperty('aggregate', $value);
    }

    /**
    * The name of the value axis to use.** Applicable to area, column, line, ohlc and candlestick series **
    * @param string $value
    */
    public function axis($value) {
        return $this->setProperty('axis', $value);
    }

    /**
    * The border of the points.** Applicable to column, ohlc and candlestick series **
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemBorder $value
    */
    public function border(\Kendo\Dataviz\UI\StockChartSeriesItemBorder $value) {
        return $this->setProperty('border', $value);
    }

    /**
    * The data field containing the close value.** Available for candlestick and ohlc series only **
    * @param string $value
    */
    public function closeField($value) {
        return $this->setProperty('closeField', $value);
    }

    /**
    * The series base color.
    * @param string $value
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The data field containing the point color.** Applicable for column, candlestick and ohlc series. **
    * @param string $value
    */
    public function colorField($value) {
        return $this->setProperty('colorField', $value);
    }

    /**
    * The series color when open value is smoller then close value.** Available for candlestick series only **
    * @param string $value
    */
    public function downColor($value) {
        return $this->setProperty('downColor', $value);
    }

    /**
    * The data field containing the body color.** Available for candlestick series only **
    * @param string $value
    */
    public function downColorField($value) {
        return $this->setProperty('downColorField', $value);
    }

    /**
    * The distance between category clusters.** Applicable for column, candlestick and ohlc series. **
    * @param float $value
    */
    public function gap($value) {
        return $this->setProperty('gap', $value);
    }

    /**
    * Configures the series data labels.
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemLabels $value
    */
    public function labels(\Kendo\Dataviz\UI\StockChartSeriesItemLabels $value) {
        return $this->setProperty('labels', $value);
    }

    /**
    * Line options.** Applicable to area, candlestick and ohlc series. **
    * @param string|\Kendo\Dataviz\UI\StockChartSeriesItemLine $value
    */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
    * The data field containing the low value.** Available for candlestick and ohlc series **
    * @param string $value
    */
    public function lowField($value) {
        return $this->setProperty('lowField', $value);
    }

    /**
    * Marker options.** Applicable for area and line series. **
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemMarkers $value
    */
    public function markers(\Kendo\Dataviz\UI\StockChartSeriesItemMarkers $value) {
        return $this->setProperty('markers', $value);
    }

    /**
    * Configures the behavior for handling missing values.** Applicable for area and line series. **
    * @param string $value
    */
    public function missingValues($value) {
        return $this->setProperty('missingValues', $value);
    }

    /**
    * The series opacity.
    * @param float $value
    */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
    * The data field containing the open value.** Available for candlestick and ohlc series **
    * @param string $value
    */
    public function openField($value) {
        return $this->setProperty('openField', $value);
    }

    /**
    * The effects overlay.
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemOverlay $value
    */
    public function overlay(\Kendo\Dataviz\UI\StockChartSeriesItemOverlay $value) {
        return $this->setProperty('overlay', $value);
    }

    /**
    * Space between points as proportion of the point width.Available for column, candlestick and ohlc series.
    * @param float $value
    */
    public function spacing($value) {
        return $this->setProperty('spacing', $value);
    }

    /**
    * A value indicating if the series should be stacked. String value indicates that the series should be stacked in a group with the specified name.
Available for column series.
    * @param boolean|string $value
    */
    public function stack($value) {
        return $this->setProperty('stack', $value);
    }

    /**
    * The data point tooltip configuration options.
    * @param \Kendo\Dataviz\UI\StockChartSeriesItemTooltip $value
    */
    public function tooltip(\Kendo\Dataviz\UI\StockChartSeriesItemTooltip $value) {
        return $this->setProperty('tooltip', $value);
    }

    /**
    * The line width.** Applicable for area and line series. **
    * @param float $value
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
