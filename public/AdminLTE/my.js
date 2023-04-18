$('.delete').click(function(){
    var res = confirm('Amalni tasdiqlang');
    if(!res) return false;
});

$('.del-item').on('click', function(){
    var res = confirm('Amalni tasdiqlang');
    if(!res) return false;
    var $this = $(this),
        id = $this.data('id'),
        src = $this.data('src');
    $.ajax({
        url: adminpath + '/product/delete-gallery',
        data: {id: id, src: src},
        type: 'POST',
        beforeSend: function(){
            $this.closest('.file-upload').find('.overlay').css({'display':'block'});
        },
        success: function(res){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                if (res == 1) {
                    $this.fadeOut();
                }
            }, 1000);
        },
        error: function(){
            setTimeout(function(){
                $this.closest('.file-upload').find('.overlay').css({'display':'none'});
                alert('Xatolik!');
            }, 1000);
        }
    }); 
});


$('.sidebar-menu a').each(function(){
    var location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
    var link = this.href;
    if(link == location) {
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }
});

// CKEDITOR.replace('editor');
CKEDITOR.replace( 'editor1' );

$('#reset-filter').click(function() {
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});

$(".select2").select2({
    placeholder: "Start typing the product name",
    //minimumInputLength: 2,
    cache: true,
    ajax: {
        url: adminpath + "/product/related-product",
        delay: 250,
        dataType: 'json',
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items,
            };
        },
    },
});

if($('div').is('#photo')) {
    var buttonPhoto = $("#photo"),
    file;    
}

if(buttonPhoto) {
    new AjaxUpload(buttonPhoto, {
        action: adminpath + buttonPhoto.data('url') + "?upload=1",
        data: {name: buttonPhoto.data('name')},
        name: buttonPhoto.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Xatolik! Faqat rasmlarga ruxsat beriladi');
                return false;
            }
            buttonPhoto.closest('.file-upload').find('.overlay').css({'display':'block'});
    
        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonPhoto.closest('.file-upload').find('.overlay').css({'display':'none'});
    
                response = JSON.parse(response);
                $('.' + buttonPhoto.data('name')).html('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}


if($('div').is('#single')) {
    var buttonSingle = $("#single"),
    buttonMulti = $("#multi"),
    file;    
}

if(buttonSingle) {
    new AjaxUpload(buttonSingle, {
        action: adminpath + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Xatolik! Faqat rasmlarga ruxsat beriladi');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'block'});
    
        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});
    
                response = JSON.parse(response);
                $('.' + buttonSingle.data('name')).html('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}

if(buttonMulti) {
    new AjaxUpload(buttonMulti, {
        action: adminpath + buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name')},
        name: buttonMulti.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Xatolik! Faqat rasmlarga ruxsat beriladi');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display':'block'});
    
        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonMulti.closest('.file-upload').find('.overlay').css({'display':'none'});
    
                response = JSON.parse(response);
                $('.' + buttonMulti.data('name')).append('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}

$('#add').on('submit', function(){
    if (!isNumeric( $('#category_id').val() )) {
        alert('Kategoriyani o\'zgaritish');
        return false;
    }
});

function isNumeric(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
