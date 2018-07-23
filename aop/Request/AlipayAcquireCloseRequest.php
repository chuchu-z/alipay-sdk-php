<?php
/**
 * ALIPAY API: alipay.acquire.close request
 *
 * @author auto create
 * @since  1.0, 2014-06-12 17:17:06
 */

namespace Alipay\Request;

class AlipayAcquireCloseRequest extends AbstractAlipayRequest
{

    /**
     * 卖家的操作员ID
     **/
    private $operatorId;
    
    /**
     * 支付宝合作商户网站唯一订单号
     **/
    private $outTradeNo;
    
    /**
     * 该交易在支付宝系统中的交易流水号。
最短16位，最长64位。
如果同时传了out_trade_no和trade_no，则以trade_no为准
     **/
    private $tradeNo;

    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    

    
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        $this->apiParas["operator_id"] = $operatorId;
    }

    public function getOperatorId()
    {
        return $this->operatorId;
    }

    public function setOutTradeNo($outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;
        $this->apiParas["out_trade_no"] = $outTradeNo;
    }

    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    public function setTradeNo($tradeNo)
    {
        $this->tradeNo = $tradeNo;
        $this->apiParas["trade_no"] = $tradeNo;
    }

    public function getTradeNo()
    {
        return $this->tradeNo;
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
