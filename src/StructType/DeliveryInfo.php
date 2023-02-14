<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\ShippingAddress|null
     */
    protected ?\StructType\ShippingAddress $ShippingAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \StructType\PhoneNumber|null
     */
    protected ?\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Email
     * @var \StructType\Email|null
     */
    protected ?\StructType\Email $Email = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \StructType\ProviderReservationInfoRef[]
     */
    protected ?array $ProviderReservationInfoRef = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: An arbitrary identifier to categorize this delivery info
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The SignatureRequired
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $SignatureRequired = null;
    /**
     * The TrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: The tracking number of the shipping company making the delivery.
     * - use: optional
     * @var string|null
     */
    protected ?string $TrackingNumber = null;
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
     * @param \StructType\ShippingAddress $shippingAddress
     * @param \StructType\PhoneNumber $phoneNumber
     * @param \StructType\Email $email
     * @param \StructType\GeneralRemark[] $generalRemark
     * @param \StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $type
     * @param string $signatureRequired
     * @param string $trackingNumber
     */
    public function __construct(?\StructType\ShippingAddress $shippingAddress = null, ?\StructType\PhoneNumber $phoneNumber = null, ?\StructType\Email $email = null, ?array $generalRemark = null, ?array $providerReservationInfoRef = null, ?string $type = null, ?string $signatureRequired = null, ?string $trackingNumber = null)
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
     * @return \StructType\ShippingAddress|null
     */
    public function getShippingAddress(): ?\StructType\ShippingAddress
    {
        return $this->ShippingAddress;
    }
    /**
     * Set ShippingAddress value
     * @param \StructType\ShippingAddress $shippingAddress
     * @return \StructType\DeliveryInfo
     */
    public function setShippingAddress(?\StructType\ShippingAddress $shippingAddress = null): self
    {
        $this->ShippingAddress = $shippingAddress;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \StructType\PhoneNumber $phoneNumber
     * @return \StructType\DeliveryInfo
     */
    public function setPhoneNumber(?\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \StructType\Email|null
     */
    public function getEmail(): ?\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \StructType\Email $email
     * @return \StructType\DeliveryInfo
     */
    public function setEmail(?\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \StructType\GeneralRemark[]
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
        foreach ($values as $deliveryInfoGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$deliveryInfoGeneralRemarkItem instanceof \StructType\GeneralRemark) {
                $invalidValues[] = is_object($deliveryInfoGeneralRemarkItem) ? get_class($deliveryInfoGeneralRemarkItem) : sprintf('%s(%s)', gettype($deliveryInfoGeneralRemarkItem), var_export($deliveryInfoGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \StructType\GeneralRemark[] $generalRemark
     * @return \StructType\DeliveryInfo
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
     * @param \StructType\GeneralRemark $item
     * @return \StructType\DeliveryInfo
     */
    public function addToGeneralRemark(\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setProviderReservationInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deliveryInfoProviderReservationInfoRefItem) {
            // validation for constraint: itemType
            if (!$deliveryInfoProviderReservationInfoRefItem instanceof \StructType\ProviderReservationInfoRef) {
                $invalidValues[] = is_object($deliveryInfoProviderReservationInfoRefItem) ? get_class($deliveryInfoProviderReservationInfoRefItem) : sprintf('%s(%s)', gettype($deliveryInfoProviderReservationInfoRefItem), var_export($deliveryInfoProviderReservationInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationInfoRef property can only contain items of type \StructType\ProviderReservationInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \StructType\DeliveryInfo
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationInfoRefArrayErrorMessage = self::validateProviderReservationInfoRefForArrayConstraintsFromSetProviderReservationInfoRef($providerReservationInfoRef))) {
            throw new InvalidArgumentException($providerReservationInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationInfoRef) && count($providerReservationInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \StructType\ProviderReservationInfoRef $item
     * @return \StructType\DeliveryInfo
     */
    public function addToProviderReservationInfoRef(\StructType\ProviderReservationInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProviderReservationInfoRef) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationInfoRef property can only contain items of type \StructType\ProviderReservationInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationInfoRef) && count($this->ProviderReservationInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationInfoRef)), __LINE__);
        }
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
     * @return \StructType\DeliveryInfo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * @return \StructType\DeliveryInfo
     */
    public function setSignatureRequired(?string $signatureRequired = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureRequired) && !is_string($signatureRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureRequired, true), gettype($signatureRequired)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($signatureRequired) && mb_strlen((string) $signatureRequired) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $signatureRequired)), __LINE__);
        }
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
     * @return \StructType\DeliveryInfo
     */
    public function setTrackingNumber(?string $trackingNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingNumber, true), gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        
        return $this;
    }
}