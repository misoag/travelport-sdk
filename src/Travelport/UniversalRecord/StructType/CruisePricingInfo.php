<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruisePricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise pricing Information. Contains all related pricing data for travelers.
 * @subpackage Structs
 */
class CruisePricingInfo extends AbstractStructBase
{
    /**
     * The Fare
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Fare
     * @var \Travelport\UniversalRecord\StructType\Fare|null
     */
    public ?\Travelport\UniversalRecord\StructType\Fare $Fare = null;
    /**
     * The Charges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Charges
     * @var \Travelport\UniversalRecord\StructType\Charges|null
     */
    public ?\Travelport\UniversalRecord\StructType\Charges $Charges = null;
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Discount
     * @var \Travelport\UniversalRecord\StructType\Discount[]
     */
    public ?array $Discount = null;
    /**
     * The Deposit
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Deposit
     * @var \Travelport\UniversalRecord\StructType\Deposit[]
     */
    public ?array $Deposit = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Balance
     * @var \Travelport\UniversalRecord\StructType\Balance|null
     */
    public ?\Travelport\UniversalRecord\StructType\Balance $Balance = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Commission
     * @var \Travelport\UniversalRecord\StructType\Commission|null
     */
    public ?\Travelport\UniversalRecord\StructType\Commission $Commission = null;
    /**
     * The CruiseFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CruiseFees
     * @var \Travelport\UniversalRecord\StructType\CruiseFees|null
     */
    public ?\Travelport\UniversalRecord\StructType\CruiseFees $CruiseFees = null;
    /**
     * The CruiseBookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CruiseBookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[]
     */
    public ?array $CruiseBookingTravelerRef = null;
    /**
     * The NetFare
     * Meta information extracted from the WSDL
     * - documentation: Net Fare amount (Base price plus miscellaneouscharges less discounts) | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $NetFare = null;
    /**
     * The ReceivedAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of money Recieved | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ReceivedAmount = null;
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
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for CruisePricingInfo
     * @uses CruisePricingInfo::setFare()
     * @uses CruisePricingInfo::setCharges()
     * @uses CruisePricingInfo::setDiscount()
     * @uses CruisePricingInfo::setDeposit()
     * @uses CruisePricingInfo::setBalance()
     * @uses CruisePricingInfo::setCommission()
     * @uses CruisePricingInfo::setCruiseFees()
     * @uses CruisePricingInfo::setCruiseBookingTravelerRef()
     * @uses CruisePricingInfo::setNetFare()
     * @uses CruisePricingInfo::setReceivedAmount()
     * @uses CruisePricingInfo::setTotalPrice()
     * @uses CruisePricingInfo::setBasePrice()
     * @uses CruisePricingInfo::setApproximateTotalPrice()
     * @uses CruisePricingInfo::setApproximateBasePrice()
     * @uses CruisePricingInfo::setEquivalentBasePrice()
     * @uses CruisePricingInfo::setTaxes()
     * @uses CruisePricingInfo::setFees()
     * @uses CruisePricingInfo::setServices()
     * @uses CruisePricingInfo::setApproximateTaxes()
     * @uses CruisePricingInfo::setApproximateFees()
     * @uses CruisePricingInfo::setProviderCode()
     * @uses CruisePricingInfo::setSupplierCode()
     * @param \Travelport\UniversalRecord\StructType\Fare $fare
     * @param \Travelport\UniversalRecord\StructType\Charges $charges
     * @param \Travelport\UniversalRecord\StructType\Discount[] $discount
     * @param \Travelport\UniversalRecord\StructType\Deposit[] $deposit
     * @param \Travelport\UniversalRecord\StructType\Balance $balance
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @param \Travelport\UniversalRecord\StructType\CruiseFees $cruiseFees
     * @param \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[] $cruiseBookingTravelerRef
     * @param string $netFare
     * @param string $receivedAmount
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
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Fare $fare = null, ?\Travelport\UniversalRecord\StructType\Charges $charges = null, ?array $discount = null, ?array $deposit = null, ?\Travelport\UniversalRecord\StructType\Balance $balance = null, ?\Travelport\UniversalRecord\StructType\Commission $commission = null, ?\Travelport\UniversalRecord\StructType\CruiseFees $cruiseFees = null, ?array $cruiseBookingTravelerRef = null, ?string $netFare = null, ?string $receivedAmount = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $providerCode = null, ?string $supplierCode = null)
    {
        $this
            ->setFare($fare)
            ->setCharges($charges)
            ->setDiscount($discount)
            ->setDeposit($deposit)
            ->setBalance($balance)
            ->setCommission($commission)
            ->setCruiseFees($cruiseFees)
            ->setCruiseBookingTravelerRef($cruiseBookingTravelerRef)
            ->setNetFare($netFare)
            ->setReceivedAmount($receivedAmount)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get Fare value
     * @return \Travelport\UniversalRecord\StructType\Fare|null
     */
    public function getFare(): ?\Travelport\UniversalRecord\StructType\Fare
    {
        return $this->Fare;
    }
    /**
     * Set Fare value
     * @param \Travelport\UniversalRecord\StructType\Fare $fare
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setFare(?\Travelport\UniversalRecord\StructType\Fare $fare = null): self
    {
        $this->Fare = $fare;
        
        return $this;
    }
    /**
     * Get Charges value
     * @return \Travelport\UniversalRecord\StructType\Charges|null
     */
    public function getCharges(): ?\Travelport\UniversalRecord\StructType\Charges
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Travelport\UniversalRecord\StructType\Charges $charges
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setCharges(?\Travelport\UniversalRecord\StructType\Charges $charges = null): self
    {
        $this->Charges = $charges;
        
        return $this;
    }
    /**
     * Get Discount value
     * @return \Travelport\UniversalRecord\StructType\Discount[]
     */
    public function getDiscount(): ?array
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \Travelport\UniversalRecord\StructType\Discount[] $discount
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setDiscount(?array $discount = null): self
    {
        $this->Discount = $discount;
        
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Discount $item
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function addToDiscount(\Travelport\UniversalRecord\StructType\Discount $item): self
    {
        $this->Discount[] = $item;
        
        return $this;
    }
    /**
     * Get Deposit value
     * @return \Travelport\UniversalRecord\StructType\Deposit[]
     */
    public function getDeposit(): ?array
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param \Travelport\UniversalRecord\StructType\Deposit[] $deposit
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setDeposit(?array $deposit = null): self
    {
        $this->Deposit = $deposit;
        
        return $this;
    }
    /**
     * Add item to Deposit value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Deposit $item
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function addToDeposit(\Travelport\UniversalRecord\StructType\Deposit $item): self
    {
        $this->Deposit[] = $item;
        
        return $this;
    }
    /**
     * Get Balance value
     * @return \Travelport\UniversalRecord\StructType\Balance|null
     */
    public function getBalance(): ?\Travelport\UniversalRecord\StructType\Balance
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \Travelport\UniversalRecord\StructType\Balance $balance
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setBalance(?\Travelport\UniversalRecord\StructType\Balance $balance = null): self
    {
        $this->Balance = $balance;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\UniversalRecord\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setCommission(?\Travelport\UniversalRecord\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get CruiseFees value
     * @return \Travelport\UniversalRecord\StructType\CruiseFees|null
     */
    public function getCruiseFees(): ?\Travelport\UniversalRecord\StructType\CruiseFees
    {
        return $this->CruiseFees;
    }
    /**
     * Set CruiseFees value
     * @param \Travelport\UniversalRecord\StructType\CruiseFees $cruiseFees
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setCruiseFees(?\Travelport\UniversalRecord\StructType\CruiseFees $cruiseFees = null): self
    {
        $this->CruiseFees = $cruiseFees;
        
        return $this;
    }
    /**
     * Get CruiseBookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[]
     */
    public function getCruiseBookingTravelerRef(): ?array
    {
        return $this->CruiseBookingTravelerRef;
    }
    /**
     * Set CruiseBookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[] $cruiseBookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setCruiseBookingTravelerRef(?array $cruiseBookingTravelerRef = null): self
    {
        $this->CruiseBookingTravelerRef = $cruiseBookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to CruiseBookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function addToCruiseBookingTravelerRef(\Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef $item): self
    {
        $this->CruiseBookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get NetFare value
     * @return string|null
     */
    public function getNetFare(): ?string
    {
        return $this->NetFare;
    }
    /**
     * Set NetFare value
     * @param string $netFare
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setNetFare(?string $netFare = null): self
    {
        $this->NetFare = $netFare;
        
        return $this;
    }
    /**
     * Get ReceivedAmount value
     * @return string|null
     */
    public function getReceivedAmount(): ?string
    {
        return $this->ReceivedAmount;
    }
    /**
     * Set ReceivedAmount value
     * @param string $receivedAmount
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setReceivedAmount(?string $receivedAmount = null): self
    {
        $this->ReceivedAmount = $receivedAmount;
        
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
