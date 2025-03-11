<?php
/**
 * @author Atwix Team
 * @copyright Copyright (c) 2018 Atwix (https://www.atwix.com/)
 * @package Atwix_CatalogAttribute
 */

namespace Learning\CatalogAttributeXml\Setup;

use Exception;
use Magento\Catalog\Model\Product;
use Magento\Config\Model\ResourceModel\Config;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 */
class InstallData implements InstallDataInterface
{
    /**
     * Resource Config
     *
     * @var Config
     */
    protected $resourceConfig;

    /**
     * Eav Setup Factory
     *
     * @var EavSetupFactory
     */
    protected $eavSetupFactory;

    /**
     * AddDefaultShippingMethodsService constructor
     *
     * @param Config $resourceConfig
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(Config $resourceConfig, EavSetupFactory $eavSetupFactory)
    {
        $this->resourceConfig = $resourceConfig;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @return void

     * @throws CouldNotSaveException
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        try {
            $eavSetup->addAttribute(
                Product::ENTITY,
                'product_brand',
                [
                    'type' => 'varchar',
                    'label' => 'Product Brand',
                    'group' => 'General Information',
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'input' => 'text',
                    'global' => ScopedAttributeInterface::SCOPE_STORE,
                ]
            );
        } catch (Exception $e) {
            throw new CouldNotSaveException(__('Could create product attribute: "%1"', $e->getMessage()), $e);
        }

        $installer->endSetup();
    }
}