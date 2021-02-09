<?php

namespace JeroenvanRensen\ShareLinks\Tests\Unit;

use JeroenvanRensen\ShareLinks\ShareFacade;
use JeroenvanRensen\ShareLinks\Tests\TestCase;

class ShareLinksTest extends TestCase
{
    /** 
     * @test
     * @dataProvider shareLinksProvider
     */
    public function it_can_generate_a_share_link_for_different_media($medium, $url)
    {
        $this->withoutExceptionHandling();
        
        $this->assertEquals($url, ShareFacade::page('Post Title', 'http://example.org')->$medium());
    }

    public function shareLinksProvider()
    {
        return [
            ['facebook', 'https://facebook.com/sharer/sharer.php?u=http://example.org'],
            ['twitter', 'https://twitter.com/intent/tweet/?text=Post%20Title&url=http://example.org'],
            ['email', 'mailto:?subject=Post%20Title&body=http://example.org'],
            ['sms', 'sms:?body=http://example.org'],
            ['linkedin', 'https://www.linkedin.com/sharing/share-offsite/?url=http://example.org'],
            ['reddit', 'https://reddit.com/submit/?url=http://example.org&title=Post%20Title'],
            ['whatsapp', 'https://api.whatsapp.com/send?text=http://example.org'],
            ['telegram', 'https://t.me/share/url?url=http://example.org&text=Post%20Title'],
            ['tumblr', 'https://www.tumblr.com/widgets/share/tool?posttype=link&title=Post%20Title&caption=http://example.org&content=Post%20Title&canonicalUrl=http://example.org&shareSource=tumblr_share_button'],
        ];
    }
    
    /** 
     * @test
     * @dataProvider otherShareLinksProvider
     */
    public function it_can_generate_a_share_link_for_media_with_other_titles_and_urls($medium, $url)
    {
        $this->withoutExceptionHandling();
        
        $this->assertEquals($url, ShareFacade::page('Other Post Title', 'http://example.com')->$medium());
    }

    public function otherShareLinksProvider()
    {
        return [
            ['facebook', 'https://facebook.com/sharer/sharer.php?u=http://example.com'],
            ['twitter', 'https://twitter.com/intent/tweet/?text=Other%20Post%20Title&url=http://example.com'],
            ['email', 'mailto:?subject=Other%20Post%20Title&body=http://example.com'],
            ['sms', 'sms:?body=http://example.com'],
            ['linkedin', 'https://www.linkedin.com/sharing/share-offsite/?url=http://example.com'],
            ['reddit', 'https://reddit.com/submit/?url=http://example.com&title=Other%20Post%20Title'],
            ['whatsapp', 'https://api.whatsapp.com/send?text=http://example.com'],
            ['telegram', 'https://t.me/share/url?url=http://example.com&text=Other%20Post%20Title'],
            ['tumblr', 'https://www.tumblr.com/widgets/share/tool?posttype=link&title=Other%20Post%20Title&caption=http://example.com&content=Other%20Post%20Title&canonicalUrl=http://example.com&shareSource=tumblr_share_button'],
        ];
    }

    /** @test */
    public function it_can_generate_a_share_link_for_pinterest()
    {
        $this->withoutExceptionHandling();
        
        $this->assertEquals(
            'https://pinterest.com/pin/create/button/?url=http://example.org&media=https://via.placeholder.com/400&description=Post%20Title',
            ShareFacade::page('Post Title', 'http://example.org')->pinterest('https://via.placeholder.com/400')
        );
        
        // Other title, url and image
        $this->assertEquals(
            'https://pinterest.com/pin/create/button/?url=http://example.com&media=https://via.placeholder.com/300&description=Other%20Post%20Title',
            ShareFacade::page('Other Post Title', 'http://example.com')->pinterest('https://via.placeholder.com/300')
        );
    }
}
