<?php
/**
 * Created by PhpStorm.
 * User: TI-tygangsta
 * Date: 11/04/2017
 * Time: 09:55
 */


namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MainBundle\Repository\NotificationRepository")
 * @ORM\Table(name="Notification")
 */

class Notification
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=40)
     */
    private $notifMessage;
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\ActCompl")
     */
    private $notifAct;
    /**
     * @ORM\ManyToOne(targetEntity="OCUserBundle\Entity\User")
     */
    private $notifUser;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set notifMessage
     *
     * @param string $notifMessage
     *
     * @return Notification
     */
    public function setNotifMessage($notifMessage)
    {
        $this->notifMessage = $notifMessage;

        return $this;
    }

    /**
     * Get notifMessage
     *
     * @return string
     */
    public function getNotifMessage()
    {
        return $this->notifMessage;
    }

    /**
     * Set notifAct
     *
     * @param \MainBundle\Entity\ActCompl $notifAct
     *
     * @return Notification
     */
    public function setNotifAct(\MainBundle\Entity\ActCompl $notifAct = null)
    {
        $this->notifAct = $notifAct;

        return $this;
    }

    /**
     * Get notifAct
     *
     * @return \MainBundle\Entity\ActCompl
     */
    public function getNotifAct()
    {
        return $this->notifAct;
    }

    /**
     * Set notifUser
     *
     * @param \OCUserBundle\Entity\User $notifUser
     *
     * @return Notification
     */
    public function setNotifUser(\OCUserBundle\Entity\User $notifUser = null)
    {
        $this->notifUser = $notifUser;

        return $this;
    }

    /**
     * Get notifUser
     *
     * @return \OCUserBundle\Entity\User
     */
    public function getNotifUser()
    {
        return $this->notifUser;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Notification
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}
