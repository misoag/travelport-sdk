<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\UniversalRecord\StructType\Fare $Fare = null;
    /**
     * The Charges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Charges
     * @var \Travelport\UniversalRecord\StructType\Charges|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Charges $Charges = null;
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Discount
     * @var \Travelport\UniversalRecord\StructType\Discount[]
     */
    protected ?array $Discount = null;
    /**
     * The Deposit
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: Deposit
     * @var \Travelport\UniversalRecord\StructType\Deposit[]
     */
    protected ?array $Deposit = null;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Balance
     * @var \Travelport\UniversalRecord\StructType\Balance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Balance $Balance = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Commission
     * @var \Travelport\UniversalRecord\StructType\Commission|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Commission $Commission = null;
    /**
     * The CruiseFees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CruiseFees
     * @var \Travelport\UniversalRecord\StructType\CruiseFees|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CruiseFees $CruiseFees = null;
    /**
     * The CruiseBookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CruiseBookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[]
     */
    protected ?array $CruiseBookingTravelerRef = null;
    /**
     * The NetFare
     * Meta information extracted from the WSDL
     * - documentation: Net Fare amount (Base price plus miscellaneouscharges less discounts) | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $NetFare = null;
    /**
     * The ReceivedAmount
     * Meta information extracted from the WSDL
     * - documentation: Amount of money Recieved | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ReceivedAmount = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateFees = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
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
     * This method is responsible for validating the values passed to the setDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountForArrayConstraintsFromSetDiscount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruisePricingInfoDiscountItem) {
            // validation for constraint: itemType
            if (!$cruisePricingInfoDiscountItem instanceof \Travelport\UniversalRecord\StructType\Discount) {
                $invalidValues[] = is_object($cruisePricingInfoDiscountItem) ? get_class($cruisePricingInfoDiscountItem) : sprintf('%s(%s)', gettype($cruisePricingInfoDiscountItem), var_export($cruisePricingInfoDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Discount property can only contain items of type \Travelport\UniversalRecord\StructType\Discount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Discount value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Discount[] $discount
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setDiscount(?array $discount = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountArrayErrorMessage = self::validateDiscountForArrayConstraintsFromSetDiscount($discount))) {
            throw new InvalidArgumentException($discountArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($discount) && count($discount) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($discount)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Discount) {
            throw new InvalidArgumentException(sprintf('The Discount property can only contain items of type \Travelport\UniversalRecord\StructType\Discount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Discount) && count($this->Discount) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Discount)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setDeposit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeposit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDepositForArrayConstraintsFromSetDeposit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruisePricingInfoDepositItem) {
            // validation for constraint: itemType
            if (!$cruisePricingInfoDepositItem instanceof \Travelport\UniversalRecord\StructType\Deposit) {
                $invalidValues[] = is_object($cruisePricingInfoDepositItem) ? get_class($cruisePricingInfoDepositItem) : sprintf('%s(%s)', gettype($cruisePricingInfoDepositItem), var_export($cruisePricingInfoDepositItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Deposit property can only contain items of type \Travelport\UniversalRecord\StructType\Deposit, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Deposit value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Deposit[] $deposit
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setDeposit(?array $deposit = null): self
    {
        // validation for constraint: array
        if ('' !== ($depositArrayErrorMessage = self::validateDepositForArrayConstraintsFromSetDeposit($deposit))) {
            throw new InvalidArgumentException($depositArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($deposit) && count($deposit) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($deposit)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Deposit) {
            throw new InvalidArgumentException(sprintf('The Deposit property can only contain items of type \Travelport\UniversalRecord\StructType\Deposit, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Deposit) && count($this->Deposit) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Deposit)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCruiseBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCruiseBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCruiseBookingTravelerRefForArrayConstraintsFromSetCruiseBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruisePricingInfoCruiseBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$cruisePricingInfoCruiseBookingTravelerRefItem instanceof \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef) {
                $invalidValues[] = is_object($cruisePricingInfoCruiseBookingTravelerRefItem) ? get_class($cruisePricingInfoCruiseBookingTravelerRefItem) : sprintf('%s(%s)', gettype($cruisePricingInfoCruiseBookingTravelerRefItem), var_export($cruisePricingInfoCruiseBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CruiseBookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CruiseBookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef[] $cruiseBookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\CruisePricingInfo
     */
    public function setCruiseBookingTravelerRef(?array $cruiseBookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($cruiseBookingTravelerRefArrayErrorMessage = self::validateCruiseBookingTravelerRefForArrayConstraintsFromSetCruiseBookingTravelerRef($cruiseBookingTravelerRef))) {
            throw new InvalidArgumentException($cruiseBookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($cruiseBookingTravelerRef) && count($cruiseBookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($cruiseBookingTravelerRef)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The CruiseBookingTravelerRef property can only contain items of type \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CruiseBookingTravelerRef) && count($this->CruiseBookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CruiseBookingTravelerRef)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($netFare) && !is_string($netFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netFare, true), gettype($netFare)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($receivedAmount) && !is_string($receivedAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedAmount, true), gettype($receivedAmount)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($equivalentBasePrice) && !is_string($equivalentBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBasePrice, true), gettype($equivalentBasePrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($services) && !is_string($services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($services, true), gettype($services)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($approximateTaxes) && !is_string($approximateTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTaxes, true), gettype($approximateTaxes)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($approximateFees) && !is_string($approximateFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateFees, true), gettype($approximateFees)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
