--TEST--
Translation of HTML entities for encoding CP866
--FILE--
<?php
$arr = array(
0x0410 => array(0x80, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0x81, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0x82, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0x83, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0x84, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0x85, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0x86, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0x87, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0x88, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0x89, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041a => array(0x8a, "CYRILLIC CAPITAL LETTER KA"),
0x041b => array(0x8b, "CYRILLIC CAPITAL LETTER EL"),
0x041c => array(0x8c, "CYRILLIC CAPITAL LETTER EM"),
0x041d => array(0x8d, "CYRILLIC CAPITAL LETTER EN"),
0x041e => array(0x8e, "CYRILLIC CAPITAL LETTER O"),
0x041f => array(0x8f, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0x90, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0x91, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0x92, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0x93, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0x94, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0x95, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0x96, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0x97, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0x98, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0x99, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042a => array(0x9a, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042b => array(0x9b, "CYRILLIC CAPITAL LETTER YERU"),
0x042c => array(0x9c, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042d => array(0x9d, "CYRILLIC CAPITAL LETTER E"),
0x042e => array(0x9e, "CYRILLIC CAPITAL LETTER YU"),
0x042f => array(0x9f, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xa0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xa1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xa2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xa3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xa4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xa5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xa6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xa7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xa8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xa9, "CYRILLIC SMALL LETTER SHORT I"),
0x043a => array(0xaa, "CYRILLIC SMALL LETTER KA"),
0x043b => array(0xab, "CYRILLIC SMALL LETTER EL"),
0x043c => array(0xac, "CYRILLIC SMALL LETTER EM"),
0x043d => array(0xad, "CYRILLIC SMALL LETTER EN"),
0x043e => array(0xae, "CYRILLIC SMALL LETTER O"),
0x043f => array(0xaf, "CYRILLIC SMALL LETTER PE"),
0x2591 => array(0xb0, "LIGHT SHADE"),
0x2592 => array(0xb1, "MEDIUM SHADE"),
0x2593 => array(0xb2, "DARK SHADE"),
0x2502 => array(0xb3, "BOX DRAWINGS LIGHT VERTICAL"),
0x2524 => array(0xb4, "BOX DRAWINGS LIGHT VERTICAL AND LEFT"),
0x2561 => array(0xb5, "BOX DRAWINGS VERTICAL SINGLE AND LEFT DOUBLE"),
0x2562 => array(0xb6, "BOX DRAWINGS VERTICAL DOUBLE AND LEFT SINGLE"),
0x2556 => array(0xb7, "BOX DRAWINGS DOWN DOUBLE AND LEFT SINGLE"),
0x2555 => array(0xb8, "BOX DRAWINGS DOWN SINGLE AND LEFT DOUBLE"),
0x2563 => array(0xb9, "BOX DRAWINGS DOUBLE VERTICAL AND LEFT"),
0x2551 => array(0xba, "BOX DRAWINGS DOUBLE VERTICAL"),
0x2557 => array(0xbb, "BOX DRAWINGS DOUBLE DOWN AND LEFT"),
0x255d => array(0xbc, "BOX DRAWINGS DOUBLE UP AND LEFT"),
0x255c => array(0xbd, "BOX DRAWINGS UP DOUBLE AND LEFT SINGLE"),
0x255b => array(0xbe, "BOX DRAWINGS UP SINGLE AND LEFT DOUBLE"),
0x2510 => array(0xbf, "BOX DRAWINGS LIGHT DOWN AND LEFT"),
0x2514 => array(0xc0, "BOX DRAWINGS LIGHT UP AND RIGHT"),
0x2534 => array(0xc1, "BOX DRAWINGS LIGHT UP AND HORIZONTAL"),
0x252c => array(0xc2, "BOX DRAWINGS LIGHT DOWN AND HORIZONTAL"),
0x251c => array(0xc3, "BOX DRAWINGS LIGHT VERTICAL AND RIGHT"),
0x2500 => array(0xc4, "BOX DRAWINGS LIGHT HORIZONTAL"),
0x253c => array(0xc5, "BOX DRAWINGS LIGHT VERTICAL AND HORIZONTAL"),
0x255e => array(0xc6, "BOX DRAWINGS VERTICAL SINGLE AND RIGHT DOUBLE"),
0x255f => array(0xc7, "BOX DRAWINGS VERTICAL DOUBLE AND RIGHT SINGLE"),
0x255a => array(0xc8, "BOX DRAWINGS DOUBLE UP AND RIGHT"),
0x2554 => array(0xc9, "BOX DRAWINGS DOUBLE DOWN AND RIGHT"),
0x2569 => array(0xca, "BOX DRAWINGS DOUBLE UP AND HORIZONTAL"),
0x2566 => array(0xcb, "BOX DRAWINGS DOUBLE DOWN AND HORIZONTAL"),
0x2560 => array(0xcc, "BOX DRAWINGS DOUBLE VERTICAL AND RIGHT"),
0x2550 => array(0xcd, "BOX DRAWINGS DOUBLE HORIZONTAL"),
0x256c => array(0xce, "BOX DRAWINGS DOUBLE VERTICAL AND HORIZONTAL"),
0x2567 => array(0xcf, "BOX DRAWINGS UP SINGLE AND HORIZONTAL DOUBLE"),
0x2568 => array(0xd0, "BOX DRAWINGS UP DOUBLE AND HORIZONTAL SINGLE"),
0x2564 => array(0xd1, "BOX DRAWINGS DOWN SINGLE AND HORIZONTAL DOUBLE"),
0x2565 => array(0xd2, "BOX DRAWINGS DOWN DOUBLE AND HORIZONTAL SINGLE"),
0x2559 => array(0xd3, "BOX DRAWINGS UP DOUBLE AND RIGHT SINGLE"),
0x2558 => array(0xd4, "BOX DRAWINGS UP SINGLE AND RIGHT DOUBLE"),
0x2552 => array(0xd5, "BOX DRAWINGS DOWN SINGLE AND RIGHT DOUBLE"),
0x2553 => array(0xd6, "BOX DRAWINGS DOWN DOUBLE AND RIGHT SINGLE"),
0x256b => array(0xd7, "BOX DRAWINGS VERTICAL DOUBLE AND HORIZONTAL SINGLE"),
0x256a => array(0xd8, "BOX DRAWINGS VERTICAL SINGLE AND HORIZONTAL DOUBLE"),
0x2518 => array(0xd9, "BOX DRAWINGS LIGHT UP AND LEFT"),
0x250c => array(0xda, "BOX DRAWINGS LIGHT DOWN AND RIGHT"),
0x2588 => array(0xdb, "FULL BLOCK"),
0x2584 => array(0xdc, "LOWER HALF BLOCK"),
0x258c => array(0xdd, "LEFT HALF BLOCK"),
0x2590 => array(0xde, "RIGHT HALF BLOCK"),
0x2580 => array(0xdf, "UPPER HALF BLOCK"),
0x0440 => array(0xe0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xe1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xe2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xe3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xe4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xe5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xe6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xe7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xe8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xe9, "CYRILLIC SMALL LETTER SHCHA"),
0x044a => array(0xea, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044b => array(0xeb, "CYRILLIC SMALL LETTER YERU"),
0x044c => array(0xec, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044d => array(0xed, "CYRILLIC SMALL LETTER E"),
0x044e => array(0xee, "CYRILLIC SMALL LETTER YU"),
0x044f => array(0xef, "CYRILLIC SMALL LETTER YA"),
0x0401 => array(0xf0, "CYRILLIC CAPITAL LETTER IO"),
0x0451 => array(0xf1, "CYRILLIC SMALL LETTER IO"),
0x0404 => array(0xf2, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x0454 => array(0xf3, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x0407 => array(0xf4, "CYRILLIC CAPITAL LETTER YI"),
0x0457 => array(0xf5, "CYRILLIC SMALL LETTER YI"),
0x040e => array(0xf6, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045e => array(0xf7, "CYRILLIC SMALL LETTER SHORT U"),
0x00b0 => array(0xf8, "DEGREE SIGN"),
0x2219 => array(0xf9, "BULLET OPERATOR"),
0x00b7 => array(0xfa, "MIDDLE DOT"),
0x221a => array(0xfb, "SQUARE ROOT"),
0x2116 => array(0xfc, "NUMERO SIGN"),
0x00a4 => array(0xfd, "CURRENCY SIGN"),
0x25a0 => array(0xfe, "BLACK SQUARE"),
0x00a0 => array(0xff, "NO-BREAK SPACE"),
);

foreach ($arr as $u => $v) {
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'CP866');
    $d = unpack("H*", $res);
    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);

    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'CP866');
    if ($res[0] != "&" || $res[1] != "#")
        $res = unpack("H*", $res)[1];
    echo sprintf("%s => %s\n\n", $ent, $res);
}
?>
--EXPECT--
CYRILLIC CAPITAL LETTER A: &#x410; => 80
&#x80; => &#x80;

CYRILLIC CAPITAL LETTER BE: &#x411; => 81
&#x81; => &#x81;

CYRILLIC CAPITAL LETTER VE: &#x412; => 82
&#x82; => &#x82;

CYRILLIC CAPITAL LETTER GHE: &#x413; => 83
&#x83; => &#x83;

CYRILLIC CAPITAL LETTER DE: &#x414; => 84
&#x84; => &#x84;

CYRILLIC CAPITAL LETTER IE: &#x415; => 85
&#x85; => &#x85;

CYRILLIC CAPITAL LETTER ZHE: &#x416; => 86
&#x86; => &#x86;

CYRILLIC CAPITAL LETTER ZE: &#x417; => 87
&#x87; => &#x87;

CYRILLIC CAPITAL LETTER I: &#x418; => 88
&#x88; => &#x88;

CYRILLIC CAPITAL LETTER SHORT I: &#x419; => 89
&#x89; => &#x89;

CYRILLIC CAPITAL LETTER KA: &#x41A; => 8a
&#x8A; => &#x8A;

CYRILLIC CAPITAL LETTER EL: &#x41B; => 8b
&#x8B; => &#x8B;

CYRILLIC CAPITAL LETTER EM: &#x41C; => 8c
&#x8C; => &#x8C;

CYRILLIC CAPITAL LETTER EN: &#x41D; => 8d
&#x8D; => &#x8D;

CYRILLIC CAPITAL LETTER O: &#x41E; => 8e
&#x8E; => &#x8E;

CYRILLIC CAPITAL LETTER PE: &#x41F; => 8f
&#x8F; => &#x8F;

CYRILLIC CAPITAL LETTER ER: &#x420; => 90
&#x90; => &#x90;

CYRILLIC CAPITAL LETTER ES: &#x421; => 91
&#x91; => &#x91;

CYRILLIC CAPITAL LETTER TE: &#x422; => 92
&#x92; => &#x92;

CYRILLIC CAPITAL LETTER U: &#x423; => 93
&#x93; => &#x93;

CYRILLIC CAPITAL LETTER EF: &#x424; => 94
&#x94; => &#x94;

CYRILLIC CAPITAL LETTER HA: &#x425; => 95
&#x95; => &#x95;

CYRILLIC CAPITAL LETTER TSE: &#x426; => 96
&#x96; => &#x96;

CYRILLIC CAPITAL LETTER CHE: &#x427; => 97
&#x97; => &#x97;

CYRILLIC CAPITAL LETTER SHA: &#x428; => 98
&#x98; => &#x98;

CYRILLIC CAPITAL LETTER SHCHA: &#x429; => 99
&#x99; => &#x99;

CYRILLIC CAPITAL LETTER HARD SIGN: &#x42A; => 9a
&#x9A; => &#x9A;

CYRILLIC CAPITAL LETTER YERU: &#x42B; => 9b
&#x9B; => &#x9B;

CYRILLIC CAPITAL LETTER SOFT SIGN: &#x42C; => 9c
&#x9C; => &#x9C;

CYRILLIC CAPITAL LETTER E: &#x42D; => 9d
&#x9D; => &#x9D;

CYRILLIC CAPITAL LETTER YU: &#x42E; => 9e
&#x9E; => &#x9E;

CYRILLIC CAPITAL LETTER YA: &#x42F; => 9f
&#x9F; => &#x9F;

CYRILLIC SMALL LETTER A: &#x430; => a0
&#xA0; => ff

CYRILLIC SMALL LETTER BE: &#x431; => a1
&#xA1; => &#xA1;

CYRILLIC SMALL LETTER VE: &#x432; => a2
&#xA2; => &#xA2;

CYRILLIC SMALL LETTER GHE: &#x433; => a3
&#xA3; => &#xA3;

CYRILLIC SMALL LETTER DE: &#x434; => a4
&#xA4; => fd

CYRILLIC SMALL LETTER IE: &#x435; => a5
&#xA5; => &#xA5;

CYRILLIC SMALL LETTER ZHE: &#x436; => a6
&#xA6; => &#xA6;

CYRILLIC SMALL LETTER ZE: &#x437; => a7
&#xA7; => &#xA7;

CYRILLIC SMALL LETTER I: &#x438; => a8
&#xA8; => &#xA8;

CYRILLIC SMALL LETTER SHORT I: &#x439; => a9
&#xA9; => &#xA9;

CYRILLIC SMALL LETTER KA: &#x43A; => aa
&#xAA; => &#xAA;

CYRILLIC SMALL LETTER EL: &#x43B; => ab
&#xAB; => &#xAB;

CYRILLIC SMALL LETTER EM: &#x43C; => ac
&#xAC; => &#xAC;

CYRILLIC SMALL LETTER EN: &#x43D; => ad
&#xAD; => &#xAD;

CYRILLIC SMALL LETTER O: &#x43E; => ae
&#xAE; => &#xAE;

CYRILLIC SMALL LETTER PE: &#x43F; => af
&#xAF; => &#xAF;

LIGHT SHADE: &#x2591; => b0
&#xB0; => f8

MEDIUM SHADE: &#x2592; => b1
&#xB1; => &#xB1;

DARK SHADE: &#x2593; => b2
&#xB2; => &#xB2;

BOX DRAWINGS LIGHT VERTICAL: &#x2502; => b3
&#xB3; => &#xB3;

BOX DRAWINGS LIGHT VERTICAL AND LEFT: &#x2524; => b4
&#xB4; => &#xB4;

BOX DRAWINGS VERTICAL SINGLE AND LEFT DOUBLE: &#x2561; => b5
&#xB5; => &#xB5;

BOX DRAWINGS VERTICAL DOUBLE AND LEFT SINGLE: &#x2562; => b6
&#xB6; => &#xB6;

BOX DRAWINGS DOWN DOUBLE AND LEFT SINGLE: &#x2556; => b7
&#xB7; => fa

BOX DRAWINGS DOWN SINGLE AND LEFT DOUBLE: &#x2555; => b8
&#xB8; => &#xB8;

BOX DRAWINGS DOUBLE VERTICAL AND LEFT: &#x2563; => b9
&#xB9; => &#xB9;

BOX DRAWINGS DOUBLE VERTICAL: &#x2551; => ba
&#xBA; => &#xBA;

BOX DRAWINGS DOUBLE DOWN AND LEFT: &#x2557; => bb
&#xBB; => &#xBB;

BOX DRAWINGS DOUBLE UP AND LEFT: &#x255D; => bc
&#xBC; => &#xBC;

BOX DRAWINGS UP DOUBLE AND LEFT SINGLE: &#x255C; => bd
&#xBD; => &#xBD;

BOX DRAWINGS UP SINGLE AND LEFT DOUBLE: &#x255B; => be
&#xBE; => &#xBE;

BOX DRAWINGS LIGHT DOWN AND LEFT: &#x2510; => bf
&#xBF; => &#xBF;

BOX DRAWINGS LIGHT UP AND RIGHT: &#x2514; => c0
&#xC0; => &#xC0;

BOX DRAWINGS LIGHT UP AND HORIZONTAL: &#x2534; => c1
&#xC1; => &#xC1;

BOX DRAWINGS LIGHT DOWN AND HORIZONTAL: &#x252C; => c2
&#xC2; => &#xC2;

BOX DRAWINGS LIGHT VERTICAL AND RIGHT: &#x251C; => c3
&#xC3; => &#xC3;

BOX DRAWINGS LIGHT HORIZONTAL: &#x2500; => c4
&#xC4; => &#xC4;

BOX DRAWINGS LIGHT VERTICAL AND HORIZONTAL: &#x253C; => c5
&#xC5; => &#xC5;

BOX DRAWINGS VERTICAL SINGLE AND RIGHT DOUBLE: &#x255E; => c6
&#xC6; => &#xC6;

BOX DRAWINGS VERTICAL DOUBLE AND RIGHT SINGLE: &#x255F; => c7
&#xC7; => &#xC7;

BOX DRAWINGS DOUBLE UP AND RIGHT: &#x255A; => c8
&#xC8; => &#xC8;

BOX DRAWINGS DOUBLE DOWN AND RIGHT: &#x2554; => c9
&#xC9; => &#xC9;

BOX DRAWINGS DOUBLE UP AND HORIZONTAL: &#x2569; => ca
&#xCA; => &#xCA;

BOX DRAWINGS DOUBLE DOWN AND HORIZONTAL: &#x2566; => cb
&#xCB; => &#xCB;

BOX DRAWINGS DOUBLE VERTICAL AND RIGHT: &#x2560; => cc
&#xCC; => &#xCC;

BOX DRAWINGS DOUBLE HORIZONTAL: &#x2550; => cd
&#xCD; => &#xCD;

BOX DRAWINGS DOUBLE VERTICAL AND HORIZONTAL: &#x256C; => ce
&#xCE; => &#xCE;

BOX DRAWINGS UP SINGLE AND HORIZONTAL DOUBLE: &#x2567; => cf
&#xCF; => &#xCF;

BOX DRAWINGS UP DOUBLE AND HORIZONTAL SINGLE: &#x2568; => d0
&#xD0; => &#xD0;

BOX DRAWINGS DOWN SINGLE AND HORIZONTAL DOUBLE: &#x2564; => d1
&#xD1; => &#xD1;

BOX DRAWINGS DOWN DOUBLE AND HORIZONTAL SINGLE: &#x2565; => d2
&#xD2; => &#xD2;

BOX DRAWINGS UP DOUBLE AND RIGHT SINGLE: &#x2559; => d3
&#xD3; => &#xD3;

BOX DRAWINGS UP SINGLE AND RIGHT DOUBLE: &#x2558; => d4
&#xD4; => &#xD4;

BOX DRAWINGS DOWN SINGLE AND RIGHT DOUBLE: &#x2552; => d5
&#xD5; => &#xD5;

BOX DRAWINGS DOWN DOUBLE AND RIGHT SINGLE: &#x2553; => d6
&#xD6; => &#xD6;

BOX DRAWINGS VERTICAL DOUBLE AND HORIZONTAL SINGLE: &#x256B; => d7
&#xD7; => &#xD7;

BOX DRAWINGS VERTICAL SINGLE AND HORIZONTAL DOUBLE: &#x256A; => d8
&#xD8; => &#xD8;

BOX DRAWINGS LIGHT UP AND LEFT: &#x2518; => d9
&#xD9; => &#xD9;

BOX DRAWINGS LIGHT DOWN AND RIGHT: &#x250C; => da
&#xDA; => &#xDA;

FULL BLOCK: &#x2588; => db
&#xDB; => &#xDB;

LOWER HALF BLOCK: &#x2584; => dc
&#xDC; => &#xDC;

LEFT HALF BLOCK: &#x258C; => dd
&#xDD; => &#xDD;

RIGHT HALF BLOCK: &#x2590; => de
&#xDE; => &#xDE;

UPPER HALF BLOCK: &#x2580; => df
&#xDF; => &#xDF;

CYRILLIC SMALL LETTER ER: &#x440; => e0
&#xE0; => &#xE0;

CYRILLIC SMALL LETTER ES: &#x441; => e1
&#xE1; => &#xE1;

CYRILLIC SMALL LETTER TE: &#x442; => e2
&#xE2; => &#xE2;

CYRILLIC SMALL LETTER U: &#x443; => e3
&#xE3; => &#xE3;

CYRILLIC SMALL LETTER EF: &#x444; => e4
&#xE4; => &#xE4;

CYRILLIC SMALL LETTER HA: &#x445; => e5
&#xE5; => &#xE5;

CYRILLIC SMALL LETTER TSE: &#x446; => e6
&#xE6; => &#xE6;

CYRILLIC SMALL LETTER CHE: &#x447; => e7
&#xE7; => &#xE7;

CYRILLIC SMALL LETTER SHA: &#x448; => e8
&#xE8; => &#xE8;

CYRILLIC SMALL LETTER SHCHA: &#x449; => e9
&#xE9; => &#xE9;

CYRILLIC SMALL LETTER HARD SIGN: &#x44A; => ea
&#xEA; => &#xEA;

CYRILLIC SMALL LETTER YERU: &#x44B; => eb
&#xEB; => &#xEB;

CYRILLIC SMALL LETTER SOFT SIGN: &#x44C; => ec
&#xEC; => &#xEC;

CYRILLIC SMALL LETTER E: &#x44D; => ed
&#xED; => &#xED;

CYRILLIC SMALL LETTER YU: &#x44E; => ee
&#xEE; => &#xEE;

CYRILLIC SMALL LETTER YA: &#x44F; => ef
&#xEF; => &#xEF;

CYRILLIC CAPITAL LETTER IO: &#x401; => f0
&#xF0; => &#xF0;

CYRILLIC SMALL LETTER IO: &#x451; => f1
&#xF1; => &#xF1;

CYRILLIC CAPITAL LETTER UKRAINIAN IE: &#x404; => f2
&#xF2; => &#xF2;

CYRILLIC SMALL LETTER UKRAINIAN IE: &#x454; => f3
&#xF3; => &#xF3;

CYRILLIC CAPITAL LETTER YI: &#x407; => f4
&#xF4; => &#xF4;

CYRILLIC SMALL LETTER YI: &#x457; => f5
&#xF5; => &#xF5;

CYRILLIC CAPITAL LETTER SHORT U: &#x40E; => f6
&#xF6; => &#xF6;

CYRILLIC SMALL LETTER SHORT U: &#x45E; => f7
&#xF7; => &#xF7;

DEGREE SIGN: &#xB0; => f8
&#xF8; => &#xF8;

BULLET OPERATOR: &#x2219; => f9
&#xF9; => &#xF9;

MIDDLE DOT: &#xB7; => fa
&#xFA; => &#xFA;

SQUARE ROOT: &#x221A; => fb
&#xFB; => &#xFB;

NUMERO SIGN: &#x2116; => fc
&#xFC; => &#xFC;

CURRENCY SIGN: &#xA4; => fd
&#xFD; => &#xFD;

BLACK SQUARE: &#x25A0; => fe
&#xFE; => &#xFE;

NO-BREAK SPACE: &#xA0; => ff
&#xFF; => &#xFF;
