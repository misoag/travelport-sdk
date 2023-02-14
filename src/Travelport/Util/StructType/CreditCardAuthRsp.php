<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardAuthRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: The response to the CreditCardAuthReq.
 * @subpackage Structs
 */
class CreditCardAuthRsp extends BaseRsp
{
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:CreditCardAuth
     * @var \Travelport\Util\StructType\CreditCardAuth[]
     */
    protected ?array $CreditCardAuth = null;
    /**
     * Constructor method for CreditCardAuthRsp
     * @uses CreditCardAuthRsp::setCreditCardAuth()
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     */
    public function __construct(?array $creditCardAuth = null)
    {
        $this
            ->setCreditCardAuth($creditCardAuth);
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Util\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * This method is responsible for validating the values passed to the setCreditCardAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardAuth method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardAuthForArrayConstraintsFromSetCreditCardAuth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $creditCardAuthRspCreditCardAuthItem) {
            // validation for constraint: itemType
            if (!$creditCardAuthRspCreditCardAuthItem instanceof \Travelport\Util\StructType\CreditCardAuth) {
                $invalidValues[] = is_object($creditCardAuthRspCreditCardAuthItem) ? get_class($creditCardAuthRspCreditCardAuthItem) : sprintf('%s(%s)', gettype($creditCardAuthRspCreditCardAuthItem), var_export($creditCardAuthRspCreditCardAuthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\Util\StructType\CreditCardAuthRsp
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardAuthArrayErrorMessage = self::validateCreditCardAuthForArrayConstraintsFromSetCreditCardAuth($creditCardAuth))) {
            throw new InvalidArgumentException($creditCardAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($creditCardAuth) && count($creditCardAuth) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($creditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardAuth $item
     * @return \Travelport\Util\StructType\CreditCardAuthRsp
     */
    public function addToCreditCardAuth(\Travelport\Util\StructType\CreditCardAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CreditCardAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardAuth property can only contain items of type \Travelport\Util\StructType\CreditCardAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CreditCardAuth) && count($this->CreditCardAuth) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CreditCardAuth)), __LINE__);
        }
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
}
