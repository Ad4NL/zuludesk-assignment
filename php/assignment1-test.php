<?php
require_once 'assignment1.php';

class AssignmentOneTest extends PHPUnit\Framework\TestCase
{
    public function testSingle()
    {
        $this->assertEquals([[1]], split_increasing([1]));
    }

    public function testSplit()
    {
        $this->assertEquals([[1, 2, 3], [1, 2, 3, 4], [0]], split_increasing([1, 2, 3, 1, 2, 3, 4, 0]));
    }

    public function testNegative()
    {
        $this->assertEquals([[-1], [-2]], [-1, -2]);
    }

    public function testSame()
    {
        $this->assertEquals([[1], [1]], split_increasing([1, 1]));
        $this->assertEquals([[1, 2, 3], [3, 4, 5]], split_increasing([1, 2, 3, 3, 4, 5]));
    }

    public function testExtremes()
    {
        $this->assertEquals([[PHP_INT_MIN, PHP_INT_MAX], [PHP_INT_MIN, PHP_INT_MAX]],
            split_increasing([PHP_INT_MIN, PHP_INT_MAX, PHP_INT_MIN, PHP_INT_MAX]));
    }

    public function testEmpty()
    {
        $this->assertEquals([], split_increasing([]));
    }
}
