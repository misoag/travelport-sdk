<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctCountRsp StructType
 * @subpackage Structs
 */
class MctCountRsp extends BaseRsp
{
    /**
     * The MctCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MctCount
     * @var \Travelport\Util\StructType\MctCount[]
     */
    protected ?array $MctCount = null;
    /**
     * Constructor method for MctCountRsp
     * @uses MctCountRsp::setMctCount()
     * @param \Travelport\Util\StructType\MctCount[] $mctCount
     */
    public function __construct(?array $mctCount = null)
    {
        $this
            ->setMctCount($mctCount);
    }
    /**
     * Get MctCount value
     * @return \Travelport\Util\StructType\MctCount[]
     */
    public function getMctCount(): ?array
    {
        return $this->MctCount;
    }
    /**
     * This method is responsible for validating the values passed to the setMctCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMctCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMctCountForArrayConstraintsFromSetMctCount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mctCountRspMctCountItem) {
            // validation for constraint: itemType
            if (!$mctCountRspMctCountItem instanceof \Travelport\Util\StructType\MctCount) {
                $invalidValues[] = is_object($mctCountRspMctCountItem) ? get_class($mctCountRspMctCountItem) : sprintf('%s(%s)', gettype($mctCountRspMctCountItem), var_export($mctCountRspMctCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MctCount property can only contain items of type \Travelport\Util\StructType\MctCount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MctCount value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctCount[] $mctCount
     * @return \Travelport\Util\StructType\MctCountRsp
     */
    public function setMctCount(?array $mctCount = null): self
    {
        // validation for constraint: array
        if ('' !== ($mctCountArrayErrorMessage = self::validateMctCountForArrayConstraintsFromSetMctCount($mctCount))) {
            throw new InvalidArgumentException($mctCountArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mctCount) && count($mctCount) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mctCount)), __LINE__);
        }
        $this->MctCount = $mctCount;
        
        return $this;
    }
    /**
     * Add item to MctCount value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctCount $item
     * @return \Travelport\Util\StructType\MctCountRsp
     */
    public function addToMctCount(\Travelport\Util\StructType\MctCount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\MctCount) {
            throw new InvalidArgumentException(sprintf('The MctCount property can only contain items of type \Travelport\Util\StructType\MctCount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MctCount) && count($this->MctCount) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MctCount)), __LINE__);
        }
        $this->MctCount[] = $item;
        
        return $this;
    }
}
