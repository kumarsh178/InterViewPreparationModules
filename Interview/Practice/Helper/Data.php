<?php
namespace Interview\Practice\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class Data extends AbstractHelper
{
  
    protected $orderStatus = [];

    public function __construct(
        Context $context,
        $orderStatus = []
    ){
        parent::__construct($context);
        $this->orderStatus = $orderStatus;
    }

    public function getMethodArray($type){
        return $this->orderStatus[$type];
    }
}