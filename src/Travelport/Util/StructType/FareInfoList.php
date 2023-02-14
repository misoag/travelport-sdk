<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfoList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class FareInfoList extends AbstractStructBase
{
    /**
     * The FareInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareInfo
     * @var \Travelport\Util\StructType\FareInfo[]
     */
    protected ?array $FareInfo = null;
    /**
     * Constructor method for FareInfoList
     * @uses FareInfoList::setFareInfo()
     * @param \Travelport\Util\StructType\FareInfo[] $fareInfo
     */
    public function __construct(?array $fareInfo = null)
    {
        $this
            ->setFareInfo($fareInfo);
    }
    /**
     * Get FareInfo value
     * @return \Travelport\Util\StructType\FareInfo[]
     */
    public function getFareInfo(): ?array
    {
        return $this->FareInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setFareInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareInfoForArrayConstraintsFromSetFareInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareInfoListFareInfoItem) {
            // validation for constraint: itemType
            if (!$fareInfoListFareInfoItem instanceof \Travelport\Util\StructType\FareInfo) {
                $invalidValues[] = is_object($fareInfoListFareInfoItem) ? get_class($fareInfoListFareInfoItem) : sprintf('%s(%s)', gettype($fareInfoListFareInfoItem), var_export($fareInfoListFareInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareInfo property can only contain items of type \Travelport\Util\StructType\FareInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfo[] $fareInfo
     * @return \Travelport\Util\StructType\FareInfoList
     */
    public function setFareInfo(?array $fareInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareInfoArrayErrorMessage = self::validateFareInfoForArrayConstraintsFromSetFareInfo($fareInfo))) {
            throw new InvalidArgumentException($fareInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareInfo) && count($fareInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareInfo)), __LINE__);
        }
        $this->FareInfo = $fareInfo;
        
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareInfo $item
     * @return \Travelport\Util\StructType\FareInfoList
     */
    public function addToFareInfo(\Travelport\Util\StructType\FareInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareInfo) {
            throw new InvalidArgumentException(sprintf('The FareInfo property can only contain items of type \Travelport\Util\StructType\FareInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareInfo) && count($this->FareInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareInfo)), __LINE__);
        }
        $this->FareInfo[] = $item;
        
        return $this;
    }
}
