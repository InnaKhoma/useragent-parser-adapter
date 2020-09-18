<?php


namespace Kh\Adapters;


interface UserAgentParserInterface
{
    public function parse(string $agent);
    public function getBrowser();
    public function getEngine();
    public function getOs();
    public function getDevice();
}
