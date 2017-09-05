<?php
            $col = $_GET['col'];
            if($col == "returns"){
                $col = " Reklamacje&nbsp;i&nbsp;Zwroty";
                $icon = "repeat";
            }
            if($col == "about"){
                $col = " Co&nbsp;robimy";
                $icon = "hand-o-right";
            }
            if($col == "individualOrders"){
                $col = " Indywidualne&nbsp;projekty";
                $icon = "user-circle";
            }
            if($col == "coop"){
                $col = " Współpraca";
                $icon = "handshake-o";
            }
            if($col == "order"){
                $col = " Realizacja&nbsp;zamówienia";
                $icon = "upload";
            }
            if($col == "delivery"){
                $col = " Dostawa&nbsp;i&nbsp;transport";
                $icon = "road";
            }
            if($col == "regulations"){
                $col = " Regulamin";
                $icon = "book";
            }
            echo '<i class="fa fa-'.$icon.' fa-3x" aria-hidden="true" style="vertical-align:middle"></i>';
            echo "&nbsp&nbsp&nbsp".$col;
             ?>