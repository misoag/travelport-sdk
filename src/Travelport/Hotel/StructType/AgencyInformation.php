<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Agency Information required for File Finishing
 * @subpackage Structs
 */
class AgencyInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Email
     * @var \Travelport\Hotel\StructType\Email[]
     */
    protected ?array $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * Constructor method for AgencyInformation
     * @uses AgencyInformation::setAddress()
     * @uses AgencyInformation::setEmail()
     * @uses AgencyInformation::setPhoneNumber()
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param \Travelport\Hotel\StructType\Email[] $email
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     */
    public function __construct(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?array $email = null, ?array $phoneNumber = null)
    {
        $this
            ->setAddress($address)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get Address value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email[]
     */
    public function getEmail(): ?array
    {
        return $this->Email;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailForArrayConstraintsFromSetEmail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $agencyInformationEmailItem) {
            // validation for constraint: itemType
            if (!$agencyInformationEmailItem instanceof \Travelport\Hotel\StructType\Email) {
                $invalidValues[] = is_object($agencyInformationEmailItem) ? get_class($agencyInformationEmailItem) : sprintf('%s(%s)', gettype($agencyInformationEmailItem), var_export($agencyInformationEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email property can only contain items of type \Travelport\Hotel\StructType\Email, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Email[] $email
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setEmail(?array $email = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailArrayErrorMessage = self::validateEmailForArrayConstraintsFromSetEmail($email))) {
            throw new InvalidArgumentException($emailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($email) && count($email) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Email $item
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function addToEmail(\Travelport\Hotel\StructType\Email $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\Email) {
            throw new InvalidArgumentException(sprintf('The Email property can only contain items of type \Travelport\Hotel\StructType\Email, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Email) && count($this->Email) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Email)), __LINE__);
        }
        $this->Email[] = $item;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintsFromSetPhoneNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $agencyInformationPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$agencyInformationPhoneNumberItem instanceof \Travelport\Hotel\StructType\PhoneNumber) {
                $invalidValues[] = is_object($agencyInformationPhoneNumberItem) ? get_class($agencyInformationPhoneNumberItem) : sprintf('%s(%s)', gettype($agencyInformationPhoneNumberItem), var_export($agencyInformationPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($phoneNumber) && count($phoneNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber $item
     * @return \Travelport\Hotel\StructType\AgencyInformation
     */
    public function addToPhoneNumber(\Travelport\Hotel\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PhoneNumber)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
}
