<?php

namespace ImagickDemo\Config;

use ImagickDemo\Config;

class Librato
{
    private $libratoKey;
    private $libratorUsername;
    private $statsSourceName;

    private function __construct($key, $username, $sourceName)
    {
        $this->libratoKey = $key;
        $this->libratorUsername = $username;
        $this->statsSourceName = $sourceName;
    }
    
    public static function make($key, $username, $sourceName)
    {
        return new Librato($key, $username, $sourceName);
    }
    
    
    public function getLibratoKey()
    {
        return $this->libratoKey;
    }

    public function getLibratoUsername()
    {
        return $this->libratorUsername;
    }
    
    public function getStatsSourceName()
    {
        return $this->statsSourceName;
    }
}
