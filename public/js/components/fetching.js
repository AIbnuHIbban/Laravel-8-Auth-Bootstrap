export function getData(prefix, url) {
  $.getJSON(url, function(data) {
    $.each(data, function(key, val) {
      $('.' + prefix + '-' + key.toLowerCase()).html(val);
    });
  });
}