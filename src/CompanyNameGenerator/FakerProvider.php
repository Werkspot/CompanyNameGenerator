<?php

namespace CompanyNameGenerator;

/**
 * Provider for the Faker generator
 */
class FakerProvider extends \Faker\Provider\Base
{
    protected static $techTerms = ['Insulators', 'General Contracters', 'Painters', 'Plasterers', 'Plumbers', 'Gardeners', 'Drywallers'];

    protected static $marioTerms = ['Mario', 'Luigi', 'Toad', 'Bowser', 'Peach', 'Daisy', 'Wario', 'Yoshi', 'Donkey Kong', 'Koopa', 'Waluigi', 'Wart'];

    protected static $colorTerms = ['Blue', 'Green', 'Orange', 'Purple', 'Red'];

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
