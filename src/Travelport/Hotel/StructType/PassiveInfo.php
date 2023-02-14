<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Used by CreateReservationReq for passing in elements normally found post-booking
 * @subpackage Structs
 */
class PassiveInfo extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TicketNumber = null;
    /**
     * The ConfirmationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ConfirmationNumber = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Commission
     * @var \Travelport\Hotel\StructType\Commission|null
     */
    protected ?\Travelport\Hotel\StructType\Commission $Commission = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierLocatorCode = null;
    /**
     * Constructor method for PassiveInfo
     * @uses PassiveInfo::setTicketNumber()
     * @uses PassiveInfo::setConfirmationNumber()
     * @uses PassiveInfo::setCommission()
     * @uses PassiveInfo::setProviderCode()
     * @uses PassiveInfo::setProviderLocatorCode()
     * @uses PassiveInfo::setSupplierCode()
     * @uses PassiveInfo::setSupplierLocatorCode()
     * @param string[] $ticketNumber
     * @param string[] $confirmationNumber
     * @param \Travelport\Hotel\StructType\Commission $commission
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     */
    public function __construct(?array $ticketNumber = null, ?array $confirmationNumber = null, ?\Travelport\Hotel\StructType\Commission $commission = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null, ?string $supplierLocatorCode = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setConfirmationNumber($confirmationNumber)
            ->setCommission($commission)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode);
    }
    /**
     * Get TicketNumber value
     * @return string[]
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketNumberForArrayConstraintsFromSetTicketNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveInfoTicketNumberItem) {
            // validation for constraint: itemType
            if (!is_string($passiveInfoTicketNumberItem)) {
                $invalidValues[] = is_object($passiveInfoTicketNumberItem) ? get_class($passiveInfoTicketNumberItem) : sprintf('%s(%s)', gettype($passiveInfoTicketNumberItem), var_export($passiveInfoTicketNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketNumber value
     * @throws InvalidArgumentException
     * @param string[] $ticketNumber
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketNumberArrayErrorMessage = self::validateTicketNumberForArrayConstraintsFromSetTicketNumber($ticketNumber))) {
            throw new InvalidArgumentException($ticketNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketNumber) && count($ticketNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function addToTicketNumber(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The TicketNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketNumber) && count($this->TicketNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketNumber)), __LINE__);
        }
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string[]
     */
    public function getConfirmationNumber(): ?array
    {
        return $this->ConfirmationNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setConfirmationNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConfirmationNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConfirmationNumberForArrayConstraintsFromSetConfirmationNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passiveInfoConfirmationNumberItem) {
            // validation for constraint: itemType
            if (!is_string($passiveInfoConfirmationNumberItem)) {
                $invalidValues[] = is_object($passiveInfoConfirmationNumberItem) ? get_class($passiveInfoConfirmationNumberItem) : sprintf('%s(%s)', gettype($passiveInfoConfirmationNumberItem), var_export($passiveInfoConfirmationNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConfirmationNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConfirmationNumber value
     * @throws InvalidArgumentException
     * @param string[] $confirmationNumber
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setConfirmationNumber(?array $confirmationNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($confirmationNumberArrayErrorMessage = self::validateConfirmationNumberForArrayConstraintsFromSetConfirmationNumber($confirmationNumber))) {
            throw new InvalidArgumentException($confirmationNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($confirmationNumber) && count($confirmationNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        
        return $this;
    }
    /**
     * Add item to ConfirmationNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function addToConfirmationNumber(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ConfirmationNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ConfirmationNumber) && count($this->ConfirmationNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ConfirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Hotel\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Hotel\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Hotel\StructType\Commission $commission
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setCommission(?\Travelport\Hotel\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
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
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\Hotel\StructType\PassiveInfo
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
     * Get SupplierLocatorCode value
     * @return string|null
     */
    public function getSupplierLocatorCode(): ?string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\Hotel\StructType\PassiveInfo
     */
    public function setSupplierLocatorCode(?string $supplierLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierLocatorCode) && !is_string($supplierLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierLocatorCode, true), gettype($supplierLocatorCode)), __LINE__);
        }
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
}
