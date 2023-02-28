<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardAuthReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Performs a credit card authorization to validate a credit card for use during booking
 * @subpackage Structs
 */
class CreditCardAuthReq extends BaseReq
{
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $PlatingCarrier;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The locator code of the PNR that the MCO is created for. | The locator code of the PNR that the MIR is created for. | A locator code that identifies a PNR or searches for one.
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:LocatorCode
     * @var string|null
     */
    protected ?string $LocatorCode = null;
    /**
     * The CreditCardPaymentAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: CreditCardPaymentAuth
     * @var \Travelport\Util\StructType\CreditCardPaymentAuth[]
     */
    protected ?array $CreditCardPaymentAuth = null;
    /**
     * Constructor method for CreditCardAuthReq
     * @uses CreditCardAuthReq::setPlatingCarrier()
     * @uses CreditCardAuthReq::setLocatorCode()
     * @uses CreditCardAuthReq::setCreditCardPaymentAuth()
     * @param string $platingCarrier
     * @param string $locatorCode
     * @param \Travelport\Util\StructType\CreditCardPaymentAuth[] $creditCardPaymentAuth
     */
    public function __construct(string $platingCarrier, ?string $locatorCode = null, ?array $creditCardPaymentAuth = null)
    {
        $this
            ->setPlatingCarrier($platingCarrier)
            ->setLocatorCode($locatorCode)
            ->setCreditCardPaymentAuth($creditCardPaymentAuth);
    }
    /**
     * Get PlatingCarrier value
     * @return string
     */
    public function getPlatingCarrier(): string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Util\StructType\CreditCardAuthReq
     */
    public function setPlatingCarrier(string $platingCarrier): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string|null
     */
    public function getLocatorCode(): ?string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\Util\StructType\CreditCardAuthReq
     */
    public function setLocatorCode(?string $locatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get CreditCardPaymentAuth value
     * @return \Travelport\Util\StructType\CreditCardPaymentAuth[]
     */
    public function getCreditCardPaymentAuth(): ?array
    {
        return $this->CreditCardPaymentAuth;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCardPaymentAuth method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardPaymentAuth method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardPaymentAuthForArrayConstraintFromSetCreditCardPaymentAuth(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $creditCardAuthReqCreditCardPaymentAuthItem) {
            // validation for constraint: itemType
            if (!$creditCardAuthReqCreditCardPaymentAuthItem instanceof \Travelport\Util\StructType\CreditCardPaymentAuth) {
                $invalidValues[] = is_object($creditCardAuthReqCreditCardPaymentAuthItem) ? get_class($creditCardAuthReqCreditCardPaymentAuthItem) : sprintf('%s(%s)', gettype($creditCardAuthReqCreditCardPaymentAuthItem), var_export($creditCardAuthReqCreditCardPaymentAuthItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardPaymentAuth property can only contain items of type \Travelport\Util\StructType\CreditCardPaymentAuth, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardPaymentAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardPaymentAuth[] $creditCardPaymentAuth
     * @return \Travelport\Util\StructType\CreditCardAuthReq
     */
    public function setCreditCardPaymentAuth(?array $creditCardPaymentAuth = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardPaymentAuthArrayErrorMessage = self::validateCreditCardPaymentAuthForArrayConstraintFromSetCreditCardPaymentAuth($creditCardPaymentAuth))) {
            throw new InvalidArgumentException($creditCardPaymentAuthArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($creditCardPaymentAuth) && count($creditCardPaymentAuth) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($creditCardPaymentAuth)), __LINE__);
        }
        $this->CreditCardPaymentAuth = $creditCardPaymentAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardPaymentAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CreditCardPaymentAuth $item
     * @return \Travelport\Util\StructType\CreditCardAuthReq
     */
    public function addToCreditCardPaymentAuth(\Travelport\Util\StructType\CreditCardPaymentAuth $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CreditCardPaymentAuth) {
            throw new InvalidArgumentException(sprintf('The CreditCardPaymentAuth property can only contain items of type \Travelport\Util\StructType\CreditCardPaymentAuth, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CreditCardPaymentAuth) && count($this->CreditCardPaymentAuth) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CreditCardPaymentAuth)), __LINE__);
        }
        $this->CreditCardPaymentAuth[] = $item;
        
        return $this;
    }
}
