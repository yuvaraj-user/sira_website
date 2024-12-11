<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src="plugins/fileUpload/fileUpload.js"></script>


<script type="text/javascript">
setInterval(function () {
    var section = $('#banner-text-content').data('section');

    var html = '';
    var caption_text1 = '';
    var caption_text2 = '';
     
    if(section == 'sira') {
           html = `<p class="lead mb-0 wow fadeInUp text-justify p-3" data-wow-delay=".4s">
            Forage is the most important component in the diet of dairy cattle because of the dramatic impact it has on dry matter and nutrient consumption. The quality and form of forage are two main factors that have been shown to influence dry matter consumption and milk production in dairy cattle.</p>`;

           caption_text1 = 'Forage';
           caption_text2 = 'Seeds';


        $('#banner-text-content').data('section','forage');

    } else {
        html = `<p class="lead mb-0 wow fadeInUp text-justify p-3" data-wow-delay=".4s"><span class="fw-bold">Sira Seeds</span> was established in December 2017 as a brand of
            <span class="fw-bold"><a class="rasi-hyperlink" href="https://www.rasiseeds.com">Rasi Seeds (P) Ltd.,</a></span> which was established in the year 1973 and
            currently serving around 4.5 million Indian farmers. Our main focus
            is on delivering high quality seeds of fodder crops to the farmers for
            improving productivity of cattle and quality of milk.</p>`; 

       caption_text1 = 'Sira';
       caption_text2 = 'Seeds';

        $('#banner-text-content').data('section','sira');

    }

    $('#banner-text-content').html(html);
    $('.banner-caption_1').text(caption_text1);
    $('.banner-caption_2').text(caption_text2);


}, 10000);



</script>