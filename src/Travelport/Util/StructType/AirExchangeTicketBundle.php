<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeTicketBundle StructType
 * @subpackage Structs
 */
class AirExchangeTicketBundle extends AbstractStructBase
{
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
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\Util\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Util\StructType\WaiverCode|null
     */
    protected ?\Travelport\Util\StructType\WaiverCode $WaiverCode = null;
    /**
     * Constructor method for AirExchangeTicketBundle
     * @uses AirExchangeTicketBundle::setTicketNumber()
     * @uses AirExchangeTicketBundle::setFormOfPayment()
     * @uses AirExchangeTicketBundle::setFormOfPaymentRef()
     * @uses AirExchangeTicketBundle::setWaiverCode()
     * @param string $ticketNumber
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     */
    public function __construct(?string $ticketNumber = null, ?array $formOfPayment = null, ?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?\Travelport\Util\StructType\WaiverCode $waiverCode = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setWaiverCode($waiverCode);
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
     * @return \Travelport\Util\StructType\AirExchangeTicketBundle
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
     * Get FormOfPayment value
     * @return \Travelport\Util\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeTicketBundleFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$airExchangeTicketBundleFormOfPaymentItem instanceof \Travelport\Util\StructType\FormOfPayment) {
                $invalidValues[] = is_object($airExchangeTicketBundleFormOfPaymentItem) ? get_class($airExchangeTicketBundleFormOfPaymentItem) : sprintf('%s(%s)', gettype($airExchangeTicketBundleFormOfPaymentItem), var_export($airExchangeTicketBundleFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Util\StructType\AirExchangeTicketBundle
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($formOfPayment) && count($formOfPayment) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $item
     * @return \Travelport\Util\StructType\AirExchangeTicketBundle
     */
    public function addToFormOfPayment(\Travelport\Util\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Util\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Util\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Util\StructType\AirExchangeTicketBundle
     */
    public function setFormOfPaymentRef(?\Travelport\Util\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Util\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Util\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Util\StructType\WaiverCode $waiverCode
     * @return \Travelport\Util\StructType\AirExchangeTicketBundle
     */
    public function setWaiverCode(?\Travelport\Util\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
}
