<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpertSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about Expert Solution Route component retrieved from Knowledge Base
 * @subpackage Structs
 */
class ExpertSolution extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: The Date on which this solution was created
     * - use: required
     * @var string
     */
    protected string $CreatedDate;
    /**
     * The LegPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: LegPrice
     * @var \Travelport\UniversalRecord\StructType\LegPrice[]
     */
    protected ?array $LegPrice = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Total Price for the Solution. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Converted Total Price in Agency's Default Currency Value | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * Constructor method for ExpertSolution
     * @uses ExpertSolution::setKey()
     * @uses ExpertSolution::setCreatedDate()
     * @uses ExpertSolution::setLegPrice()
     * @uses ExpertSolution::setTotalPrice()
     * @uses ExpertSolution::setApproximateTotalPrice()
     * @param string $key
     * @param string $createdDate
     * @param \Travelport\UniversalRecord\StructType\LegPrice[] $legPrice
     * @param string $totalPrice
     * @param string $approximateTotalPrice
     */
    public function __construct(string $key, string $createdDate, ?array $legPrice = null, ?string $totalPrice = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setKey($key)
            ->setCreatedDate($createdDate)
            ->setLegPrice($legPrice)
            ->setTotalPrice($totalPrice)
            ->setApproximateTotalPrice($approximateTotalPrice);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setCreatedDate(string $createdDate): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        
        return $this;
    }
    /**
     * Get LegPrice value
     * @return \Travelport\UniversalRecord\StructType\LegPrice[]
     */
    public function getLegPrice(): ?array
    {
        return $this->LegPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setLegPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegPriceForArrayConstraintsFromSetLegPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $expertSolutionLegPriceItem) {
            // validation for constraint: itemType
            if (!$expertSolutionLegPriceItem instanceof \Travelport\UniversalRecord\StructType\LegPrice) {
                $invalidValues[] = is_object($expertSolutionLegPriceItem) ? get_class($expertSolutionLegPriceItem) : sprintf('%s(%s)', gettype($expertSolutionLegPriceItem), var_export($expertSolutionLegPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegPrice property can only contain items of type \Travelport\UniversalRecord\StructType\LegPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LegPrice value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegPrice[] $legPrice
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setLegPrice(?array $legPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($legPriceArrayErrorMessage = self::validateLegPriceForArrayConstraintsFromSetLegPrice($legPrice))) {
            throw new InvalidArgumentException($legPriceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($legPrice) && count($legPrice) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($legPrice)), __LINE__);
        }
        $this->LegPrice = $legPrice;
        
        return $this;
    }
    /**
     * Add item to LegPrice value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LegPrice $item
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function addToLegPrice(\Travelport\UniversalRecord\StructType\LegPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LegPrice) {
            throw new InvalidArgumentException(sprintf('The LegPrice property can only contain items of type \Travelport\UniversalRecord\StructType\LegPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LegPrice) && count($this->LegPrice) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LegPrice)), __LINE__);
        }
        $this->LegPrice[] = $item;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\UniversalRecord\StructType\ExpertSolution
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
}
