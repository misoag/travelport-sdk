<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationRules StructType
 * Meta information extracted from the WSDL
 * - documentation: The rules to apply the rule to the itinerary
 * @subpackage Structs
 */
class ApplicationRules extends AbstractStructBase
{
    /**
     * The RequiredForAllTravelers
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option needs to be applied to all travelers in the itinerary if selected
     * @var bool|null
     */
    public ?bool $RequiredForAllTravelers = null;
    /**
     * The RequiredForAllSegments
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option needs to be applied to all segments in the itinerary if selected
     * @var bool|null
     */
    public ?bool $RequiredForAllSegments = null;
    /**
     * The RequiredForAllSegmentsInOD
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option needs to be applied to all segments in a origin / destination (connection flights) if selected for one segment in the OD
     * @var bool|null
     */
    public ?bool $RequiredForAllSegmentsInOD = null;
    /**
     * The UnselectedOptionRequired
     * Meta information extracted from the WSDL
     * - documentation: If an UnselectedOption is present in the option, then the Unselected option needs to be selected even if the option is not selected when this flag is set to true
     * @var bool|null
     */
    public ?bool $UnselectedOptionRequired = null;
    /**
     * The SecondaryOptionCodeRequired
     * Meta information extracted from the WSDL
     * - documentation: If set to true, the secondary option code is required for this option
     * @var bool|null
     */
    public ?bool $SecondaryOptionCodeRequired = null;
    /**
     * Constructor method for ApplicationRules
     * @uses ApplicationRules::setRequiredForAllTravelers()
     * @uses ApplicationRules::setRequiredForAllSegments()
     * @uses ApplicationRules::setRequiredForAllSegmentsInOD()
     * @uses ApplicationRules::setUnselectedOptionRequired()
     * @uses ApplicationRules::setSecondaryOptionCodeRequired()
     * @param bool $requiredForAllTravelers
     * @param bool $requiredForAllSegments
     * @param bool $requiredForAllSegmentsInOD
     * @param bool $unselectedOptionRequired
     * @param bool $secondaryOptionCodeRequired
     */
    public function __construct(?bool $requiredForAllTravelers = null, ?bool $requiredForAllSegments = null, ?bool $requiredForAllSegmentsInOD = null, ?bool $unselectedOptionRequired = null, ?bool $secondaryOptionCodeRequired = null)
    {
        $this
            ->setRequiredForAllTravelers($requiredForAllTravelers)
            ->setRequiredForAllSegments($requiredForAllSegments)
            ->setRequiredForAllSegmentsInOD($requiredForAllSegmentsInOD)
            ->setUnselectedOptionRequired($unselectedOptionRequired)
            ->setSecondaryOptionCodeRequired($secondaryOptionCodeRequired);
    }
    /**
     * Get RequiredForAllTravelers value
     * @return bool|null
     */
    public function getRequiredForAllTravelers(): ?bool
    {
        return $this->RequiredForAllTravelers;
    }
    /**
     * Set RequiredForAllTravelers value
     * @param bool $requiredForAllTravelers
     * @return \Travelport\Air\StructType\ApplicationRules
     */
    public function setRequiredForAllTravelers(?bool $requiredForAllTravelers = null): self
    {
        $this->RequiredForAllTravelers = $requiredForAllTravelers;
        
        return $this;
    }
    /**
     * Get RequiredForAllSegments value
     * @return bool|null
     */
    public function getRequiredForAllSegments(): ?bool
    {
        return $this->RequiredForAllSegments;
    }
    /**
     * Set RequiredForAllSegments value
     * @param bool $requiredForAllSegments
     * @return \Travelport\Air\StructType\ApplicationRules
     */
    public function setRequiredForAllSegments(?bool $requiredForAllSegments = null): self
    {
        $this->RequiredForAllSegments = $requiredForAllSegments;
        
        return $this;
    }
    /**
     * Get RequiredForAllSegmentsInOD value
     * @return bool|null
     */
    public function getRequiredForAllSegmentsInOD(): ?bool
    {
        return $this->RequiredForAllSegmentsInOD;
    }
    /**
     * Set RequiredForAllSegmentsInOD value
     * @param bool $requiredForAllSegmentsInOD
     * @return \Travelport\Air\StructType\ApplicationRules
     */
    public function setRequiredForAllSegmentsInOD(?bool $requiredForAllSegmentsInOD = null): self
    {
        $this->RequiredForAllSegmentsInOD = $requiredForAllSegmentsInOD;
        
        return $this;
    }
    /**
     * Get UnselectedOptionRequired value
     * @return bool|null
     */
    public function getUnselectedOptionRequired(): ?bool
    {
        return $this->UnselectedOptionRequired;
    }
    /**
     * Set UnselectedOptionRequired value
     * @param bool $unselectedOptionRequired
     * @return \Travelport\Air\StructType\ApplicationRules
     */
    public function setUnselectedOptionRequired(?bool $unselectedOptionRequired = null): self
    {
        $this->UnselectedOptionRequired = $unselectedOptionRequired;
        
        return $this;
    }
    /**
     * Get SecondaryOptionCodeRequired value
     * @return bool|null
     */
    public function getSecondaryOptionCodeRequired(): ?bool
    {
        return $this->SecondaryOptionCodeRequired;
    }
    /**
     * Set SecondaryOptionCodeRequired value
     * @param bool $secondaryOptionCodeRequired
     * @return \Travelport\Air\StructType\ApplicationRules
     */
    public function setSecondaryOptionCodeRequired(?bool $secondaryOptionCodeRequired = null): self
    {
        $this->SecondaryOptionCodeRequired = $secondaryOptionCodeRequired;
        
        return $this;
    }
}
