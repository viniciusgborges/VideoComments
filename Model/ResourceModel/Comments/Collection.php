<?php
    namespace Vb\VideoComments\Model\ResourceModel\Comments;

    use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
    use Vb\VideoComments\Model\Comments as CommentsModel;
    use Vb\VideoComments\Model\ResourceModel\Comments as CommentsResourceModel;

    class Collection extends AbstractCollection
    {
        protected function _construct()
        {
            $this->_init(CommentsModel::class,CommentsResourceModel::class);
        }
    }
