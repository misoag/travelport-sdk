<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctCount StructType
 * Meta information extracted from the WSDL
 * - documentation: The count of MCT exceptions for the given search criteria
 * @subpackage Structs
 */
class MctCount extends AbstractStructBase
{
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Connection;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Count;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * Constructor method for MctCount
     * @uses MctCount::setConnection()
     * @uses MctCount::setCount()
     * @uses MctCount::setCarrier()
     * @param string $connection
     * @param int $count
     * @param string $carrier
     */
    public function __construct(string $connection, int $count, ?string $carrier = null)
    {
        $this
            ->setConnection($connection)
            ->setCount($count)
            ->setCarrier($carrier);
    }
    /**
     * Get Connection value
     * @return string
     */
    public function getConnection(): string
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @uses \Travelport\Util\EnumType\TypeMctConnection::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMctConnection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connection
     * @return \Travelport\Util\StructType\MctCount
     */
    public function setConnection(string $connection): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMctConnection::valueIsValid($connection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMctConnection', is_array($connection) ? implode(', ', $connection) : var_export($connection, true), implode(', ', \Travelport\Util\EnumType\TypeMctConnection::getValidValues())), __LINE__);
        }
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int
     */
    public function getCount(): int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Travelport\Util\StructType\MctCount
     */
    public function setCount(int $count): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Util\StructType\MctCount
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
}
