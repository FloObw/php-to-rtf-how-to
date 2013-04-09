  <?php
		include('/lib/rtfclass.php');

        $text = new rtf ('This is my first blind text');
        $text->output("html");
        $text->parse();
        if( count( $text->err) == 0) { // no errors detected
			echo textr->out;
        }
    ?> 