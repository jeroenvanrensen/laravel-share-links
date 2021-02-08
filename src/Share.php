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

    public function twitter(): string
    {
        return 'https://twitter.com/intent/tweet/?text=' . $this->title . '&url=' . $this->url;
    }
}
