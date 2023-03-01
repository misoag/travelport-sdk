<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRailPricingSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response. | Common RailPricingSolution container
 * @subpackage Structs
 */
abstract class TypeRailPricingSolution extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * The RailJourney
     * Meta information extracted from the WSDL
     * - choice: RailJourney | RailJourneyRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailJourney
     * @var \Travelport\Air\StructType\RailJourney[]
     */
    public ?array $RailJourney = null;
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - choice: RailJourney | RailJourneyRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailJourneyRef
     * @var \Travelport\Air\StructType\RailJourneyRef[]
     */
    public ?array $RailJourneyRef = null;
    /**
     * The RailPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailPricingInfo
     * @var \Travelport\Air\StructType\RailPricingInfo[]
     */
    public ?array $RailPricingInfo = null;
    /**
     * The OfferId
     * Meta information extracted from the WSDL
     * - documentation: OfferID must be included if the RailCreateReq contains a price. If the RailCreateReq is used for the Direct Book function, the OfferID is not included.
     * - use: optional
     * @var int|null
     */
    public ?int $OfferId = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: HostTokenRef will reference the value in HostTokenList/HostToken @ Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $HostTokenRef = null;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - documentation: Offer Reference required for Booking(eg.TL).
     * - use: optional
     * @var string|null
     */
    public ?string $Reference = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
    /**
     * Constructor method for typeRailPricingSolution
     * @uses TypeRailPricingSolution::setKey()
     * @uses TypeRailPricingSolution::setProviderCode()
     * @uses TypeRailPricingSolution::setSupplierCode()
     * @uses TypeRailPricingSolution::setRailJourney()
     * @uses TypeRailPricingSolution::setRailJourneyRef()
     * @uses TypeRailPricingSolution::setRailPricingInfo()
     * @uses TypeRailPricingSolution::setOfferId()
     * @uses TypeRailPricingSolution::setHostTokenRef()
     * @uses TypeRailPricingSolution::setReference()
     * @uses TypeRailPricingSolution::setTotalPrice()
     * @uses TypeRailPricingSolution::setBasePrice()
     * @uses TypeRailPricingSolution::setApproximateTotalPrice()
     * @uses TypeRailPricingSolution::setApproximateBasePrice()
     * @uses TypeRailPricingSolution::setEquivalentBasePrice()
     * @uses TypeRailPricingSolution::setTaxes()
     * @uses TypeRailPricingSolution::setFees()
     * @uses TypeRailPricingSolution::setServices()
     * @uses TypeRailPricingSolution::setApproximateTaxes()
     * @uses TypeRailPricingSolution::setApproximateFees()
     * @param string $key
     * @param string $providerCode
     * @param string $supplierCode
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     * @param \Travelport\Air\StructType\RailJourneyRef[] $railJourneyRef
     * @param \Travelport\Air\StructType\RailPricingInfo[] $railPricingInfo
     * @param int $offerId
     * @param string $hostTokenRef
     * @param string $reference
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     */
    public function __construct(string $key, string $providerCode, string $supplierCode, ?array $railJourney = null, ?array $railJourneyRef = null, ?array $railPricingInfo = null, ?int $offerId = null, ?string $hostTokenRef = null, ?string $reference = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null)
    {
        $this
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setRailJourney($railJourney)
            ->setRailJourneyRef($railJourneyRef)
            ->setRailPricingInfo($railPricingInfo)
            ->setOfferId($offerId)
            ->setHostTokenRef($hostTokenRef)
            ->setReference($reference)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get RailJourney value
     * @return \Travelport\Air\StructType\RailJourney[]|null
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney ?? null;
    }
    /**
     * Set RailJourney value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailJourney[] $railJourney
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        if (is_null($railJourney) || (is_array($railJourney) && empty($railJourney))) {
            unset($this->RailJourney);
        } else {
            $this->RailJourney = $railJourney;
        }
        
        return $this;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailJourney $item
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function addToRailJourney(\Travelport\Air\StructType\RailJourney $item): self
    {
        $this->RailJourney[] = $item;
        
        return $this;
    }
    /**
     * Get RailJourneyRef value
     * @return \Travelport\Air\StructType\RailJourneyRef[]|null
     */
    public function getRailJourneyRef(): ?array
    {
        return $this->RailJourneyRef ?? null;
    }
    /**
     * Set RailJourneyRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\RailJourneyRef[] $railJourneyRef
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setRailJourneyRef(?array $railJourneyRef = null): self
    {
        if (is_null($railJourneyRef) || (is_array($railJourneyRef) && empty($railJourneyRef))) {
            unset($this->RailJourneyRef);
        } else {
            $this->RailJourneyRef = $railJourneyRef;
        }
        
        return $this;
    }
    /**
     * Add item to RailJourneyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailJourneyRef $item
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function addToRailJourneyRef(\Travelport\Air\StructType\RailJourneyRef $item): self
    {
        $this->RailJourneyRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingInfo value
     * @return \Travelport\Air\StructType\RailPricingInfo[]
     */
    public function getRailPricingInfo(): ?array
    {
        return $this->RailPricingInfo;
    }
    /**
     * Set RailPricingInfo value
     * @param \Travelport\Air\StructType\RailPricingInfo[] $railPricingInfo
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setRailPricingInfo(?array $railPricingInfo = null): self
    {
        $this->RailPricingInfo = $railPricingInfo;
        
        return $this;
    }
    /**
     * Add item to RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailPricingInfo $item
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function addToRailPricingInfo(\Travelport\Air\StructType\RailPricingInfo $item): self
    {
        $this->RailPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OfferId value
     * @return int|null
     */
    public function getOfferId(): ?int
    {
        return $this->OfferId;
    }
    /**
     * Set OfferId value
     * @param int $offerId
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setOfferId(?int $offerId = null): self
    {
        $this->OfferId = $offerId;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setReference(?string $reference = null): self
    {
        $this->Reference = $reference;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\Air\StructType\TypeRailPricingSolution
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
}
