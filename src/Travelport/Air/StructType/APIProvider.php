<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $ProviderCode;
    /**
     * The TransactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TransactionType
     * @var \Travelport\Air\StructType\TransactionType|null
     */
    public ?\Travelport\Air\StructType\TransactionType $TransactionType = null;
    /**
     * The AvailablePseudoCityCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\AvailablePseudoCityCode[]
     */
    public ?array $AvailablePseudoCityCode = null;
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
    public ?string $SupplierCode = null;
    /**
     * The IATACode
     * Meta information extracted from the WSDL
     * - documentation: Agency IATA or ARC code, used as an ID with airlines. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * @var string|null
     */
    public ?string $IATACode = null;
    /**
     * Constructor method for APIProvider
     * @uses APIProvider::setProviderCode()
     * @uses APIProvider::setTransactionType()
     * @uses APIProvider::setAvailablePseudoCityCode()
     * @uses APIProvider::setSupplierCode()
     * @uses APIProvider::setIATACode()
     * @param string $providerCode
     * @param \Travelport\Air\StructType\TransactionType $transactionType
     * @param \Travelport\Air\StructType\AvailablePseudoCityCode[] $availablePseudoCityCode
     * @param string $supplierCode
     * @param string $iATACode
     */
    public function __construct(string $providerCode, ?\Travelport\Air\StructType\TransactionType $transactionType = null, ?array $availablePseudoCityCode = null, ?string $supplierCode = null, ?string $iATACode = null)
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
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get TransactionType value
     * @return \Travelport\Air\StructType\TransactionType|null
     */
    public function getTransactionType(): ?\Travelport\Air\StructType\TransactionType
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @param \Travelport\Air\StructType\TransactionType $transactionType
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function setTransactionType(?\Travelport\Air\StructType\TransactionType $transactionType = null): self
    {
        $this->TransactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get AvailablePseudoCityCode value
     * @return \Travelport\Air\StructType\AvailablePseudoCityCode[]
     */
    public function getAvailablePseudoCityCode(): ?array
    {
        return $this->AvailablePseudoCityCode;
    }
    /**
     * Set AvailablePseudoCityCode value
     * @param \Travelport\Air\StructType\AvailablePseudoCityCode[] $availablePseudoCityCode
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function setAvailablePseudoCityCode(?array $availablePseudoCityCode = null): self
    {
        $this->AvailablePseudoCityCode = $availablePseudoCityCode;
        
        return $this;
    }
    /**
     * Add item to AvailablePseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AvailablePseudoCityCode $item
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function addToAvailablePseudoCityCode(\Travelport\Air\StructType\AvailablePseudoCityCode $item): self
    {
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
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
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
     * @return \Travelport\Air\StructType\APIProvider
     */
    public function setIATACode(?string $iATACode = null): self
    {
        $this->IATACode = $iATACode;
        
        return $this;
    }
}
