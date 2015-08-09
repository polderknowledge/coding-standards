<?php

class PolderKnowledge_Sniffs_Naming_VariableNameSniff implements \PHP_CodeSniffer_Sniff
{
    const VALID_VARIABLES = array(
        '$_COOKIE',
        '$_GET',
        '$_POST',
        '$_REQUEST',
        '$_SESSION',
        '$GLOBALS',
    );

    public function process(\PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $variableName = $tokens[$stackPtr]['content'];

        if (in_array($variableName, self::VALID_VARIABLES)) {
            return;
        }

        if (!preg_match('/^\$[a-z]+[a-zA-Z0-9]*$/', $variableName)) {
            $error = sprintf(
                'Invalid variable name %s, should follow the convention [a-z]+[a-zA-Z0-9]*',
                $variableName
            );
            $phpcsFile->addError($error, $stackPtr, 'InvalidVariableName');
        }
    }

    public function register()
    {
        return array(T_VARIABLE);
    }
}
