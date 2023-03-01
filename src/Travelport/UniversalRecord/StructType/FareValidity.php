<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareValidity StructType
 * Meta information extracted from the WSDL
 * - documentation: Associates fare validity dates with journeys.
 * @subpackage Structs
 */
class FareValidity extends AbstractStructBase
{
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a journey to which this fare validity refers. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $RailJourneyRef;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid before this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: Fare not valid after this date.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidAfter = null;
    /**
     * Constructor method for FareValidity
     * @uses FareValidity::setRailJourneyRef()
     * @uses FareValidity::setNotValidBefore()
     * @uses FareValidity::setNotValidAfter()
     * @param string $railJourneyRef
     * @param string $notValidBefore
     * @param string $notValidAfter
     */
    public function __construct(string $railJourneyRef, ?string $notValidBefore = null, ?string $notValidAfter = null)
    {
        $this
            ->setRailJourneyRef($railJourneyRef)
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter);
    }
    /**
     * Get RailJourneyRef value
     * @return string
     */
    public function getRailJourneyRef(): string
    {
        return $this->RailJourneyRef;
    }
    /**
     * Set RailJourneyRef value
     * @param string $railJourneyRef
     * @return \Travelport\UniversalRecord\StructType\FareValidity
     */
    public function setRailJourneyRef(string $railJourneyRef): self
    {
        $this->RailJourneyRef = $railJourneyRef;
        
        return $this;
    }
    /**
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore(): ?string
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Travelport\UniversalRecord\StructType\FareValidity
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
        $this->NotValidBefore = $notValidBefore;
        
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter(): ?string
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Travelport\UniversalRecord\StructType\FareValidity
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        $this->NotValidAfter = $notValidAfter;
        
        return $this;
    }
}
