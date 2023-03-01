<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketValidity StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used to pass the selected segment
 * @subpackage Structs
 */
class TicketValidity extends AbstractStructBase
{
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
     * Constructor method for TicketValidity
     * @uses TicketValidity::setNotValidBefore()
     * @uses TicketValidity::setNotValidAfter()
     * @param string $notValidBefore
     * @param string $notValidAfter
     */
    public function __construct(?string $notValidBefore = null, ?string $notValidAfter = null)
    {
        $this
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter);
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
     * @return \Travelport\UniversalRecord\StructType\TicketValidity
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
     * @return \Travelport\UniversalRecord\StructType\TicketValidity
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        $this->NotValidAfter = $notValidAfter;
        
        return $this;
    }
}
