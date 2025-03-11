<?php
namespace Learning\SectionXml\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;

class CustomSection implements SectionSourceInterface
{
   protected $checkoutSession;

   public function __construct(
       \Magento\Checkout\Model\Session $checkoutSession
   ) {
       $this->checkoutSession = $checkoutSession;
   }
   public function getSectionData()
   {
       return [
           'msg' => "Data from section == ".time()
       ];
   }
}