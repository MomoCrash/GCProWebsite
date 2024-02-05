var currentDays = 0;

var selectedDay=null;
var selectedHour=null;
var selectedDiv=null;

function addDays(date, days) {
    var result = new Date(date);
    result.setDate(result.getDate() + days);
    return result;
}

function formatDate(date) {
    return date.toLocaleDateString('fr-FR', { weekday: 'long', day: 'numeric', month: 'short' });
}

function generateCalendar() {
    const timeSlots = ['10h20', '11h50', '13h20', '14h50', '16h20', '17h50', '19h20', '20h50'];
    let currentDate = new Date();

    for (let i = 0+currentDays; i < 2+currentDays; i++) {
        let dayDate = addDays(currentDate, i);
        let dayClass = $('<div>').attr("class", "day");

        $(".calendar").append(dayClass.append("<h3>" + formatDate(dayDate) + "</h3>"))

        timeSlots.forEach(time => {

            dayClass.append($("<div>").attr("class", "time-slot").text(time).click(function() {
                if (selectedDay != null) {
                    selectedDiv.classList.toggle("selected")
                }
                this.classList.toggle('selected');
                selectedDay = dayDate;
                selectedHour = time;
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
    console.log(formatDate(selectedDay) + " " + selectedHour)

    $.ajax({
        method: "GET",
        url: "booking.php",
        data: { date: selectedDay.toJSON() }
      })
        .done(function( msg ) {
          alert(msg);
        });
});

generateCalendar()