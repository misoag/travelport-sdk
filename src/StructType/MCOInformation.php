<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOInformation StructType
 * @subpackage Structs
 */
class MCOInformation extends AbstractStructBase
{
    /**
     * The PassengerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerInfo
     * @var \StructType\PassengerInfo[]
     */
    protected ?array $PassengerInfo = null;
    /**
     * The MCONumber
     * Meta information extracted from the WSDL
     * - documentation: The unique MCO number
     * - use: optional
     * @var string|null
     */
    protected ?string $MCONumber = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Current status of the MCO
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The MCOType
     * Meta information extracted from the WSDL
     * - documentation: The Type of MCO. Once of Agency Fee, Airline Service Fee, or Residual value from an Exchange.
     * - use: optional
     * @var string|null
     */
    protected ?string $MCOType = null;
    /**
     * Constructor method for MCOInformation
     * @uses MCOInformation::setPassengerInfo()
     * @uses MCOInformation::setMCONumber()
     * @uses MCOInformation::setStatus()
     * @uses MCOInformation::setMCOType()
     * @param \StructType\PassengerInfo[] $passengerInfo
     * @param string $mCONumber
     * @param string $status
     * @param string $mCOType
     */
    public function __construct(?array $passengerInfo = null, ?string $mCONumber = null, ?string $status = null, ?string $mCOType = null)
    {
        $this
            ->setPassengerInfo($passengerInfo)
            ->setMCONumber($mCONumber)
            ->setStatus($status)
            ->setMCOType($mCOType);
    }
    /**
     * Get PassengerInfo value
     * @return \StructType\PassengerInfo[]
     */
    public function getPassengerInfo(): ?array
    {
        return $this->PassengerInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerInfoForArrayConstraintsFromSetPassengerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOInformationPassengerInfoItem) {
            // validation for constraint: itemType
            if (!$mCOInformationPassengerInfoItem instanceof \StructType\PassengerInfo) {
                $invalidValues[] = is_object($mCOInformationPassengerInfoItem) ? get_class($mCOInformationPassengerInfoItem) : sprintf('%s(%s)', gettype($mCOInformationPassengerInfoItem), var_export($mCOInformationPassengerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerInfo property can only contain items of type \StructType\PassengerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerInfo value
     * @throws InvalidArgumentException
     * @param \StructType\PassengerInfo[] $passengerInfo
     * @return \StructType\MCOInformation
     */
    public function setPassengerInfo(?array $passengerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerInfoArrayErrorMessage = self::validatePassengerInfoForArrayConstraintsFromSetPassengerInfo($passengerInfo))) {
            throw new InvalidArgumentException($passengerInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerInfo) && count($passengerInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerInfo)), __LINE__);
        }
        $this->PassengerInfo = $passengerInfo;
        
        return $this;
    }
    /**
     * Add item to PassengerInfo value
     * @throws InvalidArgumentException
     * @param \StructType\PassengerInfo $item
     * @return \StructType\MCOInformation
     */
    public function addToPassengerInfo(\StructType\PassengerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PassengerInfo) {
            throw new InvalidArgumentException(sprintf('The PassengerInfo property can only contain items of type \StructType\PassengerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerInfo) && count($this->PassengerInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerInfo)), __LINE__);
        }
        $this->PassengerInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MCONumber value
     * @return string|null
     */
    public function getMCONumber(): ?string
    {
        return $this->MCONumber;
    }
    /**
     * Set MCONumber value
     * @param string $mCONumber
     * @return \StructType\MCOInformation
     */
    public function setMCONumber(?string $mCONumber = null): self
    {
        // validation for constraint: string
        if (!is_null($mCONumber) && !is_string($mCONumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCONumber, true), gettype($mCONumber)), __LINE__);
        }
        $this->MCONumber = $mCONumber;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\MCOInformation
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get MCOType value
     * @return string|null
     */
    public function getMCOType(): ?string
    {
        return $this->MCOType;
    }
    /**
     * Set MCOType value
     * @param string $mCOType
     * @return \StructType\MCOInformation
     */
    public function setMCOType(?string $mCOType = null): self
    {
        // validation for constraint: string
        if (!is_null($mCOType) && !is_string($mCOType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCOType, true), gettype($mCOType)), __LINE__);
        }
        $this->MCOType = $mCOType;
        
        return $this;
    }
}
