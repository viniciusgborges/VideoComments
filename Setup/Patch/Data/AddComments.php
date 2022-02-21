<?php

namespace Vb\VideoComments\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class AddComments implements DataPatchInterface, PatchRevertableInterface
{
    private ModuleDataSetupInterface $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $table = $this->moduleDataSetup->getTable('vb_comments');
        $this->moduleDataSetup->getConnection()->insertMultiple($table, [[
            'customer_id' => 1,
            'comment' => 'Vídeo muito bom',
        ],
        [
            'customer_id' => 2,
            'comment' => 'Vídeo péssimo',
        ],
        ]);
        $this->moduleDataSetup->endSetup();
    }
}
