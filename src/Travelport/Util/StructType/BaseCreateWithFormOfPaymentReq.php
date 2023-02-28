<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCreateWithFormOfPaymentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider:1G,1V,1P,ACH,SDK. | Container for BaseCreateReservation along with Form Of Payment
 * @subpackage Structs
 */
class BaseCreateWithFormOfPaymentReq extends BaseCreateReservationReq
{
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\Util\StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * Constructor method for BaseCreateWithFormOfPaymentReq
     * @uses BaseCreateWithFormOfPaymentReq::setFormOfPayment()
     * @param \Travelport\Util\StructType\FormOfPayment[] $formOfPayment
     */
    public function __construct(?array $formOfPayment = null)
    {
        $this
            ->setFormOfPayment($formOfPayment);
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
     * This method is responsible for validating the value(s) passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseCreateWithFormOfPaymentReqFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$baseCreateWithFormOfPaymentReqFormOfPaymentItem instanceof \Travelport\Util\StructType\FormOfPayment) {
                $invalidValues[] = is_object($baseCreateWithFormOfPaymentReqFormOfPaymentItem) ? get_class($baseCreateWithFormOfPaymentReqFormOfPaymentItem) : sprintf('%s(%s)', gettype($baseCreateWithFormOfPaymentReqFormOfPaymentItem), var_export($baseCreateWithFormOfPaymentReqFormOfPaymentItem, true));
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
     * @return \Travelport\Util\StructType\BaseCreateWithFormOfPaymentReq
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FormOfPayment $item
     * @return \Travelport\Util\StructType\BaseCreateWithFormOfPaymentReq
     */
    public function addToFormOfPayment(\Travelport\Util\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \Travelport\Util\StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
}
