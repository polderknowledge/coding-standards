<?php

namespace PolderKnowledge\SniffsTest;

use PHP_CodeSniffer;
use PHP_CodeSniffer_File;
use PHP_CodeSniffer_Sniff;
use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Executes the sniff for the given file.
     *
     * @param string $path
     * @param PHP_CodeSniffer_Sniff $sniff
     * @return PHP_CodeSniffer_File
     */
    public function executeSniffTest($path, PHP_CodeSniffer_Sniff $sniff)
    {
        $file = new PHP_CodeSniffer_File($path, array(), array(), new PHP_CodeSniffer());
        $file->start();

        $tokens = $file->getTokens();
        $validTokens = $sniff->register();

        for ($i = 0; $i < $file->numTokens; ++$i) {
            if (in_array($tokens[$i]['code'], $validTokens)) {
                $sniff->process($file, $i);
            }
        }

        return $file;
    }
}
