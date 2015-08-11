<?php

namespace PolderKnowledge\SniffsTest\WhiteSpace;

use PolderKnowledge\SniffsTest\TestCase;
use PolderKnowledge_Sniffs_WhiteSpace_TernarySpacingSniff;

class TernarySpacingSniffTest extends TestCase
{
    public function testRegister()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_TernarySpacingSniff();

        // Act
        $result = $sniff->register();

        // Assert
        $this->assertEquals(array(T_INLINE_THEN), $result);
    }

    public function testProcessWithAllErrors()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_TernarySpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/ternary-all-errors.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(4, $file->getErrorCount());
    }
}
