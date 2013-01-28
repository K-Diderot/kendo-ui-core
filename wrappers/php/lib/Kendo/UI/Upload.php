<?php

namespace Kendo\UI;

class Upload extends \Kendo\UI\Widget {
    public function name() {
        return 'Upload';
    }
//>> Properties

    /**
    * Configures the ability to upload a file(s) in an asynchronous manner. Please refer to the
async mode help topic
for more details.
    * @param \Kendo\UI\UploadAsync $value
    */
    public function async(\Kendo\UI\UploadAsync $value) {
        return $this->setProperty('async', $value);
    }

    /**
    * Enables (true) or disables (false) an Upload. A disabled
Upload may be re-enabled via enable().
    * @param boolean $value
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * Sets the strings rendered by the Upload.
    * @param \Kendo\UI\UploadLocalization $value
    */
    public function localization(\Kendo\UI\UploadLocalization $value) {
        return $this->setProperty('localization', $value);
    }

    /**
    * Enables (true) or disables (false) the ability to select multiple files.
If false, users will be able to select only one file at a time. Note: This option does not
limit the total number of uploaded files in an asynchronous configuration.
    * @param boolean $value
    */
    public function multiple($value) {
        return $this->setProperty('multiple', $value);
    }

    /**
    * Enables (true) or disables (false) the ability to display a file listing
for uploading a file(s). Disabling a file listing may be useful you wish to customize the UI; use the
client-side events to build your own UI.
    * @param boolean $value
    */
    public function showFileList($value) {
        return $this->setProperty('showFileList', $value);
    }

    /**
    * Sets the cancel event of the Upload.
    * Fires when the upload has been cancelled while in progress.Note: The cancel event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function cancel($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('cancel', $value);
    }

    /**
    * Sets the complete event of the Upload.
    * Fires when all active uploads have completed either successfully or with errors.Note: The complete event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function complete($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('complete', $value);
    }

    /**
    * Sets the error event of the Upload.
    * Fires when an upload / remove operation has failed.Note: The error event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function error($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('error', $value);
    }

    /**
    * Sets the progress event of the Upload.
    * Fires when upload progress data is available.Note: The progress event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function progress($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('progress', $value);
    }

    /**
    * Sets the remove event of the Upload.
    * Fires when an uploaded file is about to be removed.
Cancelling the event will prevent the remove.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function remove($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('remove', $value);
    }

    /**
    * Sets the select event of the Upload.
    * Triggered when a file(s) is selected. Note: Cancelling this event will prevent the selection from
occurring.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
    * Sets the success event of the Upload.
    * Fires when an upload / remove operation has been completed successfully.Note: The success event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function success($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('success', $value);
    }

    /**
    * Sets the upload event of the Upload.
    * Fires when one or more files are about to be uploaded.
Cancelling the event will prevent the upload.Note: The upload event fires only when the upload is in
async mode.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    */
    public function upload($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('upload', $value);
    }

//<< Properties
}

?>
