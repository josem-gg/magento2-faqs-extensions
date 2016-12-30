<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-16 01:57:35
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-24 17:04:23
 */

namespace PHPCuong\Faq\Controller\Adminhtml\Faq;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }
    /**
     * FAQs Manager Page
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();

        $resultPage->addBreadcrumb(
            'FAQs Manager',
            'FAQs Manager'
        );
        $resultPage->getConfig()->getTitle()->prepend(__('FAQs'));
        $resultPage->getConfig()->getTitle()
            ->prepend('FAQs Manager');
        return $resultPage;
    }
}