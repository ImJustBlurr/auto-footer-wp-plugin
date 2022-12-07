<?php
// Here you can adjust things like the links you would like to include, the color of the border, and the text included.

// Feel free to change/add the Social Media links as you wish. (if you decide to add more social media links make sure it retains the same format as the others.)
// For example if you dont want a "Facebook" link you may change it to something else like "Pinterest" and include that link.
$linksConfig = array(
    "Facebook" => "yourlinkhere.com",
    "Github" => "yourlinkhere.com",
    "Instagram" => "yourlinkhere.com",
    "Twitter" => "yourlinkhere.com",
);

// General configurations to the appearance of your footer.
$generalConfig = array(
    "headerText" => "Thanks for reading!", // The main header at the top of the footer

    "subHeaderText" => "If you enjoyed reading this post consider checking us out on our socials:", // Subheader under the main header. Remember that this will be above
                                                                                                    // the social media links so try to introduce them like a CTA.

    "subHeaderText2" => "Be sure to check out our other posts as well!", // Optional subheader that will be displayed under the social media links.

    // Colors use hex color codes
    "borderColor" => "#873260", // Changes the color of the border. Uses hex and the included css colors.
    
    "borderSize" => "4", // This property uses pixels to measure the WEIGHT of the border. Just include a number like "2" and you will get a border of 2pixels.

    "borderRadius" => "15", // This property uses pixels to measure the RADIUS of the border (the rounded edges). 
                            // Just include a number like "2" and you will get a border radius of 2pixels. The lower the number the less rounded and vice versa.
    "backgroundColor" => "none" // Changes the background color. If you dont want a background change this to "none".
);

?>