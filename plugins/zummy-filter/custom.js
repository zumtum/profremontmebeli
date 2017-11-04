jQuery(document).ready(function($) {
    
    var mainContent = $('#tax-items-container');

    if ( ~location.search.indexOf('action=get_tax') ) {
        //alert(location.search.indexOf('action=get_tax'));
        //updateFilterElems();
    }

    // обработка события клика по кнопке с фильтром
    $('#tax-items-container').on('click', '.show-filter', function(event) {
        event.preventDefault();

        var thisWidget = $(this).closest('.widget');
        var termSlug = $('.filters-block.container').attr('id');

        if($('input:checked').length > 0) {

            var selectedColors = [];
            var selectedTextures = [];
            var selectedProperties = [];
            // var selectColors = [];

            $('input:checked').each(function(){
                if ($(this).hasClass('color')) {
                    selectedColors.push($(this).attr('id'));
                }
                if ($(this).hasClass('texture')) {
                    selectedTextures.push($(this).attr('id'));
                }
                if ($(this).hasClass('property')) {
                    selectedProperties.push($(this).attr('id'));
                }
            });

            console.log(selectedColors);
            console.log(selectedTextures);
            console.log(selectedProperties);

            ajaxTax(selectedColors, selectedTextures, selectedProperties, termSlug);
        } else {
            return false;
        }

    });

    // функция отправки ajax апроса
    function ajaxTax(taxColors, taxTextures, taxProperties, termSlug) {
        var data = {
            action: 'get_tax',
            colors: taxColors,
            textures: taxTextures,
            properties: taxProperties,
            termslug: termSlug
        }


        // с версии 2.8 'ajaxurl' всегда определен в админке
        jQuery.get(
            myFilter.ajaxurl,
            {
                action: 'get_tax',
                colors: taxColors,
                textures: taxTextures,
                properties: taxProperties,
                termslug: termSlug
            },
            function(response) {
                mainContent.html(response);
                updateFilterElems();
            });
    }

    function updateFilterElems(){
        if ($('a.page-numbers').length > 1) {
            var getUrl = $('a.page-numbers').attr('href');
            var setUrl = getUrl.split('?')[1];


            //location.search = '?' + setUrl;
            location.hash = '#' + setUrl;

        }
    }
});