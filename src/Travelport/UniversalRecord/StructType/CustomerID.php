<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerID StructType
 * Meta information extracted from the WSDL
 * - documentation: A provider reservation field used to store customer information. It may be used to identify reservations which will/will not be available for access.
 * @subpackage Structs
 */
class CustomerID extends TypeRemark
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for CustomerID
     * @uses CustomerID::setKey()
     * @param string $key
     */
    public function __construct(?string $key = null)
    {
        $this
            ->setKey($key);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\CustomerID
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
