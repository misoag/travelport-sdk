<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchandisingPricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: The account code is used to get corporate discounted pricing on paid seats. Provider:ACH
 * @subpackage Structs
 */
class MerchandisingPricingModifiers extends AbstractStructBase
{
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Air\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * Constructor method for MerchandisingPricingModifiers
     * @uses MerchandisingPricingModifiers::setAccountCode()
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $accountCode = null)
    {
        $this
            ->setAccountCode($accountCode);
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Air\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     * @return \Travelport\Air\StructType\MerchandisingPricingModifiers
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AccountCode $item
     * @return \Travelport\Air\StructType\MerchandisingPricingModifiers
     */
    public function addToAccountCode(\Travelport\Air\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
}
