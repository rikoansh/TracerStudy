<script>
$(function() {
  // Create a function that will handle AJAX requests
  function requestData(days, chart){
    $.ajax({
      type: "GET",
      url: "{{ route('fakultas::hasil')}}", // This is the URL to the API
      data: { total:total }
    })
    .done(function( data ) {
      // When the response to the AJAX request comes back render the chart with new data
      chart.setData(JSON.parse(data));
    })
    .fail(function() {
      // If there is no communication between the server, show an error
      alert( "error occured" );
    });
  }
  var chart = Morris.Bar({
    // ID of the element in which to draw the chart.
    element: 'stats-container',
    // Set initial data (ideally you would provide an array of default data)
    data: [0,0],
    xkey: 'totalmahasiswa',
    ykeys: ['value'],
    labels: ['Users']
  });
  // Request initial data for the past 7 days:
  requestData(7, chart);
  $('ul.ranges a').click(function(e){
    e.preventDefault();
    // Get the number of days from the data attribute
    var el = $(this);
    days = el.attr('data-range');
    // Request the data and render the chart using our handy function
    requestData(days, chart);
    // Make things pretty to show which button/tab the user clicked
    el.parent().addClass('active');
    el.parent().siblings().removeClass('active');
  })
});
</script>