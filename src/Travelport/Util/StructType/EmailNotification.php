<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailNotification StructType
 * Meta information extracted from the WSDL
 * - documentation: Send Email Notification to the emails specified in Booking Traveler. Supported Provider : 1G/1V
 * @subpackage Structs
 */
class EmailNotification extends AbstractStructBase
{
    /**
     * The Recipients
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Recipients;
    /**
     * The EmailRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler Email. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $EmailRef = null;
    /**
     * Constructor method for EmailNotification
     * @uses EmailNotification::setRecipients()
     * @uses EmailNotification::setEmailRef()
     * @param string $recipients
     * @param string[] $emailRef
     */
    public function __construct(string $recipients, ?array $emailRef = null)
    {
        $this
            ->setRecipients($recipients)
            ->setEmailRef($emailRef);
    }
    /**
     * Get Recipients value
     * @return string
     */
    public function getRecipients(): string
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param string $recipients
     * @return \Travelport\Util\StructType\EmailNotification
     */
    public function setRecipients(string $recipients): self
    {
        // validation for constraint: string
        if (!is_null($recipients) && !is_string($recipients)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipients, true), gettype($recipients)), __LINE__);
        }
        $this->Recipients = $recipients;
        
        return $this;
    }
    /**
     * Get EmailRef value
     * @return string[]
     */
    public function getEmailRef(): ?array
    {
        return $this->EmailRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEmailRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailRefForArrayConstraintFromSetEmailRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $emailNotificationEmailRefItem) {
            // validation for constraint: itemType
            if (!is_string($emailNotificationEmailRefItem)) {
                $invalidValues[] = is_object($emailNotificationEmailRefItem) ? get_class($emailNotificationEmailRefItem) : sprintf('%s(%s)', gettype($emailNotificationEmailRefItem), var_export($emailNotificationEmailRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailRef value
     * @throws InvalidArgumentException
     * @param string[] $emailRef
     * @return \Travelport\Util\StructType\EmailNotification
     */
    public function setEmailRef(?array $emailRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailRefArrayErrorMessage = self::validateEmailRefForArrayConstraintFromSetEmailRef($emailRef))) {
            throw new InvalidArgumentException($emailRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($emailRef) && count($emailRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($emailRef)), __LINE__);
        }
        $this->EmailRef = $emailRef;
        
        return $this;
    }
    /**
     * Add item to EmailRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\EmailNotification
     */
    public function addToEmailRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The EmailRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EmailRef) && count($this->EmailRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EmailRef)), __LINE__);
        }
        $this->EmailRef[] = $item;
        
        return $this;
    }
}
