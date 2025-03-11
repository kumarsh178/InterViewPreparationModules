<?php

namespace Interview\Practice\Observer;

use Magento\Framework\Event\ObserverInterface;

class SalesOrderChangeStateAfterObserver implements ObserverInterface
{
    public const ORDER_STATUS = 'order_status';

    /**
     * @var $_ordersFactory
     */
    protected $_ordersFactory;

    /**
     * Constructor
     *
     * @param \Magento\Sales\Model\OrdersFactory $ordersFactory
     * @param \Webkul\Custom\Helper\Data $dataHelper
     */
    public function __construct(\Magento\Sales\Model\OrderFactory $ordersFactory,
        \Interview\Practice\Helper\Data $dataHelper
    ) {
        $this->_ordersFactory = $ordersFactory;
        $this->_dataHelper = $dataHelper;
    }

    /**
     * Sales Order Change State After
     *
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {        
          try {
                        $order = $observer->getEvent()->getOrder();
                    
                        $orderId = $order->getId();
                        $orderFactory = $this->_ordersFactory->create();
                        $methodArray = $this->_dataHelper->getMethodArray(self::ORDER_STATUS);
                        if (!empty($order->getState())) {
                            $method = $methodArray[$order->getState()];
                            $this->$method($orderId, $order, $orderFactory);
                        }
            }catch(\Exception $e){

            }
    }

    /**
     * New state
     *
     * @param int $orderId
     * @param object $order
     * @param object $orderFactory
     */
    private function pendingState($orderId, $order, $orderFactory)
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/orders.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info("Pending Triggered".$order->getId());
    }

     /**
     * New state
     *
     * @param int $orderId
     * @param object $order
     * @param object $orderFactory
     */
    private function newState($orderId, $order, $orderFactory)
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/orders.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info("NewState Triggered".$order->getId());
    }


}