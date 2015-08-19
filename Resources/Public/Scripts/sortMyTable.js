$(document).ready(function() {
  
    $.fn.dataTableExt.oSort['de_date-asc']  = function(a,b) {
        var ukDatea = a.split('.');
        var ukDateb = b.split('.');    
        var x = (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
        var y = (ukDateb[2] + ukDateb[1] + ukDateb[0]) * 1;     
        return ((x < y) ? -1 : ((x > y) ?  1 : 0));
    };
 
    $.fn.dataTableExt.oSort['de_date-desc'] = function(a,b) {
        var ukDatea = a.split('.');
        var ukDateb = b.split('.');     
        var x = (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
        var y = (ukDateb[2] + ukDateb[1] + ukDateb[0]) * 1;
     
        return ((x < y) ? 1 : ((x > y) ?  -1 : 0));
    };
    
    var raceResultTable = $('.tx-mtbraceresult table');   
 
    // table layout     
    raceResultTable.dataTable({
        responsive: true,
        "aoColumns": [
        {
        },
        {
        },
        {
        },
        {
            "sType": 'de_date'
        },
        {
        },
        ],
        "aaSorting" : [[3, "desc"]],
        "sDom": '<"top"fl>rt<"bottom"ip><"clear">',
        "oLanguage": {
            "sLengthMenu": "Zeige <br/> _MENU_",
            "sZeroRecords": "Keine Ergebnisse gefunden.",
            "sInfo": "Zeige Ergebnisse _START_ bis _END_ von _TOTAL_",
            "sInfoEmpty": "Zeige 0 von 0 Ergebnissen",
            "oPaginate" : {
                "sPrevious": "",
                "sNext": ""
            },            
            "sInfoFiltered": "(gefiltert von _MAX_ insgesamt)",
            "sSearch" : "Suche<br/>"
        }
    });

    $('.top').append($('.dataTables_selectRacer'));
    $('.top').append($('.dataTables_selectRace'));
    $('.top').append('<div class="clearfix"></div>');
    $('.remove').detach();


    $('.dataTables_selectRacer select').change( function() {
        raceResultTable.fnFilter( $(this).val(),0 );
    } )
    $('.dataTables_selectRace select').change( function() {
        raceResultTable.fnFilter( $(this).val(),2 );
    } )
    
});