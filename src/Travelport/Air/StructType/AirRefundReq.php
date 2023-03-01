<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to refund an itinerary for the amount previously quoted
 * @subpackage Structs
 */
class AirRefundReq extends BaseReq
{
    /**
     * The AirRefundBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirRefundBundle
     * @var \Travelport\Air\StructType\AirRefundBundle[]
     */
    public ?array $AirRefundBundle = null;
    /**
     * The TCRRefundBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCRRefundBundle
     * @var \Travelport\Air\StructType\TCRRefundBundle[]
     */
    public ?array $TCRRefundBundle = null;
    /**
     * The AirRefundModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirRefundModifiers
     * @var \Travelport\Air\StructType\AirRefundModifiers|null
     */
    public ?\Travelport\Air\StructType\AirRefundModifiers $AirRefundModifiers = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Air\StructType\Commission[]
     */
    public ?array $Commission = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment|null
     */
    public ?\Travelport\Air\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * Constructor method for AirRefundReq
     * @uses AirRefundReq::setAirRefundBundle()
     * @uses AirRefundReq::setTCRRefundBundle()
     * @uses AirRefundReq::setAirRefundModifiers()
     * @uses AirRefundReq::setCommission()
     * @uses AirRefundReq::setFormOfPayment()
     * @param \Travelport\Air\StructType\AirRefundBundle[] $airRefundBundle
     * @param \Travelport\Air\StructType\TCRRefundBundle[] $tCRRefundBundle
     * @param \Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers
     * @param \Travelport\Air\StructType\Commission[] $commission
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     */
    public function __construct(?array $airRefundBundle = null, ?array $tCRRefundBundle = null, ?\Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers = null, ?array $commission = null, ?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null)
    {
        $this
            ->setAirRefundBundle($airRefundBundle)
            ->setTCRRefundBundle($tCRRefundBundle)
            ->setAirRefundModifiers($airRefundModifiers)
            ->setCommission($commission)
            ->setFormOfPayment($formOfPayment);
    }
    /**
     * Get AirRefundBundle value
     * @return \Travelport\Air\StructType\AirRefundBundle[]
     */
    public function getAirRefundBundle(): ?array
    {
        return $this->AirRefundBundle;
    }
    /**
     * Set AirRefundBundle value
     * @param \Travelport\Air\StructType\AirRefundBundle[] $airRefundBundle
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function setAirRefundBundle(?array $airRefundBundle = null): self
    {
        $this->AirRefundBundle = $airRefundBundle;
        
        return $this;
    }
    /**
     * Add item to AirRefundBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirRefundBundle $item
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function addToAirRefundBundle(\Travelport\Air\StructType\AirRefundBundle $item): self
    {
        $this->AirRefundBundle[] = $item;
        
        return $this;
    }
    /**
     * Get TCRRefundBundle value
     * @return \Travelport\Air\StructType\TCRRefundBundle[]
     */
    public function getTCRRefundBundle(): ?array
    {
        return $this->TCRRefundBundle;
    }
    /**
     * Set TCRRefundBundle value
     * @param \Travelport\Air\StructType\TCRRefundBundle[] $tCRRefundBundle
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function setTCRRefundBundle(?array $tCRRefundBundle = null): self
    {
        $this->TCRRefundBundle = $tCRRefundBundle;
        
        return $this;
    }
    /**
     * Add item to TCRRefundBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TCRRefundBundle $item
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function addToTCRRefundBundle(\Travelport\Air\StructType\TCRRefundBundle $item): self
    {
        $this->TCRRefundBundle[] = $item;
        
        return $this;
    }
    /**
     * Get AirRefundModifiers value
     * @return \Travelport\Air\StructType\AirRefundModifiers|null
     */
    public function getAirRefundModifiers(): ?\Travelport\Air\StructType\AirRefundModifiers
    {
        return $this->AirRefundModifiers;
    }
    /**
     * Set AirRefundModifiers value
     * @param \Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function setAirRefundModifiers(?\Travelport\Air\StructType\AirRefundModifiers $airRefundModifiers = null): self
    {
        $this->AirRefundModifiers = $airRefundModifiers;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Air\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Air\StructType\Commission[] $commission
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function setCommission(?array $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Commission $item
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function addToCommission(\Travelport\Air\StructType\Commission $item): self
    {
        $this->Commission[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Air\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Air\StructType\AirRefundReq
     */
    public function setFormOfPayment(?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
}
