<?php

namespace Dvasilcenko\SyliusAttributeEnablerPlugin\Entity;

use Sylius\Component\Product\Model\ProductAttribute as BaseProductAttribute;

class ProductAttribute extends BaseProductAttribute
{
    /*
     * @var bool
     */
    private $displayableInShop;

    /**
     * @return bool|null
     */
    public function getDisplayableInShop(): ?bool
    {
        return $this->displayableInShop;
    }

    /**
     * @param bool $displayableInShop
     */
    public function setDisplayableInShop(bool $displayableInShop): void
    {
        $this->displayableInShop = $displayableInShop;
    }
}