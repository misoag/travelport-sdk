<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRateHostIndicator StructType
 * Meta information extracted from the WSDL
 * - documentation: Host-specific info for vendors
 * @subpackage Structs
 */
class TypeRateHostIndicator extends AbstractStructBase
{
    /**
     * The InventoryToken
     * Meta information extracted from the WSDL
     * - documentation: Vendor info about rate to adjust pricing as needed
     * - use: optional
     * @var string|null
     */
    protected ?string $InventoryToken = null;
    /**
     * The RateToken
     * Meta information extracted from the WSDL
     * - documentation: Assocates shop response to sell request
     * - use: optional
     * @var string|null
     */
    protected ?string $RateToken = null;
    /**
     * Constructor method for typeRateHostIndicator
     * @uses TypeRateHostIndicator::setInventoryToken()
     * @uses TypeRateHostIndicator::setRateToken()
     * @param string $inventoryToken
     * @param string $rateToken
     */
    public function __construct(?string $inventoryToken = null, ?string $rateToken = null)
    {
        $this
            ->setInventoryToken($inventoryToken)
            ->setRateToken($rateToken);
    }
    /**
     * Get InventoryToken value
     * @return string|null
     */
    public function getInventoryToken(): ?string
    {
        return $this->InventoryToken;
    }
    /**
     * Set InventoryToken value
     * @param string $inventoryToken
     * @return \Travelport\UniversalRecord\StructType\TypeRateHostIndicator
     */
    public function setInventoryToken(?string $inventoryToken = null): self
    {
        // validation for constraint: string
        if (!is_null($inventoryToken) && !is_string($inventoryToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inventoryToken, true), gettype($inventoryToken)), __LINE__);
        }
        $this->InventoryToken = $inventoryToken;
        
        return $this;
    }
    /**
     * Get RateToken value
     * @return string|null
     */
    public function getRateToken(): ?string
    {
        return $this->RateToken;
    }
    /**
     * Set RateToken value
     * @param string $rateToken
     * @return \Travelport\UniversalRecord\StructType\TypeRateHostIndicator
     */
    public function setRateToken(?string $rateToken = null): self
    {
        // validation for constraint: string
        if (!is_null($rateToken) && !is_string($rateToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateToken, true), gettype($rateToken)), __LINE__);
        }
        $this->RateToken = $rateToken;
        
        return $this;
    }
}
