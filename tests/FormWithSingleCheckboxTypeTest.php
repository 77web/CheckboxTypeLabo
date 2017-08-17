<?php
namespace Quartet\CheckboxTypeLabo;

use Symfony\Component\Form\Test\TypeTestCase;

class FormWithSingleCheckboxTypeTest extends TypeTestCase
{
    public function test_submit_1()
    {
        $form = $this->factory->create(FormWithSingleCheckboxType::class);
        $form->submit(['hoge' => 1]);

        var_dump($form->getData());
    }

    public function test_submit_empty()
    {
        $form = $this->factory->create(FormWithSingleCheckboxType::class);
        $form->submit([]);

        var_dump($form->getData());
    }
}
