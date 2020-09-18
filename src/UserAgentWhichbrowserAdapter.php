<?php


namespace Kh\Adapters;


use WhichBrowser\Parser;

final class UserAgentWhichbrowserAdapter implements UserAgentParserInterface
{
    private $result;

    public function parse(string $agent)
    {
        $this->result = new Parser($agent);
    }

    public function getBrowser()
    {
        return $this->result->browser->getName() ?? null;
    }

    public function getEngine()
    {
        return $this->result->engine->getName() ?? null;
    }

    public function getOs()
    {
        return $this->result->os->getName() ?? null;
    }

    public function getDevice()
    {
        return $this->result->getType() ?? null;
    }
}
