<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Account Information required for File Finishing
 * @subpackage Structs
 */
class AccountInformation extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TypeStructuredAddress|null
     */
    protected ?\StructType\TypeStructuredAddress $Address = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The AccountName
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * Constructor method for AccountInformation
     * @uses AccountInformation::setAddress()
     * @uses AccountInformation::setPhoneNumber()
     * @uses AccountInformation::setAccountName()
     * @param \StructType\TypeStructuredAddress $address
     * @param \StructType\PhoneNumber[] $phoneNumber
     * @param string $accountName
     */
    public function __construct(?\StructType\TypeStructuredAddress $address = null, ?array $phoneNumber = null, ?string $accountName = null)
    {
        $this
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setAccountName($accountName);
    }
    /**
     * Get Address value
     * @return \StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \StructType\TypeStructuredAddress $address
     * @return \StructType\AccountInformation
     */
    public function setAddress(?\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \StructType\PhoneNumber[]
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
        foreach ($values as $accountInformationPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$accountInformationPhoneNumberItem instanceof \StructType\PhoneNumber) {
                $invalidValues[] = is_object($accountInformationPhoneNumberItem) ? get_class($accountInformationPhoneNumberItem) : sprintf('%s(%s)', gettype($accountInformationPhoneNumberItem), var_export($accountInformationPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \StructType\PhoneNumber[] $phoneNumber
     * @return \StructType\AccountInformation
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
     * @param \StructType\PhoneNumber $item
     * @return \StructType\AccountInformation
     */
    public function addToPhoneNumber(\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PhoneNumber)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\AccountInformation
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
        return $this;
    }
}
