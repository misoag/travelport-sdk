<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangePenaltyInfo StructType
 * @subpackage Structs
 */
class ExchangePenaltyInfo extends AbstractStructBase
{
    /**
     * The PenaltyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PenaltyInformation
     * @var \Travelport\UniversalRecord\StructType\PenaltyInformation[]
     */
    protected ?array $PenaltyInformation = null;
    /**
     * The PTC
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PTC = null;
    /**
     * The MinimumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Minimum change fee for changes to the itinerary. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MinimumChangeFee = null;
    /**
     * The MaximumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Maximum change fee for changes to the itinerary. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MaximumChangeFee = null;
    /**
     * Constructor method for ExchangePenaltyInfo
     * @uses ExchangePenaltyInfo::setPenaltyInformation()
     * @uses ExchangePenaltyInfo::setPTC()
     * @uses ExchangePenaltyInfo::setMinimumChangeFee()
     * @uses ExchangePenaltyInfo::setMaximumChangeFee()
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation[] $penaltyInformation
     * @param string $pTC
     * @param string $minimumChangeFee
     * @param string $maximumChangeFee
     */
    public function __construct(?array $penaltyInformation = null, ?string $pTC = null, ?string $minimumChangeFee = null, ?string $maximumChangeFee = null)
    {
        $this
            ->setPenaltyInformation($penaltyInformation)
            ->setPTC($pTC)
            ->setMinimumChangeFee($minimumChangeFee)
            ->setMaximumChangeFee($maximumChangeFee);
    }
    /**
     * Get PenaltyInformation value
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation[]
     */
    public function getPenaltyInformation(): ?array
    {
        return $this->PenaltyInformation;
    }
    /**
     * This method is responsible for validating the values passed to the setPenaltyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPenaltyInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePenaltyInformationForArrayConstraintsFromSetPenaltyInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exchangePenaltyInfoPenaltyInformationItem) {
            // validation for constraint: itemType
            if (!$exchangePenaltyInfoPenaltyInformationItem instanceof \Travelport\UniversalRecord\StructType\PenaltyInformation) {
                $invalidValues[] = is_object($exchangePenaltyInfoPenaltyInformationItem) ? get_class($exchangePenaltyInfoPenaltyInformationItem) : sprintf('%s(%s)', gettype($exchangePenaltyInfoPenaltyInformationItem), var_export($exchangePenaltyInfoPenaltyInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PenaltyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\PenaltyInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PenaltyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation[] $penaltyInformation
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setPenaltyInformation(?array $penaltyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($penaltyInformationArrayErrorMessage = self::validatePenaltyInformationForArrayConstraintsFromSetPenaltyInformation($penaltyInformation))) {
            throw new InvalidArgumentException($penaltyInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($penaltyInformation) && count($penaltyInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($penaltyInformation)), __LINE__);
        }
        $this->PenaltyInformation = $penaltyInformation;
        
        return $this;
    }
    /**
     * Add item to PenaltyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PenaltyInformation $item
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function addToPenaltyInformation(\Travelport\UniversalRecord\StructType\PenaltyInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PenaltyInformation) {
            throw new InvalidArgumentException(sprintf('The PenaltyInformation property can only contain items of type \Travelport\UniversalRecord\StructType\PenaltyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PenaltyInformation) && count($this->PenaltyInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PenaltyInformation)), __LINE__);
        }
        $this->PenaltyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get PTC value
     * @return string|null
     */
    public function getPTC(): ?string
    {
        return $this->PTC;
    }
    /**
     * Set PTC value
     * @param string $pTC
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setPTC(?string $pTC = null): self
    {
        // validation for constraint: string
        if (!is_null($pTC) && !is_string($pTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pTC, true), gettype($pTC)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($pTC) && mb_strlen((string) $pTC) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $pTC)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($pTC) && mb_strlen((string) $pTC) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $pTC)), __LINE__);
        }
        $this->PTC = $pTC;
        
        return $this;
    }
    /**
     * Get MinimumChangeFee value
     * @return string|null
     */
    public function getMinimumChangeFee(): ?string
    {
        return $this->MinimumChangeFee;
    }
    /**
     * Set MinimumChangeFee value
     * @param string $minimumChangeFee
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setMinimumChangeFee(?string $minimumChangeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($minimumChangeFee) && !is_string($minimumChangeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minimumChangeFee, true), gettype($minimumChangeFee)), __LINE__);
        }
        $this->MinimumChangeFee = $minimumChangeFee;
        
        return $this;
    }
    /**
     * Get MaximumChangeFee value
     * @return string|null
     */
    public function getMaximumChangeFee(): ?string
    {
        return $this->MaximumChangeFee;
    }
    /**
     * Set MaximumChangeFee value
     * @param string $maximumChangeFee
     * @return \Travelport\UniversalRecord\StructType\ExchangePenaltyInfo
     */
    public function setMaximumChangeFee(?string $maximumChangeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($maximumChangeFee) && !is_string($maximumChangeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maximumChangeFee, true), gettype($maximumChangeFee)), __LINE__);
        }
        $this->MaximumChangeFee = $maximumChangeFee;
        
        return $this;
    }
}
