<?php

namespace App\Entity;

use Symfony\Component\Translation\TranslatableMessage;
use Symfony\Component\Validator\Constraints as Assert;

class Foo
{
    #[Assert\Length(
        min: 10,
        minMessage: 'foo.validation.length', // NOT EXTRACTED
    )]
    #[Assert\Expression(
        expression: '1 === 1',
        message: 'foo.validation.expression', // EXTRACTED
    )]
    #[Assert\Email(
        message: 'foo.validation.email', // EXTRACTED
    )]
    // This one is a workaround and is properly extracted
    #[Assert\NotBlank(
        message: new TranslatableMessage('foo.validation.notblank'),
    )]
    public string $param;
}