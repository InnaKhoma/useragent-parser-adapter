<?php


namespace Kh\Adapters;

use hisorange\BrowserDetect\Parser;

final class UserAgentHisorangeAdapter implements UserAgentParserInterface
{
    private $detector;
    private $result;

    public function __construct()
    {
        $this->detector = new Parser();
    }

    public function parse(string $agent)
    {
        $this->result = $this->detector->parse($agent);
    }

    public function getBrowser()
    {
        return $this->result->browserFamily() ?? null;
    }

    public function getEngine()
    {
        return $this->result->browserEngine() ?? null;
    }

    public function getOs()
    {
        return $this->result->platformName() ?? null;
    }

    public function getDevice()
    {
        $type = 'unknown';

        if ($this->result->isMobile()) {
            $type =  'mobile';
        } elseif ($this->result->isTablet()) {
            $type =  'tablet';
        } elseif ($this->result->isDesktop()){
            $type = 'desktop';
        }
        return $this->result = $type;
    }

}
