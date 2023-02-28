<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LegPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the journey Leg Price
 * @subpackage Structs
 */
class LegPrice extends AbstractStructBase
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
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: The Total Prices for the Combination of Journey legs for this Price. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TotalPrice;
    /**
     * The LegDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: LegDetail
     * @var \Travelport\Util\StructType\LegDetail[]
     */
    protected ?array $LegDetail = null;
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
     * Constructor method for LegPrice
     * @uses LegPrice::setKey()
     * @uses LegPrice::setTotalPrice()
     * @uses LegPrice::setLegDetail()
     * @uses LegPrice::setApproximateTotalPrice()
     * @param string $key
     * @param string $totalPrice
     * @param \Travelport\Util\StructType\LegDetail[] $legDetail
     * @param string $approximateTotalPrice
     */
    public function __construct(string $key, string $totalPrice, ?array $legDetail = null, ?string $approximateTotalPrice = null)
    {
        $this
            ->setKey($key)
            ->setTotalPrice($totalPrice)
            ->setLegDetail($legDetail)
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
     * @return \Travelport\Util\StructType\LegPrice
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
     * Get TotalPrice value
     * @return string
     */
    public function getTotalPrice(): string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\Util\StructType\LegPrice
     */
    public function setTotalPrice(string $totalPrice): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get LegDetail value
     * @return \Travelport\Util\StructType\LegDetail[]
     */
    public function getLegDetail(): ?array
    {
        return $this->LegDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLegDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLegDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegDetailForArrayConstraintFromSetLegDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $legPriceLegDetailItem) {
            // validation for constraint: itemType
            if (!$legPriceLegDetailItem instanceof \Travelport\Util\StructType\LegDetail) {
                $invalidValues[] = is_object($legPriceLegDetailItem) ? get_class($legPriceLegDetailItem) : sprintf('%s(%s)', gettype($legPriceLegDetailItem), var_export($legPriceLegDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LegDetail property can only contain items of type \Travelport\Util\StructType\LegDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LegDetail[] $legDetail
     * @return \Travelport\Util\StructType\LegPrice
     */
    public function setLegDetail(?array $legDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($legDetailArrayErrorMessage = self::validateLegDetailForArrayConstraintFromSetLegDetail($legDetail))) {
            throw new InvalidArgumentException($legDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($legDetail) && count($legDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($legDetail)), __LINE__);
        }
        $this->LegDetail = $legDetail;
        
        return $this;
    }
    /**
     * Add item to LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LegDetail $item
     * @return \Travelport\Util\StructType\LegPrice
     */
    public function addToLegDetail(\Travelport\Util\StructType\LegDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LegDetail) {
            throw new InvalidArgumentException(sprintf('The LegDetail property can only contain items of type \Travelport\Util\StructType\LegDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LegDetail) && count($this->LegDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LegDetail)), __LINE__);
        }
        $this->LegDetail[] = $item;
        
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
     * @return \Travelport\Util\StructType\LegPrice
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
