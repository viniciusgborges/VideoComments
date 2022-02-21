<?php
namespace Vb\VideoComments\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Comments extends AbstractDb
{
    const MAIN_TABLE = 'vb_comments';
    const ID_FIELD_NAME = 'comment_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}

