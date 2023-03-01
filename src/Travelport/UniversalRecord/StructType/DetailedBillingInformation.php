<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedBillingInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Container to send Detailed Billing Information for ticketing
 * @subpackage Structs
 */
class DetailedBillingInformation extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public array $AirPricingInfoRef;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The BillingDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: BillingDetailItem
     * @var \Travelport\UniversalRecord\StructType\BillingDetailItem[]
     */
    public ?array $BillingDetailItem = null;
    /**
     * Constructor method for DetailedBillingInformation
     * @uses DetailedBillingInformation::setAirPricingInfoRef()
     * @uses DetailedBillingInformation::setFormOfPaymentRef()
     * @uses DetailedBillingInformation::setBillingDetailItem()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem[] $billingDetailItem
     */
    public function __construct(array $airPricingInfoRef, ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $billingDetailItem = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setBillingDetailItem($billingDetailItem);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setAirPricingInfoRef(array $airPricingInfoRef): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setFormOfPaymentRef(?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get BillingDetailItem value
     * @return \Travelport\UniversalRecord\StructType\BillingDetailItem[]
     */
    public function getBillingDetailItem(): ?array
    {
        return $this->BillingDetailItem;
    }
    /**
     * Set BillingDetailItem value
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem[] $billingDetailItem
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setBillingDetailItem(?array $billingDetailItem = null): self
    {
        $this->BillingDetailItem = $billingDetailItem;
        
        return $this;
    }
    /**
     * Add item to BillingDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem $item
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function addToBillingDetailItem(\Travelport\UniversalRecord\StructType\BillingDetailItem $item): self
    {
        $this->BillingDetailItem[] = $item;
        
        return $this;
    }
}
