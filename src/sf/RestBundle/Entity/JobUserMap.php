<?php

namespace sf\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobUserMap
 *
 * @ORM\Table(name="job_user_map")
 * @ORM\Entity(repositoryClass="sf\RestBundle\Repository\JobUserMapRepository")
 */
class JobUserMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="job_id", type="integer")
     */
    private $jobId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jobId
     *
     * @param integer $jobId
     *
     * @return JobUserMap
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }

    /**
     * Get jobId
     *
     * @return int
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return JobUserMap
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

