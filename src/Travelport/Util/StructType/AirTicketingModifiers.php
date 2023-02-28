<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Provide Payment for FOP. Providers supported: Galileo, Apollo, Worldspan. | CreditCardAuth information to be used as ticketing modifier at the time of ticketing. Providers supported: Galileo, Apollo, Worldspan. | FormOfPayment
 * information to be used as ticketing modifier at the time of ticketing. Providers supported: Galileo, Apollo, Worldspan. | Allows an agency to add the commission to a new or different commission rate which will be applied at time of ticketing. The
 * commission Modifier allows the user specify how the commission change is to applied. Providers supported: Worldspan. | Allows an agency to add user defined ticketing endorsements in the ticket. Providers supported: Worldspan. | Allows an agency to
 * modify the tour code information during ticket issuance. Providers supported: Worldspan. | Modifiers used during ticketing
 * @subpackage Structs
 */
class AirTicketingModifiers extends AbstractStructBase
{
    /**
     * The DocumentModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentModifiers
     * @var \Travelport\Util\StructType\DocumentModifiers|null
     */
    protected ?\Travelport\Util\StructType\DocumentModifiers $DocumentModifiers = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    protected ?array $AirPricingInfoRef = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\Util\StructType\TourCode|null
     */
    protected ?\Travelport\Util\StructType\TourCode $TourCode = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\Util\StructType\TicketEndorsement[]
     */
    protected ?array $TicketEndorsement = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Util\StructType\Commission|null
     */
    protected ?\Travelport\Util\StructType\Commission $Commission = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\Util\StructType\CreditCardAuth[]
     */
    protected ?array $CreditCardAuth = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Util\StructType\Payment[]
     */
    protected ?array $Payment = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier used for this ticket | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The TicketedFareOverride
     * Meta information extracted from the WSDL
     * - documentation: It is a modifier to allow re-issuance of tickets for stored fares which are already ticketed. Providers supported are 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TicketedFareOverride = null;
    /**
     * The SuppressTaxAndFee
     * Meta information extracted from the WSDL
     * - documentation: Allow to suppress Taxand Fee in ticketing response.Providers supported: Worldspan.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SuppressTaxAndFee = null;
    /**
     * The NoComparisonSFQ
     * Meta information extracted from the WSDL
     * - documentation: 1P - Set to "true" to include the no comparison overide #NC to override the existing SFQ and issue the ticket. Only valid for AirTicketingReq, not valid for AirExchangeTicketingReq.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NoComparisonSFQ = null;
    /**
     * Constructor method for AirTicketingModifiers
     * @uses AirTicketingModifiers::setDocumentModifiers()
     * @uses AirTicketingModifiers::setAirPricingInfoRef()
     * @uses AirTicketingModifiers::setTourCode()
     * @uses AirTicketingModifiers::setTicketEndorsement()
     * @uses AirTicketingModifiers::setCommission()
     * @uses AirTicketingModifiers::setFormOfPayment()
     * @uses AirTicketingModifiers::setCreditCardAuth()
     * @uses AirTicketingModifiers::setPayment()
     * @uses AirTicketingModifiers::setPlatingCarrier()
     * @uses AirTicketingModifiers::setTicketedFareOverride()
     * @uses AirTicketingModifiers::setSuppressTaxAndFee()
     * @uses AirTicketingModifiers::setNoComparisonSFQ()
     * @param \Travelport\Util\StructType\DocumentModifiers $documentModifiers
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @param \Travelport\Util\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\Util\StructType\Commission $commission
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\Util\StructType\Payment[] $payment
     * @param string $platingCarrier
     * @param bool $ticketedFareOverride
     * @param bool $suppressTaxAndFee
     * @param bool $noComparisonSFQ
     */
    public function __construct(?\Travelport\Util\StructType\DocumentModifiers $documentModifiers = null, ?array $airPricingInfoRef = null, ?\Travelport\Util\StructType\TourCode $tourCode = null, ?array $ticketEndorsement = null, ?\Travelport\Util\StructType\Commission $commission = null, ?array $formOfPayment = null, ?array $creditCardAuth = null, ?array $payment = null, ?string $platingCarrier = null, ?bool $ticketedFareOverride = false, ?bool $suppressTaxAndFee = false, ?bool $noComparisonSFQ = false)
    {
        $this
            ->setDocumentModifiers($documentModifiers)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTourCode($tourCode)
            ->setTicketEndorsement($ticketEndorsement)
            ->setCommission($commission)
            ->setFormOfPayment($formOfPayment)
            ->setCreditCardAuth($creditCardAuth)
            ->setPayment($payment)
            ->setPlatingCarrier($platingCarrier)
            ->setTicketedFareOverride($ticketedFareOverride)
            ->setSuppressTaxAndFee($suppressTaxAndFee)
            ->setNoComparisonSFQ($noComparisonSFQ);
    }
    /**
     * Get DocumentModifiers value
     * @return \Travelport\Util\StructType\DocumentModifiers|null
     */
    public function getDocumentModifiers(): ?\Travelport\Util\StructType\DocumentModifiers
    {
        return $this->DocumentModifiers;
    }
    /**
     * Set DocumentModifiers value
     * @param \Travelport\Util\StructType\DocumentModifiers $documentModifiers
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setDocumentModifiers(?\Travelport\Util\StructType\DocumentModifiers $documentModifiers = null): self
    {
        $this->DocumentModifiers = $documentModifiers;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airTicketingModifiersAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$airTicketingModifiersAirPricingInfoRefItem instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($airTicketingModifiersAirPricingInfoRefItem) ? get_class($airTicketingModifiersAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($airTicketingModifiersAirPricingInfoRefItem), var_export($airTicketingModifiersAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef $item
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function addToAirPricingInfoRef(\Travelport\Util\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\Util\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\Util\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setTourCode(?\Travelport\Util\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Util\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketEndorsement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketEndorsementForArrayConstraintFromSetTicketEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airTicketingModifiersTicketEndorsementItem) {
            // validation for constraint: itemType
            if (!$airTicketingModifiersTicketEndorsementItem instanceof \Travelport\Util\StructType\TicketEndorsement) {
                $invalidValues[] = is_object($airTicketingModifiersTicketEndorsementItem) ? get_class($airTicketingModifiersTicketEndorsementItem) : sprintf('%s(%s)', gettype($airTicketingModifiersTicketEndorsementItem), var_export($airTicketingModifiersTicketEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketEndorsement property can only contain items of type \Travelport\Util\StructType\TicketEndorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketEndorsementArrayErrorMessage = self::validateTicketEndorsementForArrayConstraintFromSetTicketEndorsement($ticketEndorsement))) {
            throw new InvalidArgumentException($ticketEndorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($ticketEndorsement) && count($ticketEndorsement) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($ticketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketEndorsement $item
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function addToTicketEndorsement(\Travelport\Util\StructType\TicketEndorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketEndorsement) {
            throw new InvalidArgumentException(sprintf('The TicketEndorsement property can only contain items of type \Travelport\Util\StructType\TicketEndorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TicketEndorsement) && count($this->TicketEndorsement) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TicketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Util\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Util\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Util\StructType\Commission $commission
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setCommission(?\Travelport\Util\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airTicketingModifiersFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$airTicketingModifiersFormOfPaymentItem instanceof \Travelport\Util\StructType\FormOfPayment) {
                $invalidValues[] = is_object($airTicketingModifiersFormOfPaymentItem) ? get_class($airTicketingModifiersFormOfPaymentItem) : sprintf('%s(%s)', gettype($airTicketingModifiersFormOfPaymentItem), var_export($airTicketingModifiersFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $item
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function addToFormOfPayment(\Travelport\Util\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Util\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardAuth method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardAuthForArrayConstraintFromSetCreditCardAuth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airTicketingModifiersCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$airTicketingModifiersCreditCardAuthItem instanceof \Travelport\Util\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($airTicketingModifiersCreditCardAuthItem) ? get_class($airTicketingModifiersCreditCardAuthItem) : sprintf('%s(%s)', gettype($airTicketingModifiersCreditCardAuthItem), var_export($airTicketingModifiersCreditCardAuthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardAuthArrayErrorMessage = self::validateCreditCardAuthForArrayConstraintFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($creditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth $item
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function addToCreditCardAuth(\Travelport\Util\StructType\CreditCardAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CreditCardAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CreditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Util\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentForArrayConstraintFromSetPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airTicketingModifiersPaymentItem) {
            // validation for constraint: itemType
            if (!$airTicketingModifiersPaymentItem instanceof \Travelport\Util\StructType\Payment) {
                $invalidValues[] = is_object($airTicketingModifiersPaymentItem) ? get_class($airTicketingModifiersPaymentItem) : sprintf('%s(%s)', gettype($airTicketingModifiersPaymentItem), var_export($airTicketingModifiersPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payment property can only contain items of type \Travelport\Util\StructType\Payment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Payment[] $payment
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setPayment(?array $payment = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentArrayErrorMessage = self::validatePaymentForArrayConstraintFromSetPayment($payment))) {
            throw new InvalidArgumentException($paymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($payment) && count($payment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($payment)), __LINE__);
        }
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Payment $item
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function addToPayment(\Travelport\Util\StructType\Payment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Payment) {
            throw new InvalidArgumentException(sprintf('The Payment property can only contain items of type \Travelport\Util\StructType\Payment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Payment) && count($this->Payment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Payment)), __LINE__);
        }
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get TicketedFareOverride value
     * @return bool|null
     */
    public function getTicketedFareOverride(): ?bool
    {
        return $this->TicketedFareOverride;
    }
    /**
     * Set TicketedFareOverride value
     * @param bool $ticketedFareOverride
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setTicketedFareOverride(?bool $ticketedFareOverride = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ticketedFareOverride) && !is_bool($ticketedFareOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ticketedFareOverride, true), gettype($ticketedFareOverride)), __LINE__);
        }
        $this->TicketedFareOverride = $ticketedFareOverride;
        
        return $this;
    }
    /**
     * Get SuppressTaxAndFee value
     * @return bool|null
     */
    public function getSuppressTaxAndFee(): ?bool
    {
        return $this->SuppressTaxAndFee;
    }
    /**
     * Set SuppressTaxAndFee value
     * @param bool $suppressTaxAndFee
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setSuppressTaxAndFee(?bool $suppressTaxAndFee = false): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressTaxAndFee) && !is_bool($suppressTaxAndFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressTaxAndFee, true), gettype($suppressTaxAndFee)), __LINE__);
        }
        $this->SuppressTaxAndFee = $suppressTaxAndFee;
        
        return $this;
    }
    /**
     * Get NoComparisonSFQ value
     * @return bool|null
     */
    public function getNoComparisonSFQ(): ?bool
    {
        return $this->NoComparisonSFQ;
    }
    /**
     * Set NoComparisonSFQ value
     * @param bool $noComparisonSFQ
     * @return \Travelport\Util\StructType\AirTicketingModifiers
     */
    public function setNoComparisonSFQ(?bool $noComparisonSFQ = false): self
    {
        // validation for constraint: boolean
        if (!is_null($noComparisonSFQ) && !is_bool($noComparisonSFQ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noComparisonSFQ, true), gettype($noComparisonSFQ)), __LINE__);
        }
        $this->NoComparisonSFQ = $noComparisonSFQ;
        
        return $this;
    }
}
