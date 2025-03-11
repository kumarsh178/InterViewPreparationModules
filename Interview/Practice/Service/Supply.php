<?php 
declare(strict_types=1);

namespace Interview\Practice\Service;

use Interview\Practice\Model\Supplier;
use Interview\Practice\Model\Item;
use Interview\Practice\Model\ItemFactory;


class Supply
{

    protected Supplier $suplier;
    protected ItemFactory $itemFactory;

    public function __construct(Supplier $suplier,ItemFactory $itemFactory){
        $this->supplier = $suplier;
        $this->itemFactory = $itemFactory;
    }

    public function getSupplier(): Supplier {
        $this->supplier->setCode("123ABC");
        return $this->supplier;
    }
    public function getItem() : Item {
        $item = $this->itemFactory->create();
        $item->setCode("Item : 246");
        return $item;
    }
}

