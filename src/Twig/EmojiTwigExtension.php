<?php

namespace App\Twig;

use http\Encoding\Stream\Inflate;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class EmojiTwigExtension extends AbstractExtension {
    /**
     * @return TwigFilter[]
     */
    public function getFilters():array {
        return [
            new TwigFilter('emoji', [$this, 'emojiFilter'])
        ];
    }

    public function emojiFilter(string $text):string {
        $newText = $text;
        $newText = str_replace(":-)", "🙂", $newText);
        $newText = str_replace(";-)", "😉", $newText);
        $newText = str_replace(":-|", "😐", $newText);

        return "$newText";
    }
}