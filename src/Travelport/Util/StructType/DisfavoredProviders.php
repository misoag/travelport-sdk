<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisfavoredProviders StructType
 * @subpackage Structs
 */
class DisfavoredProviders extends AbstractStructBase
{
    /**
     * The Provider
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Provider
     * @var \Travelport\Util\StructType\Provider[]
     */
    protected ?array $Provider = null;
    /**
     * Constructor method for DisfavoredProviders
     * @uses DisfavoredProviders::setProvider()
     * @param \Travelport\Util\StructType\Provider[] $provider
     */
    public function __construct(?array $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Travelport\Util\StructType\Provider[]
     */
    public function getProvider(): ?array
    {
        return $this->Provider;
    }
    /**
     * This method is responsible for validating the values passed to the setProvider method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvider method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderForArrayConstraintsFromSetProvider(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $disfavoredProvidersProviderItem) {
            // validation for constraint: itemType
            if (!$disfavoredProvidersProviderItem instanceof \Travelport\Util\StructType\Provider) {
                $invalidValues[] = is_object($disfavoredProvidersProviderItem) ? get_class($disfavoredProvidersProviderItem) : sprintf('%s(%s)', gettype($disfavoredProvidersProviderItem), var_export($disfavoredProvidersProviderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provider property can only contain items of type \Travelport\Util\StructType\Provider, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Provider value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Provider[] $provider
     * @return \Travelport\Util\StructType\DisfavoredProviders
     */
    public function setProvider(?array $provider = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerArrayErrorMessage = self::validateProviderForArrayConstraintsFromSetProvider($provider))) {
            throw new InvalidArgumentException($providerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($provider) && count($provider) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($provider)), __LINE__);
        }
        $this->Provider = $provider;
        
        return $this;
    }
    /**
     * Add item to Provider value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Provider $item
     * @return \Travelport\Util\StructType\DisfavoredProviders
     */
    public function addToProvider(\Travelport\Util\StructType\Provider $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Provider) {
            throw new InvalidArgumentException(sprintf('The Provider property can only contain items of type \Travelport\Util\StructType\Provider, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Provider) && count($this->Provider) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Provider)), __LINE__);
        }
        $this->Provider[] = $item;
        
        return $this;
    }
}
