<?php
/**
 * Copyright © All rights reserved.
 */

namespace Zaproo\CustomerStatus\Plugin\CustomerData;

class Customer
{
    /**
     * @var \Magento\Customer\Helper\Session\CurrentCustomer
     */
    private $currentCustomer;

    /**
     * Customer constructor.
     * @param \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer
     */
    public function __construct(
        \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer
    ) {
        $this->currentCustomer = $currentCustomer;
    }

    /**
     * @param \Magento\Customer\CustomerData\Customer $subject
     * @param $result
     * @return array
     */
    public function afterGetSectionData(\Magento\Customer\CustomerData\Customer $subject, $result)
    {
        if (!$this->currentCustomer->getCustomerId()) {
            return [];
        }
        $customer = $this->currentCustomer->getCustomer();
        if ($customer) {
            if ($customer->getCustomAttribute('customer_status') !== null && is_array($result)) {
                $result['customer_status'] = $customer->getCustomAttribute('customer_status')->getValue();
            }
        }
        return $result;
    }
}
