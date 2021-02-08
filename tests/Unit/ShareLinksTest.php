<?php

namespace JeroenvanRensen\ShareLinks\Tests\Unit;

use JeroenvanRensen\ShareLinks\ShareFacade;
use JeroenvanRensen\ShareLinks\Tests\TestCase;

class ShareLinksTest extends TestCase
{
    /** @test */
    public function it_can_generate_a_share_link_for_twitter()
    {
        $this->withoutExceptionHandling();
        
        $this->assertEquals('https://twitter.com/intent/tweet/?text=Post%20Title&url=http://example.org', ShareFacade::page('Post Title', 'http://example.org')->twitter());
    }
}
