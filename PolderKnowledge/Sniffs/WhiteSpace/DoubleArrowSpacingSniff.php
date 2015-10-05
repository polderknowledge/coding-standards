<?php

class PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff implements PHP_CodeSniffer_Sniff
{
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Make sure there is one space before.
        if ($tokens[$stackPtr - 1]['code'] !== T_WHITESPACE) {
            $error = 'Expected 1 space before double arrow, none found';
            $phpcsFile->addFixableError($error, $stackPtr, 'NotFound');
            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->addContent($stackPtr - 1, ' ');
            }
        } elseif ($tokens[$stackPtr - 1]['length'] > 1 &&
            !$this->containsNewLine($tokens[$stackPtr - 1]['content'])
            && $tokens[$stackPtr - 1]['column'] !== 1) {
            $error = 'Expected 1 space before double arrow, found more than one.';
            $phpcsFile->addFixableError($error, $stackPtr, 'TooManyFound');

            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->replaceToken($stackPtr - 1, ' ');
            }
        }

        // Make sure there is one space after.
        if ($tokens[$stackPtr + 1]['code'] !== T_WHITESPACE) {
            $error = 'Expected 1 space after double arrow, none found';
            $phpcsFile->addFixableError($error, $stackPtr, 'NotFound');
            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->addContent($stackPtr, ' ');
            }
        } elseif ($tokens[$stackPtr + 1]['length'] > 1 &&
            !$this->containsNewLine($tokens[$stackPtr + 1]['content']) &&
            $tokens[$stackPtr + 1]['column'] !== 1) {
            $error = 'Expected 1 space after double arrow, found more than one.';
            $phpcsFile->addFixableError($error, $stackPtr, 'TooManyFound');

            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->replaceToken($stackPtr + 1, ' ');
            }
        }
    }

    public function register()
    {
        return array(T_DOUBLE_ARROW);
    }

    private function containsNewLine($content)
    {
        for ($i = 0; $i < strlen($content); ++$i) {
            $char = ord($content[$i]);

            if ($char === 10 || $char === 13) {
                return true;
            }
        }
        return false;
    }
}
