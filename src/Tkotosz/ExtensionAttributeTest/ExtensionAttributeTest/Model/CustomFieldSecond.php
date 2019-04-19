<?php

namespace Tkotosz\ExtensionAttributeTest\Model;

class CustomFieldSecond
{
    /** @var string */
    private $firstProperty;

    /** @var string */
    private $secondProperty;

    /** @var string */
    private $thirdProperty;

    /** @var string[] */
    private $fourthProperty;

    /** @var bool */
    private $fifthProperty;

    public static function create(
        string $firstProperty,
        string $secondProperty,
        string $thirdProperty,
        array $fourthProperty,
        bool $fifthProperty
    ): self {
        $instance = new self();

        $instance->firstProperty = $firstProperty;
        $instance->secondProperty = $secondProperty;
        $instance->thirdProperty = $thirdProperty;
        $instance->fourthProperty = $fourthProperty;
        $instance->fifthProperty = $fifthProperty;

        return $instance;
    }

    /**
     * @return string
     */
    public function getFirstProperty(): string
    {
        return $this->firstProperty;
    }

    /**
     * @param string $firstProperty
     */
    public function setFirstProperty(string $firstProperty): void
    {
        $this->firstProperty = $firstProperty;
    }

    /**
     * @return string
     */
    public function getSecondProperty(): string
    {
        return $this->secondProperty;
    }

    /**
     * @param string $secondProperty
     */
    public function setSecondProperty(string $secondProperty): void
    {
        $this->secondProperty = $secondProperty;
    }

    /**
     * @return string
     */
    public function getThirdProperty(): string
    {
        return $this->thirdProperty;
    }

    /**
     * @param string $thirdProperty
     */
    public function setThirdProperty(string $thirdProperty): void
    {
        $this->thirdProperty = $thirdProperty;
    }

    /**
     * @return string[]
     */
    public function getFourthProperty(): array
    {
        return $this->fourthProperty;
    }

    /**
     * @param string[] $fourthProperty
     */
    public function setFourthProperty(array $fourthProperty): void
    {
        $this->fourthProperty = $fourthProperty;
    }

    /**
     * @return bool
     */
    public function getFifthProperty(): bool
    {
        return $this->fifthProperty;
    }

    /**
     * @param bool $fifthProperty
     */
    public function setFifthProperty(bool $fifthProperty): void
    {
        $this->fifthProperty = $fifthProperty;
    }
}
