<?php

namespace Homework1;

class Parser {
    private $string;

    protected const LINK_REGEXP = '/https?:\/\/[^\ "\'<]+\.(?:jp(e)?g|png|gif)?[^\ "\'<]+/';
    protected const PHONE_REGEXP = '/(?:\+?\d{1})?[\s.-]?\(?\d{3}\)?[\s.-]?\d{3}[\s-.]?\d{2}[\s-.]?\d{2}/';

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function getLinks(): array {
        $matches = [];
        preg_match_all($this::LINK_REGEXP, $this->string, $matches);

        return $matches[0];
    }

    public function getPhones(): array {
        $matches = [];
        preg_match_all($this::PHONE_REGEXP, $this->string, $matches);

        return $matches[0];
    }
}

$parser = new Parser("8 999 212-95-38. Произвольная строка, которая иногда содержит +7(985)808-86-90 телефоны, а иногда <a href='https://example.com'>ссылки</a> https://test.com <a href=\"https://avito.ru\">Avito</a>");

var_dump($parser->getLinks());
var_dump($parser->getPhones());