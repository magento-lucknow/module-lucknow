<?php
declare(strict_types=1);

namespace Meetup\Lucknow\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Data
{
    /**
     * @var ScopeConfigInterface
     */
    private $config;

    public function __construct(ScopeConfigInterface $config) {
        $this->config = $config;
    }

    public function test()
    {
    }
}
