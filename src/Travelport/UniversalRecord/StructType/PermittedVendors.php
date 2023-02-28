<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedVendors StructType
 * Meta information extracted from the WSDL
 * - documentation: 1G/1V max 4 vendors, 1P max 99 vendors
 * @subpackage Structs
 */
class PermittedVendors extends AbstractStructBase
{
    /**
     * The Vendor
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Vendor
     * @var \Travelport\UniversalRecord\StructType\Vendor[]
     */
    protected ?array $Vendor = null;
    /**
     * Constructor method for PermittedVendors
     * @uses PermittedVendors::setVendor()
     * @param \Travelport\UniversalRecord\StructType\Vendor[] $vendor
     */
    public function __construct(?array $vendor = null)
    {
        $this
            ->setVendor($vendor);
    }
    /**
     * Get Vendor value
     * @return \Travelport\UniversalRecord\StructType\Vendor[]
     */
    public function getVendor(): ?array
    {
        return $this->Vendor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVendor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorForArrayConstraintFromSetVendor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $permittedVendorsVendorItem) {
            // validation for constraint: itemType
            if (!$permittedVendorsVendorItem instanceof \Travelport\UniversalRecord\StructType\Vendor) {
                $invalidValues[] = is_object($permittedVendorsVendorItem) ? get_class($permittedVendorsVendorItem) : sprintf('%s(%s)', gettype($permittedVendorsVendorItem), var_export($permittedVendorsVendorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Vendor property can only contain items of type \Travelport\UniversalRecord\StructType\Vendor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Vendor value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vendor[] $vendor
     * @return \Travelport\UniversalRecord\StructType\PermittedVendors
     */
    public function setVendor(?array $vendor = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorArrayErrorMessage = self::validateVendorForArrayConstraintFromSetVendor($vendor))) {
            throw new InvalidArgumentException($vendorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendor) && count($vendor) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendor)), __LINE__);
        }
        $this->Vendor = $vendor;
        
        return $this;
    }
    /**
     * Add item to Vendor value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Vendor $item
     * @return \Travelport\UniversalRecord\StructType\PermittedVendors
     */
    public function addToVendor(\Travelport\UniversalRecord\StructType\Vendor $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Vendor) {
            throw new InvalidArgumentException(sprintf('The Vendor property can only contain items of type \Travelport\UniversalRecord\StructType\Vendor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Vendor) && count($this->Vendor) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Vendor)), __LINE__);
        }
        $this->Vendor[] = $item;
        
        return $this;
    }
}
