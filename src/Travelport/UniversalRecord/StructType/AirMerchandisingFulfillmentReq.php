<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingFulfillmentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: This will fulfill the merchandised items as specified in the request. The host PNR will be updated with the services and any required charges will be added.
 * @subpackage Structs
 */
class AirMerchandisingFulfillmentReq extends BaseReq
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    protected ?array $HostToken = null;
    /**
     * The HostReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: air_v51_0:HostReservation
     * @var \Travelport\UniversalRecord\StructType\HostReservation[]
     */
    protected ?array $HostReservation = null;
    /**
     * The AgencySellInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencySellInfo
     * @var \Travelport\UniversalRecord\StructType\AgencySellInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AgencySellInfo $AgencySellInfo = null;
    /**
     * The AirSolution
     * Meta information extracted from the WSDL
     * - ref: air_v51_0:AirSolution
     * @var \Travelport\UniversalRecord\StructType\AirSolution|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirSolution $AirSolution = null;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CreditCard
     * @var \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CreditCard $CreditCard = null;
    /**
     * The AgencyPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyPayment
     * @var \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $AgencyPayment = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: air_v51_0:OptionalServices
     * @var \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OptionalServices $OptionalServices = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v51_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    protected ?array $SpecificSeatAssignment = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The ConfirmationEmail
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,1J,ACH.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConfirmationEmail = null;
    /**
     * The MerchandisingPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: air_v51_0:MerchandisingPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $MerchandisingPricingModifiers = null;
    /**
     * Constructor method for AirMerchandisingFulfillmentReq
     * @uses AirMerchandisingFulfillmentReq::setHostToken()
     * @uses AirMerchandisingFulfillmentReq::setHostReservation()
     * @uses AirMerchandisingFulfillmentReq::setAgencySellInfo()
     * @uses AirMerchandisingFulfillmentReq::setAirSolution()
     * @uses AirMerchandisingFulfillmentReq::setCreditCard()
     * @uses AirMerchandisingFulfillmentReq::setAgencyPayment()
     * @uses AirMerchandisingFulfillmentReq::setOptionalServices()
     * @uses AirMerchandisingFulfillmentReq::setSpecificSeatAssignment()
     * @uses AirMerchandisingFulfillmentReq::setGeneralRemark()
     * @uses AirMerchandisingFulfillmentReq::setConfirmationEmail()
     * @uses AirMerchandisingFulfillmentReq::setMerchandisingPricingModifiers()
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @param \Travelport\UniversalRecord\StructType\HostReservation[] $hostReservation
     * @param \Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo
     * @param \Travelport\UniversalRecord\StructType\AirSolution $airSolution
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param string $confirmationEmail
     * @param \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     */
    public function __construct(?array $hostToken = null, ?array $hostReservation = null, ?\Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo = null, ?\Travelport\UniversalRecord\StructType\AirSolution $airSolution = null, ?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null, ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null, ?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null, ?array $specificSeatAssignment = null, ?array $generalRemark = null, ?string $confirmationEmail = null, ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null)
    {
        $this
            ->setHostToken($hostToken)
            ->setHostReservation($hostReservation)
            ->setAgencySellInfo($agencySellInfo)
            ->setAirSolution($airSolution)
            ->setCreditCard($creditCard)
            ->setAgencyPayment($agencyPayment)
            ->setOptionalServices($optionalServices)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setGeneralRemark($generalRemark)
            ->setConfirmationEmail($confirmationEmail)
            ->setMerchandisingPricingModifiers($merchandisingPricingModifiers);
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * This method is responsible for validating the values passed to the setHostToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostToken method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostTokenForArrayConstraintsFromSetHostToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airMerchandisingFulfillmentReqHostTokenItem) {
            // validation for constraint: itemType
            if (!$airMerchandisingFulfillmentReqHostTokenItem instanceof \Travelport\UniversalRecord\StructType\HostToken) {
                $invalidValues[] = is_object($airMerchandisingFulfillmentReqHostTokenItem) ? get_class($airMerchandisingFulfillmentReqHostTokenItem) : sprintf('%s(%s)', gettype($airMerchandisingFulfillmentReqHostTokenItem), var_export($airMerchandisingFulfillmentReqHostTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setHostToken(?array $hostToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostTokenArrayErrorMessage = self::validateHostTokenForArrayConstraintsFromSetHostToken($hostToken))) {
            throw new InvalidArgumentException($hostTokenArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostToken) && count($hostToken) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostToken)), __LINE__);
        }
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HostToken) {
            throw new InvalidArgumentException(sprintf('The HostToken property can only contain items of type \Travelport\UniversalRecord\StructType\HostToken, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostToken) && count($this->HostToken) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostToken)), __LINE__);
        }
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get HostReservation value
     * @return \Travelport\UniversalRecord\StructType\HostReservation[]
     */
    public function getHostReservation(): ?array
    {
        return $this->HostReservation;
    }
    /**
     * This method is responsible for validating the values passed to the setHostReservation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHostReservation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHostReservationForArrayConstraintsFromSetHostReservation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airMerchandisingFulfillmentReqHostReservationItem) {
            // validation for constraint: itemType
            if (!$airMerchandisingFulfillmentReqHostReservationItem instanceof \Travelport\UniversalRecord\StructType\HostReservation) {
                $invalidValues[] = is_object($airMerchandisingFulfillmentReqHostReservationItem) ? get_class($airMerchandisingFulfillmentReqHostReservationItem) : sprintf('%s(%s)', gettype($airMerchandisingFulfillmentReqHostReservationItem), var_export($airMerchandisingFulfillmentReqHostReservationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HostReservation property can only contain items of type \Travelport\UniversalRecord\StructType\HostReservation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HostReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostReservation[] $hostReservation
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setHostReservation(?array $hostReservation = null): self
    {
        // validation for constraint: array
        if ('' !== ($hostReservationArrayErrorMessage = self::validateHostReservationForArrayConstraintsFromSetHostReservation($hostReservation))) {
            throw new InvalidArgumentException($hostReservationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hostReservation) && count($hostReservation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hostReservation)), __LINE__);
        }
        $this->HostReservation = $hostReservation;
        
        return $this;
    }
    /**
     * Add item to HostReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostReservation $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToHostReservation(\Travelport\UniversalRecord\StructType\HostReservation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HostReservation) {
            throw new InvalidArgumentException(sprintf('The HostReservation property can only contain items of type \Travelport\UniversalRecord\StructType\HostReservation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HostReservation) && count($this->HostReservation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HostReservation)), __LINE__);
        }
        $this->HostReservation[] = $item;
        
        return $this;
    }
    /**
     * Get AgencySellInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo|null
     */
    public function getAgencySellInfo(): ?\Travelport\UniversalRecord\StructType\AgencySellInfo
    {
        return $this->AgencySellInfo;
    }
    /**
     * Set AgencySellInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAgencySellInfo(?\Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo = null): self
    {
        $this->AgencySellInfo = $agencySellInfo;
        
        return $this;
    }
    /**
     * Get AirSolution value
     * @return \Travelport\UniversalRecord\StructType\AirSolution|null
     */
    public function getAirSolution(): ?\Travelport\UniversalRecord\StructType\AirSolution
    {
        return $this->AirSolution;
    }
    /**
     * Set AirSolution value
     * @param \Travelport\UniversalRecord\StructType\AirSolution $airSolution
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAirSolution(?\Travelport\UniversalRecord\StructType\AirSolution $airSolution = null): self
    {
        $this->AirSolution = $airSolution;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\UniversalRecord\StructType\CreditCard
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setCreditCard(?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null): self
    {
        $this->CreditCard = $creditCard;
        
        return $this;
    }
    /**
     * Get AgencyPayment value
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    public function getAgencyPayment(): ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment
    {
        return $this->AgencyPayment;
    }
    /**
     * Set AgencyPayment value
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAgencyPayment(?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null): self
    {
        $this->AgencyPayment = $agencyPayment;
        
        return $this;
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\UniversalRecord\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setOptionalServices(?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get SpecificSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public function getSpecificSeatAssignment(): ?array
    {
        return $this->SpecificSeatAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setSpecificSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificSeatAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpecificSeatAssignmentForArrayConstraintsFromSetSpecificSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airMerchandisingFulfillmentReqSpecificSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$airMerchandisingFulfillmentReqSpecificSeatAssignmentItem instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
                $invalidValues[] = is_object($airMerchandisingFulfillmentReqSpecificSeatAssignmentItem) ? get_class($airMerchandisingFulfillmentReqSpecificSeatAssignmentItem) : sprintf('%s(%s)', gettype($airMerchandisingFulfillmentReqSpecificSeatAssignmentItem), var_export($airMerchandisingFulfillmentReqSpecificSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($specificSeatAssignmentArrayErrorMessage = self::validateSpecificSeatAssignmentForArrayConstraintsFromSetSpecificSeatAssignment($specificSeatAssignment))) {
            throw new InvalidArgumentException($specificSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($specificSeatAssignment) && count($specificSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($specificSeatAssignment)), __LINE__);
        }
        $this->SpecificSeatAssignment = $specificSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\SpecificSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The SpecificSeatAssignment property can only contain items of type \Travelport\UniversalRecord\StructType\SpecificSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SpecificSeatAssignment) && count($this->SpecificSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SpecificSeatAssignment)), __LINE__);
        }
        $this->SpecificSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airMerchandisingFulfillmentReqGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$airMerchandisingFulfillmentReqGeneralRemarkItem instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
                $invalidValues[] = is_object($airMerchandisingFulfillmentReqGeneralRemarkItem) ? get_class($airMerchandisingFulfillmentReqGeneralRemarkItem) : sprintf('%s(%s)', gettype($airMerchandisingFulfillmentReqGeneralRemarkItem), var_export($airMerchandisingFulfillmentReqGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
        }
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\UniversalRecord\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ConfirmationEmail value
     * @return string|null
     */
    public function getConfirmationEmail(): ?string
    {
        return $this->ConfirmationEmail;
    }
    /**
     * Set ConfirmationEmail value
     * @param string $confirmationEmail
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setConfirmationEmail(?string $confirmationEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationEmail) && !is_string($confirmationEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationEmail, true), gettype($confirmationEmail)), __LINE__);
        }
        $this->ConfirmationEmail = $confirmationEmail;
        
        return $this;
    }
    /**
     * Get MerchandisingPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers|null
     */
    public function getMerchandisingPricingModifiers(): ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers
    {
        return $this->MerchandisingPricingModifiers;
    }
    /**
     * Set MerchandisingPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setMerchandisingPricingModifiers(?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null): self
    {
        $this->MerchandisingPricingModifiers = $merchandisingPricingModifiers;
        
        return $this;
    }
}
