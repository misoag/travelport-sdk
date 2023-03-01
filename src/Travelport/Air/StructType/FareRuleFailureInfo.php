<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?array $Reason = null;
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
     * Set Reason value
     * @param string[] $reason
     * @return \Travelport\Air\StructType\FareRuleFailureInfo
     */
    public function setReason(?array $reason = null): self
    {
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Add item to Reason value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\FareRuleFailureInfo
     */
    public function addToReason(string $item): self
    {
        $this->Reason[] = $item;
        
        return $this;
    }
}
