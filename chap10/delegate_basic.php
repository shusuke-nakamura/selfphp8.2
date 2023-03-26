<?php
class FileLoger
{
    private DateTime $current;
    private SplFileObject $file;

    public function __construct(string $logname)
    {
        $this->current = new DateTime();
        $this->file = new SplFileObject("{$logname}-{$this->current->format('Ymd')}.log", "a");
    }

    public function fwrite(string $str)
    {
        $this->file->fwrite("[{$this->current->format('Ymd')}] {$str}");
    }
}

$logger = new FileLoger('log');
$logger->fwrite('HogeHoge Text');
