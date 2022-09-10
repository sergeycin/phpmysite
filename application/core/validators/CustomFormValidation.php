<?php

namespace application\core\validators;

class CustomFormValidation extends FormValidation {
    public function CustomFormValidation() {
        $this->setRule('fullName', 'isNotEmpty');
    }
}