<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRemarkList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class FareRemarkList extends AbstractStructBase
{
    /**
     * The FareRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRemark
     * @var \Travelport\Util\StructType\FareRemark[]
     */
    protected ?array $FareRemark = null;
    /**
     * Constructor method for FareRemarkList
     * @uses FareRemarkList::setFareRemark()
     * @param \Travelport\Util\StructType\FareRemark[] $fareRemark
     */
    public function __construct(?array $fareRemark = null)
    {
        $this
            ->setFareRemark($fareRemark);
    }
    /**
     * Get FareRemark value
     * @return \Travelport\Util\StructType\FareRemark[]
     */
    public function getFareRemark(): ?array
    {
        return $this->FareRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setFareRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRemarkForArrayConstraintsFromSetFareRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRemarkListFareRemarkItem) {
            // validation for constraint: itemType
            if (!$fareRemarkListFareRemarkItem instanceof \Travelport\Util\StructType\FareRemark) {
                $invalidValues[] = is_object($fareRemarkListFareRemarkItem) ? get_class($fareRemarkListFareRemarkItem) : sprintf('%s(%s)', gettype($fareRemarkListFareRemarkItem), var_export($fareRemarkListFareRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRemark property can only contain items of type \Travelport\Util\StructType\FareRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRemark[] $fareRemark
     * @return \Travelport\Util\StructType\FareRemarkList
     */
    public function setFareRemark(?array $fareRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRemarkArrayErrorMessage = self::validateFareRemarkForArrayConstraintsFromSetFareRemark($fareRemark))) {
            throw new InvalidArgumentException($fareRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRemark) && count($fareRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRemark)), __LINE__);
        }
        $this->FareRemark = $fareRemark;
        
        return $this;
    }
    /**
     * Add item to FareRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRemark $item
     * @return \Travelport\Util\StructType\FareRemarkList
     */
    public function addToFareRemark(\Travelport\Util\StructType\FareRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRemark) {
            throw new InvalidArgumentException(sprintf('The FareRemark property can only contain items of type \Travelport\Util\StructType\FareRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRemark) && count($this->FareRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRemark)), __LINE__);
        }
        $this->FareRemark[] = $item;
        
        return $this;
    }
}
