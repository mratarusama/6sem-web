<?php

class Model_Test extends Model
{

    public function get_data()
    {
        $formclass = new CustomFormValidation();
        return $formclass->validateTest();
    }

}
