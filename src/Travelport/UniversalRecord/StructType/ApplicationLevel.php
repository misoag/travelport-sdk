<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationLevel StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists the levels where the option is applied in the itinerary. Some options are applied for the entire itinerary, some for entire segments, etc.
 * @subpackage Structs
 */
class ApplicationLevel extends AbstractStructBase
{
    /**
     * The ApplicationLimits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ApplicationLimits|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ApplicationLimits $ApplicationLimits = null;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ServiceData
     * @var \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    protected ?array $ServiceData = null;
    /**
     * The ApplicableLevels
     * @var string[]
     */
    protected ?array $ApplicableLevels = null;
    /**
     * The ProviderDefinedApplicableLevels
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined ApplicableLevels which is mapped to Other
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedApplicableLevels = null;
    /**
     * Constructor method for ApplicationLevel
     * @uses ApplicationLevel::setApplicationLimits()
     * @uses ApplicationLevel::setServiceData()
     * @uses ApplicationLevel::setApplicableLevels()
     * @uses ApplicationLevel::setProviderDefinedApplicableLevels()
     * @param \Travelport\UniversalRecord\StructType\ApplicationLimits $applicationLimits
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @param string[] $applicableLevels
     * @param string $providerDefinedApplicableLevels
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\ApplicationLimits $applicationLimits = null, ?array $serviceData = null, ?array $applicableLevels = null, ?string $providerDefinedApplicableLevels = null)
    {
        $this
            ->setApplicationLimits($applicationLimits)
            ->setServiceData($serviceData)
            ->setApplicableLevels($applicableLevels)
            ->setProviderDefinedApplicableLevels($providerDefinedApplicableLevels);
    }
    /**
     * Get ApplicationLimits value
     * @return \Travelport\UniversalRecord\StructType\ApplicationLimits|null
     */
    public function getApplicationLimits(): ?\Travelport\UniversalRecord\StructType\ApplicationLimits
    {
        return $this->ApplicationLimits;
    }
    /**
     * Set ApplicationLimits value
     * @param \Travelport\UniversalRecord\StructType\ApplicationLimits $applicationLimits
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function setApplicationLimits(?\Travelport\UniversalRecord\StructType\ApplicationLimits $applicationLimits = null): self
    {
        $this->ApplicationLimits = $applicationLimits;
        
        return $this;
    }
    /**
     * Get ServiceData value
     * @return \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    public function getServiceData(): ?array
    {
        return $this->ServiceData;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceDataForArrayConstraintsFromSetServiceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $applicationLevelServiceDataItem) {
            // validation for constraint: itemType
            if (!$applicationLevelServiceDataItem instanceof \Travelport\UniversalRecord\StructType\ServiceData) {
                $invalidValues[] = is_object($applicationLevelServiceDataItem) ? get_class($applicationLevelServiceDataItem) : sprintf('%s(%s)', gettype($applicationLevelServiceDataItem), var_export($applicationLevelServiceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceData property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function setServiceData(?array $serviceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceDataArrayErrorMessage = self::validateServiceDataForArrayConstraintsFromSetServiceData($serviceData))) {
            throw new InvalidArgumentException($serviceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceData) && count($serviceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceData)), __LINE__);
        }
        $this->ServiceData = $serviceData;
        
        return $this;
    }
    /**
     * Add item to ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceData $item
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function addToServiceData(\Travelport\UniversalRecord\StructType\ServiceData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceData) {
            throw new InvalidArgumentException(sprintf('The ServiceData property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceData) && count($this->ServiceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceData)), __LINE__);
        }
        $this->ServiceData[] = $item;
        
        return $this;
    }
    /**
     * Get ApplicableLevels value
     * @return string[]
     */
    public function getApplicableLevels(): ?array
    {
        return $this->ApplicableLevels;
    }
    /**
     * This method is responsible for validating the values passed to the setApplicableLevels method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicableLevels method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicableLevelsForArrayConstraintsFromSetApplicableLevels(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $applicationLevelApplicableLevelsItem) {
            // validation for constraint: enumeration
            if (!\Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::valueIsValid($applicationLevelApplicableLevelsItem)) {
                $invalidValues[] = is_object($applicationLevelApplicableLevelsItem) ? get_class($applicationLevelApplicableLevelsItem) : sprintf('%s(%s)', gettype($applicationLevelApplicableLevelsItem), var_export($applicationLevelApplicableLevelsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicableLevels value
     * @uses \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $applicableLevels
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function setApplicableLevels(?array $applicableLevels = null): self
    {
        // validation for constraint: array
        if ('' !== ($applicableLevelsArrayErrorMessage = self::validateApplicableLevelsForArrayConstraintsFromSetApplicableLevels($applicableLevels))) {
            throw new InvalidArgumentException($applicableLevelsArrayErrorMessage, __LINE__);
        }
        $this->ApplicableLevels = $applicableLevels;
        
        return $this;
    }
    /**
     * Add item to ApplicableLevels value
     * @uses \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function addToApplicableLevels(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\UniversalRecord\EnumType\OptionalServiceApplicabilityType::getValidValues())), __LINE__);
        }
        $this->ApplicableLevels[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderDefinedApplicableLevels value
     * @return string|null
     */
    public function getProviderDefinedApplicableLevels(): ?string
    {
        return $this->ProviderDefinedApplicableLevels;
    }
    /**
     * Set ProviderDefinedApplicableLevels value
     * @param string $providerDefinedApplicableLevels
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel
     */
    public function setProviderDefinedApplicableLevels(?string $providerDefinedApplicableLevels = null): self
    {
        // validation for constraint: string
        if (!is_null($providerDefinedApplicableLevels) && !is_string($providerDefinedApplicableLevels)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerDefinedApplicableLevels, true), gettype($providerDefinedApplicableLevels)), __LINE__);
        }
        $this->ProviderDefinedApplicableLevels = $providerDefinedApplicableLevels;
        
        return $this;
    }
}
