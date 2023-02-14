<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns fare rule failure reason codes when fare basis code is forced.
 * @subpackage Structs
 */
class FareRuleFailureInfo extends AbstractStructBase
{
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason codes for Fare rule failure. Following values will be supported. MinimumStayFailure, AdvPurchaseFailure, PICTypeFailure [Passenger Identification Code Failure], StopoverTransferFailure, DateSeasonalityFailure, RoutingFailure,
     * MileageFailure, DayTimeFailure, OpenJawUsageFailure, IndirectTravelProvision, SalesRestrictionNotMet, FICNAFare, HIFFailure [Higher Intermediate Fare/Point or Mileage Exceptions failures], IntlSurfaceSector, CurrencyUsageFailure, DiscountApplFailure,
     * FootNoteFailure, DayTimeApplCatNotMet, DayTimeApplCatIncomplete, SeasonalityCatNotMet, SeasonalityCatIncomplete, FlightApplCatNotMet, FlightApplCatIncomplete, AdvResvAdvTicketCatNotMet, AdvResvAdvTicketCatIncomplete, BookingClassFailure,
     * MinStayCatNotMet, MinStayCatIncomplete, StopoverCatNotMet, StopoverCatIncomplete, PermittedCombinationCatNotMet, PermittedCombinationCatNotIncomplete, BlackoutCatNotMet, BlackoutCatNotIncomplete, AccomTvlReqCatNotMet, AccomTvlReqCatIncomplete,
     * SalesRestCatNotMet, SalesRestCatIncomplete, EligibilityCatNotMet, EligibilityCatIncomplete, TransfersCatNotMet, TransfersCatIncomplete, TransfersRoutingFailure, HIPMileageCatNotMet [Higher Intermediate Point or Mileage Exception categories not met],
     * HIPMileageCatIncomplete [Higher Intermediate Point or Mileage Exceptions categories incomplete], ChildDiscountCatNotMet, ChildDiscountCatIncomplete, TourConductorDiscCatNotMet, TourConductorDiscCatIncomplete, AgentDiscountCatNotMet,
     * AgentDiscountCatIncomplete, OtherDiscountCatNotMet, OtherDiscountCatIncomplete, MiscFareTagCatNotMet, MiscFareTagCatIncomplete, FareByRuleCatNotMet, FareByRuleCatIncomplete, VisitCountryCatNotMet, VisitCountryCatIncomplete, NegFaresCatNotMet,
     * NegFaresCatIncomplete, OthFailurePTCFailed, OthFailureRecFailed, CombineabilityFailure, TravelRestrictionNotMet, SurchargesNotMet, MaximumStayFailure, FareUsageFailure, IATAFareNotValid, RecordOneFailure, Cat01EligibilityFailure,
     * FlightApplicationsFailure, FootNoteFailure, Cat11BlackOutfailure, Cat13AccompaniedTravelRequirementFailure, Cat19ChildDiscountFailure, Cat20TourDiscountFailure, Cat21AgentDiscountApplicationFail, YYSuppressionTableFailure, HostUseOnly87,
     * HostUseOnly88, HostUseOnly89, HostUseOnly90, HostUseOnly99, HostUseOnly100, HostUseOnly105, HostUseOnly108, HostUseOnly111, HostUseOnly112, HostUseOnly113, HostUseOnly114, HostUseOnly121, HostUseOnly122, SpareForFutureIndicators,
     * YYSuppressionTableFailed, HIPCheckFailed, TourCodeFail, AbonnmentFareFailure, FailedSurfaceSector, IndirectTravelFailed, FailedCurrencyUsage, CAT12NotMet
     * - base: xs:string
     * - maxOccurs: 999
     * @var string[]
     */
    protected ?array $Reason = null;
    /**
     * Constructor method for FareRuleFailureInfo
     * @uses FareRuleFailureInfo::setReason()
     * @param string[] $reason
     */
    public function __construct(?array $reason = null)
    {
        $this
            ->setReason($reason);
    }
    /**
     * Get Reason value
     * @return string[]
     */
    public function getReason(): ?array
    {
        return $this->Reason;
    }
    /**
     * This method is responsible for validating the values passed to the setReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonForArrayConstraintsFromSetReason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleFailureInfoReasonItem) {
            // validation for constraint: itemType
            if (!is_string($fareRuleFailureInfoReasonItem)) {
                $invalidValues[] = is_object($fareRuleFailureInfoReasonItem) ? get_class($fareRuleFailureInfoReasonItem) : sprintf('%s(%s)', gettype($fareRuleFailureInfoReasonItem), var_export($fareRuleFailureInfoReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Reason property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Reason value
     * @throws InvalidArgumentException
     * @param string[] $reason
     * @return \Travelport\UniversalRecord\StructType\FareRuleFailureInfo
     */
    public function setReason(?array $reason = null): self
    {
        // validation for constraint: array
        if ('' !== ($reasonArrayErrorMessage = self::validateReasonForArrayConstraintsFromSetReason($reason))) {
            throw new InvalidArgumentException($reasonArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($reason) && count($reason) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Add item to Reason value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\FareRuleFailureInfo
     */
    public function addToReason(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Reason property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Reason) && count($this->Reason) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Reason)), __LINE__);
        }
        $this->Reason[] = $item;
        
        return $this;
    }
}
