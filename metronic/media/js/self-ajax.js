var SelfAjax = function () {


    var initModals = function () {

        $.fn.modalmanager.defaults.resize = true;
        //$.fn.modalmanager.defaults.spinner = '<div class="loading-spinner fade" style="width: 200px; margin-left: -100px;"><img src="http://asset.canliang.wang/metronic/media/assets/img/ajax-modal-loading.gif" align="middle">&nbsp;<span style="font-weight:300; color: #eee; font-size: 18px; font-family:Open Sans;">&nbsp;Loading...</div>';


        var $modal = $('.ajax-modal');

        $('.modal_ajax_btn').on('click', function(){
          var url = $(this).attr("modal-url");
          // create the backdrop and wait for next modal to be triggered
          $('body').modalmanager('loading');

          setTimeout(function(){
            $modal.load(url, '', function(){
                console.log($modal, 'mmmmmmmmm');
              $modal.modal({modalOverflow: true, width: '1020px'});
            });
          }, 1000);
        });

        $modal.on('click', '.update', function(){
          $modal.modal('loading');
          setTimeout(function(){
            $modal
              .modal('loading')
              .find('.modal-body')
                .prepend('<div class="alert alert-info fade in">' +
                  'Updated!<button type="button" class="close" data-dismiss="alert"></button>' +
                '</div>');
          }, 1000);
        });

    }

    return {
        //main function to initiate the module
        init: function () {
            initModals();
        }

    };

}();
