<?php

namespace Dvasilcenko\SyliusAttributeEnablerPlugin\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductAttributeType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductAttributeTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('displayableInShop', CheckboxType::class, [
            'label' => 'plugin.product_attribute.displayableInShop'
        ]);
    }

    public function getExtendedType(): string
    {
        return ProductAttributeType::class;
    }
}