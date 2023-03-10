<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTransactionsAllowed StructType
 * @subpackage Structs
 */
class TypeTransactionsAllowed extends TypeBookingTransactionsAllowed
{
    /**
     * The ShoppingEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit shopping transaction for the given product type on this Provider/Supplier. Inheritable.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ShoppingEnabled = null;
    /**
     * The PricingEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit pricing transaction for the given product type on this Provider/Supplier. Inheritable.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PricingEnabled = null;
    /**
     * Constructor method for typeTransactionsAllowed
     * @uses TypeTransactionsAllowed::setShoppingEnabled()
     * @uses TypeTransactionsAllowed::setPricingEnabled()
     * @param bool $shoppingEnabled
     * @param bool $pricingEnabled
     */
    public function __construct(?bool $shoppingEnabled = null, ?bool $pricingEnabled = null)
    {
        $this
            ->setShoppingEnabled($shoppingEnabled)
            ->setPricingEnabled($pricingEnabled);
    }
    /**
     * Get ShoppingEnabled value
     * @return bool|null
     */
    public function getShoppingEnabled(): ?bool
    {
        return $this->ShoppingEnabled;
    }
    /**
     * Set ShoppingEnabled value
     * @param bool $shoppingEnabled
     * @return \Travelport\Hotel\StructType\TypeTransactionsAllowed
     */
    public function setShoppingEnabled(?bool $shoppingEnabled = null): self
    {
        $this->ShoppingEnabled = $shoppingEnabled;
        
        return $this;
    }
    /**
     * Get PricingEnabled value
     * @return bool|null
     */
    public function getPricingEnabled(): ?bool
    {
        return $this->PricingEnabled;
    }
    /**
     * Set PricingEnabled value
     * @param bool $pricingEnabled
     * @return \Travelport\Hotel\StructType\TypeTransactionsAllowed
     */
    public function setPricingEnabled(?bool $pricingEnabled = null): self
    {
        $this->PricingEnabled = $pricingEnabled;
        
        return $this;
    }
}
