<?php

declare(strict_types=1);

namespace Wendall\IbexaFormBuilderRecaptcha\FormBuilder\Field\Mapper;

use Ibexa\FormBuilder\FieldType\Field\Mapper\GenericFieldMapper;
use Ibexa\Contracts\FormBuilder\FieldType\Model\Field;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

final class ReCaptchaMapper extends GenericFieldMapper
{
    protected function mapFormOptions(Field $field, array $constraints): array
    {
        $options = parent::mapFormOptions($field, $constraints);
        $options['field'] = $field;
        $options['label'] = $field->getName();
        $options['attr'] = [
            'options' => [
                'theme' => $field->getAttributeValue('theme'),
                'type' => 'image',
                'size' => $field->getAttributeValue('size'),
                'defer' => true,
                'async' => true,
            ],
        ];

        $options['constraints'] = [
            new Recaptcha\IsTrue(),
        ];

        return $options;
    }
}
