  <?php
	include('/lib/rtfclass.php');

        $text = new rtf ('<strong>This is my first blind text</strong>');
        $text->output("html");
        $text->parse();
        if( count( $text->err) == 0) { // no errors detected
		echo textr->out;
        }
    ?> 
