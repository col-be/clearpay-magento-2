<?php
/**
 * Magento 2 extensions for Clearpay Payment
 *
 * @author Clearpay
 * @copyright 2016-2019 Clearpay https://www.clearpay.co.uk
 */
namespace Clearpay\Clearpay\Model\PaymentInformationManagement;

class Plugin
{
    /**
     * @var \Clearpay\Clearpay\Model\Token
     */
    protected $token;

    /**
     * Plugin constructor.
     * @param \Clearpay\Clearpay\Model\Token $token
     */
    public function __construct(\Clearpay\Clearpay\Model\Token $token)
    {
        $this->token = $token;
    }

    /**
     * @param \Magento\Checkout\Model\PaymentInformationManagement $subject
     * @param $returnValue
     * @return string
     */
    public function afterSavePaymentInformationAndPlaceOrder(
        \Magento\Checkout\Model\PaymentInformationManagement $subject,
        $returnValue
    ) {
        return $this->token->saveAndReturnToken($returnValue);
    }
}
