<?php

namespace App\Entity;

class User
{
    /**
     * User constructor.
     * @param string|null $name
     * @param string|null $email
     * @param string|null $device_id
     */
    public function __construct(
        private ?string $name = null,
        private ?string $email = null,
        private ?string $device_id = null,
    ) {
        $this->setEmail($email);
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    private function setEmail(?string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            $this->email = null;
        }
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getDeviceId(): ?string
    {
        return $this->device_id;
    }
}