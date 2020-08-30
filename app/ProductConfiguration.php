<?php

namespace App;

class ProductConfiguration implements ProductConfigurationInterface
{
    /**
     * @var int
     */
    private $pageLimit;

    public function __construct(array $config)
    {
        $this->pageLimit = (int) $config['page_limit'];
    }

    public function pageLimit(): int
    {
        return $this->pageLimit;
    }
}
