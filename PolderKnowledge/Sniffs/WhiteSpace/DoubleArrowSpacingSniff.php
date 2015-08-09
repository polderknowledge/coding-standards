<?php

class PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff implements \PHP_CodeSniffer_Sniff
{
    public function process(\PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Make sure there is one space before.
        if ($tokens[$stackPtr - 1]['code'] !== T_WHITESPACE) {
            $error = 'Expected 1 space before double arrow, none found';
            $phpcsFile->addFixableError($error, $stackPtr, 'NotFound');
            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->addContent($stackPtr - 1, ' ');
            }
        } elseif ($tokens[$stackPtr - 1]['length'] > 1) {
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
        } elseif ($tokens[$stackPtr + 1]['length'] > 1) {
            $error = 'Expected 1 space after double arrow, found more than one.';
            $phpcsFile->addFixableError($error, $stackPtr, 'TooManyFound');

            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->replaceToken($stackPtr + 1, ' ');
            }
        }
    }

    public function register()
    {
        return array(\T_DOUBLE_ARROW);
    }
}
