<?php

namespace PolderKnowledge\SniffsTest\WhiteSpace;

use PolderKnowledge\SniffsTest\TestCase;
use PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff;

class AssignmentSpacingSniffTest extends TestCase
{
    public function testRegister()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff();

        // Act
        $result = $sniff->register();

        // Assert
        $expected = array(
            T_EQUAL,
            T_AND_EQUAL,
            T_CONCAT_EQUAL,
            T_DIV_EQUAL,
            T_MINUS_EQUAL,
            T_MOD_EQUAL,
            T_MUL_EQUAL,
            T_OR_EQUAL,
            T_PLUS_EQUAL,
            T_SL_EQUAL,
            T_SR_EQUAL,
            T_XOR_EQUAL,
        );

        // T_POW_EQUAL is only available from PHP 5.6
        if (defined('T_POW_EQUAL')) {
            $expected[] = T_POW_EQUAL;
        }
        $this->assertEquals($expected, $result);
    }

    public function testProcessWithBothErrors()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/assignment-error.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(2, $file->getErrorCount());
    }

    public function testProcessWithErrorAfter()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/assignment-error-after.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());
    }

    public function testProcessWithErrorBefore()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_AssignmentSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/assignment-error-before.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());
    }
}
