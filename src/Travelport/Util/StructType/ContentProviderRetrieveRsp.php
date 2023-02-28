<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContentProviderRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response with all available providers with their suppliers.
 * @subpackage Structs
 */
class ContentProviderRetrieveRsp extends BaseRsp
{
    /**
     * The ContentProvider
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ContentProvider
     * @var \Travelport\Util\StructType\ContentProvider[]
     */
    protected ?array $ContentProvider = null;
    /**
     * Constructor method for ContentProviderRetrieveRsp
     * @uses ContentProviderRetrieveRsp::setContentProvider()
     * @param \Travelport\Util\StructType\ContentProvider[] $contentProvider
     */
    public function __construct(?array $contentProvider = null)
    {
        $this
            ->setContentProvider($contentProvider);
    }
    /**
     * Get ContentProvider value
     * @return \Travelport\Util\StructType\ContentProvider[]
     */
    public function getContentProvider(): ?array
    {
        return $this->ContentProvider;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setContentProvider method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContentProvider method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentProviderForArrayConstraintFromSetContentProvider(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contentProviderRetrieveRspContentProviderItem) {
            // validation for constraint: itemType
            if (!$contentProviderRetrieveRspContentProviderItem instanceof \Travelport\Util\StructType\ContentProvider) {
                $invalidValues[] = is_object($contentProviderRetrieveRspContentProviderItem) ? get_class($contentProviderRetrieveRspContentProviderItem) : sprintf('%s(%s)', gettype($contentProviderRetrieveRspContentProviderItem), var_export($contentProviderRetrieveRspContentProviderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContentProvider property can only contain items of type \Travelport\Util\StructType\ContentProvider, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContentProvider value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ContentProvider[] $contentProvider
     * @return \Travelport\Util\StructType\ContentProviderRetrieveRsp
     */
    public function setContentProvider(?array $contentProvider = null): self
    {
        // validation for constraint: array
        if ('' !== ($contentProviderArrayErrorMessage = self::validateContentProviderForArrayConstraintFromSetContentProvider($contentProvider))) {
            throw new InvalidArgumentException($contentProviderArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($contentProvider) && count($contentProvider) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($contentProvider)), __LINE__);
        }
        $this->ContentProvider = $contentProvider;
        
        return $this;
    }
    /**
     * Add item to ContentProvider value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ContentProvider $item
     * @return \Travelport\Util\StructType\ContentProviderRetrieveRsp
     */
    public function addToContentProvider(\Travelport\Util\StructType\ContentProvider $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ContentProvider) {
            throw new InvalidArgumentException(sprintf('The ContentProvider property can only contain items of type \Travelport\Util\StructType\ContentProvider, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ContentProvider) && count($this->ContentProvider) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ContentProvider)), __LINE__);
        }
        $this->ContentProvider[] = $item;
        
        return $this;
    }
}
