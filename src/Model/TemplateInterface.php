<?php
namespace Boekkooi\Bundle\TwigJackBundle\Model;

/**
 * @author Warnar Boekkooi <warnar@boekkooi.net>
 */
interface TemplateInterface
{
    /**
     * Get the templates unique identifier.
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Get the template source code
     *
     * @return string
     */
    public function getTemplate();

    /**
     * Get the template last modified date.
     *
     * @return \DateTime
     */
    public function getLastModified();
}
