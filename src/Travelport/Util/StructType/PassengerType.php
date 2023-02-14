<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerType StructType
 * Meta information extracted from the WSDL
 * - documentation: The passenger type details associated to a fare.
 * @subpackage Structs
 */
class PassengerType extends TypePassengerType
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Description;
    /**
     * The FareGuaranteeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareGuaranteeInfo
     * @var \Travelport\Util\StructType\FareGuaranteeInfo|null
     */
    protected ?\Travelport\Util\StructType\FareGuaranteeInfo $FareGuaranteeInfo = null;
    /**
     * Constructor method for PassengerType
     * @uses PassengerType::setDescription()
     * @uses PassengerType::setFareGuaranteeInfo()
     * @param string $description
     * @param \Travelport\Util\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     */
    public function __construct(string $description, ?\Travelport\Util\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null)
    {
        $this
            ->setDescription($description)
            ->setFareGuaranteeInfo($fareGuaranteeInfo);
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
     * @return \Travelport\Util\StructType\PassengerType
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get FareGuaranteeInfo value
     * @return \Travelport\Util\StructType\FareGuaranteeInfo|null
     */
    public function getFareGuaranteeInfo(): ?\Travelport\Util\StructType\FareGuaranteeInfo
    {
        return $this->FareGuaranteeInfo;
    }
    /**
     * Set FareGuaranteeInfo value
     * @param \Travelport\Util\StructType\FareGuaranteeInfo $fareGuaranteeInfo
     * @return \Travelport\Util\StructType\PassengerType
     */
    public function setFareGuaranteeInfo(?\Travelport\Util\StructType\FareGuaranteeInfo $fareGuaranteeInfo = null): self
    {
        $this->FareGuaranteeInfo = $fareGuaranteeInfo;
        
        return $this;
    }
}
