<?php

namespace CompanyNameGenerator;

/**
 * Provider for the Faker generator
 */
class FakerProvider extends \Faker\Provider\Base
{
    protected static $techTerms = [
        'Insulators',
        'General Contractors',
        'House Painters',
        'Plasterers',
        'Plumbers',
        'Gardeners',
        'Drywallers',
        'Carpenters',
        'Electricians',
        'Fencers',
        'Glaziers',
        'Landscapers',
        'Decorators',
        'Pipefitters',
        'Waterproofers',
        'Welders',
    ];

    protected static $marioTerms = [
        'Birdo',
        'Mario',
        'Luigi',
        'Toad',
        'Toadette',
        'Bowser',
        'Bowser Jr.',
        'Princess Peach',
        'Princess Daisy',
        'Wario',
        'Yoshi',
        'Donkey Kong',
        'King Boo',
        'Koopa',
        'Kamek',
        'Waluigi',
        'Wart',
    ];

    protected static $colorTerms = [
        'Blue',
        'Green',
        'Orange',
        'Purple',
        'Red',
        'Yellow',
        'Purple',
        'White',
        'Black',
        'Grey',
        'Brown',
        'Violet',
        'Magenta',
        'Gold',
        'Cyan',
        'Turquoise',
        'Indigo',
        'Lavender',
        'Olive',
    ];

    protected static $companyNameFormats = [
        '{{marioTerm}} {{techTerm}}',
        '{{colorTerm}} {{marioTerm}} {{techTerm}}',
    ];

    public static function techTerm()
    {
        return static::randomElement(static::$techTerms);
    }

    public static function colorTerm()
    {
        return static::randomElement(static::$colorTerms);
    }

    public static function marioTerm()
    {
        return static::randomElement(static::$marioTerms);
    }

    public function companyName()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

}
