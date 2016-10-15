<?php
    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }    

    $manager = $order = $style = $body = $print = $parts = $color = $order_qty = $tpd = $p_s = $p_f = $s_d = "";
    $fieldErr = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['manager'])) {
            $manager = "";
        } else {
            $manager = input_data($_POST['manager']);
        }

        if(empty($_POST['order'])) {
            $order = "";
        } else {
            $order = input_data($_POST['order']);
        }

        if(empty($_POST['style'])) {
            $style = "";
        } else {
            $style = input_data($_POST['style']);
        }

        if(empty($_POST['body'])) {
            $body = "";
        } else {
            $body = input_data($_POST['body']);
        }

        if(empty($_POST['print'])) {
            $print = "";
        } else {
            $print = input_data($_POST['print']);
        }

        if(empty($_POST['parts'])) {
            $parts = "";
        } else {
            $parts = input_data($_POST['parts']);
        }

        if(empty($_POST['color'])) {
            $color = "";
        } else {
            $color = input_data($_POST['color']);
        }

        if(empty($_POST['tpd'])) {
            $tpd = "";
        } else {
            $tpd = input_data($_POST['tpd']);
        }

        if(empty($_POST['p_s'])) {
            $p_s = "";
        } else {
            $p_s = input_data($_POST['p_s']);
        }

        if(empty($_POST['p_f'])) {
            $p_f = "";
        } else {
            $p_f = input_data($_POST['p_f']);
        }

        if(empty($_POST['s_d'])) {
            $s_d = "";
        } else {
            $s_d = input_data($_POST['s_d']);
        }
    }
?>
