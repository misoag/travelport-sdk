<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitTicketingSearch StructType
 * Meta information extracted from the WSDL
 * - documentation: SplitTicketingSearch is optional. Used to return both One-Way and Roundtrip fares in a single search response. Applicable to 1G, 1V, 1P only, the price points results path, and a simple roundtrip search only. Cannot be used in
 * combination with Flex options.
 * @subpackage Structs
 */
class SplitTicketingSearch extends AbstractStructBase
{
    /**
     * The RoundTrip
     * Meta information extracted from the WSDL
     * - documentation: Percentage of Roundtrip price points to be returned in the search response. This should be an even number. The One-Way price points returned in the response would be evenly distributed between the outbound and the inbound.
     * - use: optional
     * @var int|null
     */
    public ?int $RoundTrip = null;
    /**
     * Constructor method for SplitTicketingSearch
     * @uses SplitTicketingSearch::setRoundTrip()
     * @param int $roundTrip
     */
    public function __construct(?int $roundTrip = null)
    {
        $this
            ->setRoundTrip($roundTrip);
    }
    /**
     * Get RoundTrip value
     * @return int|null
     */
    public function getRoundTrip(): ?int
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param int $roundTrip
     * @return \Travelport\Air\StructType\SplitTicketingSearch
     */
    public function setRoundTrip(?int $roundTrip = null): self
    {
        $this->RoundTrip = $roundTrip;
        
        return $this;
    }
}
