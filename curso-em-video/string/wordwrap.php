<?php
    $t = "Quando eu era Bruce Wayne, pensei que, com preparação suficiente, sempre venceria. Mas eu estava errado. Eu estava preso em uma guerra invencível, recusando-me a ver as respostas óbvias bem na minha frente. As respostas que são tão claras para mim agora com a vitória logo na esquina. Para vencer, você precisa se adaptar e, para se adaptar, precisa ser capaz de rir de todas as restrições. Tudo está te segurando. Você vê... um Batman que ri... é um Batman que sempre vence. HAHAHAHAHAHAHAHA!";
    $r = wordwrap($t, 30, "<br/>");
    echo $r;