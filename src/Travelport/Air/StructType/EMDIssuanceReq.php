<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDIssuanceReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Electronic Miscellaneous Document issuance request.Supported providers are 1V/1G/1P
 * @subpackage Structs
 */
class EMDIssuanceReq extends BaseReq
{
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Universal Record locator code. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $UniversalRecordLocatorCode;
    /**
     * The ProviderReservationDetail
     * Meta information extracted from the WSDL
     * - ref: common:ProviderReservationDetail
     * @var \Travelport\Air\StructType\TypeProviderReservationDetail|null
     */
    public ?\Travelport\Air\StructType\TypeProviderReservationDetail $ProviderReservationDetail = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The IssuanceModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: IssuanceModifiers
     * @var \Travelport\Air\StructType\IssuanceModifiers|null
     */
    public ?\Travelport\Air\StructType\IssuanceModifiers $IssuanceModifiers = null;
    /**
     * The SelectionModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SelectionModifiers
     * @var \Travelport\Air\StructType\SelectionModifiers|null
     */
    public ?\Travelport\Air\StructType\SelectionModifiers $SelectionModifiers = null;
    /**
     * The ShowDetails
     * Meta information extracted from the WSDL
     * - documentation: This attribute gives the control to request for complete information on Issued EMDs or minimal information.Requesting complete information leads to possible multiple supplier calls for fetching all the details.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ShowDetails = null;
    /**
     * The IssueAllOpenSVC
     * Meta information extracted from the WSDL
     * - documentation: Issues EMDS to all SVC segments. If it is true, TicketNumber and SVC segment reference need not be provided. Supported provider 1P.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IssueAllOpenSVC = null;
    /**
     * Constructor method for EMDIssuanceReq
     * @uses EMDIssuanceReq::setUniversalRecordLocatorCode()
     * @uses EMDIssuanceReq::setProviderReservationDetail()
     * @uses EMDIssuanceReq::setTicketNumber()
     * @uses EMDIssuanceReq::setIssuanceModifiers()
     * @uses EMDIssuanceReq::setSelectionModifiers()
     * @uses EMDIssuanceReq::setShowDetails()
     * @uses EMDIssuanceReq::setIssueAllOpenSVC()
     * @param string $universalRecordLocatorCode
     * @param \Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail
     * @param string $ticketNumber
     * @param \Travelport\Air\StructType\IssuanceModifiers $issuanceModifiers
     * @param \Travelport\Air\StructType\SelectionModifiers $selectionModifiers
     * @param bool $showDetails
     * @param bool $issueAllOpenSVC
     */
    public function __construct(string $universalRecordLocatorCode, ?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null, ?string $ticketNumber = null, ?\Travelport\Air\StructType\IssuanceModifiers $issuanceModifiers = null, ?\Travelport\Air\StructType\SelectionModifiers $selectionModifiers = null, ?bool $showDetails = false, ?bool $issueAllOpenSVC = false)
    {
        $this
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderReservationDetail($providerReservationDetail)
            ->setTicketNumber($ticketNumber)
            ->setIssuanceModifiers($issuanceModifiers)
            ->setSelectionModifiers($selectionModifiers)
            ->setShowDetails($showDetails)
            ->setIssueAllOpenSVC($issueAllOpenSVC);
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string
     */
    public function getUniversalRecordLocatorCode(): string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderReservationDetail value
     * @return \Travelport\Air\StructType\TypeProviderReservationDetail|null
     */
    public function getProviderReservationDetail(): ?\Travelport\Air\StructType\TypeProviderReservationDetail
    {
        return $this->ProviderReservationDetail;
    }
    /**
     * Set ProviderReservationDetail value
     * @param \Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setProviderReservationDetail(?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null): self
    {
        $this->ProviderReservationDetail = $providerReservationDetail;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get IssuanceModifiers value
     * @return \Travelport\Air\StructType\IssuanceModifiers|null
     */
    public function getIssuanceModifiers(): ?\Travelport\Air\StructType\IssuanceModifiers
    {
        return $this->IssuanceModifiers;
    }
    /**
     * Set IssuanceModifiers value
     * @param \Travelport\Air\StructType\IssuanceModifiers $issuanceModifiers
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setIssuanceModifiers(?\Travelport\Air\StructType\IssuanceModifiers $issuanceModifiers = null): self
    {
        $this->IssuanceModifiers = $issuanceModifiers;
        
        return $this;
    }
    /**
     * Get SelectionModifiers value
     * @return \Travelport\Air\StructType\SelectionModifiers|null
     */
    public function getSelectionModifiers(): ?\Travelport\Air\StructType\SelectionModifiers
    {
        return $this->SelectionModifiers;
    }
    /**
     * Set SelectionModifiers value
     * @param \Travelport\Air\StructType\SelectionModifiers $selectionModifiers
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setSelectionModifiers(?\Travelport\Air\StructType\SelectionModifiers $selectionModifiers = null): self
    {
        $this->SelectionModifiers = $selectionModifiers;
        
        return $this;
    }
    /**
     * Get ShowDetails value
     * @return bool|null
     */
    public function getShowDetails(): ?bool
    {
        return $this->ShowDetails;
    }
    /**
     * Set ShowDetails value
     * @param bool $showDetails
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setShowDetails(?bool $showDetails = false): self
    {
        $this->ShowDetails = $showDetails;
        
        return $this;
    }
    /**
     * Get IssueAllOpenSVC value
     * @return bool|null
     */
    public function getIssueAllOpenSVC(): ?bool
    {
        return $this->IssueAllOpenSVC;
    }
    /**
     * Set IssueAllOpenSVC value
     * @param bool $issueAllOpenSVC
     * @return \Travelport\Air\StructType\EMDIssuanceReq
     */
    public function setIssueAllOpenSVC(?bool $issueAllOpenSVC = false): self
    {
        $this->IssueAllOpenSVC = $issueAllOpenSVC;
        
        return $this;
    }
}
