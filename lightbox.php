<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Lightbox</title>

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>

<link href="css/lightbox.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(document).ready(function() {	
    $('.lightbox_trigger').click(function(e) {
        e.preventDefault();
        var image_href = $(this).attr("href");
        
        if ($('#lightbox').length > 0) { 
            // #lightbox exists
            //insert img tag with clicked link's href as src value
            $('#content').html('<img src="' + image_href + '" />');
            //show lightbox window - you can use a transition here if you want, i.e. .show('fast')
            $('#lightbox').show();
        }
        else 
        { 
            //#lightbox does not exist 
            //create HTML markup for lightbox window
            var lightbox = 
            '<div id="lightbox">' +
                '<p>Click to close</p>' +
                '<div id="content">' + //insert clicked link's href into img src
                    '<img src="' + image_href +'" />' +
                '</div>' +    
            '</div>';
            //insert lightbox HTML into page
            $('body').append(lightbox);
        }
    });
    $('#lightbox').live('click', function() {
        $('#lightbox').hide();
    });
});    
</script>

</head>

<body>

    <div id="wrapper">
        <h1>Super Simple Lightbox</h1>
        <p>Our super simple lightbox demo. Here are the image links:
            <ul>
                <li>
                    <a href="https://farm7.static.flickr.com/6130/5935338876_47b61c93a5.jpg" class="lightbox_trigger">
                    Picture 1
                    </a>
                </li>
                <li>
                    <a href="https://farm7.static.flickr.com/6020/5924329054_4bdc419c3a_o.jpg" class="lightbox_trigger">
                    Picture 2
                    </a>
                </li>
                <li>
                    <a href="https://farm7.static.flickr.com/6020/5931933181_ddb737e528.jpg" class="lightbox_trigger">
                    Picture 3
                    </a>
                </li> 
            </ul>
         </p>
    </div> <!-- #/wrapper -->
    
</body>
</html>