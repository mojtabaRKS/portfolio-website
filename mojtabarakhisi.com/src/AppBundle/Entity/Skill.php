<?php
/**
 * Created by PhpStorm.
 * User: mojtabarks
 * Date: 7/9/18
 * Time: 9:44 PM
 */

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Skill
 * @ORM\Entity
 * @ORM\Table(name="skills")
 */
class Skill
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\NotNull()
     */
    public $name;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="text")
     */
    public $tools;

    /**
     * @ORM\Column(type="boolean")
     */
    public $is_active;

    /** @ORM\Column(type="datetime") */
    public $created_at;

    /** @ORM\Column(type="datetime") */
    public $updated_at;

    public function __construct()
    {
        $this->created_at = new DateTime();
        $this->updated_at = new DateTime();
    }
}