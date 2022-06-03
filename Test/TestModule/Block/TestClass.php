<?php

declare(strict_types=1);

namespace Test\TestModule\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Checkout\Helper\Cart as CartHelper;
use Magento\Framework\Url\EncoderInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Widget\Block\BlockInterface;

class TestClass extends Template implements BlockInterface
{
    private ProductRepositoryInterface $productRepository;

    private CartHelper $cartHelper;

    private EncoderInterface $urlEncoder;

    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository,
        CartHelper $cartHelper,
        EncoderInterface $urlEncoder,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->productRepository = $productRepository;
        $this->cartHelper        = $cartHelper;
        $this->urlEncoder        = $urlEncoder;
    }
}