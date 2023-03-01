<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeUnstructuredAddress StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple unstructured address (e.g. 123 South State Avenue, Chicago, IL 60612)
 * @subpackage Structs
 */
class TypeUnstructuredAddress extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 6
     * - minLength: 0
     * - minOccurs: 0
     * - type: typeStructuredAddress
     * @var string[]
     */
    public ?array $Address = null;
    /**
     * Constructor method for typeUnstructuredAddress
     * @uses TypeUnstructuredAddress::setAddress()
     * @param string[] $address
     */
    public function __construct(?array $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return string[]
     */
    public function getAddress(): ?array
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string[] $address
     * @return \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress
     */
    public function setAddress(?array $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Add item to Address value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypeUnstructuredAddress
     */
    public function addToAddress(string $item): self
    {
        $this->Address[] = $item;
        
        return $this;
    }
}
