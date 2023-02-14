<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaxDetailsInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Container to send Fax details Information for ticketing
 * @subpackage Structs
 */
class FaxDetailsInformation extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingInfoRef
     * @var \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    protected ?array $AirPricingInfoRef = null;
    /**
     * The FaxDetails
     * Meta information extracted from the WSDL
     * - ref: FaxDetails
     * @var \Travelport\Util\StructType\FaxDetails|null
     */
    protected ?\Travelport\Util\StructType\FaxDetails $FaxDetails = null;
    /**
     * Constructor method for FaxDetailsInformation
     * @uses FaxDetailsInformation::setAirPricingInfoRef()
     * @uses FaxDetailsInformation::setFaxDetails()
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Util\StructType\FaxDetails $faxDetails
     */
    public function __construct(?array $airPricingInfoRef = null, ?\Travelport\Util\StructType\FaxDetails $faxDetails = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFaxDetails($faxDetails);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Util\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $faxDetailsInformationAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$faxDetailsInformationAirPricingInfoRefItem instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($faxDetailsInformationAirPricingInfoRefItem) ? get_class($faxDetailsInformationAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($faxDetailsInformationAirPricingInfoRefItem), var_export($faxDetailsInformationAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Util\StructType\FaxDetailsInformation
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfoRef $item
     * @return \Travelport\Util\StructType\FaxDetailsInformation
     */
    public function addToAirPricingInfoRef(\Travelport\Util\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\Util\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FaxDetails value
     * @return \Travelport\Util\StructType\FaxDetails|null
     */
    public function getFaxDetails(): ?\Travelport\Util\StructType\FaxDetails
    {
        return $this->FaxDetails;
    }
    /**
     * Set FaxDetails value
     * @param \Travelport\Util\StructType\FaxDetails $faxDetails
     * @return \Travelport\Util\StructType\FaxDetailsInformation
     */
    public function setFaxDetails(?\Travelport\Util\StructType\FaxDetails $faxDetails = null): self
    {
        $this->FaxDetails = $faxDetails;
        
        return $this;
    }
}
