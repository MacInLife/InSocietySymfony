$(function () {
    $('#calendar-holder').fullCalendar({
        header: {
            left: 'prev, next',
            center: 'title',
            right: 'month, basicWeek, basicDay,'
        },
        lazyFetching: true,
        timeFormat: {
            agenda: 'h:mmt',
            '': 'h:mmt'
        },
        eventSources: [
            {
                url: '/full-calendar/load',
                type: 'POST',
                data: {},
                error: function () {}
            }
        ]
    });
});
/*
$ ( function () {
     $ ( ' # agenda-holder ' ).  fullCalendar ({
         en-tête : {
             à gauche : ' prev, next ' ,
             centre : ' titre ' ,
             à droite : ' mois, agendaWeek, agendaDay '
         },
         fuseau horaire : ( ' Europe / Londres ' ),
         affairesHours : {
             début : '09 : 00 ' ,
             fin : ' 17h30 ' ,
             dow : [ 1 , 2 , 3 , 4 , 5 ]
         },
         allDaySlot : false ,
         defaultView : ' agendaWeek ' ,
         lazyFetching : vrai ,
         premier jour : 1 ,
         sélectionnable : vrai ,
         timeFormat : {
             agenda : ' h: mmt ' ,
             ' ' : ' h: mmt '
         },
         columnFormat : {
             mois : ' ddd ' ,
             semaine : ' ddd D / M ' ,
             jour : ' dddd '
         },
         modifiable : vrai ,
         eventDurationEditable : true ,
         eventSources : [
         {
             url : / full-calendar / charge,
             tapez : ' POST ' ,
             données : {
                 filtres : {param : foo}
             }
             erreur : function () {
                // alert ()
             }
         }
 ] */