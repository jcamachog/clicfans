<?php
declare(strict_types=1);

namespace App\Application\Actions\Comment;

use App\Application\Actions\Action;
use App\Domain\Comment\CommentRepository;
use Psr\Log\LoggerInterface;

abstract class CommentAction extends Action
{

    /**
     * @var CommentRepository
     */
    protected $commentRepository;

    /**
     * @param LoggerInterface $logger
     * @param CommentRepository  $commentRepository
     */
    public function __construct(LoggerInterface $logger, CommentRepository $commentRepository)
    {
        parent::__construct($logger);
        $this->commentRepository = $commentRepository;
    }
}