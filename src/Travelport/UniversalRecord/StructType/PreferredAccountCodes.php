<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredAccountCodes StructType
 * @subpackage Structs
 */
class PreferredAccountCodes extends AbstractStructBase
{
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * Constructor method for PreferredAccountCodes
     * @uses PreferredAccountCodes::setAccountCode()
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $accountCode = null)
    {
        $this
            ->setAccountCode($accountCode);
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @return \Travelport\UniversalRecord\StructType\PreferredAccountCodes
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode $item
     * @return \Travelport\UniversalRecord\StructType\PreferredAccountCodes
     */
    public function addToAccountCode(\Travelport\UniversalRecord\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
}
