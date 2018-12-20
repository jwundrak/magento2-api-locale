<?php

namespace Bugs\ApiLocale\Api\Data;

interface TestOutputInterface
{
    /**
     * @return string
     */
    public function getLocale():string;

    /**
     * @return string
     */
    public function getTestTranslation():string;

    /**
     * @return string
     */
    public function getStoreCode():string;

    /**
     * @return string
     */
    public function getStoreLocale():string;
}
