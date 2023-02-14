<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentProvider StructType
 * Meta information extracted from the WSDL
 * - documentation: A content provider uniquely identified with its provider code and supplier code.If a given provider provides content for multiple suppliers, multiple elements will be returned for that provider.
 * @subpackage Structs
 */
class ContentProvider extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The host for the content (e.g.1G,1P,1S,1A,ACH,MCH).
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The AgencyCredentials
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $AgencyCredentials;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - documentation: Status of the given provider/supplier . If not currently active, a user cannot connect to the given provider/supplier.
     * - use: required
     * @var bool
     */
    protected bool $Active;
    /**
     * The Provisionable
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the given provider/supplier can be provisioned to an agency/branch/agent.
     * - use: required
     * @var bool
     */
    protected bool $Provisionable;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates the direct connect supplier (e.g. U2) when the provider is a hub (e.g. ACH).
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The MerchandisingACHAdapter
     * Meta information extracted from the WSDL
     * - documentation: ACH adapter for Merchandising ACH carrier.
     * @var string|null
     */
    protected ?string $MerchandisingACHAdapter = null;
    /**
     * The StaticDataCarrier
     * Meta information extracted from the WSDL
     * - documentation: Returns "true" if it is StaticDataCarrier otherwise "false". Default value is "false".
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $StaticDataCarrier = null;
    /**
     * The MerchandisingACHCarrier
     * Meta information extracted from the WSDL
     * - documentation: Returns "true" if it is MerchandisingACHCarrier otherwise "false". Default value is "false".
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MerchandisingACHCarrier = null;
    /**
     * The MerchandisingHubCarrier
     * Meta information extracted from the WSDL
     * - documentation: Returns "true" if it is MerchandisingHubCarrier otherwise "false". Default value is "false".
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MerchandisingHubCarrier = null;
    /**
     * The BookingRetrieve
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has booking retrieve capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingRetrieve = null;
    /**
     * The SegmentModify
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has booking segment modify capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentModify = null;
    /**
     * The OptionalServicesModify
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has booking optional service modify capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $OptionalServicesModify = null;
    /**
     * The TravelerInfoModify
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has traveler information modify capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerInfoModify = null;
    /**
     * The AdditionalPayment
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has additional payment capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $AdditionalPayment = null;
    /**
     * The BookingCancel
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has booking cancel capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingCancel = null;
    /**
     * The SeatMap
     * Meta information extracted from the WSDL
     * - documentation: Indication if a Provider and/or Supplier has SeatMap capability.
     * - default: Yes
     * - type: typeProviderSupplierCapabilityType
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatMap = null;
    /**
     * Constructor method for ContentProvider
     * @uses ContentProvider::setProviderCode()
     * @uses ContentProvider::setAgencyCredentials()
     * @uses ContentProvider::setActive()
     * @uses ContentProvider::setProvisionable()
     * @uses ContentProvider::setSupplierCode()
     * @uses ContentProvider::setMerchandisingACHAdapter()
     * @uses ContentProvider::setStaticDataCarrier()
     * @uses ContentProvider::setMerchandisingACHCarrier()
     * @uses ContentProvider::setMerchandisingHubCarrier()
     * @uses ContentProvider::setBookingRetrieve()
     * @uses ContentProvider::setSegmentModify()
     * @uses ContentProvider::setOptionalServicesModify()
     * @uses ContentProvider::setTravelerInfoModify()
     * @uses ContentProvider::setAdditionalPayment()
     * @uses ContentProvider::setBookingCancel()
     * @uses ContentProvider::setSeatMap()
     * @param string $providerCode
     * @param string $agencyCredentials
     * @param bool $active
     * @param bool $provisionable
     * @param string $supplierCode
     * @param string $merchandisingACHAdapter
     * @param bool $staticDataCarrier
     * @param bool $merchandisingACHCarrier
     * @param bool $merchandisingHubCarrier
     * @param string $bookingRetrieve
     * @param string $segmentModify
     * @param string $optionalServicesModify
     * @param string $travelerInfoModify
     * @param string $additionalPayment
     * @param string $bookingCancel
     * @param string $seatMap
     */
    public function __construct(string $providerCode, string $agencyCredentials, bool $active, bool $provisionable, ?string $supplierCode = null, ?string $merchandisingACHAdapter = null, ?bool $staticDataCarrier = false, ?bool $merchandisingACHCarrier = false, ?bool $merchandisingHubCarrier = false, ?string $bookingRetrieve = null, ?string $segmentModify = null, ?string $optionalServicesModify = null, ?string $travelerInfoModify = null, ?string $additionalPayment = null, ?string $bookingCancel = null, ?string $seatMap = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setAgencyCredentials($agencyCredentials)
            ->setActive($active)
            ->setProvisionable($provisionable)
            ->setSupplierCode($supplierCode)
            ->setMerchandisingACHAdapter($merchandisingACHAdapter)
            ->setStaticDataCarrier($staticDataCarrier)
            ->setMerchandisingACHCarrier($merchandisingACHCarrier)
            ->setMerchandisingHubCarrier($merchandisingHubCarrier)
            ->setBookingRetrieve($bookingRetrieve)
            ->setSegmentModify($segmentModify)
            ->setOptionalServicesModify($optionalServicesModify)
            ->setTravelerInfoModify($travelerInfoModify)
            ->setAdditionalPayment($additionalPayment)
            ->setBookingCancel($bookingCancel)
            ->setSeatMap($seatMap);
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
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get AgencyCredentials value
     * @return string
     */
    public function getAgencyCredentials(): string
    {
        return $this->AgencyCredentials;
    }
    /**
     * Set AgencyCredentials value
     * @param string $agencyCredentials
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setAgencyCredentials(string $agencyCredentials): self
    {
        // validation for constraint: string
        if (!is_null($agencyCredentials) && !is_string($agencyCredentials)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCredentials, true), gettype($agencyCredentials)), __LINE__);
        }
        $this->AgencyCredentials = $agencyCredentials;
        
        return $this;
    }
    /**
     * Get Active value
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setActive(bool $active): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        
        return $this;
    }
    /**
     * Get Provisionable value
     * @return bool
     */
    public function getProvisionable(): bool
    {
        return $this->Provisionable;
    }
    /**
     * Set Provisionable value
     * @param bool $provisionable
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setProvisionable(bool $provisionable): self
    {
        // validation for constraint: boolean
        if (!is_null($provisionable) && !is_bool($provisionable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($provisionable, true), gettype($provisionable)), __LINE__);
        }
        $this->Provisionable = $provisionable;
        
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
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get MerchandisingACHAdapter value
     * @return string|null
     */
    public function getMerchandisingACHAdapter(): ?string
    {
        return $this->MerchandisingACHAdapter;
    }
    /**
     * Set MerchandisingACHAdapter value
     * @param string $merchandisingACHAdapter
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setMerchandisingACHAdapter(?string $merchandisingACHAdapter = null): self
    {
        // validation for constraint: string
        if (!is_null($merchandisingACHAdapter) && !is_string($merchandisingACHAdapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchandisingACHAdapter, true), gettype($merchandisingACHAdapter)), __LINE__);
        }
        $this->MerchandisingACHAdapter = $merchandisingACHAdapter;
        
        return $this;
    }
    /**
     * Get StaticDataCarrier value
     * @return bool|null
     */
    public function getStaticDataCarrier(): ?bool
    {
        return $this->StaticDataCarrier;
    }
    /**
     * Set StaticDataCarrier value
     * @param bool $staticDataCarrier
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setStaticDataCarrier(?bool $staticDataCarrier = false): self
    {
        // validation for constraint: boolean
        if (!is_null($staticDataCarrier) && !is_bool($staticDataCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($staticDataCarrier, true), gettype($staticDataCarrier)), __LINE__);
        }
        $this->StaticDataCarrier = $staticDataCarrier;
        
        return $this;
    }
    /**
     * Get MerchandisingACHCarrier value
     * @return bool|null
     */
    public function getMerchandisingACHCarrier(): ?bool
    {
        return $this->MerchandisingACHCarrier;
    }
    /**
     * Set MerchandisingACHCarrier value
     * @param bool $merchandisingACHCarrier
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setMerchandisingACHCarrier(?bool $merchandisingACHCarrier = false): self
    {
        // validation for constraint: boolean
        if (!is_null($merchandisingACHCarrier) && !is_bool($merchandisingACHCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($merchandisingACHCarrier, true), gettype($merchandisingACHCarrier)), __LINE__);
        }
        $this->MerchandisingACHCarrier = $merchandisingACHCarrier;
        
        return $this;
    }
    /**
     * Get MerchandisingHubCarrier value
     * @return bool|null
     */
    public function getMerchandisingHubCarrier(): ?bool
    {
        return $this->MerchandisingHubCarrier;
    }
    /**
     * Set MerchandisingHubCarrier value
     * @param bool $merchandisingHubCarrier
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setMerchandisingHubCarrier(?bool $merchandisingHubCarrier = false): self
    {
        // validation for constraint: boolean
        if (!is_null($merchandisingHubCarrier) && !is_bool($merchandisingHubCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($merchandisingHubCarrier, true), gettype($merchandisingHubCarrier)), __LINE__);
        }
        $this->MerchandisingHubCarrier = $merchandisingHubCarrier;
        
        return $this;
    }
    /**
     * Get BookingRetrieve value
     * @return string|null
     */
    public function getBookingRetrieve(): ?string
    {
        return $this->BookingRetrieve;
    }
    /**
     * Set BookingRetrieve value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bookingRetrieve
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setBookingRetrieve(?string $bookingRetrieve = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($bookingRetrieve)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($bookingRetrieve) ? implode(', ', $bookingRetrieve) : var_export($bookingRetrieve, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->BookingRetrieve = $bookingRetrieve;
        
        return $this;
    }
    /**
     * Get SegmentModify value
     * @return string|null
     */
    public function getSegmentModify(): ?string
    {
        return $this->SegmentModify;
    }
    /**
     * Set SegmentModify value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $segmentModify
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setSegmentModify(?string $segmentModify = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($segmentModify)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($segmentModify) ? implode(', ', $segmentModify) : var_export($segmentModify, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->SegmentModify = $segmentModify;
        
        return $this;
    }
    /**
     * Get OptionalServicesModify value
     * @return string|null
     */
    public function getOptionalServicesModify(): ?string
    {
        return $this->OptionalServicesModify;
    }
    /**
     * Set OptionalServicesModify value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $optionalServicesModify
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setOptionalServicesModify(?string $optionalServicesModify = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($optionalServicesModify)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($optionalServicesModify) ? implode(', ', $optionalServicesModify) : var_export($optionalServicesModify, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->OptionalServicesModify = $optionalServicesModify;
        
        return $this;
    }
    /**
     * Get TravelerInfoModify value
     * @return string|null
     */
    public function getTravelerInfoModify(): ?string
    {
        return $this->TravelerInfoModify;
    }
    /**
     * Set TravelerInfoModify value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $travelerInfoModify
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setTravelerInfoModify(?string $travelerInfoModify = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($travelerInfoModify)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($travelerInfoModify) ? implode(', ', $travelerInfoModify) : var_export($travelerInfoModify, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->TravelerInfoModify = $travelerInfoModify;
        
        return $this;
    }
    /**
     * Get AdditionalPayment value
     * @return string|null
     */
    public function getAdditionalPayment(): ?string
    {
        return $this->AdditionalPayment;
    }
    /**
     * Set AdditionalPayment value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $additionalPayment
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setAdditionalPayment(?string $additionalPayment = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($additionalPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($additionalPayment) ? implode(', ', $additionalPayment) : var_export($additionalPayment, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->AdditionalPayment = $additionalPayment;
        
        return $this;
    }
    /**
     * Get BookingCancel value
     * @return string|null
     */
    public function getBookingCancel(): ?string
    {
        return $this->BookingCancel;
    }
    /**
     * Set BookingCancel value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bookingCancel
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setBookingCancel(?string $bookingCancel = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($bookingCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($bookingCancel) ? implode(', ', $bookingCancel) : var_export($bookingCancel, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->BookingCancel = $bookingCancel;
        
        return $this;
    }
    /**
     * Get SeatMap value
     * @return string|null
     */
    public function getSeatMap(): ?string
    {
        return $this->SeatMap;
    }
    /**
     * Set SeatMap value
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $seatMap
     * @return \Travelport\Util\StructType\ContentProvider
     */
    public function setSeatMap(?string $seatMap = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::valueIsValid($seatMap)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType', is_array($seatMap) ? implode(', ', $seatMap) : var_export($seatMap, true), implode(', ', \Travelport\Util\EnumType\TypeProviderSupplierCapabilityType::getValidValues())), __LINE__);
        }
        $this->SeatMap = $seatMap;
        
        return $this;
    }
}
