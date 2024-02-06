var currentDays = 0;

var selectedDay=null;
var selectedDiv=null;

function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

function formatDate(date) {
    return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'long'});
}

function formatDateWithHours(date) {
    return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'long', hour: '2-digit', minute:'2-digit'});
}

function generateCalendar() {
    const timeSlots = ['10h20', '11h50', '13h20', '14h50', '16h20', '17h50', '19h20', '20h50'];
    let currentDate = new Date();

    for (let i = 0+currentDays; i < 2+currentDays; i++) {
        let dayDate = addDays(currentDate, i);
        let dayClass = $('<div class="calendar-col">').attr("class", "day");

        $(".calendar").append(dayClass.append("<h3>" + formatDate(dayDate) + "</h3>"))

        timeSlots.forEach(time => {

            data = time.split("h");

            dayClass.append($('<div class="calendar-col">').attr("class", "time-slot").text(time).click(function() {
                if (selectedDay != null) {
                    selectedDiv.classList.toggle("selected")
                }
                this.classList.toggle('selected');
                dayDate.setHours(parseInt(data[0]));
                dayDate.setMinutes(parseInt(data[1]));
                selectedDay = dayDate;
                selectedDiv = this;
            }));
        });

    }
}

$("#next").click(function() {
    currentDays+=2;
    $(".calendar").empty();
    generateCalendar();
});

$("#previous").click(function() {
    if (currentDays-2 >= 0) {
        currentDays-=2;
    }
    $(".calendar").empty();
    generateCalendar();
});

$("#reserver").click(function() {
    if (selectedDay == null) return

    $.ajax({
        method: "GET",
        url: "booking.php",
        data: { date: selectedDay.toJSON() }
      })
        .done(function( msg ) {
          $("body").empty().append($("<h1>").text("Vous avez fait une réservation pour le " + formatDateWithHours(selectedDay)));
        });
});

generateCalendar()