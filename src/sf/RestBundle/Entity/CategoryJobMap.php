<?php

namespace sf\RestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryJobMap
 *
 * @ORM\Table(name="category_job_map")
 * @ORM\Entity(repositoryClass="sf\RestBundle\Repository\CategoryJobMapRepository")
 */
class CategoryJobMap
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
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @ORM\Column(name="job_id", type="integer")
     */
    private $jobId;


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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return CategoryJobMap
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set jobId
     *
     * @param integer $jobId
     *
     * @return CategoryJobMap
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
}

