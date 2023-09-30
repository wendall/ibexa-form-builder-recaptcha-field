<?php

declare(strict_types=1);

namespace Wendall\IbexaFormBuilderRecaptcha\Form\Type;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use Ibexa\FormBuilder\Form\Type\Field\AbstractFieldType;

final class ReCaptchaFieldType extends AbstractFieldType
{
    public function getParent(): string
    {
        return EWZRecaptchaType::class;
    }
}
