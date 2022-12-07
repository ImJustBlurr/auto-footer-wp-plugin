<?php
function autoFooter($content) {
    include 'config.php';

    if ( is_single() ) { 
        $content .= '<div class="auto-footer-container" style=" border: ' . $generalConfig["borderSize"] . 'px 
                                                                solid ' . $generalConfig["borderColor"] . '; 
                                                                background-color: ' . $generalConfig["backgroundColor"] . ';
                                                                border-radius: ' . $generalConfig["borderRadius"] . 'px;">
                        <h4>' . $generalConfig["headerText"] . '</h4>
                        <p>' . $generalConfig["subHeaderText"] . '<br></p>
                        <ul>';
        
        foreach ($linksConfig as $key => $value) {
                $content .= '<li><a href="' . $value . '" target="_blank">' . $key . '</a></li>';
                }
        $content .= '</ul>
                    <p>' . $generalConfig["subHeaderText2"] . '</p>
                    </div>';
    } 
    return $content;
}
?>