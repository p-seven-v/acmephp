<?php

/*
 * This file is part of the Acme PHP project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AcmePhp\Ssl;

/**
 * Represent the response to a certificate request.
 *
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class CertificateResponse
{
    /** @var CertificateRequest */
    private $certificateRequest;

    /** @var Certificate */
    private $certificate;

    public function __construct(CertificateRequest $certificateRequest, Certificate $certificate)
    {
        $this->certificateRequest = $certificateRequest;
        $this->certificate = $certificate;
    }

    public function getCertificateRequest(): CertificateRequest
    {
        return $this->certificateRequest;
    }

    public function getCertificate(): Certificate
    {
        return $this->certificate;
    }
}
