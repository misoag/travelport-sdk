<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BundledServices StructType
 * @subpackage Structs
 */
class BundledServices extends AbstractStructBase
{
    /**
     * The BundledService
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * - ref: BundledService
     * @var \Travelport\Util\StructType\BundledService[]
     */
    protected ?array $BundledService = null;
    /**
     * Constructor method for BundledServices
     * @uses BundledServices::setBundledService()
     * @param \Travelport\Util\StructType\BundledService[] $bundledService
     */
    public function __construct(?array $bundledService = null)
    {
        $this
            ->setBundledService($bundledService);
    }
    /**
     * Get BundledService value
     * @return \Travelport\Util\StructType\BundledService[]
     */
    public function getBundledService(): ?array
    {
        return $this->BundledService;
    }
    /**
     * This method is responsible for validating the values passed to the setBundledService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBundledService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBundledServiceForArrayConstraintsFromSetBundledService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bundledServicesBundledServiceItem) {
            // validation for constraint: itemType
            if (!$bundledServicesBundledServiceItem instanceof \Travelport\Util\StructType\BundledService) {
                $invalidValues[] = is_object($bundledServicesBundledServiceItem) ? get_class($bundledServicesBundledServiceItem) : sprintf('%s(%s)', gettype($bundledServicesBundledServiceItem), var_export($bundledServicesBundledServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BundledService property can only contain items of type \Travelport\Util\StructType\BundledService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BundledService value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BundledService[] $bundledService
     * @return \Travelport\Util\StructType\BundledServices
     */
    public function setBundledService(?array $bundledService = null): self
    {
        // validation for constraint: array
        if ('' !== ($bundledServiceArrayErrorMessage = self::validateBundledServiceForArrayConstraintsFromSetBundledService($bundledService))) {
            throw new InvalidArgumentException($bundledServiceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($bundledService) && count($bundledService) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($bundledService)), __LINE__);
        }
        $this->BundledService = $bundledService;
        
        return $this;
    }
    /**
     * Add item to BundledService value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BundledService $item
     * @return \Travelport\Util\StructType\BundledServices
     */
    public function addToBundledService(\Travelport\Util\StructType\BundledService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BundledService) {
            throw new InvalidArgumentException(sprintf('The BundledService property can only contain items of type \Travelport\Util\StructType\BundledService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->BundledService) && count($this->BundledService) >= 16) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->BundledService)), __LINE__);
        }
        $this->BundledService[] = $item;
        
        return $this;
    }
}