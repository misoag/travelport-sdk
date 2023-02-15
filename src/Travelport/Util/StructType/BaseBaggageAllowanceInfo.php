<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseBaggageAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Text information as published by carrier. | Contains the text and URL information as published by carrier. | This contains common elements that are used for Baggage Allowance info, carry-on allowance info and embargo Info. Supported
 * providers are 1V/1G/1P/1J
 * @subpackage Structs
 */
class BaseBaggageAllowanceInfo extends AbstractStructBase
{
    /**
     * The URLInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: URLInfo
     * @var \Travelport\Util\StructType\URLInfo[]
     */
    protected ?array $URLInfo = null;
    /**
     * The TextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TextInfo
     * @var \Travelport\Util\StructType\TextInfo[]
     */
    protected ?array $TextInfo = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
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
     * Constructor method for BaseBaggageAllowanceInfo
     * @uses BaseBaggageAllowanceInfo::setURLInfo()
     * @uses BaseBaggageAllowanceInfo::setTextInfo()
     * @uses BaseBaggageAllowanceInfo::setOrigin()
     * @uses BaseBaggageAllowanceInfo::setDestination()
     * @uses BaseBaggageAllowanceInfo::setCarrier()
     * @param \Travelport\Util\StructType\URLInfo[] $uRLInfo
     * @param \Travelport\Util\StructType\TextInfo[] $textInfo
     * @param string $origin
     * @param string $destination
     * @param string $carrier
     */
    public function __construct(?array $uRLInfo = null, ?array $textInfo = null, ?string $origin = null, ?string $destination = null, ?string $carrier = null)
    {
        $this
            ->setURLInfo($uRLInfo)
            ->setTextInfo($textInfo)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCarrier($carrier);
    }
    /**
     * Get URLInfo value
     * @return \Travelport\Util\StructType\URLInfo[]
     */
    public function getURLInfo(): ?array
    {
        return $this->URLInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setURLInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURLInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateURLInfoForArrayConstraintsFromSetURLInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseBaggageAllowanceInfoURLInfoItem) {
            // validation for constraint: itemType
            if (!$baseBaggageAllowanceInfoURLInfoItem instanceof \Travelport\Util\StructType\URLInfo) {
                $invalidValues[] = is_object($baseBaggageAllowanceInfoURLInfoItem) ? get_class($baseBaggageAllowanceInfoURLInfoItem) : sprintf('%s(%s)', gettype($baseBaggageAllowanceInfoURLInfoItem), var_export($baseBaggageAllowanceInfoURLInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The URLInfo property can only contain items of type \Travelport\Util\StructType\URLInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set URLInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\URLInfo[] $uRLInfo
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function setURLInfo(?array $uRLInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($uRLInfoArrayErrorMessage = self::validateURLInfoForArrayConstraintsFromSetURLInfo($uRLInfo))) {
            throw new InvalidArgumentException($uRLInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($uRLInfo) && count($uRLInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($uRLInfo)), __LINE__);
        }
        $this->URLInfo = $uRLInfo;
        
        return $this;
    }
    /**
     * Add item to URLInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\URLInfo $item
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function addToURLInfo(\Travelport\Util\StructType\URLInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\URLInfo) {
            throw new InvalidArgumentException(sprintf('The URLInfo property can only contain items of type \Travelport\Util\StructType\URLInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->URLInfo) && count($this->URLInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->URLInfo)), __LINE__);
        }
        $this->URLInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TextInfo value
     * @return \Travelport\Util\StructType\TextInfo[]
     */
    public function getTextInfo(): ?array
    {
        return $this->TextInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTextInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTextInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextInfoForArrayConstraintsFromSetTextInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseBaggageAllowanceInfoTextInfoItem) {
            // validation for constraint: itemType
            if (!$baseBaggageAllowanceInfoTextInfoItem instanceof \Travelport\Util\StructType\TextInfo) {
                $invalidValues[] = is_object($baseBaggageAllowanceInfoTextInfoItem) ? get_class($baseBaggageAllowanceInfoTextInfoItem) : sprintf('%s(%s)', gettype($baseBaggageAllowanceInfoTextInfoItem), var_export($baseBaggageAllowanceInfoTextInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TextInfo property can only contain items of type \Travelport\Util\StructType\TextInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TextInfo[] $textInfo
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function setTextInfo(?array $textInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($textInfoArrayErrorMessage = self::validateTextInfoForArrayConstraintsFromSetTextInfo($textInfo))) {
            throw new InvalidArgumentException($textInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($textInfo) && count($textInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($textInfo)), __LINE__);
        }
        $this->TextInfo = $textInfo;
        
        return $this;
    }
    /**
     * Add item to TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TextInfo $item
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function addToTextInfo(\Travelport\Util\StructType\TextInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TextInfo) {
            throw new InvalidArgumentException(sprintf('The TextInfo property can only contain items of type \Travelport\Util\StructType\TextInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TextInfo) && count($this->TextInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TextInfo)), __LINE__);
        }
        $this->TextInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
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
     * @return \Travelport\Util\StructType\BaseBaggageAllowanceInfo
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
