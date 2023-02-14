<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?bool $RequiredForAllTravelers = null;
    /**
     * The RequiredForAllSegments
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option needs to be applied to all segments in the itinerary if selected
     * @var bool|null
     */
    protected ?bool $RequiredForAllSegments = null;
    /**
     * The RequiredForAllSegmentsInOD
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option needs to be applied to all segments in a origin / destination (connection flights) if selected for one segment in the OD
     * @var bool|null
     */
    protected ?bool $RequiredForAllSegmentsInOD = null;
    /**
     * The UnselectedOptionRequired
     * Meta information extracted from the WSDL
     * - documentation: If an UnselectedOption is present in the option, then the Unselected option needs to be selected even if the option is not selected when this flag is set to true
     * @var bool|null
     */
    protected ?bool $UnselectedOptionRequired = null;
    /**
     * The SecondaryOptionCodeRequired
     * Meta information extracted from the WSDL
     * - documentation: If set to true, the secondary option code is required for this option
     * @var bool|null
     */
    protected ?bool $SecondaryOptionCodeRequired = null;
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
     * @return \StructType\ApplicationRules
     */
    public function setRequiredForAllTravelers(?bool $requiredForAllTravelers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiredForAllTravelers) && !is_bool($requiredForAllTravelers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiredForAllTravelers, true), gettype($requiredForAllTravelers)), __LINE__);
        }
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
     * @return \StructType\ApplicationRules
     */
    public function setRequiredForAllSegments(?bool $requiredForAllSegments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiredForAllSegments) && !is_bool($requiredForAllSegments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiredForAllSegments, true), gettype($requiredForAllSegments)), __LINE__);
        }
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
     * @return \StructType\ApplicationRules
     */
    public function setRequiredForAllSegmentsInOD(?bool $requiredForAllSegmentsInOD = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiredForAllSegmentsInOD) && !is_bool($requiredForAllSegmentsInOD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiredForAllSegmentsInOD, true), gettype($requiredForAllSegmentsInOD)), __LINE__);
        }
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
     * @return \StructType\ApplicationRules
     */
    public function setUnselectedOptionRequired(?bool $unselectedOptionRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unselectedOptionRequired) && !is_bool($unselectedOptionRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unselectedOptionRequired, true), gettype($unselectedOptionRequired)), __LINE__);
        }
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
     * @return \StructType\ApplicationRules
     */
    public function setSecondaryOptionCodeRequired(?bool $secondaryOptionCodeRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($secondaryOptionCodeRequired) && !is_bool($secondaryOptionCodeRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secondaryOptionCodeRequired, true), gettype($secondaryOptionCodeRequired)), __LINE__);
        }
        $this->SecondaryOptionCodeRequired = $secondaryOptionCodeRequired;
        
        return $this;
    }
}
