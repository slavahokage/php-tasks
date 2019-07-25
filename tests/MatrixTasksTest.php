<?php

require_once('../vendor/autoload.php');

use function PHPTasks\MatrixMirrorTask\getMirrorMatrix;

class MatrixTasksTest extends \PHPUnit\Framework\TestCase
{
    public function testOnSimpleMatrix()
    {
        $expected = [[2,2],[1,1]];
        $input = [[2,4],[1,4]];
        $this->assertEquals($expected, getMirrorMatrix($input));
    }

    public function testOnBigMatrix()
    {
        $expected = [[12312321312321, 123123, 123123, 12312321312321],
                     [656, 1655623123, 1655623123, 656],
                     [86778, 87, 87, 86778],
                     [8778, 123, 123, 8778]
        ];

        $input = [[12312321312321, 123123, 13212, 3122312],
            [656, 1655623123, 32113221, 16556231],
            [86778, 87, 867312321278, 2312132317],
            [8778, 123, 8721312378, 321123]
        ];

        $this->assertEquals($expected, getMirrorMatrix($input));
    }
}