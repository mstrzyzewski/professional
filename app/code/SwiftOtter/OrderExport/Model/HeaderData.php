<?php

declare(strict_types=1);

namespace SwiftOtter\OrderExport\Model;

use DateTime;

class HeaderData
{
    /**
     * @var DateTime|null
     */
    private ?DateTime $shipDate;

    /**
     * @var string
     */
    private string $merchantNotes;

    /**
     * Get ship date
     *
     * @return DateTime|null
     */
    public function getShipDate(): ?DateTime
    {
        return $this->shipDate;
    }

    /**
     * Set ship date
     *
     * @param DateTime|null $shipDate
     * @return $this
     */
    public function setShipDate(?DateTime $shipDate): HeaderData
    {
        $this->shipDate = $shipDate;
        return $this;
    }

    /**
     * Get merchant notes
     *
     * @return string
     */
    public function getMerchantNotes(): string
    {
        return (string) $this->merchantNotes;
    }

    /**
     * Set merchant notes
     *
     * @param string $merchantNotes
     * @return $this
     */
    public function setMerchantNotes(string $merchantNotes): HeaderData
    {
        $this->merchantNotes = $merchantNotes;
        return $this;
    }
}
