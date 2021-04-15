<?php

class Model_Contact extends Model
{

    public function get_data()
    {
        $formclass = new CustomFormValidation();
        return $formclass->validateContacts();
    }

}
