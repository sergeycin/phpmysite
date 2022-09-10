<?php

namespace application\models;

class CustomFormValidation extends FormValidation {
    public function CustomFormValidation() {
        $this->setRule('fullName', 'isNotEmpty');
    }
}