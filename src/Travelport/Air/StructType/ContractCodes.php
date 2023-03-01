<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractCodes StructType
 * @subpackage Structs
 */
class ContractCodes extends AbstractStructBase
{
    /**
     * The ContractCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ContractCode
     * @var \Travelport\Air\StructType\ContractCode[]
     */
    public ?array $ContractCode = null;
    /**
     * Constructor method for ContractCodes
     * @uses ContractCodes::setContractCode()
     * @param \Travelport\Air\StructType\ContractCode[] $contractCode
     */
    public function __construct(?array $contractCode = null)
    {
        $this
            ->setContractCode($contractCode);
    }
    /**
     * Get ContractCode value
     * @return \Travelport\Air\StructType\ContractCode[]
     */
    public function getContractCode(): ?array
    {
        return $this->ContractCode;
    }
    /**
     * Set ContractCode value
     * @param \Travelport\Air\StructType\ContractCode[] $contractCode
     * @return \Travelport\Air\StructType\ContractCodes
     */
    public function setContractCode(?array $contractCode = null): self
    {
        $this->ContractCode = $contractCode;
        
        return $this;
    }
    /**
     * Add item to ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ContractCode $item
     * @return \Travelport\Air\StructType\ContractCodes
     */
    public function addToContractCode(\Travelport\Air\StructType\ContractCode $item): self
    {
        $this->ContractCode[] = $item;
        
        return $this;
    }
}
