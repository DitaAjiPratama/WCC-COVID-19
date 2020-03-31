$(document).ready(function() {
  var table = $('#dataTable').DataTable({
    orderCellsTop: true,   //move sorting to top header
  });

  // Get the index of matching row.  Assumes only one match
  var indexes = table.rows().eq( 0 ).filter( function (rowIdx) {    //check column 0 of each row for tradeMsg.message.coin
    return table.cell( rowIdx, 0 ).data() === 'Ashton Cox' ? true : false;
  } );

  // grab the data from the row
  var data = table.row(indexes).data();

  // populate the .second header with the data
  for (i = 0; i < data.length; i++) {
    $('.second').find('th').eq(i).html( data[i] );
  }

  // remove the row from the table
  table.row(indexes).remove().draw(false);
});