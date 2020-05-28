<?php
namespace Omnipay\SystemPay;

use Omnipay\Common\AbstractGateway;

/**
 * SystemPay Gatewayz
 *
 * @author Aurélien Schelcher <a.schelcher@ubitransports.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'SystemPay';
    }

    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'certificate' => '',
            'testMode' => false,
        );
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getCertificate()
    {
        return $this->getParameter('certificate');
    }

    public function setCertificate($value)
    {
        return $this->setParameter('certificate', $value);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\SystemPay\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\SystemPay\Message\CompletePurchaseRequest', $parameters);
    }
}
