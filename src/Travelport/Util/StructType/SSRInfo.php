<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSRInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Bundle SSR with BookingTraveler reference in order to add SSR post booking
 * @subpackage Structs
 */
class SSRInfo extends AbstractStructBase
{
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - ref: SSR
     * @var \Travelport\Util\StructType\SSR|null
     */
    protected ?\Travelport\Util\StructType\SSR $SSR = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * Constructor method for SSRInfo
     * @uses SSRInfo::setSSR()
     * @uses SSRInfo::setBookingTravelerRef()
     * @param \Travelport\Util\StructType\SSR $sSR
     * @param string[] $bookingTravelerRef
     */
    public function __construct(?\Travelport\Util\StructType\SSR $sSR = null, ?array $bookingTravelerRef = null)
    {
        $this
            ->setSSR($sSR)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get SSR value
     * @return \Travelport\Util\StructType\SSR|null
     */
    public function getSSR(): ?\Travelport\Util\StructType\SSR
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Util\StructType\SSR $sSR
     * @return \Travelport\Util\StructType\SSRInfo
     */
    public function setSSR(?\Travelport\Util\StructType\SSR $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sSRInfoBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($sSRInfoBookingTravelerRefItem)) {
                $invalidValues[] = is_object($sSRInfoBookingTravelerRefItem) ? get_class($sSRInfoBookingTravelerRefItem) : sprintf('%s(%s)', gettype($sSRInfoBookingTravelerRefItem), var_export($sSRInfoBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string[] $bookingTravelerRef
     * @return \Travelport\Util\StructType\SSRInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\SSRInfo
     */
    public function addToBookingTravelerRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
}
