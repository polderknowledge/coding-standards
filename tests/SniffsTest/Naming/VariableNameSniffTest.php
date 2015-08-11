<?php

namespace PolderKnowledge\SniffsTest\Naming;

use PolderKnowledge\SniffsTest\TestCase;
use PolderKnowledge_Sniffs_Naming_VariableNameSniff;

class VariableNameSniffTest extends TestCase
{
    public function testRegister()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_Naming_VariableNameSniff();

        // Act
        $result = $sniff->register();

        // Assert
        $this->assertEquals(array(T_VARIABLE), $result);
    }

    public function testProcessWithInvalidVariable()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_Naming_VariableNameSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/Naming/invalid-variable-name.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(1, $file->getErrorCount());
    }

    public function testProcessWithValidVariable()
    {
        // Arrange
        $sniff = new PolderKnowledge_Sniffs_Naming_VariableNameSniff();

        // Act
        $file = $this->executeSniffTest('tests/SniffsTestAsset/Naming/valid-variable-name.php', $sniff);

        // Assert
        $this->assertEquals(0, $file->getWarningCount());
        $this->assertEquals(0, $file->getErrorCount());
    }
}
