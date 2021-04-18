window.onload = () => {
    let calendarElt = document.querySelector('#calendrier')

    let calendar = new FullCalendar.Calendar(calendarElt, {
        initialView: 'timeGridWeek',
        locale:'fr',
        timeZone:'Europe/Paris',

/* permet de personnalise le calendrier
        headerToolbar:{

            left ou start:
        center:
        right ou end:
        }

        */
    })
    calendar.render()
}