<?php

class PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff implements PHP_CodeSniffer_Sniff
{
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Make sure there is one space before.
        if ($tokens[$stackPtr - 1]['code'] !== T_WHITESPACE) {
            $error = 'Expected 1 space before assignment, none found';
            $phpcsFile->addFixableError($error, $stackPtr, 'NotFound');
            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->addContent($stackPtr - 1, ' ');
            }
        } elseif ($tokens[$stackPtr - 1]['length'] > 1) {
            $error = 'Expected 1 space before assignment, found more than one.';
            $phpcsFile->addFixableError($error, $stackPtr, 'TooManyFound');

            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->replaceToken($stackPtr - 1, ' ');
            }
        }

        // Make sure there is one space after.
        if ($tokens[$stackPtr + 1]['code'] !== T_WHITESPACE) {
            $error = 'Expected 1 space after assignment, none found';
            $phpcsFile->addFixableError($error, $stackPtr, 'NotFound');
            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->addContent($stackPtr, ' ');
            }
        } elseif ($tokens[$stackPtr + 1]['length'] > 1) {
            $error = 'Expected 1 space after assignment, found more than one.';
            $phpcsFile->addFixableError($error, $stackPtr, 'TooManyFound');

            if ($phpcsFile->fixer->enabled === true) {
                $phpcsFile->fixer->replaceToken($stackPtr + 1, ' ');
            }
        }
    }

    public function register()
    {
        return array(
            T_EQUAL,
            T_AND_EQUAL,
            T_CONCAT_EQUAL,
            T_DIV_EQUAL,
            T_MINUS_EQUAL,
            T_MOD_EQUAL,
            T_MUL_EQUAL,
            T_OR_EQUAL,
            T_PLUS_EQUAL,
            T_POW_EQUAL,
            T_SL_EQUAL,
            T_SR_EQUAL,
            T_XOR_EQUAL,
        );
    }
}
