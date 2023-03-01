<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with Delivery Info. | Container to encapsulate all delivery related information
 * @subpackage Structs
 */
class DeliveryInfo extends AbstractStructBase
{
    /**
     * The ShippingAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ShippingAddress|null
     */
    public ?\Travelport\Hotel\StructType\ShippingAddress $ShippingAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Email
     * @var \Travelport\Hotel\StructType\Email|null
     */
    public ?\Travelport\Hotel\StructType\Email $Email = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \Travelport\Hotel\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: An arbitrary identifier to categorize this delivery info
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The SignatureRequired
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $SignatureRequired = null;
    /**
     * The TrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: The tracking number of the shipping company making the delivery.
     * - use: optional
     * @var string|null
     */
    public ?string $TrackingNumber = null;
    /**
     * Constructor method for DeliveryInfo
     * @uses DeliveryInfo::setShippingAddress()
     * @uses DeliveryInfo::setPhoneNumber()
     * @uses DeliveryInfo::setEmail()
     * @uses DeliveryInfo::setGeneralRemark()
     * @uses DeliveryInfo::setProviderReservationInfoRef()
     * @uses DeliveryInfo::setType()
     * @uses DeliveryInfo::setSignatureRequired()
     * @uses DeliveryInfo::setTrackingNumber()
     * @param \Travelport\Hotel\StructType\ShippingAddress $shippingAddress
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Hotel\StructType\Email $email
     * @param \Travelport\Hotel\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $type
     * @param string $signatureRequired
     * @param string $trackingNumber
     */
    public function __construct(?\Travelport\Hotel\StructType\ShippingAddress $shippingAddress = null, ?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\Email $email = null, ?array $generalRemark = null, ?array $providerReservationInfoRef = null, ?string $type = null, ?string $signatureRequired = null, ?string $trackingNumber = null)
    {
        $this
            ->setShippingAddress($shippingAddress)
            ->setPhoneNumber($phoneNumber)
            ->setEmail($email)
            ->setGeneralRemark($generalRemark)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setType($type)
            ->setSignatureRequired($signatureRequired)
            ->setTrackingNumber($trackingNumber);
    }
    /**
     * Get ShippingAddress value
     * @return \Travelport\Hotel\StructType\ShippingAddress|null
     */
    public function getShippingAddress(): ?\Travelport\Hotel\StructType\ShippingAddress
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \Travelport\Hotel\StructType\ShippingAddress $shippingAddress
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setShippingAddress(?\Travelport\Hotel\StructType\ShippingAddress $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Hotel\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Hotel\StructType\Email $email
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setEmail(?\Travelport\Hotel\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\Hotel\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * Set GeneralRemark value
     * @param \Travelport\Hotel\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\GeneralRemark $item
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function addToGeneralRemark(\Travelport\Hotel\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Hotel\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function addToProviderReservationInfoRef(\Travelport\Hotel\StructType\ProviderReservationInfoRef $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get SignatureRequired value
     * @return string|null
     */
    public function getSignatureRequired(): ?string
    {
        return $this->SignatureRequired;
    }
    /**
     * Set SignatureRequired value
     * @param string $signatureRequired
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setSignatureRequired(?string $signatureRequired = null): self
    {
        $this->SignatureRequired = $signatureRequired;
        
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \Travelport\Hotel\StructType\DeliveryInfo
     */
    public function setTrackingNumber(?string $trackingNumber = null): self
    {
        $this->TrackingNumber = $trackingNumber;
        
        return $this;
    }
}
