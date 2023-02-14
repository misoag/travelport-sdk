<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictionSeasonal StructType
 * Meta information extracted from the WSDL
 * - documentation: Fares Restricted based on the season requested. StartDate and EndDate are strings representing respective dates. If a year component is present then it signifies an exact date. If only day and month components are present then it
 * signifies a seasonal date, which means applicable for that date in any year
 * @subpackage Structs
 */
class FareRestrictionSeasonal extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The VariationByTravelDates
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $VariationByTravelDates = null;
    /**
     * The SeasonalRange1Ind
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange1Ind = null;
    /**
     * The SeasonalRange1StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange1StartDate = null;
    /**
     * The SeasonalRange1EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange1EndDate = null;
    /**
     * The SeasonalRange2Ind
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange2Ind = null;
    /**
     * The SeasonalRange2StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange2StartDate = null;
    /**
     * The SeasonalRange2EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SeasonalRange2EndDate = null;
    /**
     * Constructor method for FareRestrictionSeasonal
     * @uses FareRestrictionSeasonal::setComment()
     * @uses FareRestrictionSeasonal::setVariationByTravelDates()
     * @uses FareRestrictionSeasonal::setSeasonalRange1Ind()
     * @uses FareRestrictionSeasonal::setSeasonalRange1StartDate()
     * @uses FareRestrictionSeasonal::setSeasonalRange1EndDate()
     * @uses FareRestrictionSeasonal::setSeasonalRange2Ind()
     * @uses FareRestrictionSeasonal::setSeasonalRange2StartDate()
     * @uses FareRestrictionSeasonal::setSeasonalRange2EndDate()
     * @param string $comment
     * @param string $variationByTravelDates
     * @param string $seasonalRange1Ind
     * @param string $seasonalRange1StartDate
     * @param string $seasonalRange1EndDate
     * @param string $seasonalRange2Ind
     * @param string $seasonalRange2StartDate
     * @param string $seasonalRange2EndDate
     */
    public function __construct(?string $comment = null, ?string $variationByTravelDates = null, ?string $seasonalRange1Ind = null, ?string $seasonalRange1StartDate = null, ?string $seasonalRange1EndDate = null, ?string $seasonalRange2Ind = null, ?string $seasonalRange2StartDate = null, ?string $seasonalRange2EndDate = null)
    {
        $this
            ->setComment($comment)
            ->setVariationByTravelDates($variationByTravelDates)
            ->setSeasonalRange1Ind($seasonalRange1Ind)
            ->setSeasonalRange1StartDate($seasonalRange1StartDate)
            ->setSeasonalRange1EndDate($seasonalRange1EndDate)
            ->setSeasonalRange2Ind($seasonalRange2Ind)
            ->setSeasonalRange2StartDate($seasonalRange2StartDate)
            ->setSeasonalRange2EndDate($seasonalRange2EndDate);
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        
        return $this;
    }
    /**
     * Get VariationByTravelDates value
     * @return string|null
     */
    public function getVariationByTravelDates(): ?string
    {
        return $this->VariationByTravelDates;
    }
    /**
     * Set VariationByTravelDates value
     * @param string $variationByTravelDates
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setVariationByTravelDates(?string $variationByTravelDates = null): self
    {
        // validation for constraint: string
        if (!is_null($variationByTravelDates) && !is_string($variationByTravelDates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationByTravelDates, true), gettype($variationByTravelDates)), __LINE__);
        }
        $this->VariationByTravelDates = $variationByTravelDates;
        
        return $this;
    }
    /**
     * Get SeasonalRange1Ind value
     * @return string|null
     */
    public function getSeasonalRange1Ind(): ?string
    {
        return $this->SeasonalRange1Ind;
    }
    /**
     * Set SeasonalRange1Ind value
     * @param string $seasonalRange1Ind
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1Ind(?string $seasonalRange1Ind = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange1Ind) && !is_string($seasonalRange1Ind)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange1Ind, true), gettype($seasonalRange1Ind)), __LINE__);
        }
        $this->SeasonalRange1Ind = $seasonalRange1Ind;
        
        return $this;
    }
    /**
     * Get SeasonalRange1StartDate value
     * @return string|null
     */
    public function getSeasonalRange1StartDate(): ?string
    {
        return $this->SeasonalRange1StartDate;
    }
    /**
     * Set SeasonalRange1StartDate value
     * @param string $seasonalRange1StartDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1StartDate(?string $seasonalRange1StartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange1StartDate) && !is_string($seasonalRange1StartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange1StartDate, true), gettype($seasonalRange1StartDate)), __LINE__);
        }
        $this->SeasonalRange1StartDate = $seasonalRange1StartDate;
        
        return $this;
    }
    /**
     * Get SeasonalRange1EndDate value
     * @return string|null
     */
    public function getSeasonalRange1EndDate(): ?string
    {
        return $this->SeasonalRange1EndDate;
    }
    /**
     * Set SeasonalRange1EndDate value
     * @param string $seasonalRange1EndDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1EndDate(?string $seasonalRange1EndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange1EndDate) && !is_string($seasonalRange1EndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange1EndDate, true), gettype($seasonalRange1EndDate)), __LINE__);
        }
        $this->SeasonalRange1EndDate = $seasonalRange1EndDate;
        
        return $this;
    }
    /**
     * Get SeasonalRange2Ind value
     * @return string|null
     */
    public function getSeasonalRange2Ind(): ?string
    {
        return $this->SeasonalRange2Ind;
    }
    /**
     * Set SeasonalRange2Ind value
     * @param string $seasonalRange2Ind
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2Ind(?string $seasonalRange2Ind = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange2Ind) && !is_string($seasonalRange2Ind)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange2Ind, true), gettype($seasonalRange2Ind)), __LINE__);
        }
        $this->SeasonalRange2Ind = $seasonalRange2Ind;
        
        return $this;
    }
    /**
     * Get SeasonalRange2StartDate value
     * @return string|null
     */
    public function getSeasonalRange2StartDate(): ?string
    {
        return $this->SeasonalRange2StartDate;
    }
    /**
     * Set SeasonalRange2StartDate value
     * @param string $seasonalRange2StartDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2StartDate(?string $seasonalRange2StartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange2StartDate) && !is_string($seasonalRange2StartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange2StartDate, true), gettype($seasonalRange2StartDate)), __LINE__);
        }
        $this->SeasonalRange2StartDate = $seasonalRange2StartDate;
        
        return $this;
    }
    /**
     * Get SeasonalRange2EndDate value
     * @return string|null
     */
    public function getSeasonalRange2EndDate(): ?string
    {
        return $this->SeasonalRange2EndDate;
    }
    /**
     * Set SeasonalRange2EndDate value
     * @param string $seasonalRange2EndDate
     * @return \Travelport\UniversalRecord\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2EndDate(?string $seasonalRange2EndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($seasonalRange2EndDate) && !is_string($seasonalRange2EndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seasonalRange2EndDate, true), gettype($seasonalRange2EndDate)), __LINE__);
        }
        $this->SeasonalRange2EndDate = $seasonalRange2EndDate;
        
        return $this;
    }
}
