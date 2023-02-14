<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationPurposeCode StructType
 * Meta information extracted from the WSDL
 * - documentation: This code is required to indicate destination and purpose of Travel. It is applicable for Canada and Bermuda agency only. This is used by Worldspan.
 * @subpackage Structs
 */
class DestinationPurposeCode extends AbstractStructBase
{
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Destination;
    /**
     * The Purpose
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Purpose;
    /**
     * Constructor method for DestinationPurposeCode
     * @uses DestinationPurposeCode::setDestination()
     * @uses DestinationPurposeCode::setPurpose()
     * @param string $destination
     * @param string $purpose
     */
    public function __construct(string $destination, string $purpose)
    {
        $this
            ->setDestination($destination)
            ->setPurpose($purpose);
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @uses \Travelport\Util\EnumType\TypeDestinationCode::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeDestinationCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $destination
     * @return \Travelport\Util\StructType\DestinationPurposeCode
     */
    public function setDestination(string $destination): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeDestinationCode::valueIsValid($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeDestinationCode', is_array($destination) ? implode(', ', $destination) : var_export($destination, true), implode(', ', \Travelport\Util\EnumType\TypeDestinationCode::getValidValues())), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get Purpose value
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @uses \Travelport\Util\EnumType\TypePurposeCode::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePurposeCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $purpose
     * @return \Travelport\Util\StructType\DestinationPurposeCode
     */
    public function setPurpose(string $purpose): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePurposeCode::valueIsValid($purpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePurposeCode', is_array($purpose) ? implode(', ', $purpose) : var_export($purpose, true), implode(', ', \Travelport\Util\EnumType\TypePurposeCode::getValidValues())), __LINE__);
        }
        $this->Purpose = $purpose;
        
        return $this;
    }
}
