<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceAssociations StructType
 * @subpackage Structs
 */
class ServiceAssociations extends AbstractStructBase
{
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\UniversalRecord\StructType\ApplicableSegment[]
     */
    protected ?array $ApplicableSegment = null;
    /**
     * Constructor method for ServiceAssociations
     * @uses ServiceAssociations::setApplicableSegment()
     * @param \Travelport\UniversalRecord\StructType\ApplicableSegment[] $applicableSegment
     */
    public function __construct(?array $applicableSegment = null)
    {
        $this
            ->setApplicableSegment($applicableSegment);
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\UniversalRecord\StructType\ApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setApplicableSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicableSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicableSegmentForArrayConstraintFromSetApplicableSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceAssociationsApplicableSegmentItem) {
            // validation for constraint: itemType
            if (!$serviceAssociationsApplicableSegmentItem instanceof \Travelport\UniversalRecord\StructType\ApplicableSegment) {
                $invalidValues[] = is_object($serviceAssociationsApplicableSegmentItem) ? get_class($serviceAssociationsApplicableSegmentItem) : sprintf('%s(%s)', gettype($serviceAssociationsApplicableSegmentItem), var_export($serviceAssociationsApplicableSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicableSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ApplicableSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ApplicableSegment[] $applicableSegment
     * @return \Travelport\UniversalRecord\StructType\ServiceAssociations
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($applicableSegmentArrayErrorMessage = self::validateApplicableSegmentForArrayConstraintFromSetApplicableSegment($applicableSegment))) {
            throw new InvalidArgumentException($applicableSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($applicableSegment) && count($applicableSegment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($applicableSegment)), __LINE__);
        }
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ApplicableSegment $item
     * @return \Travelport\UniversalRecord\StructType\ServiceAssociations
     */
    public function addToApplicableSegment(\Travelport\UniversalRecord\StructType\ApplicableSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ApplicableSegment) {
            throw new InvalidArgumentException(sprintf('The ApplicableSegment property can only contain items of type \Travelport\UniversalRecord\StructType\ApplicableSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ApplicableSegment) && count($this->ApplicableSegment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ApplicableSegment)), __LINE__);
        }
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
}
