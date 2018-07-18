<?php

namespace Devim\Provider\SmscServiceProvider\Sender;

use Devim\Provider\SmscServiceProvider\Options\Option;

interface SmsSenderInterface
{
    /**
     * @param string $phone
     * @param string $text
     * @param string $shortCode
     * @param Option ...$options
     *
     * @return
     */
    public function send(string $phone, string $text, string $shortCode, Option ...$options);
}