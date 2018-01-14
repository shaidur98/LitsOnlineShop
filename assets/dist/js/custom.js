var baseurl = $('#base-url').attr('url');

function onGetSubCatInSearchPage(cat) {
    $('#loading').show();
    $.ajax({
        url:baseurl+'admin/get_subcat_by_cat',
        type:'POST',
        dataType:'JSON',
        data:{cat:cat},
        success:function(res) {
            $('#loading').hide();
            var subcat = '<option value="all">All</option>';
            for(var i in res) {
                subcat += '<option value="'+res[i]['id']+'">'+res[i]['name']+'</option>';
            }
            $('#subcat-list').html(subcat);
        }
    });
}

function onGetSubCatByCat(cat) {
    $('#loading').show();
    $.ajax({
        url:baseurl+'admin/get_subcat_by_cat',
        type:'POST',
        dataType:'JSON',
        data:{cat:cat},
        success:function(res) {
            $('#loading').hide();
            if(res.length != 0) {
                var subcat = '';
                for(var i in res) {
                    subcat += '<option value="'+res[i]['id']+'">'+res[i]['name']+'</option>';
                }
                $('#subcat-list').html(subcat);
                $('#subcat-form-group').fadeIn();
            }
            else {
                $('#subcat-form-group').fadeOut();
            }

        }
    });
}

function onSelectDisFreeProduct(val) {
    if(val == 'No Offer') {
        $('#discount-form-group,#free-product-form-group').fadeOut();
    }
    else if(val == 'Discount') {
        $('#discount-form-group').fadeIn();
        $('#free-product-form-group').hide();
    }
    else if(val == 'Free Product') {
        $('#free-product-form-group').fadeIn();
        $('#discount-form-group').hide();
    }
}



// default custom script------------------------------------------------
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});
