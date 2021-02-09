<?php

namespace JeroenvanRensen\ShareLinks;

class Share
{
    public string $url = '';

    public string $title = '';

    public function page(string $title, string $url): self
    {
        $this->title = str_replace(' ', '%20', $title);
        $this->url = $url;

        return $this;
    }

    public function facebook(): string
    {
        return 'https://facebook.com/sharer/sharer.php?u=' . $this->url;
    }

    public function twitter(): string
    {
        return 'https://twitter.com/intent/tweet/?text=' . $this->title . '&url=' . $this->url;
    }

    public function email(): string
    {
        return 'mailto:?subject=' . $this->title . '&body=' . $this->url;
    }

    public function sms(): string
    {
        return 'sms:?body=' . $this->url;
    }

    public function linkedin(): string
    {
        return 'https://www.linkedin.com/sharing/share-offsite/?url=' . $this->url;
    }

    public function reddit(): string
    {
        return 'https://reddit.com/submit/?url=' . $this->url . '&title=' . $this->title;
    }

    public function whatsapp(): string
    {
        return 'https://api.whatsapp.com/send?text=' . $this->url;
    }

    public function telegram(): string
    {
        return 'https://t.me/share/url?url=' . $this->url . '&text=' . $this->title;
    }

    public function tumblr(): string
    {
        return 'https://www.tumblr.com/widgets/share/tool?posttype=link&title=' . $this->title . '&caption=' . $this->url . '&content=' . $this->title . '&canonicalUrl=' . $this->url . '&shareSource=tumblr_share_button';
    }

    public function pinterest(string $image): string
    {
        return 'https://pinterest.com/pin/create/button/?url=' . $this->url . '&media=' . $image . '&description=' . $this->title;
    }
}
