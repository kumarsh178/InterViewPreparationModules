<?php 
declare(strict_types=1);

namespace Interview\Practice\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Interview\Practice\Service\Supply;
use Interview\Practice\Service\Demand;

class Example implements ArgumentInterface
{

    protected Supply $supply;
    protected Demand $demand;

    public function __construct(Supply $supply,Demand $demand){
        $this->supply = $supply;
        $this->demand = $demand;
    }

    public function getSupply(): Supply {
        return $this->supply;
    }

    public function getDemand(): Demand {
        return $this->demand;
    }
}

