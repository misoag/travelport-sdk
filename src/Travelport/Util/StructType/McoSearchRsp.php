<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for McoSearchRsp StructType
 * @subpackage Structs
 */
class McoSearchRsp extends BaseRsp
{
    /**
     * The McoSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: McoSearchResult
     * @var \Travelport\Util\StructType\McoSearchResult[]
     */
    protected ?array $McoSearchResult = null;
    /**
     * Constructor method for McoSearchRsp
     * @uses McoSearchRsp::setMcoSearchResult()
     * @param \Travelport\Util\StructType\McoSearchResult[] $mcoSearchResult
     */
    public function __construct(?array $mcoSearchResult = null)
    {
        $this
            ->setMcoSearchResult($mcoSearchResult);
    }
    /**
     * Get McoSearchResult value
     * @return \Travelport\Util\StructType\McoSearchResult[]
     */
    public function getMcoSearchResult(): ?array
    {
        return $this->McoSearchResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMcoSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMcoSearchResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMcoSearchResultForArrayConstraintsFromSetMcoSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mcoSearchRspMcoSearchResultItem) {
            // validation for constraint: itemType
            if (!$mcoSearchRspMcoSearchResultItem instanceof \Travelport\Util\StructType\McoSearchResult) {
                $invalidValues[] = is_object($mcoSearchRspMcoSearchResultItem) ? get_class($mcoSearchRspMcoSearchResultItem) : sprintf('%s(%s)', gettype($mcoSearchRspMcoSearchResultItem), var_export($mcoSearchRspMcoSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The McoSearchResult property can only contain items of type \Travelport\Util\StructType\McoSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set McoSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\McoSearchResult[] $mcoSearchResult
     * @return \Travelport\Util\StructType\McoSearchRsp
     */
    public function setMcoSearchResult(?array $mcoSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($mcoSearchResultArrayErrorMessage = self::validateMcoSearchResultForArrayConstraintsFromSetMcoSearchResult($mcoSearchResult))) {
            throw new InvalidArgumentException($mcoSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mcoSearchResult) && count($mcoSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mcoSearchResult)), __LINE__);
        }
        $this->McoSearchResult = $mcoSearchResult;
        
        return $this;
    }
    /**
     * Add item to McoSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\McoSearchResult $item
     * @return \Travelport\Util\StructType\McoSearchRsp
     */
    public function addToMcoSearchResult(\Travelport\Util\StructType\McoSearchResult $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\McoSearchResult) {
            throw new InvalidArgumentException(sprintf('The McoSearchResult property can only contain items of type \Travelport\Util\StructType\McoSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->McoSearchResult) && count($this->McoSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->McoSearchResult)), __LINE__);
        }
        $this->McoSearchResult[] = $item;
        
        return $this;
    }
}
