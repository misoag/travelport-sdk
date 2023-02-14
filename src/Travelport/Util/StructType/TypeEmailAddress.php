<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeEmailAddress StructType
 * @subpackage Structs
 */
class TypeEmailAddress extends AbstractStructBase
{
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - ref: common:Email
     * @var \Travelport\Util\StructType\Email|null
     */
    protected ?\Travelport\Util\StructType\Email $Email = null;
    /**
     * The SimpleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:SimpleName
     * @var string|null
     */
    protected ?string $SimpleName = null;
    /**
     * Constructor method for typeEmailAddress
     * @uses TypeEmailAddress::setEmail()
     * @uses TypeEmailAddress::setSimpleName()
     * @param \Travelport\Util\StructType\Email $email
     * @param string $simpleName
     */
    public function __construct(?\Travelport\Util\StructType\Email $email = null, ?string $simpleName = null)
    {
        $this
            ->setEmail($email)
            ->setSimpleName($simpleName);
    }
    /**
     * Get Email value
     * @return \Travelport\Util\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Util\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Util\StructType\Email $email
     * @return \Travelport\Util\StructType\TypeEmailAddress
     */
    public function setEmail(?\Travelport\Util\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get SimpleName value
     * @return string|null
     */
    public function getSimpleName(): ?string
    {
        return $this->SimpleName;
    }
    /**
     * Set SimpleName value
     * @param string $simpleName
     * @return \Travelport\Util\StructType\TypeEmailAddress
     */
    public function setSimpleName(?string $simpleName = null): self
    {
        // validation for constraint: string
        if (!is_null($simpleName) && !is_string($simpleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($simpleName, true), gettype($simpleName)), __LINE__);
        }
        $this->SimpleName = $simpleName;
        
        return $this;
    }
}
