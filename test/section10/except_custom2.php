<?php
class UserNotFoundException extends Exception implements MyAppException
{
    protected string $userId;

    public function __construct(string $userId, int $code = 0, Throwable $previous = null)
    {
        parent::__construct("{$userId}が存在しません", $code, $previous);
        $this->userId = $userId;
    }

    final public function getUserId(): string
    {
        return $this->getUserId;
    }
}
