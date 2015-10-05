<?php

namespace PolderKnowledge\SniffsTest\WhiteSpace;

use PolderKnowledge\SniffsTest\TestCase;
use PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff;

class DoubleArrowSpacingSniffTestTest extends TestCase
{
    public function testRegister()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $result = $sniff->register();

        // Assert
        $this->assertEquals(array(T_DOUBLE_ARROW), $result);
    }

    public function testProcessWithSuccess()
    {
        // Arrange
        $sniff = new \PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-success.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(0, $file->getErrorCount());
    }

    public function testProcessWithBothErrors()
    {
        // Arrange
        $sniff = new \PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-error.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(2, $file->getErrorCount());
    }

    public function testProcessWithErrorAfter()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-error-after.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());
    }

    public function testProcessWithErrorBefore()
    {
        // Arrange
        $sniff = new \PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-error-before.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());
    }

    public function testProcessWithNewLineAfter()
    {
        // Arrange
        $sniff = new \PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-new-line-after.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(0, $file->getErrorCount());
    }

    public function testProcessWithNewLineBefore()
    {
        // Arrange
        $sniff = new \PolderKnowledge_Sniffs_WhiteSpace_DoubleArrowSpacingSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/WhiteSpace/arrow-new-line-before.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(0, $file->getErrorCount());
    }
}
