<?php
/**
 * ALIPAY API: alipay.user.contract.get request
 *
 * @author auto create
 * @since  1.0, 2016-06-06 20:23:18
 */

namespace Alipay\Request;

class AlipayUserContractGetRequest extends AbstractAlipayRequest
{

    /**
     * 订购者支付宝ID。session与subscriber_user_id二选一即可。
     **/
    private $subscriberUserId;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setSubscriberUserId($subscriberUserId)
    {
        $this->subscriberUserId = $subscriberUserId;
        $this->apiParas["subscriber_user_id"] = $subscriberUserId;
    }

    public function getSubscriberUserId()
    {
        return $this->subscriberUserId;
    }

    

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParams()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }
}
