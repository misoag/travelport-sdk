<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APIProvider StructType
 * @subpackage Structs
 */
class APIProvider extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The Provider Code of the host | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The TransactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TransactionType
     * @var \StructType\TransactionType|null
     */
    protected ?\StructType\TransactionType $TransactionType = null;
    /**
     * The AvailablePseudoCityCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \StructType\AvailablePseudoCityCode[]
     */
    protected ?array $AvailablePseudoCityCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: The Supplier Code of the host | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The IATACode
     * Meta information extracted from the WSDL
     * - documentation: Agency IATA or ARC code, used as an ID with airlines. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * @var string|null
     */
    protected ?string $IATACode = null;
    /**
     * Constructor method for APIProvider
     * @uses APIProvider::setProviderCode()
     * @uses APIProvider::setTransactionType()
     * @uses APIProvider::setAvailablePseudoCityCode()
     * @uses APIProvider::setSupplierCode()
     * @uses APIProvider::setIATACode()
     * @param string $providerCode
     * @param \StructType\TransactionType $transactionType
     * @param \StructType\AvailablePseudoCityCode[] $availablePseudoCityCode
     * @param string $supplierCode
     * @param string $iATACode
     */
    public function __construct(string $providerCode, ?\StructType\TransactionType $transactionType = null, ?array $availablePseudoCityCode = null, ?string $supplierCode = null, ?string $iATACode = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->setTransactionType($transactionType)
            ->setAvailablePseudoCityCode($availablePseudoCityCode)
            ->setSupplierCode($supplierCode)
            ->setIATACode($iATACode);
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
     * @return \StructType\APIProvider
     */
    public function setProviderCode(string $providerCode): self
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
     * Get TransactionType value
     * @return \StructType\TransactionType|null
     */
    public function getTransactionType(): ?\StructType\TransactionType
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @param \StructType\TransactionType $transactionType
     * @return \StructType\APIProvider
     */
    public function setTransactionType(?\StructType\TransactionType $transactionType = null): self
    {
        $this->TransactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get AvailablePseudoCityCode value
     * @return \StructType\AvailablePseudoCityCode[]
     */
    public function getAvailablePseudoCityCode(): ?array
    {
        return $this->AvailablePseudoCityCode;
    }
    /**
     * This method is responsible for validating the values passed to the setAvailablePseudoCityCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvailablePseudoCityCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvailablePseudoCityCodeForArrayConstraintsFromSetAvailablePseudoCityCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $aPIProviderAvailablePseudoCityCodeItem) {
            // validation for constraint: itemType
            if (!$aPIProviderAvailablePseudoCityCodeItem instanceof \StructType\AvailablePseudoCityCode) {
                $invalidValues[] = is_object($aPIProviderAvailablePseudoCityCodeItem) ? get_class($aPIProviderAvailablePseudoCityCodeItem) : sprintf('%s(%s)', gettype($aPIProviderAvailablePseudoCityCodeItem), var_export($aPIProviderAvailablePseudoCityCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AvailablePseudoCityCode property can only contain items of type \StructType\AvailablePseudoCityCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AvailablePseudoCityCode value
     * @throws InvalidArgumentException
     * @param \StructType\AvailablePseudoCityCode[] $availablePseudoCityCode
     * @return \StructType\APIProvider
     */
    public function setAvailablePseudoCityCode(?array $availablePseudoCityCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($availablePseudoCityCodeArrayErrorMessage = self::validateAvailablePseudoCityCodeForArrayConstraintsFromSetAvailablePseudoCityCode($availablePseudoCityCode))) {
            throw new InvalidArgumentException($availablePseudoCityCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($availablePseudoCityCode) && count($availablePseudoCityCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($availablePseudoCityCode)), __LINE__);
        }
        $this->AvailablePseudoCityCode = $availablePseudoCityCode;
        
        return $this;
    }
    /**
     * Add item to AvailablePseudoCityCode value
     * @throws InvalidArgumentException
     * @param \StructType\AvailablePseudoCityCode $item
     * @return \StructType\APIProvider
     */
    public function addToAvailablePseudoCityCode(\StructType\AvailablePseudoCityCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AvailablePseudoCityCode) {
            throw new InvalidArgumentException(sprintf('The AvailablePseudoCityCode property can only contain items of type \StructType\AvailablePseudoCityCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AvailablePseudoCityCode) && count($this->AvailablePseudoCityCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AvailablePseudoCityCode)), __LINE__);
        }
        $this->AvailablePseudoCityCode[] = $item;
        
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
     * @return \StructType\APIProvider
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
    /**
     * Get IATACode value
     * @return string|null
     */
    public function getIATACode(): ?string
    {
        return $this->IATACode;
    }
    /**
     * Set IATACode value
     * @param string $iATACode
     * @return \StructType\APIProvider
     */
    public function setIATACode(?string $iATACode = null): self
    {
        // validation for constraint: string
        if (!is_null($iATACode) && !is_string($iATACode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATACode, true), gettype($iATACode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($iATACode) && mb_strlen((string) $iATACode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $iATACode)), __LINE__);
        }
        $this->IATACode = $iATACode;
        
        return $this;
    }
}
