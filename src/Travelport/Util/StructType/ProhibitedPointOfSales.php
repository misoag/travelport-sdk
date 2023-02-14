<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedPointOfSales StructType
 * @subpackage Structs
 */
class ProhibitedPointOfSales extends AbstractStructBase
{
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:PointOfSale
     * @var \Travelport\Util\StructType\PointOfSale[]
     */
    protected ?array $PointOfSale = null;
    /**
     * Constructor method for ProhibitedPointOfSales
     * @uses ProhibitedPointOfSales::setPointOfSale()
     * @param \Travelport\Util\StructType\PointOfSale[] $pointOfSale
     */
    public function __construct(?array $pointOfSale = null)
    {
        $this
            ->setPointOfSale($pointOfSale);
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Util\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * This method is responsible for validating the values passed to the setPointOfSale method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointOfSale method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointOfSaleForArrayConstraintsFromSetPointOfSale(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prohibitedPointOfSalesPointOfSaleItem) {
            // validation for constraint: itemType
            if (!$prohibitedPointOfSalesPointOfSaleItem instanceof \Travelport\Util\StructType\PointOfSale) {
                $invalidValues[] = is_object($prohibitedPointOfSalesPointOfSaleItem) ? get_class($prohibitedPointOfSalesPointOfSaleItem) : sprintf('%s(%s)', gettype($prohibitedPointOfSalesPointOfSaleItem), var_export($prohibitedPointOfSalesPointOfSaleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PointOfSale property can only contain items of type \Travelport\Util\StructType\PointOfSale, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Util\StructType\ProhibitedPointOfSales
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        // validation for constraint: array
        if ('' !== ($pointOfSaleArrayErrorMessage = self::validatePointOfSaleForArrayConstraintsFromSetPointOfSale($pointOfSale))) {
            throw new InvalidArgumentException($pointOfSaleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pointOfSale) && count($pointOfSale) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pointOfSale)), __LINE__);
        }
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PointOfSale $item
     * @return \Travelport\Util\StructType\ProhibitedPointOfSales
     */
    public function addToPointOfSale(\Travelport\Util\StructType\PointOfSale $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PointOfSale) {
            throw new InvalidArgumentException(sprintf('The PointOfSale property can only contain items of type \Travelport\Util\StructType\PointOfSale, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PointOfSale) && count($this->PointOfSale) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PointOfSale)), __LINE__);
        }
        $this->PointOfSale[] = $item;
        
        return $this;
    }
}