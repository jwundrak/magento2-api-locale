<?php

namespace Bugs\ApiLocale\Model;

use Bugs\ApiLocale\Api\GetLocaleInterface;
use Magento\Framework\DataObject;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class GetLocale
 *
 * @package Bugs\ApiLocale\Model
 */
class GetLocale implements GetLocaleInterface
{

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Framework\TranslateInterface
     */
    private $translate;

    /**
     * GetLocale constructor.
     *
     * @param StoreManagerInterface                 $storeManager
     * @param \Magento\Framework\TranslateInterface $translate
     */
    public function __construct(StoreManagerInterface $storeManager, \Magento\Framework\TranslateInterface $translate)
    {
        $this->storeManager = $storeManager;
        $this->translate    = $translate;
    }

    /**
     * @return \Bugs\ApiLocale\Api\Data\TestOutputInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get()
    {
        return new DataObject(
            [
                'locale'           => $this->translate->getLocale(),
                'test_translation' => __('Category'),
                'store_code'       => $this->storeManager->getStore()->getCode(),
                'store_locale'     => $this->storeManager->getStore()->getConfig('general/locale/code'),
            ]
        );
    }
}
