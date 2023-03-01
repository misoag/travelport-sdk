<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeTicketBundle StructType
 * @subpackage Structs
 */
class AirExchangeTicketBundle extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - ref: common:TicketNumber
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\Air\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Air\StructType\WaiverCode|null
     */
    public ?\Travelport\Air\StructType\WaiverCode $WaiverCode = null;
    /**
     * Constructor method for AirExchangeTicketBundle
     * @uses AirExchangeTicketBundle::setTicketNumber()
     * @uses AirExchangeTicketBundle::setFormOfPayment()
     * @uses AirExchangeTicketBundle::setFormOfPaymentRef()
     * @uses AirExchangeTicketBundle::setWaiverCode()
     * @param string $ticketNumber
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     */
    public function __construct(?string $ticketNumber = null, ?array $formOfPayment = null, ?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?\Travelport\Air\StructType\WaiverCode $waiverCode = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setWaiverCode($waiverCode);
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Air\StructType\AirExchangeTicketBundle
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\AirExchangeTicketBundle
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\AirExchangeTicketBundle
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Air\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Air\StructType\AirExchangeTicketBundle
     */
    public function setFormOfPaymentRef(?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Air\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Air\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     * @return \Travelport\Air\StructType\AirExchangeTicketBundle
     */
    public function setWaiverCode(?\Travelport\Air\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
}
