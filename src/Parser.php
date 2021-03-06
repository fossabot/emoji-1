<?php

namespace Hidehalo\Emoji;

use Hidehalo\Emoji\Protocol\Utf8String;

class Parser
{
    protected $pattern;

    public function __construct()
    {
        $this->pattern = file_get_contents(__DIR__.'/../data/pattern.cache');
    }

    /**
     * Parse emoji symbols
     *
     * @param string $string
     * @return string|boolean
     */
    public function parse($string)
    {
        $ret = preg_match_all($this->pattern, $string, $matches);

        return $ret? $matches[0]: false;
    }

    /**
     * Get regex pattern
     *
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }
}