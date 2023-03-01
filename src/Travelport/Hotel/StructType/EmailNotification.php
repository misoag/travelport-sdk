<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $Recipients;
    /**
     * The EmailRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler Email. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $EmailRef = null;
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
     * @return \Travelport\Hotel\StructType\EmailNotification
     */
    public function setRecipients(string $recipients): self
    {
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
     * Set EmailRef value
     * @param string[] $emailRef
     * @return \Travelport\Hotel\StructType\EmailNotification
     */
    public function setEmailRef(?array $emailRef = null): self
    {
        $this->EmailRef = $emailRef;
        
        return $this;
    }
    /**
     * Add item to EmailRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\EmailNotification
     */
    public function addToEmailRef(string $item): self
    {
        $this->EmailRef[] = $item;
        
        return $this;
    }
}
