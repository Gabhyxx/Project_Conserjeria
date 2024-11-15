<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\Call;

class CallTest extends TestCase
{
    public function testIfTestOk()
    {
        $this->assertEquals(1,1);
    }

    public function testIfRoomIsCorrect()
    {
        $newCall = new Call(null, "123", "Comment for test 1", null);

        $resultGetRoom = $newCall->getRoom();

        $this->assertEquals("123",$resultGetRoom);
    }

    public function testIfIssueIsCorrect()
    {
        $newCall = new Call(null, "123", "Comment for test 2", null);

        $resultGetIssue = $newCall->getIssue();

        $this->assertEquals("Comment for test 2",$resultGetIssue);
    }
}