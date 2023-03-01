<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Equipment StructType
 * Meta information extracted from the WSDL
 * - documentation: Requested Special Equipment Information
 * @subpackage Structs
 */
class Equipment extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The Type of Special Equipment requested
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment description
     * - use: required
     * @var string
     */
    public string $Description;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Special Equipment quantity
     * - use: optional
     * @var int|null
     */
    public ?int $Quantity = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the request returned by the supplier. Valid Values KK (Confirmed), UC (Unable to Confirm and NN (On request) | Valid 2 letter Status Code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * Constructor method for Equipment
     * @uses Equipment::setType()
     * @uses Equipment::setDescription()
     * @uses Equipment::setQuantity()
     * @uses Equipment::setStatus()
     * @param string $type
     * @param string $description
     * @param int $quantity
     * @param string $status
     */
    public function __construct(string $type, string $description, ?int $quantity = null, ?string $status = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setStatus($status);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Equipment
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\Equipment
     */
    public function setDescription(string $description): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\UniversalRecord\StructType\Equipment
     */
    public function setQuantity(?int $quantity = null): self
    {
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\Equipment
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
}
