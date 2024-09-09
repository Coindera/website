/*///////////////////////////////////////////////////////////////////////
Ported to jquery from prototype by Joel Lisenby (joel.lisenby@gmail.com)
http://joellisenby.com

original prototype code by Aarron Walter (aarron@buildingfindablewebsites.com)
http://buildingfindablewebsites.com

Distrbuted under Creative Commons license
http://creativecommons.org/licenses/by-sa/3.0/us/
///////////////////////////////////////////////////////////////////////*/

jQuery(document).ready(function() {
  jQuery('#coinderaSubscribe').submit(function() {

    var $this = $(this);

    // update user interface
    jQuery('#response').html('<span class="notice_message">Adding email address...</span>');

    // Prepare query string and send AJAX request
    jQuery.ajax({
      url: '/subscribe',
      type: 'POST',
      data: {
        '_token': $this.find('input[name="_token"]').val(),
        'name'  : $this.find('input[name="name"]').val(),
        'email' : $this.find('input[name="email"]').val(),
      },
      success: function(msg) {
        jQuery('#response')
          .html('<span class="success_message">Success! You are now subscribed to our newsletter!</span>');

        $this.get(0).reset();
      },
      error: function (msg) {
        jQuery('#response')
          .html('<span class="error_message">' + msg.responseText.replace('"', '').replace('"', '') + '</span>');
      }
    });

    return false;
  });
});
