<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $Comment = null;
    /**
     * The VariationByTravelDates
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $VariationByTravelDates = null;
    /**
     * The SeasonalRange1Ind
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange1Ind = null;
    /**
     * The SeasonalRange1StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange1StartDate = null;
    /**
     * The SeasonalRange1EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange1EndDate = null;
    /**
     * The SeasonalRange2Ind
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange2Ind = null;
    /**
     * The SeasonalRange2StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange2StartDate = null;
    /**
     * The SeasonalRange2EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SeasonalRange2EndDate = null;
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setComment(?string $comment = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setVariationByTravelDates(?string $variationByTravelDates = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1Ind(?string $seasonalRange1Ind = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1StartDate(?string $seasonalRange1StartDate = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange1EndDate(?string $seasonalRange1EndDate = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2Ind(?string $seasonalRange2Ind = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2StartDate(?string $seasonalRange2StartDate = null): self
    {
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
     * @return \Travelport\Air\StructType\FareRestrictionSeasonal
     */
    public function setSeasonalRange2EndDate(?string $seasonalRange2EndDate = null): self
    {
        $this->SeasonalRange2EndDate = $seasonalRange2EndDate;
        
        return $this;
    }
}
