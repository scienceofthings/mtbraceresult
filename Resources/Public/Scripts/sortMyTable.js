$(document).ready(function() {
  
    /* Custom filtering function which will filter data in column four between two values */
    $.fn.dataTableExt.afnFiltering.push(
        function( oSettings, aData, iDataIndex ) {
      
            //minimum date as date object
            var minValue = (document.getElementById('min').value).split('.'); 
            if(minValue != ""){
                var minDate = new Date(minValue[2], minValue[1]-1, minValue[0]);                    
            //minDate = new Date(2012, 01, 01);
            }        
        
            //maximum date as date object
            var maxValue = document.getElementById('max').value.split('.');                
            if(maxValue[0] != ""){
                var maxDate = new Date(maxValue[2], maxValue[1]-1, maxValue[0]);          
          
            }
                     
            //get times from row as date object                     
            var rowValue = aData[3] == "" ? 0 : aData[3];
        
            if(rowValue != 0){
                rowValue = rowValue.split('.');
                var rowDate = new Date(rowValue[2],rowValue[1]-1,rowValue[0]);
            }                
                
            if ( minValue == "" && maxValue == "" )
            {
                return true;
         
            }
            else if ( minValue == "" && rowDate < maxDate )
            {          
                return true;
            }
            else if ( minDate < rowDate && "" == maxValue )
            {
                return true;
            }
            else if ( minDate < rowDate && rowDate < maxDate )
            {
                return true;
            }
            return false;
        }
        );  
  
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
        "aoColumns": [
        {
            sWidth: '20%'
        },
        {
            sWidth: '10%'
        },
        {
            sWidth: '45%'
        },
        {
            "sType": 'de_date',
            sWidth: '15%'
        },
        {
            sWidth: '10%'
        },
        ],
        "aaSorting" : [[3, "desc"]],
        "sDom": '<"top"fl>rt<"bottom"ip><"clear">',
        "oLanguage": {
            "sLengthMenu": "Zeige <br/> _MENU_",
            "sZeroRecords": "Nothing found - sorry",
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
    
   
   
    $('.top').append($('.dataTables_dateInput'));
    $('.top').append($('.dataTables_selectRacer'));
    $('.top').append($('.dataTables_selectRace'));
    $('.top').append('<div class="clearfix"></div>');
    $('.remove').detach();
    
  

    /* Add event listeners to the two range filtering inputs */    
    $('#min, #max').keyup( function() {
        raceResultTable.fnDraw();
    } );    
    // datepicker BeginTime      
    var inputBeginTime = $('#min');
    var seasonBeginDate = new Date();
    
    seasonBeginDate.setMonth(0);  
    seasonBeginDate.setDate(1);
  
    
    
    inputBeginTime.datepicker({
        "showOn" : "button",
        "buttonImage" : "typo3conf/ext/mtbraceresult/Resources/Public/Images/calendar.gif",
        "buttonImageOnly" : true,
        "dateFormat" : "dd.mm.yy",
        "regional" : "de",    
        "onClose" : function(dateText, inst){
            raceResultTable.fnDraw();
        }    
    });
  
    //set initial time    
    //inputBeginTime.datepicker('setDate', seasonBeginDate);
  
    // datepicker EndTime    
    var inputEndTime = $('#max');  
    var seasonEndDate = new Date();
    seasonEndDate.setDate(seasonEndDate.getDate()+1);
    inputEndTime.datepicker({
        "showOn" : "button",
        "buttonImage" : "typo3conf/ext/mtbraceresult/Resources/Public/Images/calendar.gif",
        "buttonImageOnly" : true,
        "dateFormat" : "dd.mm.yy",
        "regional" : "de",    
        "onClose" : function(dateText, inst){
            raceResultTable.fnDraw();
        }    
    });
    //inputEndTime.datepicker('setDate', seasonEndDate);
  
    // redraw table
    raceResultTable.fnDraw();

  
    //datepicker set german language    
    $.datepicker.regional['de'] = {
        clearText: 'löschen', 
        clearStatus: 'aktuelles Datum löschen',
        closeText: 'schließen', 
        closeStatus: 'ohne Änderungen schließen',
        prevText: '<zurück', 
        prevStatus: 'letzten Monat zeigen',
        nextText: 'Vor>', 
        nextStatus: 'nächsten Monat zeigen',
        currentText: 'heute', 
        currentStatus: '',
        monthNames: ['Januar','Februar','März','April','Mai','Juni',
        'Juli','August','September','Oktober','November','Dezember'],
        monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
        'Jul','Aug','Sep','Okt','Nov','Dez'],
        monthStatus: 'anderen Monat anzeigen', 
        yearStatus: 'anderes Jahr anzeigen',
        weekHeader: 'Wo', 
        weekStatus: 'Woche des Monats',
        dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
        dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
        dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
        dayStatus: 'Setze DD als ersten Wochentag', 
        dateStatus: 'Wähle D, M d',
        dateFormat: 'dd.mm.yy', 
        firstDay: 1,
        initStatus: 'Wähle ein Datum', 
        isRTL: false
    };
    $.datepicker.setDefaults($.datepicker.regional['de']);

    $('.dataTables_selectRacer select').change( function() {
        raceResultTable.fnFilter( $(this).val(),0 );
    } )
    $('.dataTables_selectRace select').change( function() {
        raceResultTable.fnFilter( $(this).val(),2 );
    } )
    
});