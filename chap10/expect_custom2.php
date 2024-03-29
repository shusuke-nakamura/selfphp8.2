<?php
class UserNotFoundException extends Exception implements MyAppException
{
    protected string $userid;

    public function __construct(string $userid, int $code = 0, Throwable $previous = null)
    {
        parent::__construct("{$userid}が存在しません。", $code, $previous);
        $this->userid = $userid;
    }

    final public function getUserid(): string
    {
        return $this->userid;
    }
}
