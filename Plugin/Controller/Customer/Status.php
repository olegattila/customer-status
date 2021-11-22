<?php
/**
 * Copyright © All rights reserved.
 */

namespace Zaproo\CustomerStatus\Plugin\Controller\Customer;

class Status
{
    /**
     * XML configuration path enabled
     *
     * @var string
     */
    const XML_PATH_ENABLED = 'zaproo_customerstatus/general/enabled';
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var \Magento\Framework\Controller\Result\RedirectFactory
     */
    private $redirectFactory;

    /**
     * Status constructor.
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * Check whether module is enabled in system config
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function aroundExecute(\Zaproo\CustomerStatus\Controller\Customer\Status $subject, callable $proceed)
    {
        if (!$this->isEnabled()) {
            $resultRedirect = $this->redirectFactory->create();
            return $resultRedirect->setPath('customer/account/');
        } else {
            return $proceed();
        }
    }
}
