<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketFailureInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Will be optionally returned as part if one or all ticketing requests fail.
 * @subpackage Structs
 */
class TypeTicketFailureInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - ref: common:TicketNumber
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - choice: TCRNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $TCRNumber = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * @var string[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Message = null;
    /**
     * Constructor method for typeTicketFailureInfo
     * @uses TypeTicketFailureInfo::setCode()
     * @uses TypeTicketFailureInfo::setTicketNumber()
     * @uses TypeTicketFailureInfo::setName()
     * @uses TypeTicketFailureInfo::setTCRNumber()
     * @uses TypeTicketFailureInfo::setBookingTravelerRef()
     * @uses TypeTicketFailureInfo::setMessage()
     * @param int $code
     * @param string $ticketNumber
     * @param \Travelport\Util\StructType\Name $name
     * @param string $tCRNumber
     * @param string[] $bookingTravelerRef
     * @param string $message
     */
    public function __construct(int $code, ?string $ticketNumber = null, ?\Travelport\Util\StructType\Name $name = null, ?string $tCRNumber = null, ?array $bookingTravelerRef = null, ?string $message = null)
    {
        $this
            ->setCode($code)
            ->setTicketNumber($ticketNumber)
            ->setName($name)
            ->setTCRNumber($tCRNumber)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setMessage($message);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setCode(int $code): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
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
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketNumber) && mb_strlen((string) $ticketNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get TCRNumber value
     * @return string|null
     */
    public function getTCRNumber(): ?string
    {
        return isset($this->TCRNumber) ? $this->TCRNumber : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTCRNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTCRNumber method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTCRNumberForChoiceConstraintsFromSetTCRNumber($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TCRNumber can\'t be set as the property %s is already set. Only one property must be set among these properties: TCRNumber, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TCRNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $tCRNumber
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setTCRNumber(?string $tCRNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($tCRNumber) && !is_string($tCRNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tCRNumber, true), gettype($tCRNumber)), __LINE__);
        }
        // validation for constraint: choice(TCRNumber)
        if ('' !== ($tCRNumberChoiceErrorMessage = self::validateTCRNumberForChoiceConstraintsFromSetTCRNumber($tCRNumber))) {
            throw new InvalidArgumentException($tCRNumberChoiceErrorMessage, __LINE__);
        }
        if (is_null($tCRNumber) || (is_array($tCRNumber) && empty($tCRNumber))) {
            unset($this->TCRNumber);
        } else {
            $this->TCRNumber = $tCRNumber;
        }
        
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
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeTicketFailureInfoBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($typeTicketFailureInfoBookingTravelerRefItem)) {
                $invalidValues[] = is_object($typeTicketFailureInfoBookingTravelerRefItem) ? get_class($typeTicketFailureInfoBookingTravelerRefItem) : sprintf('%s(%s)', gettype($typeTicketFailureInfoBookingTravelerRefItem), var_export($typeTicketFailureInfoBookingTravelerRefItem, true));
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
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
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
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
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
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Travelport\Util\StructType\TypeTicketFailureInfo
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
}
