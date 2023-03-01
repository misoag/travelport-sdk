<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Destination;
    /**
     * The Purpose
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Purpose;
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
     * @param string $destination
     * @return \Travelport\Air\StructType\DestinationPurposeCode
     */
    public function setDestination(string $destination): self
    {
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
     * @param string $purpose
     * @return \Travelport\Air\StructType\DestinationPurposeCode
     */
    public function setPurpose(string $purpose): self
    {
        $this->Purpose = $purpose;
        
        return $this;
    }
}
