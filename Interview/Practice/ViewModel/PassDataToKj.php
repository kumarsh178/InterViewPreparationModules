<?php 
declare(strict_types=1);

namespace Interview\Practice\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory;

class PassDataToKj implements ArgumentInterface
{

    public CollectionFactory $orderCollectionFactory;
    public function __construct(CollectionFactory $orderCollectionFactory){
        $this->orderCollectionFactory = $orderCollectionFactory;
    }
    public function getPrices(){
        return "1000";
    }

    public function getMessage() {
        return "Welcome To KnockoutJs";
    }

    public function getAllOrdersList(){
        $orders = $this->orderCollectionFactory->create();
        $allOrders = $orders->getData();
        return json_encode($allOrders);
    }
}

