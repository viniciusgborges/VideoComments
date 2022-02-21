<?php
    namespace Vb\VideoComments\Model;

    use Magento\Framework\Model\AbstractModel;
    use Vb\VideoComments\Model\ResourceModel\Comments as CommentsResourceModel;

    class Comments extends AbstractModel
    {
        protected function _construct()
        {
            $this->_init(CommentsResourceModel::class);
        }
    }
